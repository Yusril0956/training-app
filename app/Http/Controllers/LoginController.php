<?php

namespace App\Http\Controllers;

use App\Api\Info\Employee;
use App\Api\SSO\Authentication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function login()
    {
        return Socialite::driver('keycloak')->redirect();
    }

    public function redirect()
    {
        if (!Auth::check()) {
            $keycloak = Socialite::driver('keycloak')->user();

            Session::put('id_token_hint', $keycloak->accessTokenResponseBody['id_token']);

            $response = Authentication::authenticate($keycloak->token);

            if ($response) {
                $apiUser = $response;
            } else {
                $redirectUri = route('unauthorized');

                return $this->logout($redirectUri);
            }

            $user = User::firstOrCreate(['keycloak_id' => $keycloak->id], [
                'id' => $apiUser->id,
                'nik' => $apiUser->nik,
                'name' => $apiUser->name,
                'email' => $keycloak['email'],
            ]);

            Auth::login($user);

            Session::put('user', $apiUser);

            if (Session::has('redirectUri')) {
                $redirectUri = Session::get('redirectUri');
                Session::forget('redirectUri');

                return redirect($redirectUri);
            }
        }

        return redirect()->route('home');
    }

    public function logout($redirectUri = null)
    {
        if (!isset($redirectUri)) {
            $redirectUri = route('home');
        }

        $client_id = env('KEYCLOAK_CLIENT_ID');
        $id_token = Session::get('id_token_hint');

        Session::forget('id_token_hint');
        Session::forget('user');

        Auth::logout();

        $logoutUrl = Socialite::driver('keycloak')->getLogoutUrl($redirectUri, $client_id, $id_token);

        return redirect($logoutUrl);
    }

    public function unauthorized()
    {
        abort(401);
    }
}

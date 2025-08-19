<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\Response;

class Authenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            $redirectUri = $request->getRequestUri();

            Session::put('redirectUri', $redirectUri);

            return redirect()->route('login');
        } else {
            // TODO: check user's state in keycloak
            // in case of he/she logged out in another application
            // or being logged out by admin
        }

        return $next($request);
    }
}

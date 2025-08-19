<?php

namespace App\Providers;

use App\Api\SSO\Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use SocialiteProviders\Keycloak\Provider;
use SocialiteProviders\Manager\SocialiteWasCalled;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        foreach (config('api') as $name => $api) {
            Http::macro($name, function () use ($api) {
                $http = Http::baseUrl($api['url']);

                if ($api['auth'] == 'Bearer' && $api['secret']) {
                    $http = $http->withToken($api['secret']);
                } else if ($api['auth'] == 'Basic') {
                    $secret = explode("|", $api['secret']);
                    $http = $http->withBasicAuth($secret[0], $secret[1]);
                }

                return $http;
            });
        }

        if (!Cache::has('app')) {
            $app = Application::find(env('KEYCLOAK_CLIENT_ID'));

            Cache::set('app', $app);
        }

        $app = Cache::get('app');

        Config::set('app.name', $app->name);
        Config::set('app.icon', $app->icon);
        Config::set('app.modules', $app->modules);

        Event::listen(function (SocialiteWasCalled $event) {
            $event->extendSocialite('keycloak', Provider::class);
        });
    }
}

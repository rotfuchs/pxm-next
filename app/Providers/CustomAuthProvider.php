<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomAuthProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \Auth::provider('customAuthDriver', function ($app, array $config) {
            return \App::make('App\Auth\CustomUserProvider');
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

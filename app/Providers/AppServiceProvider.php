<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // I commented this => if ($this->app->environment() == 'production') {
        // I commented this => $this->app['request']->server->set('HTTPS', true);
        // I commented this=> }
        // rad man

        if (env( key: 'APP_ENV') !== 'local') {
            URL::forceScheme( scheme: 'https');
        }
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}

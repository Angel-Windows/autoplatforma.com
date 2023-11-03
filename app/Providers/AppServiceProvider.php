<?php

namespace App\Providers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        if ($this->app->runningInConsole()) {
            Log::info('console: ');
        }
        else {
            Log::info('Environment: ' . $this->app->environment());
            if ($this->app->environment('production')) {
                Log::info('Environment: ' . $this->app->environment());
                $this->app['request']->server->set('HTTPS','on');
                URL::forceSchema('https');
            }
        }
    }
}

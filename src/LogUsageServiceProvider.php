<?php

namespace Shiveh\LogUsage;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Shiveh\LogUsage\Http\Middleware\LogUsageMiddleware;

class LogUsageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'log-usage');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'log-usage');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/logUsage.php' => config_path('log-usage.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/log-usage'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/log-usage'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/log-usage'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/logUsage.php', 'log-usage');
        $kernel =$this->app->make(Kernel::class);
        $kernel->pushMiddleware(LogUsageMiddleware::class);
        // Register the main class to use with the facade
        $this->app->singleton('log-usage', function () {
            return new LogUsage;
        });
    }
}

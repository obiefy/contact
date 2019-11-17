<?php

namespace Obiefy\Contact;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'contact');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }


    public function registerRoutes()
    {
        Route::group([
            'namespace' => 'Obiefy\Contact\Http\Controllers'
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        });
    }
    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'contact');

        // Register the main class to use with the facade
        $this->app->singleton('contact', function () {
            return new Contact;
        });
    }
}

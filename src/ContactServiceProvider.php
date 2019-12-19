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

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/contact'),
            __DIR__ . '/../config/config.php' => config_path('contact.php'),
        ], 'contact');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'contact');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }


    public function registerRoutes()
    {
        Route::group([
            'namespace' => 'Obiefy\Contact\Http\Controllers'
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
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

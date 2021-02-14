<?php

namespace GenesysLite\GenesysCatalog\Providers;

use Illuminate\Support\ServiceProvider;

class GenesysCatalogServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/genesysCatalog.php',
            'GenesysCatalog'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (function_exists('config_path')) { // function not available and 'publish' not relevant in Lumen
            $this->publishes([
                __DIR__.'/../../config/genesysCatalog.php' => config_path('genesysCatalog.php'),
            ], 'config');
        }
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

    }
}

<?php

namespace AutoSEO\Providers;

use Illuminate\Support\ServiceProvider;
use SeoDev\SEOManager;

class AutoSEOServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Jika ada file konfigurasi, publish ke config
        $this->publishes([
            __DIR__ . '/../../config/autoseo.php' => config_path('autoseo.php'),
        ], 'config');
    }

    public function register()
    {
        // Registrasi service SEOManager
        $this->app->singleton('autoseo', function () {
            return new SEOManager();
        });
    }
}
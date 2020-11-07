<?php

namespace iqbalhasandev\bulksmsbd;

use iqbalhasandev\bulksmsbd\Classes\BulksmsbdClass;

use Illuminate\Support\ServiceProvider;

class BulkSMSBDServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/bulksmsbd.php', 'bulksmsbd');

        $this->publishes([
            __DIR__ . '/config/bulksmsbd.php' => config_path('bulksmsbd.php'),
        ]);

        $this->app->singleton('BulkSMSBD', function () {
            return new  BulksmsbdClass();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}

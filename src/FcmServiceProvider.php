<?php

namespace Meunee\LaravelFcmhttpv1;

use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;

class FcmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/fcm.php' => config_path('fcm.php'),
        ]);
    }
}
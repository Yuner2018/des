<?php

namespace Yuner\Des;

use Illuminate\Support\ServiceProvider;
use Yuner\Aes\Des;

class DesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config/des.php' => config_path('des.php')]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/des.php', 'des');
    }
}

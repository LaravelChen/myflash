<?php

namespace LaravelChen\MyFlash;

use Illuminate\Support\ServiceProvider;

class MyFlashProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views','myflash');

        $this->publishes([
            __DIR__.'/../../views'=>base_path('resources/views/vendor/myflash'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('myflash',function(){
            return $this->app->make(\LaravelChen\MyFlash\FlashNotifiy::class);
        });
    }
}

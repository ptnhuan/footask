<?php

namespace Footask\Front;

use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__.'/views', 'front');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__ . '/routes.php';
        $this->app->make('Footask\Front\Controllers\Front\FrontController');

    }
}

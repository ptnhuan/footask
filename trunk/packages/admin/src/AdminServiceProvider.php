<?php

namespace Footask\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__.'/views', 'admin');

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
        $this->app->make('Footask\Admin\Controllers\Admin\CommentAdminController');
        $this->app->make('Footask\Admin\Controllers\Admin\ContactAdminController');
        $this->app->make('Footask\Admin\Controllers\Admin\FAQAdminController');
        $this->app->make('Footask\Admin\Controllers\Admin\PostAdminController');
        $this->app->make('Footask\Admin\Controllers\Admin\ProjectAdminController');
        $this->app->make('Footask\Admin\Controllers\Admin\TaskAdminController');
        $this->app->make('Footask\Admin\Controllers\Admin\TemplateAdminController');

    }
}

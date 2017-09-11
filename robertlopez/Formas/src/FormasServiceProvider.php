<?php

namespace robertlopez\Formas;

use Illuminate\Support\ServiceProvider;

class FormasServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'Formas');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/routes.php';
        $this->app->make('robertlopez\Formas\Controllers\FormasController');
    }
}

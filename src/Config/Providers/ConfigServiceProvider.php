<?php

namespace Yangyifan\Administrator\Config\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Yangyifan\Administrator\Config\Library\ConfigLibrary;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('yangyifan.config', function () {
            return new ConfigLibrary();
        });
    }
}

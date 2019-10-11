<?php

namespace Wuyu\World;

use Illuminate\Support\ServiceProvider;

class WorldServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Wuyu\World\Providers\ConsoleServiceProvider::class);

        $this->app->bind('world', function ($app) {
            return new World();
        });
    }
}
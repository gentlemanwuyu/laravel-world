<?php

namespace Wuyu\World\Providers;

use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
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
        $this->registerInitCommand();
    }

    /**
     * Register the world:init command.
     *
     * @return void
     */
    protected function registerInitCommand()
    {
        $this->app->singleton('command.world.init', function($app) {
            return new \Wuyu\World\Console\Commands\Init($app['migrator']);
        });

        $this->commands('command.world.init');
    }
}
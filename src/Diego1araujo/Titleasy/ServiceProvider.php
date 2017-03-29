<?php

namespace Diego1araujo\Titleasy;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var boolean
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTitleasy();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function registerTitleasy()
    {
        $this->app->singleton('titleasy', function ($app) {
            return new Titleasy();
        });
        
        $this->app->alias('titleasy', Titleasy::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('titleasy');
    }
}

<?php
namespace Hardywen\Flow;


use Illuminate\Support\ServiceProvider;

class FlowServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;


    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //config
        $this->mergeConfigFrom(realpath(__DIR__ . '/../config/flow.php'));

        //translate
        $this->loadTranslationsFrom(realpath(__DIR__ . '/../lang'), 'flow');

    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Hardywen\Flow\FlowManager', function ($app) {
            return new FlowManager($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Hardywen\Flow\FlowManager'];
    }
}

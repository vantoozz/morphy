<?php namespace Vantoozz\Phpmorphy;

use Illuminate\Support\ServiceProvider;

class PhpmorphyServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('vantoozz/phpmorphy');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['phpmorphy'] = $this->app->share(function($app) {
            return new Phpmorphy;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('phpmorphy');
	}

}
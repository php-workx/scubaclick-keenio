<?php namespace ScubaClick\Keenio;

use KeenIO\Client\KeenIOClient;
use Illuminate\Support\ServiceProvider;

class KeenioServiceProvider extends ServiceProvider
{
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
		$this->package('scubaclick/keenio');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		/**
		 * Register the keenio instance
		 */
        $this->app['keenio'] = $this->app->share(function($app)
        {
        	$config = $app['config']->get('keenio::config');

			return KeenIOClient::factory([
			    'projectId' => $config['project_id'],
			    'writeKey'  => $config['write_key'],
			    'readKey'   => $config['read_key'],
			    'masterKey' => $config['master_key'],
			]);
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['keenio'];
	}
}

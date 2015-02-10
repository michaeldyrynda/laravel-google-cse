<?php namespace Iatstuti\GoogleCse;

use Illuminate\Support\ServiceProvider;

/**
 * Google Custom Search Engine service provider
 *
 * @package    Iatstuti
 * @subpackage GoogleCse
 * @copyright  2015 IATSTUTI
 * @author     Michael Dyrynda <michael@iatstuti.net>
 */
class GoogleCseServiceProvider extends ServiceProvider {

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
		$this->package('iatstuti/google-cse');
	}


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('googlesitesearch', function ()
		{
			return new GoogleCse;
		});
	}


	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array( 'googlesitesearch', );
	}

}

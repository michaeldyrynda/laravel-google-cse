<?php namespace Iatstuti\GoogleCse\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Laravel facade for the Google Custom Search Engine wrapper
 *
 * @package    Iatstuti
 * @subpackage GoogleCse
 * @copyright  2015 IATSTUTI
 * @author     Michael Dyrynda <michael@iatstuti.net>
 */
class LaravelFacade extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'googlesitesearch';
	}

}

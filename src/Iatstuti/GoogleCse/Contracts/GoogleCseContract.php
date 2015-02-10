<?php namespace Iatstuti\GoogleCse\Contracts;


/**
 * Google Custom Search Engine interface
 *
 * @package    Iatstuti
 * @subpackage GoogleCse
 * @copyright  2015 IATSTUTI
 * @author     Michael Dyrynda <michael@iatstuti.net>
 */
interface GoogleCseContract {

	public function search($term);

}

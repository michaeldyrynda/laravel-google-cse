<?php namespace Iatstuti\GoogleCse;

use GuzzleHttp\Client;
use Iatstuti\GoogleCse\Contracts\GoogleCseContract;

/**
 * Google Custom Search Engine implementation
 *
 * @package    Iatstuti
 * @subpackage GoogleCse
 * @copyright  2015 IATSTUTI
 * @author     Michael Dyrynda <michael@iatstuti.net>
 */
class GoogleCse implements GoogleCseContract {

	/**
	 * @var Client
	 */
	private $client;

	/**
	 * @var array
	 */
	private $config;

	private $response;


	/**
	 * Class constructor
	 */
	public function __construct()
	{
		$this->client = new Client([ 'base_url' => 'https://www.googleapis.com/customsearch/v1', ]);
	}


	/**
	 * Perform a Google search for a given term
	 *
	 * @param $term
	 *
	 * @return mixed
	 */
	public function search($term)
	{
		$request = $this->client->createRequest('GET');

		$request->setQuery([
			'key' => \Config::get('google-cse::cse.api_key'),
			'cx'  => \Config::get('google-cse::cse.search_engine_id'),
			'q'   => $term,
		]);

		$this->sendRequest($request);

		return $this->getItems();
	}


	/**
	 * Send the Guzzle request
	 *
	 * @param $request
	 */
	private function sendRequest($request)
	{
		$this->response = $this->client->send($request);
	}


	/**
	 * Get the items from the Guzzle request, or an empty array if none returned
	 *
	 * @return mixed
	 */
	private function getItems()
	{
		$response = $this->response->json();

		return isset( $response['items'] ) ? $response['items'] : [ ];
	}


	/**
	 * Return the Guzzle response
	 *
	 * @return mixed
	 */
	private function getResponse()
	{
		return $this->response;
	}


}

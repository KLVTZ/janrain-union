<?php namespace Janrain\Union;

/*
Plugin Name: Janrain Union
Version: 0.1-alpha
Description: A janrain interfacing method for third-party plugins
Author: Justin Page
Author URI: KLVTZ
Plugin URI: http://www.qfor.com
Text Domain: janrain-union
Domain Path: /languages
*/

use \GuzzleHttp\Client;
use \Janrain\Union\Lib\Route;

class JanrainUnion
{
	private static $instance;
	protected $client;
	protected $route;


	public function __construct()
	{
		$this->route = new Route;
		// $this->client = new Client;	
		var_dump($this->route); die();
	}

	public function connect()
	{
		$response = $this->client->post(getenv('SSO_ENGAGE_URL'), [
			'http_errors' => false,
			'form_params' => [
				'token' => $this->token(),
				'apiKey' => getenv('SSO_API_KEY'),
			],
		]);
		$header = $response->getHeader('content-type')[0];
		header("Content-type: {$header}");

		echo $response->getBody();
	}

	protected function token()
	{
		$response = $this->client->post(getenv('SSO_TOKEN_URI'), [ 
			'http_errors' => false,
			'form_params' => [
				'client_id' => getenv('SSO_CLIENT_ID'),
				'client_secret' => getenv('SSO_CLIENT_SECRET'),
 				'grant_type' => 'authorization_code',
 				'code' => $this->auth(),
//				'redirect_uri' => $_SERVER['HTTP_HOST']
			],	
		]);
	}

	protected function auth()
	{
		$response = $this->client->post(getenv('SSO_AUTH_CODE'), [ 
			'http_errors' => false,
			'form_params' => [
				'client_id' => getenv('SSO_CLIENT_ID'),
				'client_secret' => getenv('SSO_CLIENT_SECRET'),
				'redirect_uri' => '/',
				'type_name' => 'json'
			],	
		]);
		
		$header = $response->getHeader('content-type')[0];
		header("Content-type: {$header}");

		echo $response->getBody();
		die();
	}
}


add_action('plugins_loaded', function ()
{
 	$union = new JanrainUnion;
	// $union->connect();
});

register_activation_hook(__FILE__, [new Route, 'flushRules']);

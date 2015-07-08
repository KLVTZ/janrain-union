<?php namespace Janrain\Union\Services\Repo\User;

/**
 * User Repository for Janrain Signin
 *
 * @package Janrain\Union
 * @author  (c) Justin Page <justin.page@qfor.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use \GuzzleHttp\Client;

class UserRepo implements UserRepoInterface
{
	protected $client;

	public function __construct()
	{
		$this->client = new Client;
	}

	public function find($token)
	{
		$response = $this->client->post(getenv('SSO_ENGAGE_URL'), [
			'form_params' => [
				'body' => 'raw data',
				'token' => $token,
				'apiKey' => getenv ('SSO_API_KEY')
			],
		]);
		$user = json_decode($response->getBody());
		var_dump($user); die();
   	}
}

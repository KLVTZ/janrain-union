<?php

/**
 * User Repository for Janrain Signin
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @category Plugin
 * @package  Janrain\Union
 * @author   (c) Justin Page <justin.page@qfor.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @link     http://qfor.com
 */

namespace Janrain\Union\Services\Repo\User;

use \GuzzleHttp\Client;

/**
 * User Repository for Janrain Signin
 */
class UserRepo implements UserRepoInterface
{
    protected $client;

    /**
     * Enable Guzzle HTTP Client
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * Find user data through janrain token
     *
     * @param String $token generated via janrain
     *
     * @return Mixed $json user data
     */
    public function find($token)
    {
        $response = $this->client->post(
            getenv('SSO_ENGAGE_URL'),
            [
                'form_params' => [
                    'body' => 'raw data',
                    'token' => $token,
                    'apiKey' => getenv('SSO_API_KEY')
                ],
            ]
        );
        return json_decode($response->getBody());
    }
}

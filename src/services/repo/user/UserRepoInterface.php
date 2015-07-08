<?php namespace Janrain\Union\Services\Repo\User;

/**
 * Interface User for Janrain Signin
 *
 * @package Janrain\Union
 * @author  (c) Justin Page <justin.page@qfor.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
interface UserRepoInterface
{
	/**
	 * Find user data from Janrain
	 *
	 * @param String $token token generated from janrain
	 * @return Mixed $json user data
	 */
	public function find($token);
}

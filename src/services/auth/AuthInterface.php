<?php namespace Janrain\Union\Services\Auth;

/**
 * Interface Authentication layer for Janrain Signin
 *
 * @package Janrain\Union
 * @author  (c) Justin Page <justin.page@qfor.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

interface AuthInterface
{
	public function login();

	public function logout();

	public function update();
}

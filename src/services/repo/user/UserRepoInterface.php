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

/**
 * Interfaces User Repository for Janrain Signin
 */
interface UserRepoInterface
{
    /**
     * Find user data through janrain token
     *
     * @param String $token generated via janrain
     *
     * @return Mixed $json user data
     */
    public function find($token);
}

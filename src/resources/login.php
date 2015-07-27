<?php
/**
 * Login a user, set session, redirect back
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

use \Janrain\Union\Services\Repo\User\UserRepo as Repo;

$user = new Repo;
$user = $user->find($_POST['token']);

var_dump($user); die();


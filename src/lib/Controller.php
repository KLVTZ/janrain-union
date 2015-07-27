<?php namespace Janrain\Union\Lib;

/**
 * Serves template layer for Janrain Signin
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

/**
 * Register route(s) for janrain sign-in
 */
class Controller
{
    /**
     * Serve template base on request
     *
     * @param String $request action
     *
     * @return Resource $file of template
     */
    public static function serve($request)
    {
        switch ($request) {
        case 'login':
            return '../resources/login.php';
        case 'logout':
            return '../resources/logout.php';
        case 'update':
            return '../resources/update.php';
        case 'receive':
            return '../bin/receive.html';
        }
    }
}

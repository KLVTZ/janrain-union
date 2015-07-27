<?php
/**
 * This file is part of the klvtz/janrain-union library
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

namespace Janrain\Union;

/**
 * Used for getting the plugin ready and services
 */
class JanrainUnion
{
    protected $route;

    /**
     * Register route to init rules
     *
     * @return void
     */
    public function __construct()
    {
        $this->route = new \Janrain\Union\Lib\Route;
    }
}

// init union
add_action(
    'plugins_loaded',
    function () {
        $union = new JanrainUnion;
    }
);

// one time activation: registers routes and flush rules
register_activation_hook(
    __FILE__,
    function () {
        $route = new Route;
        $route->flushRules();
    }
);

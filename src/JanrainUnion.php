<?php namespace Janrain\Union;

/**
 * Janrain Union: Interface signin with third-party vendors
 *
 * @package Janrain\Union
 * @author  (c) Justin Page <justin.page@qfor.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class JanrainUnion
{
	protected $route;

	/**
	 * Register route to init rules
	 *
	 * @param void
	 * @return void
	 */
	public function __construct()
	{
		$this->route = new \Janrain\Union\Lib\Route;
	}
}

# init union
add_action('plugins_loaded', function ()
{
 	$union = new JanrainUnion;
});

# one time activation: registers routes and flush rules
register_activation_hook(__FILE__, function ()
{
	$route = new Route;
	$route->flushRules();
});

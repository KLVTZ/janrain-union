<?php namespace Janrain\Union;

use Janrain\Union\Lib\Route;

class JanrainUnion
{
	protected $route;

	public function __construct()
	{
		$this->route = new Route;
	}
}

add_action('plugins_loaded', function ()
{
 	$union = new JanrainUnion;
});

register_activation_hook(__FILE__, function ()
{
	$route = new Route;
	$route->flushRules();
});

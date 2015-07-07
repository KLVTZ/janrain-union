<?php namespace Janrain\Union;

/*
Plugin Name: Janrain Union
Version: 0.2-alpha
Description: A Janrain interfacing method for third-party plugins
Author: Justin Page
Author URI: <justin.page@qfor.com>
Plugin URI: http://www.qfor.com
Text Domain: janrain-union
Domain Path: /languages
*/

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

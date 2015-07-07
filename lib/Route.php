<?php namespace Janrain\Union\Lib;

use Janrain\Union\Lib\Controller;

class Route
{
	/**
	 * Create routes for janrain token service
	 */
	public function __construct()
	{
		add_filter('template_include', [$this, 'template']);	
		add_filter('init', [$this, 'rewriteRules']);	
		add_filter('query_vars', [$this, 'query']);
	}

	public function template($template)
	{
		$janrain = get_query_var('janrain');

		if ($janrain)
			return Controller::serve($janrain);

		return $template;
	}


	/**
	 * Grab the current query via HTTP request
	 *
	 * @param Array $args arguments
	 * @return Array $args
	 */
	public function query($args)
	{
		array_push($args, 'janrain');
		return $args;
	}

	/**
	 * Flushes current rules via rewrite and hook
	 *
	 * @param void
	 * @return void
	 */
	public function flushRules()
	{
		$this->rewriteRules();
		flush_rewrite_rules();	
	}

	/**
	 * Add regex to currennt rewrite rules
	 *
	 * @param void
	 * @return void
	 */
	public function rewriteRules()
	{
		add_rewrite_rule('janrain/(.*?)/?$', 'index.php?janrain=$matches[1]', 'top');
		add_rewrite_tag('%janrain%', '([^&]+)');
	}

}

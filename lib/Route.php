<?php namespace Janrain\Union\Lib;

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

		var_dump($janrain); die();
	}

	public function rewriteRules()
	{
		add_rewrite_rule('janrain/(.+)?$', 'index.php?janrain=$matches[1]', 'top');
		add_rewrite_tag('%janrain%', '([^&]+)');
	}

	public function query($args)
	{
		return $args[] = 'janrain';
	}

	public function flushRules()
	{
		$this->rewriteRules();
		flush_rewrite_rules();	
	}
}

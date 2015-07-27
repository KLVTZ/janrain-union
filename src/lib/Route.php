<?php

/**
 * Registers route(s) for janrain sign-in
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

namespace Janrain\Union\Lib;

use Janrain\Union\Lib\Controller;

/**
 * Register route(s) for janrain sign-in
 */
class Route
{
    /**
     * Create routes for janrain token service
     *
     * @return void
     */
    public function __construct()
    {
        add_filter('template_include', [$this, 'template']);
        add_filter('init', [$this, 'rewriteRules']);
        add_filter('query_vars', [$this, 'query']);
    }

    /**
     * Use controller to serve template base on query
     *
     * @param String $template action to serve
     *
     * @return Resource $template of file
     */
    public function template($template)
    {
        $janrain = get_query_var('janrain');

        if ($janrain) {
            return Controller::serve($janrain);
        }

        return $template;
    }

    /**
     * Grab the current query via HTTP request
     *
     * @param Array $args argument sent with query_vars
     *
     * @return Array $args argument back
     */
    public function query($args)
    {
        array_push($args, 'janrain');
        return $args;
    }

    /**
     * Flushes current rules via rewrite and hook
     *
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
     * @return void
     */
    public function rewriteRules()
    {
        add_rewrite_rule('janrain/(.*?)/?$', 'index.php?janrain=$matches[1]', 'top');
        add_rewrite_tag('%janrain%', '([^&]+)');
    }
}

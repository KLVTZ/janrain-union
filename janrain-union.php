<?php
/*
Plugin Name: Janrain Union
Version: 0.2-alpha
Description: A Janrain interfacing method for third-party plugins
Author: Justin Page
Author URI: <justin.page@qfor.com>
Plugin URI: http://www.qfor.com
Text Domain: janrain-union
*/

# bootstrap
define('JANRAIN_UNION_DIR', __DIR__);
require_once JANRAIN_UNION_DIR . '/src/' . 'JanrainUnion.php';

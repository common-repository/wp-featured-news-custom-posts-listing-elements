<?php
/*
Plugin Name: WP Featured News - Custom Posts Listing Elements
Plugin URI: https://flbaisha.com/cplugin/wp-featured-news/
Description: A Wordpress plugin which allows you to display your posts anywhere of your web-pages.
Version: 1.6.0
Author: Fluent-Themes 
Author URI: https://fluentthemes.com
Text Domain: wfnews
Domain Path: /languages
Tested up to: 6.6
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

#-----------------------------------------------------------------
# Adminn Functions
#-----------------------------------------------------------------
include_once plugin_dir_path( __FILE__ ) . 'modules/admin-functions.php';

/**
 * Current Plugin Version
 */
if ( ! defined( 'WFNEWS_PLUGIN_VERSION' ) ) {
	define( 'WFNEWS_PLUGIN_VERSION', '1.6.0' );
}

#-----------------------------------------------------------------
# Load Plugin Functions
#-----------------------------------------------------------------

require_once 'modules/inc/plugin-functions.php';

#-----------------------------------------------------------------
# Load Enqueue Functions
#-----------------------------------------------------------------

require_once 'modules/inc/enqueue.php';

#-----------------------------------------------------------------
# Load VC Shortcodes
#-----------------------------------------------------------------

require_once 'modules/p1/shortcodes.php';
require_once 'modules/p2/shortcodes.php';
require_once 'modules/p3/shortcodes.php';
require_once 'modules/p4/shortcodes.php';
require_once 'modules/p5/shortcodes.php';
require_once 'modules/p6/shortcodes.php';
require_once 'modules/p7/shortcodes.php';
require_once 'modules/p8/shortcodes.php';
require_once 'modules/p9/shortcodes.php';
require_once 'modules/p10/shortcodes.php';

#-----------------------------------------------------------------
# Define Path
#-----------------------------------------------------------------
if( !defined('WFNEWS_IMAGE_DIR') ){
	define('WFNEWS_IMAGE_DIR', plugin_dir_url( __FILE__ ).'modules/images/');
}
if( !defined('WFNEWS_CSS_DIR') ){
	define('WFNEWS_CSS_DIR', plugin_dir_url( __FILE__ ).'modules/css/');
}
if( !defined('WFNEWS_JS_DIR') ){
	define('WFNEWS_JS_DIR', plugin_dir_url( __FILE__ ).'modules/js/');
}
if( !defined('WFNEWS_MODULES_DIR') ){
	define('WFNEWS_MODULES_DIR', plugin_dir_url( __FILE__ ).'modules/');
}
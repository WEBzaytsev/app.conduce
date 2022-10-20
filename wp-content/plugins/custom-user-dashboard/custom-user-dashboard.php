<?php

/**
 * Plugin Name: Custom User Dashboard
 * Description: Custom User Dashboard
 * Version: 0.0.4
 * Author: Ankita
 */

define('UD_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define('UD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define('UD_PLUGIN_VERSION', '0.0.1' );
define('MY_ACCOUNT_URL', '9' );
define('CUSTOM_PRODUCT_ID', '48' );
define('UD_ASSETS_PATH', plugins_url('assets/', __FILE__) );


require_once( UD_PLUGIN_PATH . 'functions.php' );
require_once( UD_PLUGIN_PATH . 'functions/shortcodes.php' );
require_once( UD_PLUGIN_PATH . 'hooks.php' );

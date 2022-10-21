<?php

/**
 * Plugin Name: Custom File Upload
 * Description: Custom File Upload
 * Version: 0.0.1
 * Author: Ankita
 */

define('CFU_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define('CFU_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define('CFU_PLUGIN_VERSION', '0.0.1' );

require_once( CFU_PLUGIN_PATH . 'functions.php' );
require_once( CFU_PLUGIN_PATH . 'hooks.php' );

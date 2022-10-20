<?php

define( 'STOREFRONT_THEME_BASE_URL', get_stylesheet_directory_uri() . '/' );
define( 'STOREFRONT_THEME_BASE_PATH', get_stylesheet_directory() . '/' );

require_once( STOREFRONT_THEME_BASE_PATH . 'functions/common.php' );
require_once( STOREFRONT_THEME_BASE_PATH . 'hooks.php' );
require_once( STOREFRONT_THEME_BASE_PATH . 'classes/ero-wc-rac-role-custom-admin.php' );

new ERO_WC_RAC_Role_Custom_Admin();

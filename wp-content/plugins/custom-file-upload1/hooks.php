<?php

add_shortcode( 'metadata_run', 'metadata_run_callback');
add_action( "wp_enqueue_scripts", "mt_run_scripts_callback" );

add_action( "wp_ajax_get_csv_data_from_file", "get_csv_data_from_file_callback2" );
// add_action( 'plugins_loaded', 'wp_background_processes' );
add_action( 'plugins_loaded', 'wp_background_processes2' );

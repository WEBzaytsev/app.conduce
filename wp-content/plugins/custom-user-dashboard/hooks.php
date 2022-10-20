<?php

add_shortcode( "my_account","my_accoount_page_callback" );
add_shortcode('user_profile','user_profile_callback');
add_shortcode( "my_account_content", "my_account_content_callback" );

add_action( "wp_ajax_get_csv_data_from_file", "get_csv_data_from_file_callback" );
add_action( "wp_ajax_refresh_file_data", "refresh_file_data_callback" );
add_action("init","setting_page_init_callback");


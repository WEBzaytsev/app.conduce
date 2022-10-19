<?php
/* style / script */
add_action("wp_enqueue_scripts","common_scripts_callback");
add_action('after_setup_theme', [ERO_WC_RAC_Role_Custom_Admin::class, 'create']);
add_action('template_redirect', 'login_callback_headers');

/* shortcode */
add_shortcode( 'signin_form', 'signin_form_callback' );

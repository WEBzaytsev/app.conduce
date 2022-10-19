<?php

class ERO_WC_RAC_Role_Custom_Admin {

    private static function get_caps() {
        $caps = [
            'manage_woocommerce'        => true,
            'view_woocommerce_reports'  => true,
            'view_admin_dashboard'      => true,
            'delete_others_pages'       => true,
            'delete_others_posts'       => true,
            'delete_pages'              => true,
            'delete_posts'              => true,
            'delete_private_pages'      => true,
            'delete_private_posts'      => true,
            'delete_published_pages'    => true,
            'delete_published_posts'    => true,
            'edit_dashboard'            => true,
            'edit_others_pages'         => true,
            'edit_others_posts'         => true,
            'edit_pages'                => true,
            'edit_posts'                => true,
            'edit_private_pages'        => true,
            'edit_private_posts'        => true,
            'edit_published_pages'      => true,
            'edit_published_posts'      => true,
			'edit_theme_options'        => true,
            'export'                    => true,
            'import'                    => true,
            'list_users'                => true,
            'manage_categories'         => true,
            'manage_links'              => true,
            'manage_options'            => true,
            'moderate_comments'         => true,
            'publish_pages'             => true,
            'publish_posts'             => true,
            'read_private_pages'        => true,
            'read_private_posts'        => true,
            'read'                      => true,
            'create Reusable Blocks'    => true,
            'edit Reusable Blocks'      => true,
            'read Reusable Blocks'      => true,
            'delete Reusable Blocks'    => true,
            'upload_files'              => true,
        ];

        return $caps;
    }

    public static function create() {
        if( self::role_exists( 'custom_admin' ) ) return;

        add_role( 'custom_admin', 'Custom Admin', self::get_caps() );
    }

    public static function remove() {
        if( ! self::role_exists( 'custom_admin' ) ) return;

        remove_role( 'custom_admin' );
    }

    public static function role_exists( $role ) {
        if( ! empty( $role ) ) {
            return $GLOBALS['wp_roles']->is_role( $role );
        }

        return false;
    }
}

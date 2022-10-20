<?php

// function user_profile_callback(){
//     global $wpdb;
//     $user_id = get_current_user_id();
//     $user = get_user_by('ID',$user_id);
//     $table_users = $wpdb->prefix.'users';
//    $user_first_last_name = explode(' ',$user->user_login);
//    $email = $user->user_email;
//    $displayname = $user->display_name;

//    $firstname = $user_first_last_name[0];
//    $lastname = $user_first_last_name[1];
//     ob_start();
//     require_once( STOREFRONT_THEME_BASE_PATH . 'templates/shortcode/user_profile.php' );
//     return ob_get_clean();
// }

function my_accoount_page_callback(){
	if( ! is_user_logged_in()){ ?>
		<script>window.location.href="<?php echo site_url() ?>";</script>
	<?php }
	$page = $_GET['tab'] ?? 'dashboard';

	switch ( $page ) {
		case 'metadata':
            //$layout = do_shortcode('[my_account_content]');
			$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
			break;
		case 'analysis':
            //$layout = do_shortcode('[my_account_content]');
			$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/analysis.php");
			break;
        case 'shop':
            //$layout = do_shortcode('[my_account_content]');
			$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/dashboard.php");
			break;
		default:
			$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/dashboard.php");
			break;
	}
}

function my_account_content_callback() {
	if( ! is_user_logged_in()){ ?>
		<script>window.location.href="<?php echo site_url() ?>";</script>
	<?php }
	$sub_tab = $_GET['current'];
	$tab = $_GET['tab'] ?? 'dashboard';
	if ( $sub_tab ) {
			switch ( $sub_tab ) {
				case 'home':
					// $layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
					break;
				case 'my_account':                    
					$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/sub_tabs/dashboard/my-account.php");
					break;
				case 'Settings':                    
					$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/sub_tabs/dashboard/setting.php");
					break;
				case 'control':
					require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
					break;	
				case 'run':
					require_once(UD_PLUGIN_PATH . "templates/shortcodes/sub_tabs/metadata/run.php");
					break;
				case 'files':
					require_once(UD_PLUGIN_PATH . "templates/shortcodes/sub_tabs/metadata/file.php");
					break;
				case 'coming_soon':
					// $layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
					break;
			}
		} else {
			switch ( $tab ) {
				case 'metadata':
					$layout = require_once(UD_PLUGIN_PATH . "templates/tabs/content/metadata.php");
					break;
				case 'analysis':
				$layout = require_once(UD_PLUGIN_PATH . "templates/tabs/content/analysis.php");
					break;
                case 'shop':
				$layout = require_once(UD_PLUGIN_PATH . "templates/tabs/content/shop.php");
					break;
				default:
					$layout = require_once(UD_PLUGIN_PATH . "templates/tabs/content/dashboard.php");
					break;
			}
		}

}

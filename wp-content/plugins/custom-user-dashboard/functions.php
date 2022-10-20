<?php

function get_account_pageUrl( $tab = '' ) {
    $id = MY_ACCOUNT_URL;
    if ( $id ) {
        $url = get_permalink( $id );
        if ( $tab ) {
            return $url . '?tab=' . $tab;
        }
        return $url;
    }
    return '';
}
function get_account_subpageUrl( $tab = '', $current = '' ) {
    $id = MY_ACCOUNT_URL;
    if ( $id ) {
        $url = get_permalink( $id );
        if ( $tab && $current) {
            return $url . '?tab=' . $tab . ( $current ? '&current=' . $current : '' );
        }
        return $url;
    }
    return '';
}

function all_pages_template( $sub_tab ) {
	switch ( $sub_tab ) {
		case 'home':
			// $layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
			break;
		case 'my_account':
			$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/sub_tabs/dashboard/my-account.php");
			break;
		case 'settings':
			// $layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
			break;
		case 'control':
			$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
			break;
		case 'analysis':
			// $layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
			break;
		case 'run':
			 require_once(UD_PLUGIN_PATH . "templates/shortcodes/sub_tabs/metadata/run.php");
			break;
		case 'files':
			require_once(UD_PLUGIN_PATH . "templates/shortcodes/sub_tabs/metadata/file.php");
			break;
		case 'shop':
			 //$layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/shop.php");
			break;
		case 'coming_soon':
			// $layout = require_once(UD_PLUGIN_PATH . "templates/shortcodes/metadata.php");
			break;
	}
}

// function get_csv_data_from_file_callback(){
//     global $current_user;
//     global $wpdb;
//     $username = $current_user->user_login;
//     $user_id = $current_user->ID;
//     $f_name = $_POST['fileName'];
//     $all_data = $_POST['myTableArray'];
//     $column_names = $_POST['ColumnArray'];
//     $folder_name = uniqid(rand(), true).$f_name;
//     $main_uploads_dir =  WP_CONTENT_DIR. "/templates-files/";
//     wp_mkdir_p( $main_uploads_dir );
//     $user_dir =  $main_uploads_dir . $username."_".$user_id."/";
//     wp_mkdir_p( $user_dir );
//     $uploads_dir =  $user_dir . $folder_name;
//     wp_mkdir_p( $uploads_dir );
//     $count=1;
//     $zip_uploads_dir =  WP_CONTENT_DIR. "/zip-files/";
//     wp_mkdir_p( $zip_uploads_dir );
// 	$zip_user_dir =  $zip_uploads_dir . $username."_".$user_id."/";
//     wp_mkdir_p( $zip_user_dir );
//     $zip = new ZipArchive;
//     $zip->open( $zip_user_dir."/$folder_name.zip", ZipArchive::CREATE);
//     foreach($all_data as $data){
//         $json_string = json_encode($data);
//         $file_name = $uploads_dir . "/$count.json";
//         file_put_contents($file_name, $json_string);
//         $zip->addFile($file_name);
//         $count++;
//     }
//     $total_rows = $_POST["totalRows"]-1;
// 	$user_path = $username."_".$user_id;
//     $path = site_url()."/wp-content/zip-files/$user_path/$folder_name.zip";
//     $wpdb->insert(  "{$wpdb->prefix}template_file",
//     [
//         "order_id"=>"[empty]",
//         "user_id" => $user_id,
//         "status"=>"1",
//         "path"=> $path,
//         "no_of_rows"=>$total_rows
//    ]
//     );
// 	wp_send_json('success');
// }




add_action('woocommerce_thankyou', 'action_payment_complete', 10, 1 );
function action_payment_complete( $order_id ){
    global $wpdb;
    $order = wc_get_order( $order_id );
    $customer_id = $order->get_user_id();
    $item_quantity = 0;
    $table = $wpdb->prefix . 'user_executions_record';
    foreach ( $order->get_items() as $item_id => $item ) {
        $item_quantity  = $item->get_quantity();
    }

    for ($i=0; $i < $item_quantity; $i++) {
        $wpdb->insert(
            $table,
            [
                'user_id' => $customer_id,
                'order_id' => $order_id,
                'quantity' => 1,
                'completed' => 0
            ]
        );
    }
}

add_action('template_redirect','change_password_on_user_profile_callback');
function change_password_on_user_profile_callback(){
    global $wpdb;
    $user_id = get_current_user_id();
$exit = false;
$user = get_user_by('ID',$user_id);

$table_users = $wpdb->prefix.'users';
    if(isset($_POST['update_user_data'])){
    $first_name = $_POST['form_first_name'];
    $last_name = $_POST['form_last_name'];
    update_user_meta($user_id,'first_name',$first_name);
    update_user_meta($user_id,'last_name',$last_name);
    $email = $_POST['form_email'];
    $displayName = $_POST['form_displayName'];
    $update_data = $wpdb->update(
        $table_users,
        [
            'display_name' => $displayName,
            'user_email' => $email,
        ],[
            'ID' => $user_id
        ]
    );
    if(is_wp_error($update_data)){
        $updating_update_data_error = $update_data->get_error_message();?>
            <input type='hidden' class='error_updating_password' value='<?php echo $updating_update_data_error?>'/><?php
			$exit = true;
	}else{
		$user_profile_success = "Account Details are changed successfully";
    }

    $form_reset_pass_custom = $_POST['form_reset_pass_custom'];
    if($form_reset_pass_custom){
       $reset_pass =  wp_set_password($form_reset_pass_custom,$user_id);
        if(is_wp_error($reset_pass)){
            $updating_pass_error = $reset_pass->get_error_message();?>
            <input type='hidden' class='error_updating_password' value='<?php echo $updating_pass_error?>'/><?php
				$exit = true;
        }else{
                update_user_meta($user_id,'reset_pass_custom_mail',1);
//                 $userdata['ID'] = $user_id;
//                 $userdata['user_pass'] = $form_reset_pass_custom;
//                 wp_update_user( $userdata );
               wp_set_auth_cookie($user->ID);
                wp_set_current_user($user->ID);
                do_action('wp_login', $user->user_login, $user);
        }
    }


    $current_pass = $_POST['form_current_pass'];

     if($current_pass){

        if(!$exit){
            $result = wp_check_password($current_pass, $user->user_pass, $user_id);
            if(!$result){
                $error = 'Current password is wrong';?>
                <input type='hidden' class='change_password_error' value='<?php echo $error?>'/>
                <?php
                $exit = true;
            }
        }



        if(!$exit){

            $new_password = $_POST['form_new_pass'];
            if(strcmp($current_pass,$new_password) == 0){

                $error = 'New password cannot be same as Current password';?>
                <input type='hidden' class='change_password_error' value='<?php echo $error?>'/>
                <?php
                $exit = true;
            }
        }
        if(!$exit){

            $confirm_password = $_POST['form_new_confirm_pass'];
            if(strcmp($new_password,$confirm_password) !== 0){
                $error = 'New password and confirm password do not matched';?>
                <input type='hidden' class='change_password_error' value='<?php echo $error?>'/>
                <?php
                $exit = true;
            }
        }

        if(!$exit){
            $result=wp_set_password($new_password,$user_id);

            if(is_wp_error($result)){
                // echo "error updating password";
                $updating_pass_error = $result->get_error_message();?>
                <input type='hidden' class='error_updating_password' value='<?php echo $updating_pass_error?>'/>
                <?php
				$exit = true;


            }else{
                // echo "Password are changed successfully";

//                 $userdata['ID'] = $user_id;
//                 $userdata['user_pass'] = $new_password;
//                 wp_update_user( $userdata );
				
				wp_set_auth_cookie($user->ID);
                wp_set_current_user($user->ID);
                do_action('wp_login', $user->user_login, $user);
            }
        }

    }
    if(!$exit){?>
<!--     <input type='hidden' class='account_details_success' value='<php echo $user_profile_success?>'/> -->
	<input type='hidden' class='account_details_success' value='<?php echo $user_profile_success?>'/>
    <?php
    }
}
}

function refresh_file_data_callback(){
    global $wpdb;
    global $current_user;
    $username = $current_user->user_login;
    $user_id = $current_user->ID;
    $files_data = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}template_file WHERE `user_id`='$user_id'");
    $data .="<div class='file_data_refresh_loader'><span></span></div>";
    foreach($files_data as $file_d){
       $data .="<div class='table_data_div common_main_div'>";
        $data  .=  "<div class='common_divs file_download_data'>";
        $data .=  "<h3> $file_d->created_on </h3>";
        $data .=  "</div>";
        $data .=  " <div class='common_divs file_download_data'>";
        $data .=  "<h3> $file_d->order_id </h3>";
        $data .=  "</div>";
        $data .=  "<div class='common_divs file_download_data'>";
            if($file_d->status == 1) {
                $url = site_url().'/wp-content/zip-files/'.$username.'_'.$user_id.'/'. $file_d->path.'.zip';
                $data .=  "<a href=' $url'>";
                $data .=  "<div class='download_file_link'>";  
                $data .=  "Download";
                $data .=  "</div>";
                $data .=  "</a>";
             }
            else if($file_d->status == 2){
                $data .=  "<div class='progress_main'>";
                $data .=  "<p class='progress_bar'>In Progress...</p>";
                $data .=  "</div>";
            } 
             else if($file_d->status == 0){
                $data .=  " <div class='pending_main'>";
                $data .=  "<p class='pending_bar'>Pending...";
                $data .=  "</p>";
                $data .=  "</div>";
            }
        $data .=  "</div>";
        $data .= "</div>";
    }
    wp_send_json($data);
}

function setting_page_init_callback(){
    if(isset($_POST["delete_user_self"])){
        global $wpdb;
        $user_pass = esc_attr($_POST['account_password']);
        $user_id = get_current_user_id();
        $user = get_user_by('ID',$user_id);
        $result = wp_check_password($user_pass, $user->user_pass, $user_id);
        if($result){
            $wpdb->delete($wpdb->usermeta, ['user_id' => $user_id], ['%d']);
            $wpdb->delete($wpdb->users, ['ID' => $user_id], ['%d']);
            wp_redirect( site_url());
        }
        exit;
    }
    if(isset($_POST["setting_dashboard"])){
        global $wpdb;
        $page = $_POST["first_page_login"];
        $user_id = get_current_user_id();
        $notification = $_POST["notification_toggle"];
        if($notification){
            $value ="1";
        }
        else{
            $value ="0";
        }
        $data = [];
        $data["notification_toggle"] = $value;
        $data["on_start_page"] = $page;
        update_user_meta($user_id , "dashboard_setting_user", serialize($data));
    }

}

add_filter('wp_login', 'after_login_once_callback');
function after_login_once_callback() {
	if( isset( $_POST["log"] ) && isset( $_POST["pwd"] ) ) {
		wp_redirect(site_url()."/wp-admin");
		exit;
	}
	global $user;
	$user_id =get_current_user_id();
	$page = get_user_meta($user_id, "dashboard_setting_user");
	$page =unserialize($page[0]);
	if($page["on_start_page"]){
		$page= $page["on_start_page"];
		wp_redirect(site_url()."/my-account?tab=$page");
		exit;
	}
	
}

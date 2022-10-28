<?php
function common_scripts_callback(){
    wp_enqueue_style("common_style", STOREFRONT_THEME_BASE_URL . '/assets/style/style.css', [], "0.0.8");
    wp_enqueue_script("common_script", STOREFRONT_THEME_BASE_URL . '/assets/script/script.js', ['jquery'] , "0.0.8" ,true);
    wp_localize_script( 'common_script' , 'my_ajax_url' , [admin_url( 'admin-ajax.php' )]  );
    wp_enqueue_style("datatables_style", '//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css');
    wp_enqueue_script("datatables_script", '//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['jquery'] , "" ,true);
    wp_enqueue_style('frontend_fontawesome','https://use.fontawesome.com/releases/v5.0.13/css/all.css');
    wp_enqueue_style( "dashicons" );
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );

}

function signin_form_callback(){
	if(is_user_logged_in()){
		$pathh=site_url() . '/my-account/';?>
        <script>window.location.href="<?php echo $pathh ?>";</script>
	<?php
	}
    ob_start();
    require_once( STOREFRONT_THEME_BASE_PATH . 'templates/shortcode/sign_in_form.php' );
    return ob_get_clean();
}



function login_callback_headers(){
    if( isset($_POST['signin_submit']) ){

        // die("here");
            $username_email = esc_attr($_POST['signin_email']);
            $user_pass  = esc_attr($_POST['signin_Password']);

            $CustomUserLogin = [
                'user_login' => $username_email,
                'user_password' => $user_pass
            ];

            $email_exist = email_exists($username_email);
            $username_exists = username_exists($username_email);
		 if($email_exist){
                $userIDD = $email_exist;
            }elseif($username_exists){
                $userIDD = $username_exists;
            }
            $userId = $userIDD;

            if (strpos($username_email, '@') !== false) {
                $account_to_email_not = 'Email not found';
            }else{
                $account_to_username_not = 'Username not found';
            }

            if($account_to_email_not){
                $account_not_error = $account_to_email_not;
            }elseif($account_to_username_not){
                $account_not_error = $account_to_username_not;
            }
            
//             $userId = $email_exist ?? $username_exists;
            if(!$userId){
            //    echo $account_not_error;
            //    die();
                // $account_not_error = $account_to_email_not ?? $account_to_username_not;
                ?>
            <input type='hidden' value='<?php echo $account_not_error?>' id='showing_error_ID_hidden'/><?php
                    return false;
            }
            $user = get_user_by('ID',$userId);
            $result = wp_check_password($user_pass, $user->user_pass, $user_id);
            if(!$result){?>
                <input type='hidden' value='Password not recognised. Try again or reset it.' id='showing_error_ID_hidden'/><?php
                    return false;
            }
            if($userId){
				
//                 $login_through_social_login = get_user_meta($userId,'default_password_nag',true);
                global $wpdb;
                $login_through_social_login = $wpdb->get_var("SELECT meta_key  FROM `{$wpdb->prefix}usermeta` WHERE `meta_key` = 'default_password_nag' and `user_id` = $userId");
                if(!$login_through_social_login){
                    $account_verfication_check = get_user_meta($userId,'account_verified',true);
                    if($account_verfication_check == 0){?>
                        <input type='hidden' value='Please verify your mail first' id='showing_error_ID_hidden'/><?php
                        return false;
                     
                    }

                }
            }

               

            // if($account_verfication_check == 1){
            $user=wp_signon($CustomUserLogin);
            // }
            if ( is_wp_error($user) ) {
                    $error_sign_in = $user->get_error_message();?>

                    <input type='hidden' value='<?php echo $error_sign_in;?>' id='showing_error_ID_hidden'/><?php
                } else {
                   
                    
                        wp_set_current_user($user->ID,$username_email);

                        $pathh=site_url() . '/my-account/';
						$user_id = $userId;
						$page = get_user_meta($user_id, "dashboard_setting_user");
						$page =unserialize($page[0]);
						if($page["on_start_page"]){
							$page= $page["on_start_page"];
							wp_redirect(site_url()."/my-account?tab=$page");
							exit;
						}
							wp_redirect(site_url()."/my-account/?tab=dashboard");
							exit;
?>
<!--                         <script>window.location.href="<?php #echo "https://www.google.com/" ?>";</script> -->
                        <?php
                    
                }
    }
   }

remove_filter( 'authenticate', 'wp_authenticate_username_password' );
add_filter( 'authenticate', 'wpse_115539_authenticate_username_password', 20, 3 );

function wpse_115539_authenticate_username_password( $user, $username, $password ) {
    if ( is_a($user, 'WP_User') )
        return $user;

    if ( empty( $username ) || empty( $password ) ) {
        if ( is_wp_error( $user ) )
            return $user;

        $error = new WP_Error();

        if ( empty( $username ) )
            $error->add( 'empty_username', __('<strong>Error</strong>: The username field is empty.' ) );

        if ( empty( $password ) )
            $error->add( 'empty_password', __( '<strong>Error</strong>: The password field is empty.' ) );

        return $error;
    }

    if(filter_var($username, FILTER_VALIDATE_EMAIL)) {

        $user = get_user_by( 'email', $username );
    }else{
        $user = get_user_by( 'login', $username );
    }

    if ( !$user )
        return new WP_Error( 'invalid_username', sprintf( __( '<strong>Error</strong>: Account not found' ), wp_lostpassword_url() ) );

    $user = apply_filters( 'wp_authenticate_user', $user, $password );
    if ( is_wp_error( $user ) )
        return $user;

    if ( ! wp_check_password( $password, $user->user_pass, $user->ID ) )
        return new WP_Error( 'incorrect_password', sprintf( __( '<strong>Error</strong>: Password not recognised. Try again or reset it.' ),
        $username, wp_lostpassword_url() ) );

    return $user;
}



  

add_shortcode('reset_password','reset_password_shortcode_callback');
function reset_password_shortcode_callback(){
    ob_start();
    require_once( STOREFRONT_THEME_BASE_PATH . 'templates/shortcode/reset_password.php' );
    return ob_get_clean();
}

function my_custom_menu() {
    register_nav_menu('my-custom-menu',__( 'tool1 menu' ));
}
add_action( 'init', 'my_custom_menu' );


add_action('wp_ajax_nopriv_reset_password','reset_password_callback');
add_action('wp_ajax_reset_password','reset_password_callback');
function reset_password_callback(){
    global $wpdb;
    $id = 1;
    ob_start();?>

                <h3 class='reset_form_heading'>Reset your password</h3>
                <p class='signin_form_pHaveAcc have_an_accClass'>Enter the email address associated with your account, and we'll send
you a link to reset your password</p>

                <!-- <p class='signin_form_pTag'>Email</p> -->


                <!-- <div class='password_reset_p'><div>Email</div><div id="loading_on_sending_mail"></div></div> -->
                <div class='signin_form_pTag'>Email</div>
                <!-- <input type='password' name='signin_Password' class='signin_input_class' id='resetlink_password_id' /> -->


                <input type='text' name='resetpassword_email' class='signin_input_class reset_pass_mail_class' id='resetpass_emailRecovery_id'/>
                <div class='send_recovery_mail_success_msg'></div>

                <div class='password_reset_p'>
                <button class='reset_submit_btn' id='sendRecoveryLink'>Reset</button>
                <div id="loading_on_sending_mail"></div>
                </div>

                <p class='p_reset_password'><button class='reset_password_class' id='span_reset_arrow_id'>Back to sign in</button></p>
 				<!-- <p id='return_to_signIn_page'><span id='span_reset_arrow_id'><i class="fas fa-arrow-left"></i> </span> Return to Sign in</p> -->


    <?php
    $response = ob_get_clean();
    wp_send_json_success($response);
}

add_action('wp_ajax_nopriv_reset_pass_recovery_mail','reset_pass_recovery_mail_callback');
add_action('wp_ajax_reset_pass_recovery_mail','reset_pass_recovery_mail_callback');
function reset_pass_recovery_mail_callback(){
    global $wpdb;

    $reset_email = $_POST['resetPassEmail'];
    $check_mail_exist = $wpdb->get_var("SELECT user_login FROM `{$wpdb->prefix}users` WHERE user_email = '{$reset_email}'");


    if(!$check_mail_exist){
        wp_send_json_error('Email not found');
    }

    $user = get_userdatabylogin($check_mail_exist);
    $user_id = $user->ID;
	$user_display = $user->display_name;
    $user_token = base64_encode($user_id);


        $user_email = $reset_email;
        $subject = get_bloginfo('name') . ": Reset Password";
        ob_start();?>
        <table align="center" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td>
        <h1 style="font-family: Helvetica; font-size:20px; font-weight:600;">Reset your <?php echo get_bloginfo('name')?> password</h1>
        <p style="font-family: Helvetica; font-size:14px;">Hey <?php echo $user_display?>,</p>
        <p style="font-family: Helvetica; font-size:14px;">We received a password reset for your <?php echo get_bloginfo('name')?> account.</p>
        <p style="font-family: Helvetica; font-size:14px;">Please click the link below to choose a new password.</p>
        <p style="margin: 25px 0;">
            <a style="font-family: Helvetica; font-size:14px; text-decoration: none; display: inline-block; font-weight:500; border-radius:5px; border:1px solid #D8D8D8; background:#F8F6F4; color: #1D78E7; padding: 10px 100px;" target="_blank" href="<?php echo site_url()."/reset-password/?reset_token=".$user_token?>">Reset</a>
        </p>
        <p style="font-family: Helvetica; font-size:14px;">Best,<br>The <?php echo get_bloginfo('name')?> Team</p>
        <a target="_blank" href="<?php echo get_home_url()?>" style="display: block;"><img style="max-width: 50px; margin-top: 20px;" src="<?php echo get_bloginfo('url')?>/wp-content/themes/storefront-child-theme/assets/images/mobile_C.png"></a>
        <p style="font-family: Helvetica; font-size:14px; border: 1px solid #D8D8D8; padding: 20px; border-radius: 5px; display: inline-block;">
        <span style="float: left;">If it wasn't you, you can ignore this email or <a style="color:#1D78E7; text-decoration: none;" target="_blank" href="mailto:hello@<?php echo get_bloginfo('name')?>">reach out to us</a> if you need more help!</span>
        <span style="font-family: Helvetica; float:left; margin-top: 20px; clear: left;"><a style="color:#75757A;" href="https://conduce.io/legal">Legal</a></span>
        <span style="font-family: Helvetica; float:right; margin-top: 20px; color:#75757A;">&copy; <?php echo get_bloginfo('name')?></span>                
        </p>
        </td>
        </tr>
        </table>
        <?php
        $body = ob_get_clean();
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $mail_sent = wp_mail($user_email,$subject,$body,$headers);

    if($mail_sent){
        $response = "Reset password link sent. Please check your email.";
        wp_send_json_success($response);
    }
}
add_action('wp_ajax_nopriv_reset_password_continue','reset_password_continue_callback');
add_action('wp_ajax_reset_password_continue','reset_password_continue_callback');
function reset_password_continue_callback(){
    $reset_pass_token = $_POST['resetToken'];
    $resetPass = $_POST['resetPass'];
    $reset_pass_decode_id = base64_decode($reset_pass_token);
    $result=wp_set_password($resetPass,$reset_pass_decode_id);
            if(is_wp_error($result)){
                $forgotPassError=$result->get_error_message();
                wp_send_json_error($forgotPassError);
            }else{
            wp_send_json_success('Password changed successfully');
            }

}

add_action('init', 'logout_current_user');
function logout_current_user() {
	if ( isset( $_GET['sign_out']) && ( $_GET['sign_out'] == 1 ) ) {
            wp_logout();
    }
	 if(isset($_GET['action']) && $_GET['action']=='resetpass'){
        $pathh=site_url() . '';?>
        <script>window.location.href="<?php echo $pathh ?>";</script>
        <?php
    }
    if( isset( $_GET['verification_token'])){
        $user_id = base64_decode($_GET['verification_token']);
        update_user_meta($user_id,'account_verified',1);
    }
}

function redirect_to_login()
{
    if(is_page('my-account') && ! is_user_logged_in())
    {
        $loginUrl = site_url();
        wp_redirect($loginUrl);
        exit();
    }

}
add_action( 'template_redirect', 'redirect_to_login' );

add_action('wp_ajax_nopriv_user_registration','user_registration_callback');
add_action('wp_ajax_user_registration','user_registration_callback');
function user_registration_callback(){
     global $wpdb;
     $email_exist = email_exists(esc_attr($_POST['email']));
     $username_exists = username_exists(esc_attr($_POST['username']));
     if($email_exist){
        $emailError = "Sorry, that email address is already used!";
     }
     if($username_exists){
        $userloginError = "Sorry, that username already exists!";
     }
     if($email_exist || $username_exists){
        wp_send_json_error([
            'emailError' => $emailError,
            'userLoginError' => $userloginError
        ]);
     }
    $user = [
                'user_email'    => esc_attr($_POST['email']),
                'user_login'    => esc_attr($_POST['username']),
				'display_name'    => esc_attr($_POST['name']),
                'user_pass'     => esc_attr($_POST['pass'])
            ];
            $registered_user = wp_insert_user($user);
        if( is_wp_error($registered_user) ){
            $error_message = $registered_user->get_error_message();
            wp_send_json_error($error_message);
        }else{
            // $pathh=site_url();>
            //     <script>window.location.href="<?php echo $pathh >";</script>

            // <!-- <input type='hidden' value='<php echo $error_message;>' id='Registrationshowing_error_ID_hidden'/> -->
            // <!-- <input type='hidden' value='okok' id='Registrationshowing_error_ID_hidden'/>-->

            // echo $error_message;
                // $success_message = 'Registration Successful';
                $verification_token= base64_encode($registered_user);
                $user_email = esc_attr($_POST['email']);
                $subject = get_bloginfo('name') . ": Verify account";
                ob_start();?>
                <table align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                <td>        
                <h1 style="font-family: Helvetica; font-size:20px; font-weight:600;">Verify your <?php echo get_bloginfo('name')?> account</h1>
                <p style="font-family: Helvetica; font-size:14px;">Hey <?php echo esc_attr($_POST['username'])?>,</p>
                <p style="font-family: Helvetica; font-size:14px;">You've signed up for a <?php echo get_bloginfo('name')?> account.</p>
                <p style="font-family: Helvetica; font-size:14px;">Please confirm your email address using the link below to verify your account:</p>
                <p style="margin: 25px 0;">
                <a style="font-family: Helvetica; font-size:14px; text-decoration: none; display: inline-block; font-weight:500; border-radius:5px; border:1px solid #D8D8D8; background:#F8F6F4; color: #1D78E7; padding: 10px 100px;" target="_blank" href='<?php echo site_url().'/?verification_token='.$verification_token?>'>Verify</a>
                </p>
                <p style="font-family: Helvetica; font-size:14px;">Once verified, you’ll return to your dashboard.</p>                
                <p style="font-family: Helvetica; font-size:14px;">Best,<br>The <?php echo get_bloginfo('name')?> Team</p>
                <a target="_blank" href="<?php echo get_home_url()?>" style="display: block;"><img style="max-width: 150px; margin-top: 20px;" src="<?php echo get_bloginfo('url')?>/wp-content/themes/storefront-child-theme/assets/images/mobile_C"></a>
                <p style="font-family: Helvetica; font-size:14px; border: 1px solid #D8D8D8; padding: 20px; border-radius: 5px; display: inline-block;">
                <span style="float: left;">If it wasn't you, you can ignore this email or <a style="color:#1D78E7; text-decoration: none;" target="_blank" href="mailto:hello@<?php echo get_bloginfo('name')?>">reach out to us</a> if you need more help!</span>
                <span style="font-family: Helvetica; float:left; margin-top: 20px; clear: left;"><a style="color:#75757A;" href="https://conduce.io/legal">Legal</a></span>
                <span style="font-family: Helvetica; float:right; margin-top: 20px; color:#75757A;">&copy; <?php echo get_bloginfo('name')?></span>                
                </p>
                </td>
                </tr>
                </table>
                <?php
                $body = ob_get_clean();
                $headers = array('Content-Type: text/html; charset=UTF-8');
                $mail_sent = wp_mail($user_email,$subject,$body,$headers);
                if($mail_sent){
                    update_user_meta($registered_user,'account_verified',0);
                    $verification_mail_sent = 'Please check your mail for account verfication';
                }



                wp_send_json_success([
                    'registrationSuccess' => "Registration Successful",
                    'accountVerification' => $verification_mail_sent
                ]);
        }
}

if (!function_exists('storefront_delete_account_modal')) {
    function storefront_delete_account_modal() { ?>

        <div class="confirmation_background">
            <div class="delete_account_confirmation">
                <!--<span class="close"><i class="fa-regular fa-circle-xmark"></i></span>-->
                <p>This action cannot be undone. This will permanently delete your user.</p>
                <div class="email_p_relative">
                    <p class="signin_form_pTag signin_padding_extra"><span>Password</span></p>
                    <input type="password" name="account_password" class="signin_input_class" id="account_password_id">
                    <span class="form_eye_toggle_class form_eye_toggle_class1 has-tooltip" id="1"><i class="fas fa-eye"></i></span>
                    <span class="form_eye_toggle_class_slash form_eye_toggle_class_slash1 has-tooltip" id="1"><i class="fas fa-eye-slash"></i></span>
                </div>
                <button class="delete_account_button" name="delete_user_self">Delete User</button>
            </div>
        </div>

    <?php }
}

add_action('storefront_modals', 'storefront_delete_account_modal', 10);
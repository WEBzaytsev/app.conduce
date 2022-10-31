<style>
    #user_profile_outer_wrapper_ID{
        width: 100%;
        height: calc(100vh - 168px);
        padding: 40px;
        overflow: hidden auto;
        overflow: -moz-scrollbars-none
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    #user_profile_outer_wrapper_ID::-webkit-scrollbar {
        display: none;
    }

    @media(max-width: 767px) {
        #user_profile_outer_wrapper_ID{
            height: calc(100vh - 102px);
        }
    }
    #user_profile_outer_wrapper_ID hr{
        margin:0;
        background:#D8D8D8;
    }
    #user_profile_inner_wrapper_ID{
        width:100%;
    }
    #user_profile_outer_wrapper_ID #user_profile_form_outer_div_ID{
        width:400px;
        display:flex;
        justify-content:center;
        align-items:center;
        padding-top:40px;
    }
    #user_profile_outer_wrapper_ID .first_last_name_span{
        display:inline-block;
        width:100%;
    }
    #user_profile_outer_wrapper_ID .label_block{
        display:block;
        font-size:14px;
        line-height: 1;
        margin-bottom: 10px;
        color:#646464;
    }
    #user_profile_outer_wrapper_ID #user_profile_form_ID{
        width:100%;
    }
    #user_profile_outer_wrapper_ID .input_form_class_span{
        width:100%;
        background:#fff;
        box-shadow:none;
        border:1px solid #D8D8D8;
        border-radius:3px;
        height:35px;
    }
    #user_profile_outer_wrapper_ID .input_form_class{
        width:100%;
        background:#fff;
        box-shadow:none;
        border:1px solid #D8D8D8;
        border-radius:3px;
        outline:none;
        height:35px;
    }
    #user_profile_outer_wrapper_ID .input_form_class[disabled],
    #user_profile_outer_wrapper_ID .input_form_class_span[disabled]{
        background:#F5F5F5;
        border-color:#F5F5F5;
    }
    #user_profile_outer_wrapper_ID .input_form_class_span:hover{
        border-color:#D8D8D8;
    }
    #user_profile_outer_wrapper_ID .input_form_class:hover{
        border-color:#D8D8D8;
    }
    #user_profile_outer_wrapper_ID .p_first_last_name{
        display: flex;
        column-gap: 2em;
        margin-bottom: 20px;
    }
    #user_profile_outer_wrapper_ID .p_password_change_background{
        background-color:#f8f6f4;
        padding:30px;
    }
    #user_profile_outer_wrapper_ID .span_pass_heading{
        display: block;
        margin-bottom: 20px;
        font-weight: 500;
        font-size: 14px;
        color: #040404;
    }
    #user_profile_outer_wrapper_ID .span_inside_p_pass{
        display:block;
        margin-bottom:20px;
        position:relative;
    }
   #user_profile_outer_wrapper_ID .form_eye_toggle_class{
        position:absolute;
       bottom: 2px;
        right: 1px;
        cursor:pointer;
        color: #8cc8e1;
       background-color: #fff;
       padding: 2px 9px;
   }
   #user_profile_outer_wrapper_ID .form_eye_toggle_class_slash{
        display:none;
        position:absolute;
        bottom: 3px;
        right: 10px;
        cursor:pointer;
        color: #8cc8e1;
   }
   #user_profile_outer_wrapper_ID .change_user_info_error_div{
    display:none;
    width:100%;
    height:40px;
    border:1px solid red;
    margin-bottom:30px;
    padding:5px;
    background-color:#ff000024;
    color:red;
	   text-align:center;
   }
   #user_profile_outer_wrapper_ID .change_user_info_success_div{
        display:none;
        width: 100%;
        margin-bottom: 37px;
        background-color: #00800021;
        color: green;
        text-align: center;
        border-radius: 5px;
        font-size: 14px;
        padding: 10px;
   }
   #user_profile_outer_wrapper_ID .add_placeholder::-webkit-input-placeholder {
    color: red;
    }
    .heading_myaccount_wrapper .myaccount_heading {
        font-size: 30px;
        line-height: 1;
        margin-bottom: 20px;
        font-weight: 600;
        color: #040404;
        position: relative;
    }
    .heading_myaccount_wrapper p {
        font-size: 20px;
        color: #646464;
        margin-bottom: 0;
        line-height: 1;
        font-weight: 400;
    }
    .required_star{
        color:red;
        font-size:16px;
    }
    #user_profile_outer_wrapper_ID #user_profile_form_outer_div_ID .section-inner {
        width: 100%;
    }
    button.signout{
        border:1px solid #D8D8D8;
        border-radius:5px;
        background:#fff;
        padding:10px;
        font-size:14px;
        color:#646464;
        font-weight:600;
        line-height:1;
    }
    button.delete-account{
        border:1px solid #E75D31;
        border-radius:5px;
        background:#FFF9F8;
        padding:10px;
        font-size:14px;
        color:#E75D31;
        font-weight:600;
        line-height:1;
    }
    button.signout:focus,
    button.delete-account:focus{
        outline:none;
    }
    .span_deletion_note{
        font-size:14px;
        display:block;
        line-height:1;
        margin-top:10px;
    }
    .delete_user_button{
        color: white;
        background: red;
        font-weight: 700;
        border-radius: 7px;
        text-decoration: none;
        padding: 5px 23px;
        border: 2px solid white;
        transition: all 0.5s;
    }
    .delete_user_button:hover{
        background-color:white;
        color:red;
        border: 1px solid red;
    }
    .delete_account_button{
        width: 100%;
        background: #ffb7b7;
        font-size: 14px;
        font-weight: 400;
        border: 1px solid #bd0000;
        border-radius: 3px;
        box-shadow: 0px 3px 5px #b7b7b7;
        color: #bd0000;
        transition: all 0.3s;
        margin-top: 20px;
    }
    .delete_account_button:hover{
        background-color:#bd0000;
        color:#fff;
        border: 1px solid #bd0000;
        box-shadow: 0px 1px 2px #b7b7b7;
    }
    .delete_account_confirmation{
    display: block;
    width: 300px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: #f8f6f4;
    padding: 20px;
    color: #000;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.delete_account_confirmation .close {
    position: absolute;
    display: block;
    width: 30px;
    height: 30px;
    right: 0;
    top: 0;
    z-index: 100;
    background: #f3f6f7;
}

.delete_account_confirmation .close:after {
    position: absolute;
    top: 5px;
    right: 5px;
    content: "\274c";
    font-size: 14px;
    text-align: center;
}

.delete_account_confirmation > p{
    font-size:14px;
    margin-bottom: 0;
}
    @media screen and (max-width:768px){
        #user_profile_outer_wrapper_ID .p_first_last_name{
            flex-direction:column;
            margin-bottom:0px;
        }
        #user_profile_outer_wrapper_ID .first_last_name_span{
            width:100%;
            margin-bottom:1.41575em;
        }
		#user_profile_outer_wrapper_ID .p_password_change_background {
			padding:10px;
		}
		#user_profile_inner_wrapper_ID {
			width:100%;
		}
        #user_profile_outer_wrapper_ID{
            padding: 10px;
        }
        #user_profile_outer_wrapper_ID #user_profile_form_outer_div_ID{
            width:100%;
        }
        .my_account_controls {
            right: 10px;
            top: 120px;
        }
    }
</style>
<?php

global $wpdb;
$user_id = get_current_user_id();

$user = get_user_by('ID',$user_id);
$exit = false;
$table_users = $wpdb->prefix.'users';
// if(isset($_POST['update_user_data'])){
    // die('newDashboard');
    // echo "This is submit btn<br>";
//     $first_name = $_POST['form_first_name'];
//     $last_name = $_POST['form_last_name'];
//     $fullName = $first_name.' '.$last_name;
//     $email = $_POST['form_email'];
//     $displayName = $_POST['form_displayName'];
//     $update_data = $wpdb->update(
//         $table_users,
//         [
//             'user_login' => $fullName,
//             'display_name' => $displayName,
//             'user_email' => $email,
//         ],[
//             'ID' => $user_id
//         ]
//     );
//     if(is_wp_error($update_data)){
//         // echo 'test error one';
//         echo $update_data->get_error_message();

//     }else{

//         $user_profile_success = "Account Details are changed successfully";
//     }

//     $current_pass = $_POST['form_current_pass'];

//      if($current_pass){

//         if(!$exit){
//             $result = wp_check_password($current_pass, $user->user_pass, $user_id);
//             if(!$result){
//                 $error = 'Current password is wrong';>
//                 <input type='hidden' class='change_password_error' value='<?php echo $error>'/>
//                 <?php
//                 $exit = true;
//             }
//         }



//         if(!$exit){

//             $new_password = $_POST['form_new_pass'];
//             if(strcmp($current_pass,$new_password) == 0){

//                 $error = 'New password cannot be same as Current password';>
//                 <input type='hidden' class='change_password_error' value='<?php echo $error>'/>
//                 <?php
//                 $exit = true;
//             }
//         }
//         if(!$exit){

//             $confirm_password = $_POST['form_new_confirm_pass'];
//             if(strcmp($new_password,$confirm_password) !== 0){
//                 $error = 'New password and confirm password do not matched';>
//                 <input type='hidden' class='change_password_error' value='<?php echo $error>'/>
//                 <?php
//                 $exit = true;
//             }
//         }

//         if(!$exit){
//             $result=wp_set_password($new_password,21);

//             if(is_wp_error($result)){
//                 // echo "error updating password";
//                 $updating_pass_error = $result->get_error_message();>
//                 <input type='hidden' class='error_updating_password' value='<?php echo $updating_pass_error>'/>
//                 <php


//             }else{
//                 // echo "Password are changed successfully";

//                 $userdata['ID'] = $user_id;
//                 $userdata['user_pass'] = $new_password;
//                 wp_update_user( $userdata );
//             }
//         }

//     }
//     if(!$exit){>
//     <input type='hidden' class='account_details_success' value='<?php echo $user_profile_success>'/>
//     <?php
//     }
// }




    global $wpdb;
    $user_id = get_current_user_id();
    // $user_id =
    $user = get_user_by('ID',$user_id);
    $table_users = $wpdb->prefix.'users';
    // $user_first_last_name = explode(' ',$user->user_login);
    $email = $user->user_email;
    $displayname = $user->display_name;
    // echo $user_id;
     $default_password_nag = $user->default_password_nag;
    // echo $default_password_nag = 1;
     $firstNameMeta = $user->first_name;
     $lastNameMeta = $user->last_name;
    // echo $reset_pass_custom_mail = 1;
     $reset_pass_custom_mail = $user->reset_pass_custom_mail;
    // $firstname = $user_first_last_name[0];
    // $lastname = $user_first_last_name[1];
?>
<div class='user_profile_outer_wrapper' id='user_profile_outer_wrapper_ID'>
    <div class='user_profile_inner_wrapper' id='user_profile_inner_wrapper_ID'>
        <div class='change_user_info_error_div'>error</div>
        <div class='change_user_info_success_div'>success</div>
        <div class="heading_myaccount_wrapper">
            <div class="myaccount_heading">My account <span class="breadcrumps">DASHBOARD &gt; MY ACCOUNT</span></div>
            <p>Manage your account.</p>
        </div>
        <div class="user_profile_form_outer_div_relative">
            <div class='user_profile_form_outer_div' id='user_profile_form_outer_div_ID'>
                <form action='' method='post' id='user_profile_form_ID'>
                    <div class="my_account_controls">
                        <button class="my_account_cancel">Cancel</button>
                        <button type='submit' name='update_user_data' class="my_account_save">Save <img src="<?php echo UD_ASSETS_PATH . 'icons/check.svg'; ?>"></button>
                        <button class="my_account_edit">Edit <img src="<?php echo UD_ASSETS_PATH . 'icons/pen-white.svg'; ?>"></button>
                    </div>

                    <span class='span_pass_heading'>Details</span>

                    <p>
                        <label class='label_block'>Email</label>
                        <input type='email' disabled class='input_form_class' value='<?php echo $email?>' name='form_email' id='Email_ID_userProfile'/>
                    </p>

                    <p>
                        <label class='label_block'>Username</label>
                        <input type='text' disabled class='input_form_class' value='<?php echo $displayname?>' name='form_displayName' id='displayName_ID_userProfile'/>
                    </p>

                    <p class='p_first_last_name'>
                    <span class='first_last_name_span'>
                        <label class='label_block'>Full name</label>
                        <input type='text' disabled class='input_form_class_span' value='<?php echo $firstNameMeta?>' name='form_first_name' id='firstName_ID_userProfile'/>
                    </span>
                    </p>
                    <!--<p class='p_first_last_name'>
                    <span class='first_last_name_span'>
                        <label class='label_block' >Last Name</label>
                        <input type='text' disabled class='input_form_class_span' value='<?php /*echo $lastNameMeta*/?>' name='form_last_name'/>
                    </span>

                    </p>-->

                </form>
            </div>
        </div>
        <hr>
        <div class="user_profile_form_outer_div_relative">
            <div class='user_profile_form_outer_div' id='user_profile_form_outer_div_ID'>
                <form action='' method='post' id='user_profile_form_ID'>
                    <?php if($default_password_nag != 1 || $reset_pass_custom_mail){?>
                        <div class="my_account_controls">
                            <button class="my_account_cancel">Cancel</button>
                            <button type='submit' name='update_user_data' class="my_account_save">Save <img src="<?php echo UD_ASSETS_PATH . 'icons/check.svg'; ?>"></button>
                            <button class="my_account_edit">Edit <img src="<?php echo UD_ASSETS_PATH . 'icons/pen-white.svg'; ?>"></button>
                        </div>
                        <p>
                            <span class='span_pass_heading'>Password</span>

                            <span class='span_inside_p_pass' id='span_inside_p_pass_ID'>
                            <label class='label_block'>Current password</label>
                            <input type='password' class='input_form_class formToggleEyeClass formToggleEyeClass1' name='form_current_pass' id='form_current_pass_ID'/>
                            <span class='form_eye_toggle_class form_eye_toggle_class1' id='1'><i class="fas fa-eye"></i></span>
                            <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash1' id='1'><i class="fas fa-eye-slash"></i></span>

                        </span>
                        </p>
                        <p>
                        <span class='span_inside_p_pass' id='span_inside_pass_ID'>
                            <label class='label_block'>New password</label>
                            <input type='password' class='input_form_class formToggleEyeClass formToggleEyeClass2' name='form_new_pass' id='form_new_pass_ID'/>
                            <span class='form_eye_toggle_class form_eye_toggle_class2' id='2'><i class="fas fa-eye"></i></span>
                            <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash2' id='2'><i class="fas fa-eye-slash"></i></span>
                        </span>
                        </p>
                        <p>
                        <span class='span_inside_p_pass'>
                            <label class='label_block'>Confirm new password</label>
                            <input type='password' class='input_form_class formToggleEyeClass formToggleEyeClass3' name='form_new_confirm_pass' id='form_confirm_new_pass_ID' />
                            <span class='form_eye_toggle_class form_eye_toggle_class3' id='3'><i class="fas fa-eye"></i></span>
                            <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash3' id='3'><i class="fas fa-eye-slash"></i></span>
                        </span>
                        </p>

                    <?php }else{?>
                        <p class='p_password_change_background'>
                            <span class='span_pass_heading'>Reset Password</span>

                            <span class='span_inside_p_pass' id='span_inside_p_pass_ID'>
                        <label>Choose new password</label>
                        <input type='password' class='input_form_class formToggleEyeClass formToggleEyeClass1' name='form_reset_pass_custom' id='form_current_pass_ID'/>
                        <span class='form_eye_toggle_class form_eye_toggle_class1' id='1'><i class="fas fa-eye"></i></span>
                        <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash1' id='1'><i class="fas fa-eye-slash"></i></span>

                    </span>
                        </p>
                    <?php }?>
                </form>
            </div>
        </div>
            <hr>
            <div class='user_profile_form_outer_div' id='user_profile_form_outer_div_ID'>
                <div class="section-inner">
                    <p style="margin-bottom:40px;">
                        <span class='span_pass_heading'>Sign out</span>
                        <a href="?sign_out=1"><button class="signout">Sign out</button></a>
                    </p>
                </div>
            </div>
            <hr>
            <div class='user_profile_form_outer_div' id='user_profile_form_outer_div_ID'>
                <div class="section-inner">
                    <p style="margin-bottom:0;">
                        <span class='span_pass_heading'>Deletion</span>
                        <button class="delete-account delete_user_button">Delete your account</button>
                    </p>
                </div>
            </div>
            <span class="span_deletion_note">This action cannot be undone and will permanently delete your account.</span>
    </div>
</div>
<script>
    (function($){
        $(document).ready(function(){
            // alert('hi');
            var error = $('.change_password_error').val();
            var success = $('.account_details_success').val();
            var errorUpdatingPass = $('.error_updating_password').val();
            if(error){
                // $('.change_user_info_error_div').css('display','block');
                // $('.change_user_info_error_div').html(error);
                if(error.includes('wrong')){
                    $('#form_current_pass_ID').css('border-color','red');
                    $('#form_current_pass_ID').addClass('add_placeholder');
                    $('#form_current_pass_ID').attr('placeholder',`${error}`);
                }
                if(error.includes('same')){
                    $('#form_new_pass_ID').css('border-color','red');
                    $('#form_new_pass_ID').addClass('add_placeholder');
                    $('#form_new_pass_ID').attr('placeholder',`${error}`);
                }
                if(error.includes('confirm')){
                    $('#form_confirm_new_pass_ID').css('border-color','red');
                    $('#form_confirm_new_pass_ID').addClass('add_placeholder');
                    $('#form_confirm_new_pass_ID').attr('placeholder',`${error}`);
                }
            }
            if(success){
                $('.change_user_info_success_div').css('display','block');
                $('.change_user_info_success_div').html(success);
                $("#user_profile_form_outer_div_ID").loadWith(location.href + " #user_profile_form_outer_div_ID");
            }
            if(errorUpdatingPass){
                $('.change_user_info_error_div').css('display','block');
                $('.change_user_info_error_div').html(errorUpdatingPass);
            }
        });

        $(document).on('click','#form_user_profile_ID',function(){
            // var firstNameUserProfile = $('#firstName_ID_userProfile').val();
            // if(firstNameUserProfile == ''){
            //     $('#firstName_ID_userProfile').css('border-color','red');
            //     $('#firstName_ID_userProfile').addClass('add_placeholder');
            //     $('#firstName_ID_userProfile').attr('placeholder','This field is required');
            //     return false;
            // }
            var displayNameUserProfile = $('#displayName_ID_userProfile').val();
            if(displayNameUserProfile == ''){
                $('#displayName_ID_userProfile').css('border-color','red');
                $('#displayName_ID_userProfile').addClass('add_placeholder');
                $('#displayName_ID_userProfile').attr('placeholder','This field is required');
                return false;
            }
            var emailUserProfile = $('#Email_ID_userProfile').val();
            if(emailUserProfile == ''){
                $('#Email_ID_userProfile').css('border-color','red');
                $('#Email_ID_userProfile').addClass('add_placeholder');
                $('#Email_ID_userProfile').attr('placeholder','This field is required');
                return false;
            }
            var currentPass = $('#form_current_pass_ID').val();
            var newPass = $('#form_new_pass_ID').val();
            var confirmNewPass = $('#form_confirm_new_pass_ID').val();
            if(currentPass){
                if(newPass == ''){
                    // alert('Please fill out all the password fields');
                    $('#form_new_pass_ID').css('border-color','red');
                    $('#form_new_pass_ID').addClass('add_placeholder');
                    $('#form_new_pass_ID').attr('placeholder','Please fill out this password field');
                    return false;
                }
                if(confirmNewPass == ''){
                    // alert('Please fill out all the password fields');
                    $('#form_confirm_new_pass_ID').css('border-color','red');
                    $('#form_confirm_new_pass_ID').addClass('add_placeholder');
                    $('#form_confirm_new_pass_ID').attr('placeholder','Please fill out this password field');
                    return false;
                }
            }
            if(newPass){
                if(currentPass == ''){
                    // alert('Please fill out all the password fields');
                    $('#form_current_pass_ID').css('border-color','red');
                    $('#form_current_pass_ID').addClass('add_placeholder');
                    $('#form_current_pass_ID').attr('placeholder','Please fill out this password field');
                    return false;
                }
                if(confirmNewPass == ''){
                    // alert('Please fill out all the password fields');
                    $('#form_confirm_new_pass_ID').css('border-color','red');
                    $('#form_confirm_new_pass_ID').addClass('add_placeholder');
                    $('#form_confirm_new_pass_ID').attr('placeholder','Please fill out this password field');
                    return false;
                }
            }
            if(confirmNewPass){
                if(newPass == ''){
                    // alert('Please fill out all the password fields');
                    $('#form_new_pass_ID').css('border-color','red');
                    $('#form_new_pass_ID').addClass('add_placeholder');
                    $('#form_new_pass_ID').attr('placeholder','Please fill out this password field');
                    return false;
                }
                if(currentPass == ''){
                    alert('Please fill out all the password fields');
                    return false;
                }
            }
            // if(currentPass == newPass){
            //     alert('N');
            //     return false;
            // }
        });

        $(document).on('click','.form_eye_toggle_class',function(){

            var id = $(this).attr('id');

            $(`.formToggleEyeClass${id}`).attr('type','text');
            $(`.form_eye_toggle_class_slash${id}`).css('display','block');
            $(`.form_eye_toggle_class${id}`).css('display','none');
        });

        $(document).on('click','.form_eye_toggle_class_slash',function(){
            var id= $(this).attr('id');
            $(`.form_eye_toggle_class_slash${id}`).css('display','none');
            $(`.form_eye_toggle_class${id}`).css('display','block');
            $(`.formToggleEyeClass${id}`).attr('type','password');

        });


    })(jQuery);
</script>

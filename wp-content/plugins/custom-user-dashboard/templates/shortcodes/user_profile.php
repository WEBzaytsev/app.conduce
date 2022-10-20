<style>
    #user_profile_outer_wrapper_ID{
        /* background-color:pink; */
        width:100%;
        /* height:70vh; */
        display:flex;
        justify-content:center;
        align-items:center;
        padding: 40px 0px;
    }
    #user_profile_inner_wrapper_ID{
        /* background:green; */
        width:80%;
        height:80%;
    }
    #user_profile_outer_wrapper_ID #user_profile_form_outer_div_ID{
        width:100%;
        /* background-color:yellow; */
        display:flex;
        justify-content:center;
        align-items:center;
        /* padding:30px; */
    }
    #user_profile_outer_wrapper_ID .first_last_name_span{
        /* display:flex; */
        /* flex-direction:column; */
        display:inline-block;
        width:50%;
    }
    #user_profile_outer_wrapper_ID .label_block{
        display:block;
    }
    #user_profile_outer_wrapper_ID #user_profile_form_ID{
        /* background:orange; */
        width:100%;
    }
    #user_profile_outer_wrapper_ID .input_form_class_span{
        width:95%;
        background:#fff;
        box-shadow:none;
        border:1px solid #efefef;
        border-radius:3px;
    }
    #user_profile_outer_wrapper_ID .input_form_class{
        width:100%;
        background:#fff;
        box-shadow:none;
        border:1px solid #efefef;
        border-radius:3px;
        outline:none;
    }
    #user_profile_outer_wrapper_ID .input_form_class_span:hover{
        border-color:#8ed1fc;
    }
    #user_profile_outer_wrapper_ID .input_form_class:hover{
        border-color:#8ed1fc;
    }
    #user_profile_outer_wrapper_ID .p_first_last_name{
        display:flex;
        justify-content:space-between;
    }
    #user_profile_outer_wrapper_ID .p_password_change_background{
        background-color:#d3d3d312;
        /* background-color:#8ed1fc; */
        padding:30px;
    }
    #user_profile_outer_wrapper_ID .span_pass_heading{
        display:block;
        margin-bottom:20px;
        font-weight:600;
        font-size: 18px;
    }
    #user_profile_outer_wrapper_ID .span_inside_p_pass{
        display:block;
        margin-bottom:20px;
        position:relative;
    }
    /* #user_profile_outer_wrapper_ID #span_inside_p_pass_ID{
        position:relative;
    }
    #user_profile_outer_wrapper_ID #span_inside_pass_ID{
        position:relative;
    } */
   #user_profile_outer_wrapper_ID .form_eye_toggle_class{
        position:absolute;
        bottom: 7px;
        right: 10px;
        cursor:pointer;
   }
   #user_profile_outer_wrapper_ID .form_eye_toggle_class_slash{
        display:none;
        position:absolute;
        bottom: 7px;
        right: 10px;
        cursor:pointer;
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
        width:100%;
        height:40px;
        border:1px solid green;
        margin-bottom:30px;
        padding:5px;
        background-color:#00800021;
        color:green;
	   text-align:center;
   }
   #user_profile_outer_wrapper_ID .add_placeholder::-webkit-input-placeholder {
    color: red;
    }
</style>
<div class='user_profile_outer_wrapper' id='user_profile_outer_wrapper_ID'>
    <div class='user_profile_inner_wrapper' id='user_profile_inner_wrapper_ID'>
        <div class='change_user_info_error_div'>error</div>
        <div class='change_user_info_success_div'>success</div>
        <div class='user_profile_form_outer_div' id='user_profile_form_outer_div_ID'>
            <form action='' method='post' id='user_profile_form_ID'>
                <p class='p_first_last_name'>
                    <!-- <php foreach($user_first_last_name as $name):?> -->
                    <span class='first_last_name_span'>
                        <label class='label_block'>First Name</label>
                        <input type='text' class='input_form_class_span' value='<?php echo $firstname?>' name='form_first_name'/>
                    </span>
                    <span class='first_last_name_span'>
                        <label class='label_block' class='input_form_class_span'>Last Name</label>
                        <input type='text' class='input_form_class' value='<?php echo $lastname?>' name='form_last_name'/>
                    </span>
                    <!-- <php endforeach;?> -->
                </p>
                <p>
                    <label>Display name</label>
                    <input type='text' class='input_form_class' value='<?php echo $displayname?>' name='form_displayName'/>
                </p>
                <p>
                    <label>Email address</label>
                    <input type='email' class='input_form_class' value='<?php echo $email?>' name='form_email'/>
                </p>
                <p class='p_password_change_background'>
                    <span class='span_pass_heading'>Password change</span>

                    <span class='span_inside_p_pass' id='span_inside_p_pass_ID'>
                        <label>Current password (leave blank to leave unchanged)</label>
                        <input type='password' class='input_form_class formToggleEyeClass formToggleEyeClass1' name='form_current_pass' id='form_current_pass_ID'/>
                        <span class='form_eye_toggle_class form_eye_toggle_class1' id='1'><i class="fas fa-eye"></i></span>
                        <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash1' id='1'><i class="fas fa-eye-slash"></i></span>

                    </span>
                    <span class='span_inside_p_pass' id='span_inside_pass_ID'>
                        <label>New password (leave blank to leave unchanged)</label>
                        <input type='password' class='input_form_class formToggleEyeClass formToggleEyeClass2' name='form_new_pass' id='form_new_pass_ID'/>
                        <span class='form_eye_toggle_class form_eye_toggle_class2' id='2'><i class="fas fa-eye"></i></span>
                        <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash2' id='2'><i class="fas fa-eye-slash"></i></span>
                    </span>
                    <span class='span_inside_p_pass'>
                        <label>Confirm new password</label>
                        <input type='password' class='input_form_class formToggleEyeClass formToggleEyeClass3' name='form_new_confirm_pass' id='form_confirm_new_pass_ID' />
                        <span class='form_eye_toggle_class form_eye_toggle_class3' id='3'><i class="fas fa-eye"></i></span>
                        <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash3' id='3'><i class="fas fa-eye-slash"></i></span>
                    </span>
                </p>
                <input type='submit' name='update_user_data' value='Save' id='form_user_profile_ID'/>
            </form>
        </div>
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
                if(error.includes('New')){
                    $('#form_new_pass_ID').css('border-color','red');
                    $('#form_new_pass_ID').addClass('add_placeholder');
                    $('#form_new_pass_ID').attr('placeholder',`${error}`);
                }
                if(error.includes('match')){
                    $('#form_confirm_new_pass_ID').css('border-color','red');
                    $('#form_confirm_new_pass_ID').addClass('add_placeholder');
                    $('#form_confirm_new_pass_ID').attr('placeholder',`${error}`);
                }
            }
            if(success){
                $('.change_user_info_success_div').css('display','block');
                $('.change_user_info_success_div').html(success);
                $("#user_profile_form_outer_div_ID").load(location.href + " #user_profile_form_outer_div_ID");
            }
            if(errorUpdatingPass){
                $('.change_user_info_error_div').css('display','block');
                $('.change_user_info_error_div').html(errorUpdatingPass);
            }
        });

        $(document).on('click','#form_user_profile_ID',function(){
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

<style>
    #signin_form_outer_wrapper_ID{
		    background-position: center center;
            background-size:cover;
            padding:20px;
            height: calc(100vh - 60px);
			display:flex;
			justify-content:center;
			align-items:center;
    }
    .signin_form_inner_wrapper{
        display:flex;
        justify-content:center;
        align-items:center;
        width:1140px;
        margin:auto;
    }
    #content .col-full{
        margin:0;
        max-width:100% !important;
        padding:0;
    }
    #signin_form_inner_ID .resetpass_form_class{
        display:flex;
        flex-direction:column;
        width:480px;
        padding:40px;
        border:1px solid #efefef;
        background-color:#fff;
        margin-bottom:0px;
        border-radius: 5px;
    }
    #signin_form_inner_ID .resetpass_form_class .signin_form_pTag{
        margin:0;
    }
    #signin_form_inner_ID .signin_form_left_column{
        width:50%;
        display: flex;
        /* flex-direction: column;
        align-items: center;
        width:100%;
        display: flex;
        justify-content: flex-end;
        margin-bottom: 100px; */
    }
    #signin_form_inner_ID .signin_form_right_column{
        width:50%;
        display:flex;
        /* justify-content:right; */
        flex-direction:column;
        align-items:flex-start;
    }
    #signin_form_inner_ID .resetpass_form_class .signin_form_heading{
        /* font-size:26px;
        font-weight:600;
        margin:0; */
        color: #040404;
        font-size: 20px;
        font-weight: 700;
        line-height: 30px;
        margin-bottom:10px;
    }
    #signin_form_inner_ID .resetpass_form_class .reset_form_heading{
        /* font-size: 26px;
        font-weight: 600; */
        color: #040404;
        font-size: 20px;
        font-weight: 700;
        line-height: 30px;
    }
    /* #signin_form_inner_ID .resetpass_form_class .reset_submit_btn{
        background-color: #1467f7d6;
        height: 40px;
        margin-top: 30px;
        color: #fff;
        padding: 0;
        border: 1px solid #1467f7d6;
        border-radius: 5px;
    } */
    #signin_form_inner_ID .resetpass_form_class .signin_form_pHaveAcc{
        margin-bottom:40px;
    }
    #signin_form_inner_ID .resetpass_form_class .signin_input_class{
        box-shadow:none !important;
        background-color:#fff;
        height:40px;
        border:1px solid #efefef;
        border-radius:5px;
        color: #6d6d6d;
        font-size: 14px;
        padding-right:40px;
    }
    #signin_form_inner_ID .resetpass_form_class .signin_padding_extra{
        padding-top:20px;
        display:flex;
        justify-content:space-between;
    }
    #signin_form_inner_ID .resetpass_form_class .reset_submit_btn{
        background-color:#1467f7d6;
        height:40px;
        margin-top:30px;
        color:#fff;
        padding:0;
        border:1px solid #1467f7d6;
        border-radius:5px;
		font-size:14px;
		font-weight:400;
	}
	#signin_form_inner_ID .resetpass_form_class .login_with_goggle_apple_div{
		border-top: 1px solid #efefef;
		padding-top: 25px;
		margin-top: 30px;
	}
    #signin_form_inner_ID .resetpass_form_class .signin_input_class:hover{
        outline:none;
        border-color:#8ed1fc;
    }
    #signin_form_inner_ID .resetpass_form_class .signin_input_class:focus{
        outline:none;
        border-color:#8ed1fc;
        /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
    }
    #signin_form_inner_ID .tooltip_custom{
        width: 122px;
        padding: 8px 0;
        left: -56px;
        justify-content: center;
    }
    #signin_form_inner_ID .tooltip_custom.tt_hide_password:before{
        content: 'Hide password';
    }
    #signin_form_inner_ID .tooltip_custom.tt_show_password:before{
        content: 'Show password';
    }
    .sign_in_show_pass{
        color:#1467f7d6;
    }
    .Showing_error_msg_wrapper{
        /* display:none; */
        margin:20px 0px;
        width:450px;
        /* border:1px solid #efefef; */
        padding:5px;
        border:1px solid red;
        background-color:#ec0b0b17;
        color:red;
        font-size:18px;
        display:none;
        justify-content:center;
        align-items:center;
    }
    .add_placeholder::-webkit-input-placeholder {
    color: #E75D31;
    }
    .Showing_success_msg_wrapper{
        /* display:none; */
        border:1px solid #EFEFEF;
        background-color:#abe99363;
        color:#646464;
        font-size:16px;
        margin: 20px 0px;
        width: 480px;
        /* border: 1px solid #efefef; */
        padding: 5px;
        display:none;
        justify-content:center;
        align-items:center;
    }
    .p_reset_password{
        margin-top:40px;
        margin-bottom:0px;

    }
    .left_company_logo_div{
        width:250px;
        height:55px;
        background-size:100% 100%;
        background-position:center;
        background-repeat:no-repeat;
        background-image: url( <?php echo STOREFRONT_THEME_BASE_URL ?>/assets/images/C_conduce.png)
    }
    .reset_password_class{
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        color:#1467f7d6;
        font-weight:500;
        background: whitesmoke;
        border-radius: 5px;
    }
    #show_password_chk_ID{
        outline:none;
    }
    .reset_pass_btn{
        margin-top:20px;
        background:#1467f7d6 !important;
        color:#fff !important;
    }
	.resetpass_form_class .password_reset_p{
		display:flex;
		justify-content:space-between;
		margin-top:20px;
		margin-bottom:3px;
        color: #646464;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
	}

    .resetpass_form_class .reset_pass_para{
        margin-top:20px;
        margin-bottom:3px;
        color: #646464;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
    }

    .showing_titles_on_mobile{
        display:none;
    }

    .p_on_mobile_showing_titles{
        font-size:18px;
        line-height:25px;
        color: #040404;
        font-weight: 700;
        margin-bottom:10px;
    }
    #signin_form_inner_ID .left_sign_in_or_create_div h4{
		font-weight:400;
        color: #040404;
        font-size: 20px;
    }
    #signin_form_inner_ID .left_sign_in_or_create_div h4 span{
        font-weight:400;
        color: #040404;
        font-size: 18px;
    }
    #signin_form_inner_ID .left_sign_in_or_create_div h4 span:hover{
        text-decoration:underline;
    }
    footer #site_up_arrow{
        display:none;
    }
	@media screen and (max-width: 768px){
		.signin_form_inner_wrapper{
			display:flex !important;
			flex-direction:column !important;
			width:100% !important;
			height:100% !important;
			position:relative;
		}
		#signin_form_inner_ID .signin_form_right_column{
			width:100% !important;
			display:flex !important;
			height:50% !important;
/* 			justify-content:center !important; */
            align-items:center !important;
/* 			height:100vh; */
		}
        #signin_form_inner_ID .signin_form_left_column{
            width:100%;
            display: flex;
            /* justify-content: flex-end; */
            justify-content:space-between;
/*             margin-bottom: 100px; */
            /* padding-right:20px; */
			position:absolute;
			top:0px;
        }
        #signin_form_inner_ID .resetpass_form_class{
            /* width:80%; */
        }
        .showing_titles_on_mobile{
            display:block;
        }
        .signin_form_heading{
            display:none
        }
        .resetpass_form_class .reset_pass_para{
            margin-top:0px;
        }

        .left_company_logo_div {
            background-image: url( <?php echo STOREFRONT_THEME_BASE_URL ?>/assets/images/mobile_C.png);
            width: 30px;
            height: 30px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .Showing_success_msg_wrapper{
            width:80%;
        }
        .Showing_error_msg_wrapper{
            width:80%;
        }
	}
    @media screen and (max-width: 1024px){
		.signin_form_inner_wrapper{
			display:flex !important;
			/* flex-direction:column !important;	 */
			/* width:85% !important; */
			width:100% !important;
		}
        #signin_form_inner_ID .tooltip_custom{
            width: 60px;
            left: -25px;            
        }
        #signin_form_inner_ID .tooltip_custom.tt_hide_password:before{
            content: 'hide';
        }
        #signin_form_inner_ID .tooltip_custom.tt_show_password:before{
            content: 'show';
        }
	}
    @media screen and (min-width: 769px) and (max-width: 1480px){
        #signin_form_inner_ID .signin_form_left_column {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    }
    @media screen and (max-width: 450px){
        #signin_form_inner_ID .resetpass_form_class{
            width:100%;
            padding:20px;
        }
        .Showing_success_msg_wrapper{
            width:100%;
        }
        .Showing_error_msg_wrapper{
            width:100%;
        }
       
    }
#recover_link_div{
    margin:0px;
    position:relative;
}
.resetpass_form_class .form_eye_toggle_class{
        position: absolute;
        bottom: 6px;
        right: 10px;
        font-size: 16px;
        color:#6BC1E3;
        width:20px;
}
.resetpass_form_class .form_eye_toggle_class_slash{
        display:none;
        position: absolute;
        bottom: 6px;
        right: 10px;
        font-size: 16px;
        color:#6BC1E3;
        width:20px;
    }
    .resetpass_form_class .form_eye_toggle_class a,
    .resetpass_form_class .form_eye_toggle_class a:hover,
    .resetpass_form_class .form_eye_toggle_class a:active,
    .resetpass_form_class .form_eye_toggle_class a:visited,
    .resetpass_form_class .form_eye_toggle_class_slash a,
    .resetpass_form_class .form_eye_toggle_class_slash a:hover,
    .resetpass_form_class .form_eye_toggle_class_slash a:active,
    .resetpass_form_class .form_eye_toggle_class_slash a:visited{
        color:#6BC1E3;
    }
    .has-tooltip a:hover ~ .tool_tip{
        display: flex;
    }
    #resetlink_password_id{
        width:100%;
    }
    #resetlink_Confirm_pass_id{
        width:100%;
    }
	#loading_on_changingPass_mail{
        display:none;
        width: 25px;
        height: 25px;
        border:2px solid #727775;
        border-radius: 50%;
        margin:12px auto 0px;
        border-top-color: #fff;
        animation: spinner 1s ease-in-out infinite;
        -webkit-animation: spinner 1s ease-in-out infinite;
        /* top: 0;
        left: 0; */

        }
        @keyframes spinner {
            to {
            -webkit-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spinner {
            to {
            -webkit-transform: rotate(360deg);
            }
        }
	#showing_pass_errorBelow{
        margin:0px;
        display:none;
        color:red;
        font-size:14px;
    }
</style>
<!-- <php wp_login_form();?> -->
<div class='signin_form_outer_wrapper' id='signin_form_outer_wrapper_ID'
    style="background-image: url( <?php echo STOREFRONT_THEME_BASE_URL ?>assets/images/Conduce-background.jpeg_1.jpg)">
    <div class='signin_form_inner_wrapper' id='signin_form_inner_ID'>
        <div class='signin_form_left_column'>
        <div class='showing_titles_on_mobile'>
                <p class='p_on_mobile_showing_titles'>Choose a new password</p>
                <!-- <p class='second_p_mobile_showing_titles'>New? <span id='registration_div_block'>Create an account</span></p> -->
            </div>
            <div class='left_company_logo_div'>
                <!-- <img src='<php echo get_stylesheet_directory_uri().'/assets/images/C_conduce.png'?>'/> -->
            </div>           
        </div>
        <div class='signin_form_right_column'>
        <!-- <php if($error_sign_in){?> -->

            <div class='Showing_error_msg_wrapper'>
                    <span class='error_message'><?php echo $error_sign_in ?></span>
            </div>
            <!-- <php } ?> -->
            <!-- <php if($success_message){?> -->
            <div class='Showing_success_msg_wrapper'>
                    <span class='error_message'><?php echo $success_message ?></span>
            </div>
            <!-- <php }?> -->
            <form action='' method='post' class='resetpass_form_class'>
                <h3 class='signin_form_heading signin_form_pTag'>Choose a new password</h3>

                <div id='recover_link_div'>
                    <p class='reset_pass_para'><span>Password</span></p>
                    <input type='password' name='signin_Password' class='signin_input_class' id='resetlink_password_id' />
                    <span class='form_eye_toggle_class form_eye_toggle_class1 has-tooltip' id='show_pass_choose_newPass_eye'><a><i class="fas fa-eye"></i></a><span class="tooltip_custom tool_tip tt_show_password"></span></span>
                  <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash1 has-tooltip' id='show_pass_choose_newPass_eyeSlash'><a><i class="fas fa-eye-slash"></i></a><span class="tooltip_custom tool_tip tt_hide_password"></span></span> 
                </div>
				<p id='showing_pass_errorBelow'></p>

                <div id='recover_link_div'>
                    <p class='password_reset_p'><span>Confirm password</span></p>
                    <input type='password' name='signin_Password' class='signin_input_class' id='resetlink_Confirm_pass_id' />
                    <span class='form_eye_toggle_class form_eye_toggle_class1 has-tooltip' id='show_pass_choose_confirmPass_eye'><a><i class="fas fa-eye"></i></a><span class="tooltip_custom tool_tip tt_show_password"></span></span>
                  <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash1 has-tooltip' id='show_pass_choose_confirmPass_eyeSlash'><a><i class="fas fa-eye-slash"></i></a><span class="tooltip_custom tool_tip tt_hide_password"></span></span> 
                </div>
				

                <input type='submit' name='signin_submit' class='reset_submit_btn' id='reset_pass_continue' value='Continue'/>
				 <div id="loading_on_changingPass_mail"></div>


			 </form>
        </div>
    </div>
</div>
<script>
    (function($){
        // alert('helllo');
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
        $(document).ready(function(){
            var error = $('#showing_error_ID_hidden').val();
            if(!error == ''){
                var errorShow = error.replace('<strong>Error</strong>:','');
                // var errorShow = error.replace(/<strong>.+<\/strong>/,""+''+"");
                // errorShow = errorShow.replace(':','');

                // errorShow = errorShow.replace('<strong>','');
                // errorShow = errorShow.replace('</strong>','');
                // alert(errorShow);
                // signin_email_id
                if(errorShow.includes('username') || errorShow.includes('Account')){
                    $('#signin_email_id').css('border-color','#E75D31');
                    $('#signin_email_id').addClass('add_placeholder');
                    $('#signin_email_id').val('');
                    $('#signin_email_id').attr('placeholder',`${errorShow}`);
                    return false;
                }
                if(errorShow.includes('password') || errorShow.includes('Password')){
                    $('#signin_password_id').css('border-color','#E75D31');
                    $('#signin_password_id').addClass('add_placeholder');
                    $('#signin_password_id').val('');
                    $('#signin_password_id').attr('placeholder',`${errorShow}`);
                    return false;
                }
            }
        });

        $(document).on('change','#show_password_chk_ID',function(){
            if($(this).is(':checked')){
                $('#resetlink_password_id').attr('type','text');
            }else{
                $('#resetlink_password_id').attr('type','password');
            }

        });

        $(document).on('click','#reset_password_id',function(e){
            e.preventDefault();
            // $('.signin_form_class').css('display','none');
        var id = 1;
        $.ajax({
            url: '<?php echo admin_url("admin-ajax.php"); ?>',
            type:'POST',
            dataType:'json',
            data:{
                action:'reset_password',
                id:id
            },
            success: function(response){
              if(response.success == false){

              }else{
                  $('.signin_form_class').html(response.data);

              }
            }
        });
    });

    $(document).on('click','#reset_pass_continue',function(e){
            e.preventDefault();
            var urlParams = new URLSearchParams(window.location.search);
            var resetToken = urlParams.get('reset_token');
            var resetPass = $('#resetlink_password_id').val();
            var resetPassConfirm = $('#resetlink_Confirm_pass_id').val();
            let resetPassError = 0;
            let resetPassConfirmError = 0;
            let resetPassConfirmMatchError = 0;
            let passPatternError = 0;
            let resetPassLength = 0;
            let resetPassConfirmLength = 0;
            if(resetPass == ''){
                $('#resetlink_password_id').css('border-color','#E75D31');
                $('#resetlink_password_id').css('background-color','#FFF9F8');
                $('#resetlink_password_id').addClass('add_placeholder');
                $('#resetlink_password_id').val('');
                $('#resetlink_password_id').attr('placeholder','Please enter password');
                resetPassError = 1;
            }else if(!(resetPass.length >= 6)){
                $('#resetlink_password_id').css('border-color','#E75D31');
                $('#resetlink_password_id').css('background-color','#FFF9F8');
                $('#resetlink_password_id').addClass('add_placeholder');
                $('#resetlink_password_id').val('');
                $('#resetlink_password_id').attr('placeholder','Password must be 6 characters long');
                resetPassLength = 1;
            }else{
                $('#resetlink_password_id').css('border-color','#efefef');
            }

            // var pass_pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,25}$/;
//             if (! resetPass.match(pass_pattern)) {
//                 $('#resetlink_password_id').css('border-color','red');
// //                 $('#resetlink_password_id').addClass('add_placeholder');
// //                 $('#resetlink_password_id').val('');
// 				// $('#showing_pass_errorBelow').css('display','block');
//                 // $('#showing_pass_errorBelow').html('Password must be 8 characters long, containing at least one special character, one numeric character, one uppercase letter, one lowercase letter');
// //                 $('#resetlink_password_id').attr('placeholder','Password must be 8 characters long, containing at least one special character, one numeric character, one uppercase letter, one lowercase letter');
//                 passPatternError = 1;
//             }else{
// 				$('#showing_pass_errorBelow').css('display','none');
// 				 $('#resetlink_password_id').css('border-color','#efefef');
// 				   passPatternError = 0;
// 			}

            if(resetPassConfirm == ''){
                $('#resetlink_Confirm_pass_id').css('border-color','#E75D31');
                $('#resetlink_Confirm_pass_id').css('background-color','#FFF9F8');
                $('#resetlink_Confirm_pass_id').addClass('add_placeholder');
                $('#resetlink_Confirm_pass_id').val('');
                $('#resetlink_Confirm_pass_id').attr('placeholder','Please confirm password');
                resetPassConfirmError = 1;
            }else if(!(resetPassConfirm.length >= 6 )){
                $('#resetlink_Confirm_pass_id').css('border-color','#E75D31');
                $('#resetlink_Confirm_pass_id').css('background-color','#FFF9F8');
                $('#resetlink_Confirm_pass_id').addClass('add_placeholder');
                $('#resetlink_Confirm_pass_id').val('');
                $('#resetlink_Confirm_pass_id').attr('placeholder','Confrim password must be 6 characters long');
                resetPassConfirmLength = 1;
            }else if(resetPass != resetPassConfirm){
                $('#resetlink_Confirm_pass_id').css('border-color','#E75D31');
                $('#resetlink_Confirm_pass_id').css('background-color','#FFF9F8');
                $('#resetlink_Confirm_pass_id').val('');
                $('#resetlink_Confirm_pass_id').addClass('add_placeholder');
                $('#resetlink_Confirm_pass_id').attr('placeholder','Confirm password does not match');
                resetPassConfirmMatchError = 1;
            }else {
                $('#resetlink_Confirm_pass_id').css('border-color','#efefef');
                resetPassConfirmMatchError = 0;
            }

            if(resetPassError || resetPassLength || resetPassConfirmError || resetPassConfirmMatchError || passPatternError || resetPassConfirmLength){
                return false;
            }

            $.ajax({
                url:'<?php echo admin_url("admin-ajax.php");?>',
                type:'POST',
                dataType:'json',
                data:{
                    action:'reset_password_continue',
                    resetToken:resetToken,
                    resetPass:resetPass
                },
				beforeSend:function(){
                    $('#loading_on_changingPass_mail').css('display','inline-block');
                },
                success: function(response){
                    if(response.success == false){

                    }else{
                    //    alert(response.data);
                       $('.Showing_success_msg_wrapper').css('display','flex');
                       $('.Showing_success_msg_wrapper .error_message').html(response.data);
                    
                    }
                },
				complete:function(){
                    $('#loading_on_changingPass_mail').css('display','none');
                    setTimeout(function() {
                       window.location.replace('https://app.conduce.io/');
                    }, 1000);
                }

            });
    });

    $(document).on('click','#show_pass_choose_newPass_eye',function(){
            $('#resetlink_password_id').attr('type','text');
            $('#show_pass_choose_newPass_eyeSlash').css('display','block');
            $('#show_pass_choose_newPass_eye').css('display','none');
        });

        $(document).on('click','#show_pass_choose_newPass_eyeSlash',function(){
            $('#resetlink_password_id').attr('type','password');
            $('#show_pass_choose_newPass_eye').css('display','block');
            $('#show_pass_choose_newPass_eyeSlash').css('display','none');
        });

        $(document).on('click','#show_pass_choose_confirmPass_eye',function(){
            $('#resetlink_Confirm_pass_id').attr('type','text');
            $('#show_pass_choose_confirmPass_eyeSlash').css('display','block');
            $('#show_pass_choose_confirmPass_eye').css('display','none');
        });

        $(document).on('click','#show_pass_choose_confirmPass_eyeSlash',function(){
            $('#resetlink_Confirm_pass_id').attr('type','password');
            $('#show_pass_choose_confirmPass_eye').css('display','block');
            $('#show_pass_choose_confirmPass_eyeSlash').css('display','none');
        });

        $( "#resetlink_password_id" ).keydown(function() {
            $('#resetlink_password_id').css('border-color','#efefef');
            $('#resetlink_password_id').css('background-color','#fff');
        });

        $( "#resetlink_Confirm_pass_id" ).keydown(function() {
            $('#resetlink_Confirm_pass_id').css('border-color','#efefef');
            $('#resetlink_Confirm_pass_id').css('background-color','#fff');
        });

    })(jQuery);
</script>

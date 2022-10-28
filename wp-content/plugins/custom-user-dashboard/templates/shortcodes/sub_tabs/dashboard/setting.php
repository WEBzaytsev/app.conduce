<?php
$user_id = get_current_user_id();
$user = get_user_by( 'id', $user_id );
$data = get_user_meta($user_id, "dashboard_setting_user");
$data = unserialize($data[0]);
?>
<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 49px;
  height: 26px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 2px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.email_p_relative{
    position:relative;
}
.signin_form_pTag{
    margin:0;
    color: #646464;
    font-size: 14px;
    font-weight: 400;
    line-height:20px;
    margin-bottom:3px;
}
.delete_account_confirmation .signin_padding_extra{
    padding-top:20px;
    display:flex;
    justify-content:space-between;
}
.delete_account_confirmation .signin_input_class{
    box-shadow:none !important;
    width: 100%;
    color: #646464;
    background-color: #FFFFFF;
    transition-duration: 0.1s;
    font-size: 14px;
    font-weight: 400;
    line-height: 40px;
    height: 40px;
    border: 1px solid #D8D8D8;
    padding: 0px 15px 0px 15px;
    border-radius: 5px 5px 5px 5px;
    padding-right: 40px;
}
.signin_input_class:hover{
    outline:none;
    background-color:#fff!important;
    border-color:#8ed1fc!important;
}
.signin_input_class:focus{
    outline:none;
    border-color:#8ed1fc!important;
    background-color:#fff!important;
    /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
}
.heading_setting_wrapper{
    position:relative;
}
.heading_setting_wrapper form{
    position:relative;
    margin-bottom: 0;
}
.form_setting_wrapper{
    width:400px;    
}
.heading_setting_wrapper .input_form_class_span{
        width:100%;
        background:#fff;
        box-shadow:none;
        border:1px solid #efefef;
        border-radius:3px;
        height:35px;
    }
    .heading_setting_wrapper .input_form_class{
        width:100%;
        background:#fff;
        box-shadow:none;
        border:1px solid #efefef;
        border-radius:3px;
        outline:none;
        height:35px;
    }
    .heading_setting_wrapper .input_form_class[disabled],
    .heading_setting_wrapper .input_form_class_span[disabled]{
        background:#F5F5F5;
        border-color:#F5F5F5;
    }
    .heading_setting_wrapper .input_form_class_span:hover{
        border-color:#8ed1fc;
    }
    .heading_setting_wrapper .input_form_class:focus,
    .heading_setting_wrapper .input_form_class:hover{
        background-color:#fff;
        outline:none;
    }
    .heading_setting_wrapper .input_form_class_span:focus{
        background-color:#fff;
        outline:none;
    }
    .heading_setting_wrapper .input_form_class:hover{
        border-color:#8ed1fc;
    }
    .heading_setting_wrapper .label_block{
        display:block;
        font-size:14px;
        line-height: 1;
        margin-bottom: 10px;
        color:#646464;
    }
    .heading_setting_wrapper .span_inside_p_pass {
    display: block;
    margin-bottom: 20px;
    position: relative;
}
.my_account_controls{
    right:40px;
    top:110px;
}
.form_eye_toggle_class{
    position: absolute;
    bottom: 6px;
    right: 10px;
    font-size:16px;
	cursor:pointer;
    color:#8cc8e1;
    width:20px;
}
    .form_eye_toggle_class a,
    .form_eye_toggle_class a:hover,
    .form_eye_toggle_class a:active,
    .form_eye_toggle_class a:visited,
    .form_eye_toggle_class_slash a,
    .form_eye_toggle_class_slash a:hover,
    .form_eye_toggle_class_slash a:active,
    .form_eye_toggle_class_slash a:visited{
        color:#6d6d6d;
    }

    .form_eye_toggle_class_slash{
        display:none;
        position: absolute;
        bottom: 6px;
        right: 10px;
        font-size:16px;
        color:#8cc8e1;
		cursor:pointer;
        width:20px;
    }
    .confirmation_background{
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: #000;
        z-index: 10000;
        opacity: .7;
        display:none;
    }
/* ..................... */
    .setting_heading_main{
        padding: 40px;
        height: calc(100vh - 199px);
        overflow: hidden auto;
        position:relative;
    }
    .setting_heading_main .heading_setting_wrapper h1{
        font-size: 30px;
        margin-bottom: 10px;
        font-weight: 600;
        color: #040404;
    }
    .setting_heading_main .setting_heading {
        font-size: 30px;
        margin-bottom: 5px;
        font-weight: 600;
        color: #040404;
        line-height:1;
        margin-right:40px;
        position:relative;
    }
    .setting_heading_main hr{
        margin: 40px 40px 40px 0;
        background: #D8D8D8;
    }
    .heading_setting_wrapper .select-first-page{
        width: 208px;
        height: 35px;
        background: #F5F5F5;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        color: #646464;
        padding: 10px;
        display: inline-block;
        vertical-align: middle;
        margin-top: 10px;
    }
    .heading_setting_wrapper .setting_subheading{
        font-size: 14px;
        color:#040404;
        font-weight:600;
        line-height:1;
        margin-top:40px;
    }
    .heading_setting_wrapper p {
        font-size: 14px;
        color: #646464;
        margin-bottom: 0;
        line-height:1;
        margin-top: 20px;
    }
    .heading_setting_wrapper p.first{
        font-size: 20px;
    }
    button.my_account_save{
        display:flex;
    }
    .innew_wrapper_settings{
        display:flex;
        width:100%;
        margin-top:20px;
    	/* box-shadow: 0 0 10px 0 #0000001a;*/
    }
    .innew_wrapper_settings:first-child{
        margin-top:0;
    }
    .innew_wrapper_settings .comman_main_sec_setting{
        background-color: #f9f9f9;
        width: 100%;
        border-radius: 7px;    
        min-height:60px;
    }
    .innew_wrapper_settings .comman_main_sec_setting .comman_inner_sett{
        display: flex;
        align-items: center;
        margin-left: 30px;
        margin-top: 5px;
        gap: 32px;
        width: 75%;;
    }
    .innew_wrapper_settings .comman_main_sec_setting .comman_inner_sett h3{
        margin: 0;
        color: black;
        font-weight: 600;
        font-size: 19px;
    }
    .innew_wrapper_settings .comman_main_sec_setting .comman_inner_sett span{
        color:#3396f3;
        font-size:32px;
    }
    .innew_wrapper_settings  .descrption_sett_inner {
        font-size: 16px;
        color: #646464;
        padding-left: 84px;
        margin-top: 7px;
        margin-bottom: 10px;
        width:74%;
    }
    .outer_div_setting{
        display:flex;
        align-items:center;
        width:100%;
        margin-bottom:10px;
    }
    .toggle_button_outer_div{
        width: 22%;
        display: flex;
        justify-content: right;
        padding-right:15px;
    }
    .toggle_button_outer_div select:focus{
        outline:none;
    }
    .toggle_button_outer_div select{
        width: 200px;
        border: 2px solid #3396f3;
        background: white;
        color: #3396f3;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        height: 28px;
        border-radius: 4px;
        transition: all 0.5s;
    }
    .toggle_button_outer_div select:hover{
        background: #3396f3;
        color:white;
    }
    .toggle_button_outer_div select option{
        background:white;
        background: white;
        color: #646464;
    }
    .save_delete_setting_main{
        display:flex;
        align-items:center;
        justify-content:right;
        width:95%;
        margin-top:100px;
        gap:25px;
    }
    button:focus{
        outline:none;
    }
     
    .save_delete_setting_main .save_user_setting{
        background:#3396f3;
        color: white;
        font-size: 16px;
        font-weight: 700;
        padding: 3px 18px;
        border-radius: 7px;
        border:2px solid white;
        transition: all 0.5s;
    }
    .save_delete_setting_main .save_user_setting:hover{
        border:2px solid #3396f3;
        color:#3396f3;
        background:white;
        transition: all 0.5s;
    }
    div.nsl-container .nsl-button-svg-container {        
        padding: 15px;
        border: 1px solid #646464;
        border-radius: 5px;
    }

    div.nsl-container .nsl-button-google[data-skin="light"]{
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 25%;
        height: auto!important;
        border: none;
        background: none!important;
    }

    div.nsl-container .nsl-button-default div.nsl-button-label-container{
        color:#646464;
        padding-left: 10px;
        white-space: normal;
        text-align:left;
    }

    div.nsl-container-block-fullwidth .nsl-container-buttons a,
    div.nsl-container-block .nsl-container-buttons a{
        outline:none;
    }

    div.nsl-container-block .nsl-container-buttons a {
        margin: 0!important;
    }

    div.nsl-container svg{
        height: 40px;
        width: 40px;
    }
    @media (max-width:425px) {
        .innew_wrapper_settings .comman_main_sec_setting .comman_inner_sett{
            margin-left:12px;
        }
        .innew_wrapper_settings .descrption_sett_inner{
            width: 100%;
            padding-left: 14px;
            margin-top: 12px;
        }
        .toggle_button_outer_div{
            width: 100%;
            padding-left: 14px;
            margin-top: 18px;
        }
        .outer_div_setting{
            flex-direction:column-reverse;
        }
        .toggle_button_outer_div select{
            width:100%;
        }
		.setting_heading_main{
			margin-left:10px;
		}
		.setting_heading_main form{
			padding-right:10px;
		}
        .my_account_controls {
            right: 10px;
            top: 120px;
        }
    }
</style>
<div class="setting_heading_main">
        <div class="heading_setting_wrapper">
        <form method="POST">
            <div class="setting_heading">Settings <span class="breadcrumps">DASHBOARD &gt; SETTINGS</span></div>
            <p class="first">Organize the dashboard settings.</p>
            <div class="setting_subheading">Open</div>
            <p>Select which page to open on dashboard start.</p>
            <select class="select-first-page" name="first_page_login" >
                <option value="dashboard"<?php if ( $data["on_start_page"] == "dashboard" ) echo "selected" ?>>Dashboard</option>
                <option value="metadata" <?php if ( $data["on_start_page"] == "metadata" ) echo "selected"; ?> >Metadata</option>
                <option value="analysis" <?php if ( $data["on_start_page"] == "analysis" ) echo "selected" ?>>Analysis</option>
            </select>
        <hr>            
        <div class="setting_subheading">Connected accounts</div>
        <p>Connect external accounts to sign in. If you previously used an external account to create an account, add your email and confirm a password.</p>    
        <div class='user_profile_form_outer_div' id='user_profile_form_outer_div_ID'>
            <div class="my_account_controls">
                <button class="my_account_save save_user_setting" name="setting_dashboard">Save <img src="https://app.conduce.io/wp-content/plugins/custom-user-dashboard/assets/icons/check.svg"></button>                
            </div>
        <div class="form_setting_wrapper">
            <p class="p_first_last_name">                                 
                    <span class="first_last_name_span">
                        <label class="label_block">Email address</label>
                        <input type="email" class="input_form_class_span" value="<?php echo $user->user_email ?>" name="form_first_name" id="firstName_ID_userProfile">
                    </span>
            </p>
            <p>  
                <span class="span_inside_p_pass" id="span_inside_p_pass_ID">
                    <label class="label_block">Current password</label>
                    <input type="password" class="input_form_class formToggleEyeClass formToggleEyeClass1" name="form_current_pass" id="form_current_pass_ID">
                    <span class="form_eye_toggle_class form_eye_toggle_class1" id="1"><i class="fas fa-eye"></i></span>
                    <span class="form_eye_toggle_class_slash form_eye_toggle_class_slash1" id="1"><i class="fas fa-eye-slash"></i></span>
                </span>
            </p>
        </div>
            <?php echo do_shortcode('[nextend_social_login provider="google" link="1" unlink="1"]'); ?>
        </div>
</form>
</div>
</div>
<script>
    (function($){




    })(jQuery)
</script>

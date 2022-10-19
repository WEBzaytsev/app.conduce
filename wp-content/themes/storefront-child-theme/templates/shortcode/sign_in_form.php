<style>
    #signin_form_outer_wrapper_ID input[type="submit"]{
        font-size:17px;
        font-weight:400px !important;
    }
    #registration_form_outer_wrapper_ID input[type="submit"]{
        font-size:17px;
        font-weight:400px !important;
    }

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
    #signin_form_inner_ID .signin_form_class{
        display:flex;
        flex-direction:column;
        width:480px;
        padding:40px 40px 20px 40px;
        border:1px solid #efefef;
        background-color:#fff;
        margin-bottom:0px;
        border-radius:5px;
    }
    #signin_form_inner_ID .signin_form_class .signin_form_pTag{
        margin:0;
        color: #646464;
        font-size: 14px;
        font-weight: 400;
        line-height:20px;
        margin-bottom:3px;
    }
    #signin_form_inner_ID .signin_form_left_column{
        width:50%;
        /* width:100%;
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
    #signin_form_inner_ID .signin_form_class .signin_form_heading{
        /* font-size:26px;
        font-weight:600; */
        margin-bottom:3px;
        color: #040404;
        font-size: 20px;
        font-weight: 700;
        line-height: 30px;
    }
    #signin_form_inner_ID .signin_form_class .reset_form_heading{
        /* font-size: 26px;
        font-weight: 600; */
        color: #040404;
        font-size: 20px;
        font-weight: 700;
        margin:0px;
        line-height: 30px;
        margin-bottom: 5px;

    }
    #signin_form_inner_ID .signin_form_class .reset_submit_btn{
        background-color: #1467f7d6;
        height: 40px;
        margin-top: 30px;
        color: #fff;
        padding: 0;
        border: 1px solid #1467f7d6;
        border-radius: 5px;
        width:100%;
        outline:none;
		font-size: 14px;
        font-weight: 400;
    }
    #signin_form_inner_ID .signin_form_class .signin_form_pHaveAcc{
        margin-bottom:40px;
        color: #646464;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
    }
    #signin_form_inner_ID .signin_form_class .signin_input_class{
        box-shadow:none !important;
        /* background-color:#fff;
        height:35px;
        border:1px solid #efefef;
        border-radius:3px;
        color: #6d6d6d;
        font-size: 16px; */
        color: #646464;
        background-color: #FFFFFF;
        border-color: #D8D8D8;
        transition-duration: 0.1s;
        font-size: 14px;
        font-weight: 400;
        line-height: 40px;
        height: 40px;
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        padding: 0px 15px 0px 15px;
        border-radius: 5px 5px 5px 5px;
        padding-right: 40px;
    }
    #signin_form_inner_ID .signin_form_class .signin_input_class.style_reset{
        border-color:#efefef;
        background-color:#fff;
    }
    #signin_form_inner_ID .signin_form_class .signin_padding_extra{
        padding-top:20px;
        display:flex;
        justify-content:space-between;
    }
    #signin_form_inner_ID .signin_form_class .signin_submit_btn{
        /* background-color:#1467f7d6; */
        background-color:#1D78E7;
        height:40px;
        margin-top:40px;
        color:#fff;
        padding: 5px 0px 5px 0px;
        border:1px solid #1467f7d6;
        border-radius:5px;
        font-size:14px;
        font-weight:400;
        line-height:20px;
	}
	#signin_form_inner_ID .signin_form_class .login_with_goggle_apple_div{
		/* border-top: 1px solid #efefef;
		padding-top: 20px;
		margin-top: 30px; */
	}
    #signin_form_inner_ID .signin_form_class .signin_input_class:hover{
        outline:none;
        background-color:#fff!important;
        border-color:#8ed1fc!important;
    }

    #signin_form_inner_ID .signin_form_class .signin_input_class:focus{
        outline:none;
        border-color:#8ed1fc!important;
        background-color:#fff!important;
        /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
    }
    #signin_form_outer_wrapper_ID .sign_in_show_pass{
        color:#1467f7d6;
    }
    #signin_form_outer_wrapper_ID .Showing_error_msg_wrapper{
        margin:20px 0px;
        width:480px;
        /* border:1px solid #efefef; */
        padding:5px;
        border:1px solid red;
        background-color:#ec0b0b17;
        color:red;
        font-size:18px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    #signin_form_outer_wrapper_ID .add_placeholder::-webkit-input-placeholder {
    color: #E75D31;
    }
    #signin_form_outer_wrapper_ID .Showing_success_msg_wrapper{
        border:1px solid green;
        background-color:#92d1922b;
        color:green;
        font-size:18px;
        margin: 20px 0px;
        width: 450px;
        /* border: 1px solid #efefef; */
        padding: 5px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    #signin_form_outer_wrapper_ID .p_reset_password{
        margin-top:40px;
        margin-bottom:0px;

    }
    #signin_form_outer_wrapper_ID .left_company_logo_div{
        /* width:35%; */
        width:250px;
        background-image:url('/wp-content/uploads/2022/06/C-logo-full-png.png');
        height:55px;
        background-size:100% 100%;
        background-position:center;
        background-repeat:no-repeat;
    }
    #signin_form_outer_wrapper_ID .reset_password_class{
        height: 40px;
        display: flex;
        font-size:14px;
        justify-content: center;
        align-items: center;
        color:#1D78E7;
        font-weight:400;
        background: whitesmoke;
        border-radius: 5px;
        outline:none;
    }

	#signin_form_outer_wrapper_ID .reset_password_class:hover{
		background:#3c7ae624;
		color:#1467f7d6;
	}
    #show_password_chk_ID{
        outline:none;
    }
    #signin_form_outer_wrapper_ID .reset_pass_btn{
        margin-top:20px;
        background:#1467f7d6 !important;
        color:#fff !important;
    }
    #signin_form_outer_wrapper_ID .reset_password_div{

            display:none;
            flex-direction:column;
            width:480px;
            padding:40px;
            border:1px solid #efefef;
            background-color:#fff;
            margin-bottom: 40px;
            padding: 8px;
            background-color: #abe99363;
            color: #646464;
            text-align:center;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            text-align: center;
            border-radius: 5px;
    }
    #signin_form_outer_wrapper_ID .send_recovery_mail_success_msg{
        display:none;
        color:green;
        margin: 0;
        margin-top: 20px;
        justify-content:center;
        align-items:center;
    }
    h2.login_alternative {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #D8D8D8;
        line-height: 0.1em;
        margin: 20px 0 20px;
    }

    h2.login_alternative span {
        font-size: 15px;
        background:#fff;
        padding:0 10px;
        color: #D8D8D8;
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
     .second_p_mobile_showing_titles{
        font-size: 14px;
        line-height: 15px;
        color: #646464;
        font-weight: 400;
    }
    #loading_on_sending_mail{

          /* display: inline-block; */
        display:none;
        position:absolute;
        width: 25px;
        height: 25px;
        /*   border: 2px solid rgb(26 108 97 / 56%); */
            border:2px solid #cdd2d0;
        border-radius: 50%;
            margin-left:10px;
        border-top-color: #fff;
        animation: spinner 1s ease-in-out infinite;
        -webkit-animation: spinner 1s ease-in-out infinite;
        /*   position: fixed; */
        bottom:7px;
        right:47%;

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
    .password_reset_p{
        display:flex;
        /* justify-content:space-between; */
        font-size:14px;
        position:relative;
        /* margin-bottom:20px; */
    }
	
	.sign_in_show_pass{
		display:none;
	}
    
    div.nsl-container .nsl-button-svg-container {        
        padding: 15px;
        border: 1px solid #646464;
        border-radius: 5px;
    }

    div.nsl-container .nsl-button-google[data-skin="light"]{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 65px;
        height: auto!important;
        border: none;
        background: none!important;
    }

    div.nsl-container .nsl-button-default div.nsl-button-label-container{
        color:#646464;
    }

    div.nsl-container-block-fullwidth .nsl-container-buttons a,
    div.nsl-container-block .nsl-container-buttons a{
        outline:none;
    }

    div.nsl-container svg{
        height: 40px;
        width: 40px;
    }

    #signin_form_inner_ID .tooltip_custom,
    #registration_form_inner_ID .tooltip_custom{
        width: 122px;
        padding: 8px 0;
        left: -56px;
        justify-content: center;
    }
    #signin_form_inner_ID .tooltip_custom.tt_hide_password:before,
    #registration_form_inner_ID .tooltip_custom.tt_hide_password:before{
        content: 'Hide password';
    }
    #signin_form_inner_ID .tooltip_custom.tt_show_password:before,
    #registration_form_inner_ID .tooltip_custom.tt_show_password:before{
        content: 'Show password';
    }
	
	@media screen and (max-width: 768px){
/* 		#signin_form_outer_wrapper_ID{
			height:87vh;
		} */
		.signin_form_inner_wrapper{
			display:flex !important;
			flex-direction:column !important;
			width:100% !important;
			height:88vh !important;
			position:relative;
		}
		#signin_form_inner_ID .signin_form_right_column{
			width:100% !important;
			display:flex !important;
			justify-content:center !important;
            align-items:center !important;
		}
        #signin_form_inner_ID .signin_form_class{
            /* width:80%; */
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
         .showing_titles_on_mobile{
            display:block;
        }
        #signin_form_outer_wrapper_ID .left_company_logo_div {
            background-image: url( <?php echo STOREFRONT_THEME_BASE_URL ?>/assets/images/mobile_C.png);
            width: 30px;
            height: 30px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        #signin_form_outer_wrapper_ID .Showing_success_msg_wrapper{
            width:80%;
        }
        #signin_form_outer_wrapper_ID .Showing_error_msg_wrapper{
            width:80%;
        }
        #signin_form_outer_wrapper_ID .signin_form_heading{
            display:none;
        }
        #signin_form_outer_wrapper_ID .signin_form_pHaveAcc{
            display:none;
        }
	}
    @media screen and (min-width: 769px) and (max-width: 1480px){
        #signin_form_inner_ID .signin_form_left_column,
        #registration_form_inner_ID .registration_form_left_column {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
		#signin_form_inner_ID .signin_form_left_column .left_sign_in_or_create_div,
		#registration_form_inner_ID .registration_form_left_column .left_sign_in_or_create_div{
			text-indent: -70px;
		}
    }
    
    @media screen and (max-width: 1024px){
		#signin_form_outer_wrapper_ID .signin_form_inner_wrapper{
			display:flex !important;
			/* flex-direction:column !important;	 */
			/* width:85% !important; */
			width:100% !important;
		}
		/* #registration_form_inner_ID .registration_form_right_column{
			width:100% !important;
			display:flex !important;
			justify-content:center !important;
		} */
        #signin_form_inner_ID .tooltip_custom,
        #registration_form_inner_ID .tooltip_custom{
            width: 60px;
            left: -25px;            
        }
        #signin_form_inner_ID .tooltip_custom.tt_hide_password:before,
        #registration_form_inner_ID .tooltip_custom.tt_hide_password:before{
            content: 'hide';
        }
        #signin_form_inner_ID .tooltip_custom.tt_show_password:before,
        #registration_form_inner_ID .tooltip_custom.tt_show_password:before{
            content: 'show';
        }
	}
    @media screen and (max-width: 450px){
		#signin_form_inner_ID .signin_form_class{
            width:100%;
            padding:20px;
        }
        #signin_form_inner_ID .signin_form_class:not(.pwd-reset){            
            padding-bottom:0;
        }
        #signin_form_outer_wrapper_ID .Showing_success_msg_wrapper{
            width:100%;
        }
        #signin_form_outer_wrapper_ID .Showing_error_msg_wrapper{
            width:100%;
        }
		#signin_form_inner_ID .signin_form_class .signin_form_pHaveAcc {
			margin-bottom:30px;
		}
		#signin_form_inner_ID .signin_form_class .signin_submit_btn {
			margin-top:30px;
		}
		#signin_form_outer_wrapper_ID .p_reset_password {
			margin-top:30px;
		}
/* 		#signin_form_inner_ID .signin_form_class .login_with_goggle_apple_div {
			padding-top: 15px;
    		margin-top: 22px;
		} */
		#signin_form_inner_ID .signin_form_right_column{
			position:absolute;
			top:95px;
		}
        #signin_form_outer_wrapper_ID .reset_password_div{
            width:100%;
        }
    }
    /* /registration page css/ */
    #registration_form_outer_wrapper_ID{
		    background-position: center center;
            background-size:cover;
            padding:20px;
            height: calc(100vh - 60px);
			display:none;
			justify-content:center;
			align-items:center;
    }
    .registration_form_inner_wrapper{
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
    #registration_form_inner_ID .registration_form_class{
        display:flex;
        flex-direction:column;
        width:480px;
        padding:40px 40px 20px 40px;
        border:1px solid #efefef;
        background-color:#fff;
        border-radius:5px;
    }
    #registration_form_inner_ID .registration_form_class .register_form_pTag{
        margin:0;
        color: #646464;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        margin-bottom:3px;
    }
    #registration_form_inner_ID .registration_form_left_column{
        width:50%;
    }
    #registration_form_inner_ID .registration_form_right_column{
        width:50%;
        display:flex;
        /* justify-content:right; */
        flex-direction:column;
        align-items:flex-start;
    }
    #registration_form_inner_ID .registration_form_class .registration_form_heading{
        /* font-size:26px;
        font-weight:600; */
        margin-bottom:3px;
        color: #040404;
        font-size: 20px;
        font-weight: 700;
        line-height: 30px
    }
    #registration_form_inner_ID .registration_form_class .register_form_pHaveAcc{
        margin-bottom:40px;
    }
    #registration_form_inner_ID .registration_form_class .register_input_class{
		box-shadow:none !important;
        background-color:#fff;
        height:40px;
        border:1px solid #D8D8D8;
        padding-right:40px;
        border-radius:5px;
        color: #646464;
        font-size: 14px;
		font-weight: 400;
    }
    #registration_form_inner_ID .registration_form_class .register_padding_extra{
        padding-top:20px;
    }
    #registration_form_inner_ID .registration_form_class .register_submit_btn{
        background-color:#1D78E7;
        height:40px;
        margin-top:40px;
        color:#fff;
        padding:5px 0px 5px 0px;
        border:1px solid #1D78E7;
        border-radius:5px;
        font-size:14px;
        width:100%;
		font-weight: 400;
	}
	#registration_form_inner_ID .registration_form_class .login_with_goggle_apple_div{
		/* border-top: 1px solid #efefef; */
		/* padding-top: 20px; */
		/* margin-top: 30px; */
	}
    #registration_form_inner_ID .registration_form_class .register_input_class:hover{
        outline:none;
        border-color:#8ed1fc;
        border-top:1px solid #8ed1fc;
    }
    #registration_form_inner_ID .registration_form_class .register_input_class:focus{
        outline:none;
        border-color:#8ed1fc!important;
        background-color:#fff!important;
        /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
    }
    #registration_form_outer_wrapper_ID .Showing_error_msg_wrapper{
        margin:20px 0px;
        width:480px;
        /* border:1px solid #efefef; */
        padding:5px;
        border:1px solid red;
        background-color:#ec0b0b17;
        color:red;
        font-size:18px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    #registration_form_outer_wrapper_ID .add_placeholder::-webkit-input-placeholder {
    color: #E75D31;
    }
    #registration_form_outer_wrapper_ID .Showing_success_msg_wrapper{
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
    #registration_form_outer_wrapper_ID .left_company_logo_div{
        /* width:35%; */
        width:250px;
        background-image: url( <?php echo STOREFRONT_THEME_BASE_URL ?>/assets/images/C_conduce.png);
        height:55px;
        background-size:100% 100%;
        background-position:center;
        background-repeat:no-repeat;
    }
	#signin_form_outer_wrapper_ID .left_sign_in_or_create_div h4{
		font-weight:400;
        color: #040404;
        font-size: 14px;
    /* font-weight: 400; */
	}
    #signin_form_outer_wrapper_ID .left_sign_in_or_create_div h4 span{
        font-weight:400;
        color: #040404;
        font-size: 14px;
    }
    #signin_form_outer_wrapper_ID .left_sign_in_or_create_div h4 span:hover{
        text-decoration:underline;
    }
	#registration_form_outer_wrapper_ID .left_sign_in_or_create_div h4{
		font-weight:400;
        color: #040404;
        font-size: 14px;
    }
    #registration_form_outer_wrapper_ID .left_sign_in_or_create_div h4 span{
        font-weight:400;
        color: #040404;
        font-size: 14px;
    }
    #registration_form_outer_wrapper_ID .left_sign_in_or_create_div h4 span:hover{
        text-decoration:underline;
    }
	@media screen and (max-width: 768px){
		#registration_form_outer_wrapper_ID{
			height: calc(100vh - 60px);
		}
		.registration_form_inner_wrapper{
			display:flex !important;
			flex-direction:column !important;
			width:100% !important;
			height:100vh;
			position:relative;
		}
		#registration_form_inner_ID .registration_form_right_column{
			width:100% !important;
			display:flex !important;
			justify-content:center !important;
            align-items:center !important;
		}
        /* #registration_form_inner_ID .registration_form_class{
            width:80%;
        } */
        #registration_form_inner_ID .registration_form_left_column{
            width:100%;
            display: flex;
            justify-content:space-between;
			position:absolute;
			top:0px;
        }
        .registration_form_heading{
            display:none;
        }
        #registration_form_inner_ID .signin_form_pHaveAcc{
            display:none;
        }
        #registration_form_outer_wrapper_ID .left_company_logo_div {
            background-image:url('<?php echo STOREFRONT_THEME_BASE_URL ?>assets/images/mobile_C.png');
            width: 30px;
            height: 30px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        #registration_form_outer_wrapper_ID .Showing_success_msg_wrapper{
            width:80%;
        }
        #registration_form_outer_wrapper_ID .Showing_error_msg_wrapper{
            width:80%;
        }
		.left_sign_in_or_create_div{
			display:none !important;
		}
        #signin_form_inner_ID .signin_form_class .reset_form_heading{
            display:none;
        }
	}
    @media screen and (max-width: 1024px){
		#registration_form_outer_wrapper_ID .registration_form_inner_wrapper{
			display:flex !important;
			/* flex-direction:column !important;	 */
			width:100% !important;
		}
		/* #registration_form_inner_ID .registration_form_right_column{
			width:100% !important;
			display:flex !important;
			justify-content:center !important;
		} */
	}
    @media screen and (max-width: 450px){
        #registration_form_inner_ID .registration_form_class{
            width:100%;
            padding:20px 20px 0 20px;
        }
        #registration_form_outer_wrapper_ID .Showing_success_msg_wrapper{
            width:100%;
        }
        #registration_form_outer_wrapper_ID .Showing_error_msg_wrapper{
            width:100%;
        }
/*         #registration_form_outer_wrapper_ID{
            padding:10px;
        } */
		#registration_form_inner_ID .registration_form_class .register_submit_btn {
			margin-top:30px;
		}
/* 		#registration_form_inner_ID .registration_form_class .login_with_goggle_apple_div{
			margin-top:22px;
			padding-top:15px;
		} */
		#registration_form_inner_ID .registration_form_right_column{
/* 			width:340px !important; */
			position:absolute;
			top:95px;
		}
    }
    #Signin_div_block{

       text-decoration:none;
       color:#1467f7d6;
       outline:none;
       cursor:pointer;
   }
    #Signin_div_block:hover{
        text-decoration:underline #1467f7d6;
    }
    #registration_div_block{

        text-decoration:none;
        color:#1467f7d6;
        outline:none;
        cursor:pointer;
    }
    #registration_div_block:hover{
        text-decoration:underline #1467f7d6;
    }
	
/* 	#signin_form_outer_wrapper_ID .eye_position_relative_ID{
		position:relative;
		
	} */
	
/* 	#signin_form_outer_wrapper_ID .form_eye_toggle_class{
		position:absolute;
		bottom:10px;
		right:20px;
	} */

	#signin_form_outer_wrapper_ID .eye_showing_p{
		margin:0px;
	}
	
	 .email_p_relative{
        margin:0px;
    }
    #signin_password_id{
        width:100%;
    }
    .sign_in_show_pass{
        display:none;
    }
    .form_eye_toggle_class{
        position: absolute;
        bottom: 6px;
        right: 10px;
        font-size:16px;
		cursor:pointer;
        color:#6BC1E3;
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
        color:#6BC1E3;
    }

    .form_eye_toggle_class_slash{
        display:none;
        position: absolute;
        bottom: 6px;
        right: 10px;
        font-size:16px;
        color:#6BC1E3;
		cursor:pointer;
        width:20px;
    }
    .has-tooltip a:hover ~ .tool_tip{
        display: flex;
    }
    .email_p_relative{
        position:relative;
    }
	 #reg_password_id{
        width:100%;
    }
    #reg_confirm_password_id{
        width:100%;
    }
    #return_to_signIn_page{
        margin-top: 30px;
        color: #1467f7d6;
        margin-bottom:0px;
        cursor:pointer;
    }
    #return_to_signIn_page:hover{
        text-decoration:underline;
    }
    #span_reset_arrow_id{
        font-size:10px;
        display: inline-block;
        /* padding-right: 5px; */
    }
	 #showing_pass_errorBelow{
        margin:0px;
        display:none;
        color:red;
        font-size:14px;
    }
    .registration_form_class .have_an_accClass{
        color: #646464;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        margin-bottom:40px;
    }
    .register_form__single_row{
        display:flex;
        justify-content: space-between;
    }
    .register_form__single_row .register_form__col{
        width:47%;
    }
    .register_form__single_row .register_form__col input{
        width:100%;
    }
    .create_div_load_relative{
        position:relative;
        /* background:red; */
    }
    #loading_on_create_account{
        display:none;
        position:absolute;
        width: 25px;
        height: 25px;
        /*   border: 2px solid rgb(26 108 97 / 56%); */
            border:2px solid #edfff8b3;
        border-radius: 50%;
            margin-left:10px;
        border-top-color: #fff;
        animation: spinnerCreate 1s ease-in-out infinite;
        -webkit-animation: spinnerCreate 1s ease-in-out infinite;
        /*   position: fixed; */
        bottom: 8px;
        right: 47%;
    }

    @keyframes spinnerCreate {
        to {
            -webkit-transform: rotate(360deg);
        }
    }

    @-webkit-keyframes spinnerCreate {
        to {
            -webkit-transform: rotate(360deg);
        }
    }
</style>
<!-- <php wp_login_form();?> -->
<div class='signin_form_outer_wrapper' id='signin_form_outer_wrapper_ID'
    style="background-image: url( <?php echo STOREFRONT_THEME_BASE_URL ?>/assets/images/Conduce-background.jpeg_1.jpg)">
    <div class='signin_form_inner_wrapper' id='signin_form_inner_ID'>
        <div class='signin_form_left_column'>
            <div class='showing_titles_on_mobile'>
                <p class='p_on_mobile_showing_titles'>Sign in</p>
                <p class='second_p_mobile_showing_titles'>New? <span id='registration_div_block'>Create an account</span></p>
            </div>
            <div class='left_company_logo_div'
            >
                <!-- <img src='<php echo get_stylesheet_directory_uri().'/assets/images/C_conduce.png'?>'/> -->
            </div>
            <div class='left_sign_in_or_create_div'><h4><span id='Signin_div_block'>Sign in</span> or <span id='registration_div_block'>create an account.</span></h4></div>
        </div>
        <div class='signin_form_right_column'>
            <?php if($error_sign_in){?>

                <div class='Showing_error_msg_wrapper'>
                        <span class='error_message'><?php echo $error_sign_in ?></span>
                </div>
            <?php } ?>
            <?php if($success_message){?>
                <div class='Showing_success_msg_wrapper'>
                        <span class='error_message'><?php echo $success_message ?></span>
                </div>
            <?php }?>
            <div class='reset_password_div'></div>
          
            <form action='' method='post' class='signin_form_class'>
                <p class='signin_form_heading signin_form_pTag'>Sign in</p>
                <!-- <p class='signin_form_pHaveAcc'>New? <a href='<php echo site_url().'/registration/'?>' style='text-decoration:none;color:#1467f7d6;outline:none'>Create an account</a></p> -->
                <p class='signin_form_pHaveAcc'>New? <span id='registration_div_block'>Create an account</span></p>

                <p class='signin_form_pTag'>Email or username</p>
                <input type='text' name='signin_email' class='signin_input_class' id='signin_email_id' value='<?php echo $_POST['signin_email']?>'/>

                <div class='email_p_relative'>
                <p class='signin_form_pTag signin_padding_extra'><span>Password</span><span class='sign_in_show_pass'>show <input type='checkbox' id='show_password_chk_ID'/></span></p>
                <input type='password' name='signin_Password' class='signin_input_class' id='signin_password_id' />
                <span class='form_eye_toggle_class form_eye_toggle_class1 has-tooltip' id='1'><a><i class="fas fa-eye"></i></a><span class="tooltip_custom tool_tip tt_show_password"></span></span>
                  <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash1 has-tooltip' id='1'><a><i class="fas fa-eye-slash"></i></a><span class="tooltip_custom tool_tip tt_hide_password"></span></span> 
                </div>
                

                <input type='submit' name='signin_submit' class='signin_submit_btn' value='Continue' id='signin_submit_btn_ID'/>
                <p class='p_reset_password'><button class='reset_password_class' id='reset_password_id'>Reset password?</button></p>
                <h2 class="login_alternative"><span>or</span></h2>
                <div class='login_with_goggle_apple_div'>
				<?php
                //do_action('oa_social_login');
 	            echo do_shortcode( '[nextend_social_login provider="google"]' );
                //echo do_shortcode( '[nextend_social_login provider="live"]' );
				?>
			    </div>
			 </form>
        </div>
    </div>
</div>
<div class='registration_form_outer_wrapper' id='registration_form_outer_wrapper_ID'
    style="background-image: url( <?php echo STOREFRONT_THEME_BASE_URL ?>/assets/images/Conduce-background.jpeg_1.jpg)">
    <div class='registration_form_inner_wrapper' id='registration_form_inner_ID'>
        <div class='registration_form_left_column'>
        <div class='showing_titles_on_mobile'>
                <p class='p_on_mobile_showing_titles'>Create your Conduce account</p>
                <p class='second_p_mobile_showing_titles'>Have an account? <span id='Signin_div_block'>Sign in</span></p>
            </div>
            <div class='left_company_logo_div'>
                <!-- <img src='<php echo get_stylesheet_directory_uri().'/assets/images/C_conduce.png'?>'/> -->
            </div>
            <div class='left_sign_in_or_create_div'><h4><span id='Signin_div_block'>Sign in</span> or <span id='registration_div_block'>create an account.</span></h4></div>
        </div>
        <div class='registration_form_right_column'>
            <?php if($error_message){?>

                <div class='Showing_error_msg_wrapper'>
                        <span class='error_message'><?php echo $error_message ?></span>
                </div>
            <?php } ?>
            <!-- <php if($success_message){> -->
                <div class='Showing_success_msg_wrapper'>
                        <span class='error_message'></span>
                </div>
            <!-- <php }?> -->
            <form action='' method='post' class='registration_form_class'>
                <h3 class='registration_form_heading register_form_pTag'>Create your Conduce account</h3>
                <!-- <p class='register_form_pHaveAcc'>Have an account? <a href='<?php echo site_url().'/sign-in/'?>' style='text-decoration:none;color:#1467f7d6;outline:none'>Sign in</a></p> -->

                <p class='signin_form_pHaveAcc have_an_accClass'>Have an account? <span id='Signin_div_block'>Sign in</span></p>

                <p class='register_form_pTag'>Email</p>
                <input type='text' name='register_email' class='register_input_class' id='reg_email_id'/>

                <div class="register_form__single_row">
                    <div class="register_form__col">
                        <p class='register_form_pTag register_padding_extra'>Username</p>
                        <input type='text' name='register_userName' class='register_input_class' id='reg_username_id'/>
                    </div>
                    <div class="register_form__col">
                        <p class='register_form_pTag register_padding_extra'>Full name</p>
                        <input type='text' name='register_fullName' class='register_input_class' id='reg_name_id'/>
                    </div>
                </div>

                <div class='email_p_relative'>
                    <p class='register_form_pTag register_padding_extra'>Password</p>
                    <input type='password' name='register_Password' class='register_input_class' id='reg_password_id'/>
                    <span class='form_eye_toggle_class form_eye_toggle_class1 has-tooltip' id='show_pass_registration_eye'><a><i class="fas fa-eye"></i></a><span class="tooltip_custom tool_tip tt_show_password"></span></span>
                  <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash1 has-tooltip' id='show_pass_registration_eyeSlash'><a><i class="fas fa-eye-slash"></i></a><span class="tooltip_custom tool_tip tt_hide_password"></span></span> 
                </div>
				<p id='showing_pass_errorBelow'></p>

                <div class='email_p_relative'>
                    <p class='register_form_pTag register_padding_extra'>Confirm password</p>
                    <input type='password' name='register_Password' class='register_input_class' id='reg_confirm_password_id'/>
                    <span class='form_eye_toggle_class form_eye_toggle_class2 has-tooltip' id='show_confirm_pass_registration_eye'><a><i class="fas fa-eye"></i></a><span class="tooltip_custom tool_tip tt_show_password"></span></span>
                  <span class='form_eye_toggle_class_slash form_eye_toggle_class_slash2 has-tooltip' id='show_confirm_pass_registration_eyeSlash'><a><i class="fas fa-eye-slash"></i></a><span class="tooltip_custom tool_tip tt_hide_password"></span></span> 
                </div>

                <div class='create_div_load_relative'>
                    <input type='submit' name='register_submit' class='register_submit_btn' value='Create'/>
                    <div id="loading_on_create_account"></div>
                </div>
                <h2 class="login_alternative"><span>or</span></h2>
                <div class='login_with_goggle_apple_div'>
				<?php
                // 	do_action('oa_social_login');
 	            echo do_shortcode( '[nextend_social_login provider="google"]' );
                //echo do_shortcode( '[nextend_social_login provider="apple"]' );
				?>
			    </div>
			 </form>
        </div>
    </div>
</div>
<script>
    (function($){
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
                if(errorShow.includes('verfication') || errorShow.includes('verify')){
                        $('.reset_password_div').css('background-color','rgb(255, 249, 248)');
                        $('.reset_password_div').css('color','rgb(231, 93, 49)');
                        $('.reset_password_div').css('border-color','#efefef');
                        $('.reset_password_div').css('display','block');
                        $('.reset_password_div').html(errorShow);
                }else{
                    $('.reset_password_div').css('display','none');
                        $('.reset_password_div').html('');
                }




                if(errorShow.includes('Username') || errorShow.includes('Email')){
                    $('#signin_email_id').css('border-color','#E75D31');
                    $('#signin_email_id').css('background-color','#FFF9F8');
                    $('#signin_email_id').addClass('add_placeholder');
                    $('#signin_email_id').val('');
                    $('#signin_email_id').attr('placeholder', `${errorShow}`);
                    return false;
                }
                // $("#signin_email_id").keyup(function() {
                //     alert('helo');
                //     // $('#signin_email_id').css('border-color','#efefef');
                // });
                if(errorShow.includes('password') || errorShow.includes('Password')){
                    $('#signin_password_id').css('border-color','#E75D31');
                    $('#signin_password_id').css('background-color','#FFF9F8');
                    $('#signin_password_id').addClass('add_placeholder');
                    $('#signin_password_id').val('');
                    $('#signin_password_id').attr('placeholder',`${errorShow}`);
                    return false;
                }
                // $('#signin_password_id').keypress(function(event){
                //     $('#signin_password_id').css('border-color','#efefef');
                // });
            }
        });

        $(document).on('change','#show_password_chk_ID',function(){
            if($(this).is(':checked')){
                $('#signin_password_id').attr('type','text');
            }else{
                $('#signin_password_id').attr('type','password');
            }

        });

        $(document).on('click','#reset_password_id',function(e){
            e.preventDefault();
            $('.reset_password_div').css('display','none');
            $('.reset_password_div').html('');
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
                //   $('.signin_form_class').html(response.data);
                //   $('.signin_form_class').css('display','none');
                //   $('.reset_password_div').css('display','flex');
				  $('.signin_form_class').addClass('pwd-reset')
                  $('.signin_form_class').html(response.data);
                  $('.p_on_mobile_showing_titles').html('Reset password');
                  $('.second_p_mobile_showing_titles').html('');

              }
            }
        });
    });

    $(document).on('click','#sendRecoveryLink',function(e){
            e.preventDefault();
            var resetPassEmail = $('#resetpass_emailRecovery_id').val();
            if(resetPassEmail == ''){
                $('#resetpass_emailRecovery_id').css('border-color','#E75D31');
                $('#resetpass_emailRecovery_id').css('background-color','#FFF9F8');
                $('#resetpass_emailRecovery_id').addClass('add_placeholder');
                $('#resetpass_emailRecovery_id').val('');
                $('#resetpass_emailRecovery_id').attr('placeholder','Please enter your email');
                return false;
            }else{
                $('#resetpass_emailRecovery_id').css('border-color','#efefef');
            }
            if(!isEmail(resetPassEmail)){
                $('#resetpass_emailRecovery_id').css('border-color','#E75D31');
                $('#resetpass_emailRecovery_id').css('background-color','#FFF9F8');
                $('#resetpass_emailRecovery_id').addClass('add_placeholder');
                $('#resetpass_emailRecovery_id').val('');
                $('#resetpass_emailRecovery_id').attr('placeholder','Please enter a valid email');
                return false;
            }else{
                $('#resetpass_emailRecovery_id').css('border-color','#efefef');
            }
            $.ajax({
                url:'<?php echo admin_url("admin-ajax.php");?>',
                type:'POST',
                dataType:'text',
                data:{
                    action:'reset_pass_recovery_mail',
                    resetPassEmail:resetPassEmail
                },
                beforeSend:function(){
                    // $('.send_recovery_mail_success_msg').css('display','');
                    $('.reset_submit_btn').css('color','transparent');
                    $('#loading_on_sending_mail').css('display','inline-block');
                },
                success: function(response){

                    try{
                        var output = JSON.parse(response);
                        var outputData = output.data;
                        var status = output.success;
                       if(status == false){
                        $('.send_recovery_mail_success_msg').css('display','none');
                           $('#resetpass_emailRecovery_id').css('border-color','#E75D31');
                           $('#resetpass_emailRecovery_id').css('background-color','#FFF9F8');
                           $('#resetpass_emailRecovery_id').addClass('add_placeholder');
                           $('#resetpass_emailRecovery_id').val('');
                           $('#resetpass_emailRecovery_id').attr('placeholder','');
                           $('#resetpass_emailRecovery_id').attr('placeholder',`${outputData}`);
                        }
                        if(status == true){
                            // $('.send_recovery_mail_success_msg').css('display','block');
                            // $('.send_recovery_mail_success_msg').html(output.data);
                            
                            $('.reset_password_div').css('background-color','#abe99363');
                            $('.reset_password_div').css('color','#646464');
                            $('.reset_password_div').css('display','block');
                            $('.reset_password_div').html(output.data);
                        }

                    }catch(e){
                        var output = JSON.parse(response);
                        alert(output.data);
                    }
                },
                complete:function(){
                    $('#loading_on_sending_mail').css('display','none');
                    $('.reset_submit_btn').css('color','#fff');
                }
            });
    });

    function getErrorMessage(jqXHR, exception) {
    var msg = '';
    if (jqXHR.status === 0) {
        msg = 'Not connect.\n Verify Network.';
    } else if (jqXHR.status == 404) {
        msg = 'Requested page not found. [404]';
    } else if (jqXHR.status == 500) {
        msg = 'Internal Server Error [500].';
    } else if (exception === 'parsererror') {
        msg = 'Requested JSON parse failed.';
    } else if (exception === 'timeout') {
        msg = 'Time out error.';
    } else if (exception === 'abort') {
        msg = 'Ajax request aborted.';
    } else {
        msg = 'Uncaught Error.\n' + jqXHR.responseText;
    }
    // $('#post').html(msg);
    // alert(msg);
}

    $(document).on('click','#registration_div_block',function(e){
        e.preventDefault();
        // alert("this is span");
        $('#registration_form_outer_wrapper_ID').css('display','flex');
        $('#signin_form_outer_wrapper_ID').css('display','none');
		$('.signin_input_class').css('background-color','#fff');
        $('.signin_input_class').css('border-color','#efefef');
    });

    $(document).on('click','#Signin_div_block',function(e){
        e.preventDefault();
        $('#registration_form_outer_wrapper_ID').css('display','none');
        $('#signin_form_outer_wrapper_ID').css('display','flex');
    });
		
   $(document).on('click','.register_submit_btn',function(e){
        e.preventDefault();
            var email = $('#reg_email_id').val();
            var username = $('#reg_username_id').val();
            var mailformat = new RegExp('^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$');
            var registrationError = $('#Registrationshowing_error_ID_hidden').val();
            var name = $('#reg_name_id').val();
            var pass = $('#reg_password_id').val();
            var confirmPass = $('#reg_confirm_password_id').val();
            let emailerror = 0;
            let usernameerror = 0;
            let nameerror = 0;
	   		let confirmError = 0;
            let confirmMatchError = 0;
            let passPatternError = 0;
            let passError = 0;
            let confirmPassLength = 0;
  
            if ( email == '' ) {
                $('#reg_email_id').css('border-color','#E75D31');
                $('#reg_email_id').css('background-color','#FFF9F8');
                $('#reg_email_id').addClass('add_placeholder');
                $('#reg_email_id').attr('placeholder','The email field is empty');
                emailerror = 1;
            } else if ( !isEmail(email) ) {
                $('#reg_email_id').css('border-color','#E75D31');
                $('#reg_email_id').css('background-color','#FFF9F8');
                $('#reg_email_id').val('');
                $('#reg_email_id').addClass('add_placeholder');
                $('#reg_email_id').attr('placeholder','Please enter a valid email');
                emailerror = 1;
            } else {
                $('#reg_email_id').css('border-color','#efefef');
                emailerror = 0;
            }

            if ( username == '' ) {
                $('#reg_username_id').css('border-color','#E75D31');
                $('#reg_username_id').css('background-color','#FFF9F8');
                $('#reg_username_id').addClass('add_placeholder');
                $('#reg_username_id').attr('placeholder','The username field is empty');
                usernameerror = 1;
            }
            // } else if ( /[^a-zA-Z\s/]/.test(name) ) {
            //     $('#reg_name_id').css('border-color','red');
            //     $('#reg_name_id').val('');
            //     $('#reg_name_id').addClass('add_placeholder');
            //     $('#reg_name_id').attr('placeholder','Only characters are allowed');
            //     nameerror = 1;
            // }
             else {
                $('#reg_username_id').css('border-color','#efefef');
                usernameerror = 0;
            }

            if ( name == '' ) {
                $('#reg_name_id').css('border-color','#E75D31');
                $('#reg_name_id').css('background-color','#FFF9F8');
                $('#reg_name_id').addClass('add_placeholder');
                $('#reg_name_id').attr('placeholder','Please enter name');
                nameerror = 1;
            } 
// 	   else if ( /[^a-zA-Z\s/]/.test(name) ) {
//                 $('#reg_name_id').css('border-color','#E75D31');
//                 $('#reg_name_id').css('background-color','#FFF9F8');
//                 $('#reg_name_id').val('');
//                 $('#reg_name_id').addClass('add_placeholder');
//                 $('#reg_name_id').attr('placeholder','Only characters are allowed');
//                 nameerror = 1;
//             }
	   else {
                $('#reg_name_id').css('border-color','#efefef');
                nameerror = 0;
            }


            var pass_pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,25}$/;
            // if (! pass.match(pass_pattern)) {
            //     passPatternError = 1;
            // }

            if ( pass == '' ) {
                $('#reg_password_id').css('border-color','#E75D31');
                $('#reg_password_id').css('background-color','#FFF9F8');
                $('#reg_password_id').addClass('add_placeholder');
                $('#reg_password_id').attr('placeholder','The password field is empty');
                passError = 1;

            } else if (!(pass.length >= 6)) {
                // else if (! pass.match(pass_pattern )) 
                $('#reg_password_id').css('border-color','#E75D31');
                $('#reg_password_id').css('background-color','#FFF9F8');
				// $('#showing_pass_errorBelow').css('display','block');
                // $('#showing_pass_errorBelow').html('Password must be 8 characters long, containing at least one special character, one numeric character, one uppercase letter, one lowercase letter');
                $('#reg_password_id').val('');
                $('#reg_password_id').addClass('add_placeholder');
                $('#reg_password_id').attr('placeholder','Password must be 6 characters long');
                passPatternError = 1;

            } else {
                $('#reg_password_id').css('border-color','#efefef');
				$('#showing_pass_errorBelow').css('display','none');
                passPatternError = 0;
            }
	   
	   		if ( confirmPass == '' ) {
                $('#reg_confirm_password_id').css('border-color','#E75D31');
                $('#reg_confirm_password_id').css('background-color','#FFF9F8');
                $('#reg_confirm_password_id').val('');
                $('#reg_confirm_password_id').addClass('add_placeholder');
                $('#reg_confirm_password_id').attr('placeholder','Please confirm password');
                confirmError = 1;
            }else if(passPatternError){
                $('#reg_confirm_password_id').css('border-color','#E75D31');
                $('#reg_confirm_password_id').css('background-color','#FFF9F8');
                $('#reg_confirm_password_id').val('');
                $('#reg_confirm_password_id').addClass('add_placeholder');
                $('#reg_confirm_password_id').attr('placeholder','Confirm password must be 6 characters long');
                confirmPassLength = 1;
            }
            else if(pass != confirmPass){
                $('#reg_confirm_password_id').css('border-color','#E75D31');
                $('#reg_confirm_password_id').css('background-color','#FFF9F8');
                $('#reg_confirm_password_id').val('');
                $('#reg_confirm_password_id').addClass('add_placeholder');
                $('#reg_confirm_password_id').attr('placeholder','Confirm password does not match');
                confirmMatchError = 1;
            } else {
                $('#reg_confirm_password_id').css('border-color','#efefef');
                confirmMatchError = 0;
            }
	   	
            if ( passError || passPatternError || confirmPassLength || nameerror || emailerror || usernameerror || confirmError || confirmMatchError ) {
                return;
            }

            $.ajax({
            url: '<?php echo admin_url("admin-ajax.php"); ?>',
            type:'POST',
            dataType:'text',
            data:{
                action:'user_registration',
                email:email,
                username:username,
                name:name,
                pass:pass
            },
            beforeSend:function(){
                    // $('.send_recovery_mail_success_msg').css('display','');
                    $('.register_submit_btn').css('color','transparent');
                    $('#loading_on_create_account').css('display','block');
                },
            success: function(response){
                try{
                        // console.log(response);
                        var output = JSON.parse(response);
                        // var outputData = output.data;
                        var outputDataEmailError = output.data.emailError;
                        var outputDatauserLoginError = output.data.userLoginError;
                        var outputregistrationSuccess = output.data.registrationSuccess;
                        var outputverificationMail = output.data.accountVerification;
                        var status = output.success;
                       if(status == false){
                        //    if(outputData.includes('username')){
                            if(outputDatauserLoginError){
                                $('#reg_username_id').css('border-color','#E75D31');
                                $('#reg_username_id').css('background-color','#FFF9F8');
                                $('#reg_username_id').addClass('add_placeholder');
                                $('#reg_username_id').val('');
                                $('#reg_username_id').attr('placeholder','');
                                $('#reg_username_id').attr('placeholder',`${outputDatauserLoginError}`);
                           }
                        //    if(outputData.includes('email')){
                            if(outputDataEmailError){
                                $('#reg_email_id').css('border-color','#E75D31');
                                $('#reg_email_id').css('background-color','#FFF9F8');
                                $('#reg_email_id').addClass('add_placeholder');
                                $('#reg_email_id').val('');
                                $('#reg_email_id').attr('placeholder','');
                                $('#reg_email_id').attr('placeholder',`${outputDataEmailError}`);
                           }
                        }
                        if(status == true){
                            // if(outputregistrationSuccess){

                            //     $('.Showing_success_msg_wrapper').css('display','flex');
                            //     $('.Showing_success_msg_wrapper .error_message').html(`${outputregistrationSuccess}`);
                            // }
                            // setTimeout(function() {
                                $('#signin_form_outer_wrapper_ID').css('display','flex');
                                $('.Showing_success_msg_wrapper').css('display','none');
                                $('#registration_form_outer_wrapper_ID').css('display','none');
                            // }, 2000);
                            if(outputverificationMail){

                                $('.reset_password_div').css('display','block');
                                $('.reset_password_div').html(`${outputverificationMail}`);
                            }
                            $('#signin_email_id').val(`${email}`);
                            $('#signin_password_id').val(`${pass}`);

                        }

                    }catch(e){
                        var output = JSON.parse(response);
                    }
            },
            complete:function(){
                    $('#loading_on_create_account').css('display','none');
                    $('.register_submit_btn').css('color','#fff');
                }
        });

    });
		
    $(document).on('click','#signin_submit_btn_ID',function(){
        $('.reset_password_div').css('display','none');
        $('.reset_password_div').html('');
       var emailSignIn = $('#signin_email_id').val();
       var PassSignIn = $('#signin_password_id').val();
       let emailEmptyError = 0;
       let passEmptyError = 0;
        if(emailSignIn == ''){
            $('#signin_email_id').css('border-color','#E75D31');
            $('#signin_email_id').css('background-color','#FFF9F8')
            $('#signin_email_id').addClass('add_placeholder');
            // $('#signin_email_id').val('');
            // $('#signin_email_id').attr('placeholder','');
            $('#signin_email_id').attr('placeholder','The email field is empty');
            emailEmptyError = 1;
        }else{
            $('#signin_email_id').css('border-color','#efefef');
        }

        if(PassSignIn == ''){
            $('#signin_password_id').css('border-color','#E75D31');
            $('#signin_password_id').css('background-color','#FFF9F8')
            $('#signin_password_id').addClass('add_placeholder');
            // $('#signin_password_id').val('');
            // $('#signin_password_id').attr('placeholder','');
            $('#signin_password_id').attr('placeholder','The password field is empty');
            passEmptyError = 1;
        }else{
            $('#signin_password_id').css('border-color','#efefef');
        }

        if(emailEmptyError || passEmptyError){
            return false;
        }

    });

		$(document).on('click','.form_eye_toggle_class',function(){

        var id = $(this).attr('id');

        // display:none;
        $('#signin_password_id').attr('type','text');
        $(`.form_eye_toggle_class_slash${id}`).css('display','block');
        $(`.form_eye_toggle_class${id}`).css('display','none');
        });

        $(document).on('click','.form_eye_toggle_class_slash',function(){
        var id= $(this).attr('id');
        $(`.form_eye_toggle_class_slash${id}`).css('display','none');
        $(`.form_eye_toggle_class${id}`).css('display','block');
        // $(`.formToggleEyeClass${id}`).attr('type','password');
        $('#signin_password_id').attr('type','password');

        });
		
		$(document).on('click','#show_pass_registration_eye',function(){
            $('#reg_password_id').attr('type','text');
            $('#show_pass_registration_eyeSlash').css('display','block');
            $('#show_pass_registration_eye').css('display','none');
        });

        $(document).on('click','#show_pass_registration_eyeSlash',function(){
            $('#reg_password_id').attr('type','password');
            $('#show_pass_registration_eye').css('display','block');
            $('#show_pass_registration_eyeSlash').css('display','none');
        });

        $(document).on('click','#show_confirm_pass_registration_eye',function(){
            $('#reg_confirm_password_id').attr('type','text');
            $('#show_confirm_pass_registration_eyeSlash').css('display','block');
            $('#show_confirm_pass_registration_eye').css('display','none');
        });

        $(document).on('click','#show_confirm_pass_registration_eyeSlash',function(){
            $('#reg_confirm_password_id').attr('type','password');
            $('#show_confirm_pass_registration_eye').css('display','block');
            $('#show_confirm_pass_registration_eyeSlash').css('display','none');
        });

        $(document).on('click','#return_to_signIn_page',function(){
            location.reload();
        });


        $( "#reg_email_id" ).keydown(function() {
            $('#reg_email_id').css('border-color','#efefef');
            $('#reg_email_id').css('background-color','#fff');
        });

        $( "#reg_name_id" ).keydown(function() {
            $('#reg_name_id').css('border-color','#efefef');
            $('#reg_name_id').css('background-color','#fff');
        });

        $( "#reg_password_id" ).keydown(function() {
            $('#reg_password_id').css('border-color','#efefef');
            $('#reg_password_id').css('background-color','#fff');
        });

        $( "#reg_confirm_password_id" ).keydown(function() {
            $('#reg_confirm_password_id').css('border-color','#efefef');
            $('#reg_confirm_password_id').css('background-color','#fff');
        });

        $( "#signin_email_id" ).keydown(function() {
            $('#signin_email_id').css('border-color','#efefef');
            $('#signin_email_id').css('background-color','#fff');
        });

        $( "#signin_password_id" ).keydown(function() {
            $('#signin_password_id').css('border-color','#efefef');
            $('#signin_password_id').css('background-color','#fff');
        });

        $( "#reg_username_id" ).keydown(function() {
            $('#reg_username_id').css('border-color','#efefef');
            $('#reg_username_id').css('background-color','#fff');
        });

        $(document).on('keydown','#resetpass_emailRecovery_id', function(){
            $('#resetpass_emailRecovery_id').css('border-color','#efefef');
            $('#resetpass_emailRecovery_id').css('background-color','#fff');
        });
       

    })(jQuery);
</script>

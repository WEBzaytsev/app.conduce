<div class="custom_my_account_main_div">
    <?php require_once(UD_PLUGIN_PATH . "templates/shortcodes/header.php"); ?>
    <div class="outer_wrapper_myaccount">
        <div class="content_left_myaccount_main">
			<span class="arrow-icon-menu mobile_icon_pc_view"><span class="tooltip_custom tool_tip">Toggle sidebar</span></span>
            <div class="dashboard_wrapper">
                <div class="menu_navigation_mobile"></div>
                <h5 class="content_left_heading_myaccount dashboard_head">Dashboard</h5>
                <ul class="left_content_link">
                    <li data-current="home" class="my_account_content_link tooltip_trigger home-icon <?php if( ( $_GET['tab'] == 'dashboard' || $_GET['tab'] == '' ) && $_GET['current'] == '') echo'active_li_menu active_li_menu' ?>">
                        <a href="<?php echo get_account_subpageUrl('dashboard', '') ?>">Home<span class="tooltip_custom tool_tip tooltip_side">Dashboard home</span></a>
                    </li>
                    <li class="my-account-icon tooltip_trigger <?php if( $_GET['current'] == 'my_account' ) echo'active_li_menu' ?>" data-current="my_account" class="my_account_content_link">
                        <a  href="<?php echo get_account_subpageUrl('dashboard', 'my_account') ?>">My account<span class="tooltip_custom tool_tip tooltip_side">Manage your account</span></a>
                    </li>
                    <li class="settings-icon tooltip_trigger <?php if( $_GET['current'] == 'Settings' ) echo'active_li_menu' ?>" data-current="settings" class="my_account_content_link">
                        <a href="<?php echo get_account_subpageUrl('dashboard', 'Settings') ?>">Settings<span class="tooltip_custom tool_tip tooltip_side">Organise the dashboard settings</span></a>
                    </li>
                </ul>
                <h5 class="content_left_heading_myaccount">Tools</h5>
                <ul class="left_content_link">
                    <li data-current="home" class="my_account_content_link meta-icon <?php if( $_GET['current'] == 'metadata' ) echo'active_li_menu' ?>">
                    <a href="<?php echo get_account_pageUrl('metadata') ?>">Metadata</a>
                    </li>
                    <li class="analysis-icon <?php if( $_GET['current'] == 'analysis' ) echo'active_li_menu' ?>" data-current="my_account" class="my_account_content_link">
                        <a  href="<?php echo get_account_pageUrl('analysis') ?>">Analysis</a>
                    </li>
                    <li class="shop-icon <?php if( $_GET['current'] == 'pay' ) echo'active_li_menu' ?>" data-current="settings" class="my_account_content_link">
                        <a href="<?php echo get_account_pageUrl('shop') ?>">Shop</a>
                    </li>
                </ul>          
            </div>
            <!-- FIXED LAYOUT START -->
            <div class="lower_content_myaccount">
                <h5 class="content_left_footer_myaccount tooltip_trigger">Guide<span class="tooltip_custom tool_tip tooltip_side">Learn how to use the dashboard</span></h5>
            </div>
            <!-- FIXED LAYOUT END -->
        </div>

        <!-- CONTENT START -->
        <?php require_once(UD_PLUGIN_PATH . "templates/shortcodes/content.php"); ?>
        <!-- CONTENT END -->
    </div>
</div>
<script>
    jQuery(document).ready(function($){
        $.ajaxSetup({cache:false});
        $(".left_content_link li").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            pageurl = $(this).find('a').attr('href');
            if(pageurl!=window.location) {
                window.history.pushState({path: pageurl}, '', pageurl);
            }
            $("#content_right_myaccount_main_ID").load(pageurl + ' #content_right_myaccount_main_inner_ID');
            $(".left_content_link li").removeClass('active_li_menu active_nav')
            $(this).addClass('active_li_menu active_nav');
            return false;
        });
        $(document).on("click",".delete_user_button",function(e) {
            e.preventDefault()
            $('.confirmation_background').fadeIn(300);
        })

        $(document).on("click",".delete_account_button",function(e) {
            var accountPassword = $('#account_password_id').val();
            if(accountPassword == ''){
                $('#account_password_id').css('border-color','#E75D31');
                $('#account_password_id').css('background-color','#FFF9F8');
                $('#account_password_id').addClass('add_placeholder');
                $('#account_password_id').val('');
                return false;
            }else{
                $('#account_password_id').css('border-color','#efefef');
                $('form').submit();
            }            
        })
        $(document).on('click','.form_eye_toggle_class',function(e){   
            e.stopPropagation();  
            var id = $(this).attr('id');
            $('#account_password_id').attr('type','text');
            $(`.form_eye_toggle_class_slash${id}`).css('display','block');
            $(`.form_eye_toggle_class${id}`).css('display','none');
        });

        $(document).on('click','.form_eye_toggle_class_slash',function(e){
            e.stopPropagation();
            var id= $(this).attr('id');
            $(`.form_eye_toggle_class_slash${id}`).css('display','none');
            $(`.form_eye_toggle_class${id}`).css('display','block');
            $('#account_password_id').attr('type','password');
        });

        $(document).on('click', '.confirmation_background', function(e){           
            $('.confirmation_background').fadeOut(300);
        });

            $(document).on('click','button.my_account_edit',function(e){
            e.preventDefault();
            $(this).hide();
            $(this).closest('form').find('input').prop('disabled', false);
            $('button.my_account_save, button.my_account_cancel').css('display','flex');
        });

        $(document).on('click','button.my_account_cancel',function(e){
            e.preventDefault();
            $(this).hide();
            $('button.my_account_save').hide();
            $(this).closest('form').find('input').prop('disabled', true);
            $('button.my_account_edit').css('display','flex');
        });

        $(document).on('click', '.delete_account_confirmation', function(e){            
            if ($(e.target).parent().hasClass('has-tooltip')){
                return;
            }
            e.stopPropagation();     
        });
    });
</script>

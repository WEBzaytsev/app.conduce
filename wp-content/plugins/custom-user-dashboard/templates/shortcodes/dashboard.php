<div class="custom_my_account_main_div">
    <?php require_once(UD_PLUGIN_PATH . "templates/shortcodes/header.php"); ?>
    <div class="outer_wrapper_myaccount">
        <div class="content_left_myaccount_main">
            <!--            <span class="arrow-icon-menu mobile_icon_pc_view">-->
            <!--                <span class="tooltip_custom tool_tip">Toggle sidebar</span>-->
            <!--            </span>-->
            <div class="dashboard_wrapper">
                <div class="menu_navigation_mobile"></div>
                <!--                <h5 class="content_left_heading_myaccount dashboard_head">Dashboard</h5>-->
                <?php get_template_part(
                    '/templates/common/toggle-sidebar-button',
                    null,
                    array(
                        'text' => 'Dashboard'
                    )
                ); ?>
                <ul class="left_content_link">
                    <li data-current="home"
                        class="my_account_content_link tooltip_trigger home-icon <?php if (($_GET['tab'] == 'dashboard' || $_GET['tab'] == '') && $_GET['current'] == '') echo 'active_li_menu active_nav'; ?>">
                        <a href="<?php echo get_account_subpageUrl('dashboard', '') ?>">
                            Home
                            <span class="tooltip_custom tool_tip tooltip_side">Dashboard home</span>
                        </a>
                    </li>
                    <li class="my_account_content_link my-account-icon tooltip_trigger <?php if ($_GET['current'] == 'my_account') echo 'active_li_menu active_nav'; ?>"
                        data-current="my_account">
                        <a href="<?php echo get_account_subpageUrl('dashboard', 'my_account') ?>">
                            My account
                            <span class="tooltip_custom tool_tip tooltip_side">Manage your account</span>
                        </a>
                    </li>
                    <li class="my_account_content_link settings-icon tooltip_trigger <?php if ($_GET['current'] == 'Settings') echo 'active_li_menu active_nav'; ?>"
                        data-current="settings">
                        <a href="<?php echo get_account_subpageUrl('dashboard', 'Settings') ?>">
                            Settings
                            <span class="tooltip_custom tool_tip tooltip_side">Organise the dashboard settings</span>
                        </a>
                    </li>
                </ul>
                <h5 class="content_left_heading_myaccount">Tools</h5>
                <ul class="left_content_link">
                    <li data-current="home"
                        class="my_account_content_link meta-icon tooltip_trigger <?php if ($_GET['current'] == 'tab') echo 'active_li_menu active_nav' ?>">
                        <a href="<?php echo get_account_pageUrl('metadata') ?>">
                            Metadata
                            <span class="tooltip_custom tool_tip tooltip_side">Metadata</span>
                        </a>
                    </li>
                    <li class="my_account_content_link analysis-icon tooltip_trigger <?php if ($_GET['tab'] == 'analysis') echo 'active_li_menu active_nav' ?>"
                        data-current="my_account">
                        <a href="<?php echo get_account_pageUrl('analysis') ?>">
                            Analysis
                            <span class="tooltip_custom tool_tip tooltip_side">Analysis</span>
                        </a>
                    </li>
                    <li class="my_account_content_link shop-icon tooltip_trigger <?php if ($_GET['tab'] == 'shop') echo 'active_li_menu active_nav' ?>"
                        data-current="settings">
                        <a href="<?php echo get_account_pageUrl('shop') ?>">
                            Shop
                            <span class="tooltip_custom tool_tip tooltip_side">Shop</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- FIXED LAYOUT START -->
            <?php get_template_part('/templates/common/guide-button'); ?>
            <!-- FIXED LAYOUT END -->
        </div>

        <!-- CONTENT START -->
        <?php require_once(UD_PLUGIN_PATH . "templates/shortcodes/content.php"); ?>
        <!-- CONTENT END -->
    </div>
</div>
<script>
    jQuery(document).ready(function ($) {

        $(document).on("click", ".delete_account_button", function (e) {
            const elem = $('#account_password_id');

            const accountPassword = elem.val();
            if (accountPassword === '') {
                elem.css('border-color', '#E75D31');
                elem.css('background-color', '#FFF9F8');
                elem.addClass('add_placeholder');
                elem.val('');
                return false;
            } else {
                elem.css('border-color', '#efefef');
                $('form').submit();
            }
        })

        $(document).on('click', '.form_eye_toggle_class', function (e) {
            e.stopPropagation();
            const id = $(this).attr('id');
            $('#account_password_id').attr('type', 'text');
            $(`.form_eye_toggle_class_slash${id}`).css('display', 'block');
            $(`.form_eye_toggle_class${id}`).css('display', 'none');
        });

        $(document).on('click', '.form_eye_toggle_class_slash', function (e) {
            e.stopPropagation();
            const id = $(this).attr('id');
            $(`.form_eye_toggle_class_slash${id}`).css('display', 'none');
            $(`.form_eye_toggle_class${id}`).css('display', 'block');
            $('#account_password_id').attr('type', 'password');
        });

        $(document).on('click', 'button.my_account_edit', function (e) {
            e.preventDefault();
            $(this).hide();
            $(this).closest('form').find('input').prop('disabled', false);
            $(this).closest('form').find('select').prop('disabled', false);
            $('button.my_account_save, button.my_account_cancel').css('display', 'flex');
        });

        $(document).on('click', 'button.my_account_cancel', function (e) {
            e.preventDefault();
            $(this).hide();
            $('button.my_account_save').hide();
            $(this).closest('form').find('input').prop('disabled', true);
            $(this).closest('form').find('select').prop('disabled', true);
            $('button.my_account_edit').css('display', 'flex');
        });

        $(document).on('click', '.delete_account_confirmation', function (e) {
            if ($(e.target).parent().hasClass('has-tooltip')) {
                return;
            }
            e.stopPropagation();
        });
    });
</script>

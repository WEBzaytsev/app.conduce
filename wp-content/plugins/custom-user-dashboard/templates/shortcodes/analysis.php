<div class="custom_my_account_main_div">
    <?php require_once(UD_PLUGIN_PATH . "templates/shortcodes/header.php"); ?>
    <div class="outer_wrapper_myaccount">
        <div class="content_left_myaccount_main">
            <div class="dashboard_wrapper">
                <div class="menu_navigation_mobile"></div>
                <?php get_template_part(
                    '/templates/common/toggle-sidebar-button',
                    null,
                    array(
                        'text' => 'Analysis'
                    )
                ); ?>
                <ul class="left_content_link">
                    <li data-current="control"
                        class="my_account_content_link coming-icon tooltip_trigger <?php if (($_GET['tab'] == 'analysis' || $_GET['tab'] == '') && $_GET['current'] == '') echo 'active_li_menu active_nav' ?>">
                        <a href="<?php echo get_account_pageUrl('analysis') ?>">
                            Coming Soon
                            <span class="tooltip_custom tool_tip tooltip_side">Coming Soon</span>
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

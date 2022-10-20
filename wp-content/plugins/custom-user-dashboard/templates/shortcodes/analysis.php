<div class="custom_my_account_main_div">
    <?php require_once(UD_PLUGIN_PATH . "templates/shortcodes/header.php"); ?>
    <div class="outer_wrapper_myaccount">
        <div class="content_left_myaccount_main">
			<span class="arrow-icon-menu mobile_icon_pc_view"></span>
            <div class="dashboard_wrapper">
                <div class="menu_navigation_mobile"></div>
                <h5 class="content_left_heading_myaccount dashboard_head">Analysis</h5>
                <ul class="left_content_link">
                    <li data-current="control" class="my_account_content_link coming-icon <?php if( ( $_GET['tab'] == 'analysis' || $_GET['tab'] == '' ) && $_GET['current'] == '') echo'active_li_menu active_li_menu' ?>">
                        <a href="<?php echo get_account_pageUrl('analysis') ?>">Coming Soon</a>
                    </li>
                </ul>
            </div>
            <!-- FIXED LAYOUT START -->
            <div class="lower_content_myaccount">
				<h5 class="content_left_footer_myaccount">Guide<i class="fa fa-solid fa-expand"></i></h5>
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
            pageurl = $(this).find('a').attr('href');
            if(pageurl!=window.location) {
                window.history.pushState({path: pageurl}, '', pageurl);
            }
            $("#content_right_myaccount_main_ID").load(pageurl + ' #content_right_myaccount_main_inner_ID');
            $(".left_content_link li").removeClass('active_li_menu active_nav')
            $(this).addClass('active_li_menu active_nav');
            return false;
        });
    });
</script>

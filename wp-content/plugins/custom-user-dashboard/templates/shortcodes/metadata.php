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
                        'text' => 'Metadata'
                    )
                ); ?>
                <ul class="left_content_link">
                    <li data-current="control"
                        class="my_account_content_link control-icon <?php if (($_GET['tab'] == 'metadata' || $_GET['tab'] == '') && $_GET['current'] == '') echo 'active_li_menu active_li_menu' ?>">
                        <a href="<?php echo get_account_pageUrl('metadata') ?>">Control</a>
                    </li>
                    <li class="my_account_content_link run-icon <?php if ($_GET['current'] == 'run') echo 'active_li_menu' ?>"
                        data-current="run">
                        <a href="<?php echo get_account_subpageUrl('metadata', 'run') ?>">Run</a>
                    </li>
                    <li class="my_account_content_link files-icon <?php if ($_GET['current'] == 'files') echo 'active_li_menu' ?>"
                        data-current="files">
                        <a href="<?php echo get_account_subpageUrl('metadata', 'files') ?>">Files</a>
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
        $.ajaxSetup({cache: false});
        $(".left_content_link li").click(function (e) {
            const pageUrl = $(this).find('a').attr('href');
            if (pageUrl !== window.location) {
                window.history.pushState({path: pageUrl}, '', pageUrl);
            }
            $("#content_right_myaccount_main_ID").load(pageUrl + ' #content_right_myaccount_main_inner_ID');
            $(".left_content_link li").removeClass('active_li_menu active_nav')
            $(this).addClass('active_li_menu active_nav');
            return false;
        });
        $(document).on("click", ".load-content", function (e) {
            e.preventDefault();
            e.stopPropagation();
            const pageUrl = $(this).attr('href');
            $("#content_right_myaccount_main_ID").load(pageUrl + ' #primary');

            return false;
        });

        // preventing page from redirecting
        $(document).on("dragover", "html", function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(".upload_file_container span").text("Drag here");
        });

        $(document).on("drop", "html", function (e) {
            e.preventDefault();
            e.stopPropagation();
        });

        // Drag enter
        $(document).on("dragenter", ".upload_file_container", function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(".upload_file_container span").text("Drop");
        });

        // Drag over
        $(document).on("dragover", ".upload_file_container", function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(".upload_file_container span").text("Drop");
        });

        // Drop
        $(document).on("drop", ".upload_file_container", function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(".upload_file_container span").html("Click <span>Select<\/span> to continue");
            $(".upload_file_container input[type='file']").prop("files", e.originalEvent.dataTransfer.files);
        });

        // file selected
        $(document).on("change", "#file", function (e) {
            $(".upload_file_container span").html("Click <span>Select<\/span> to continue");
            //$(".upload_file_container input[type='file']").prop("files", $('#file')[0].files[0]);
        });
    });
</script>

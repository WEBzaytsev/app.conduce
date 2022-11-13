<style>

    .site {
        display: flex;
        flex-direction: column;
        height: 100%;
        overflow: hidden;
    }

    .site > .site-content {
        /*flex-grow: 1;*/
    }

    a {
        color: #646464;
        text-decoration: none;
    }

    a:focus {
        outline: none !important;
    }

    ul li a {
        text-decoration: none !important;
    }

    .entry-header,
    .storefront-breadcrumb {
        display: none;
    }

    #content .col-full {
        max-width: 100%;
        padding: 0;
        margin: 0;
    }

    #primary {
        background: #efefef;
    }

    .custom_my_account_main_div {
        margin: auto;
        /* padding-left:15px;
        padding-right:15px; */
    }

    .custom_my_account_main_div .my_account_sec_1 {
        background: #f8f6f4;
        padding: 10px 20px 10px 20px;
        display: flex;
        justify-content: space-between;
    }

    .custom_my_account_main_div .my_account_sec_1 .menu_button_mobile {
        display: none;
        color: #646464;
        font-weight: 500;
        font-size: 22px;
        cursor: pointer;
        position: relative;
    }

    .custom_my_account_main_div .my_account_sec_1 .my_account_sec1_left {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .custom_my_account_main_div .my_account_sec_1 .my_account_sec1_left .logo_mt_account img {
        width: 110px;
    }

    .custom_my_account_main_div .my_account_sec_1 .right_sec_data_sec_1 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        position: relative;
    }

    .custom_my_account_main_div .my_account_sec_1 .right_sec_data_sec_1 span {
        color: #646464;
        font-weight: 500;
        font-size: 22px;
        cursor: pointer;
        padding: 16px;
        border-radius: 4px;
        position: relative;
    }

    .custom_my_account_main_div .my_account_sec_1 .right_sec_data_sec_1 span:before {
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .custom_my_account_main_div .my_account_sec_1 .right_sec_data_sec_1 span:hover {
        background: white;
        box-shadow: 0 0 5px 1px #e2e2e2;
    }

    .my_account_sec_2 {
        background: #f8f6f4;
        display: block;
        padding: 0 20px;
        margin-top: 10px;
    }

    .my_account_sec_2 ul {
        display: flex;
        gap: 10px;
        list-style-type: none;
        margin: 0;
    }

    .custom_my_account_main_div .my_account_sec_2_right ul {
        display: flex;
        gap: 10px;
        list-style-type: none;
        margin: 0;
    }

    .my_account_sec_2 li a {
        color: #646464;
        font-weight: 500;
        font-size: 14px;
        cursor: pointer;
    }

    /*.my_account_sec_2 li a:hover {*/
    /*    color: #2871e3;*/
    /*    text-decoration: underline !important;*/
    /*}*/

    .custom_my_account_main_div .outer_wrapper_myaccount {
        display: flex;
        background: white;
        position: relative;
        justify-content: right;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main {
        width: 230px;
        /* box-shadow: 1px 0px 2px 1px #e2e2e2; */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-right: 1px solid #d8d8d8;
        position: relative;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_right_myaccount_main {
        width: calc(100% - 230px);
        transition: all 0.5s;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .content_left_heading_myaccount {
        padding-left: 20px;
        margin-top: 20px;
        color: #646464;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 20px;
        line-height: 1;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .content_left_heading_myaccount.dashboard_head {
        margin-top: 29px;
        margin-bottom: 21px;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main.side_icon_menu .content_left_heading_myaccount.dashboard_head,
    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main.side_icon_menu .content_left_heading_myaccount {
        display: none;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main.side_icon_menu {
        width: auto;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main.side_icon_menu ul li a {
        text-indent: -9999px;
        outline: none;
        display: none;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul {
        display: flex;
        flex-direction: column;
        gap: 10px;
        list-style-type: none;
        margin: 0;
        padding: 0 20px 0 20px;
        margin-bottom: 0;
        cursor: pointer;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main.side_icon_menu ul:last-child {
        margin-top: 10px;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li a {
        color: #646464;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 5px;
        padding-left: 10px;
        font-size: 14px;
        line-height: 1;
    }

    .content_left_myaccount_main.side_icon_menu .arrow-icon-menu {
        left: 20px;
        width: 35px;
        background: #fff;
    }

    .content_left_myaccount_main.side_icon_menu .arrow-icon-menu:hover {
        background: #F8F6F4;
    }

    .content_left_myaccount_main.side_icon_menu .dashboard_wrapper {
        margin-top: 21px;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li {
        padding: 9px 10px 10px 10px;
        position: relative;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li:before {
        width: 15px;
        content: '';
        height: 15px;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center center;
        font-size: 15px;
        line-height: 1;
        font-family: "dashicons"
    }

    button.my_account_cancel,
    button.my_account_edit,
    button.my_account_save {
        background: #2EAADC;
        color: #fff;
        border-radius: 5px;
        display: flex;
        align-items: center;
        font-size: 14px;
        font-weight: 500;
        padding: 10px;
        line-height: 1;
    }

    button.my_account_save {
        background: #1ECA3B;
        color: #FFFFFF;
        display: none;
    }

    button.my_account_cancel {
        background: #FFF9F8;
        color: #E75D31;
        display: none;
    }

    .my_account_controls {
        display: flex;
        align-items: center;
        position: absolute;
        right: 55px;
        top: 145px;
        gap: 10px;
    }

    button.my_account_edit img,
    button.my_account_save img {
        margin-left: 10px;
    }

    .arrow-icon-menu {
        background: #F8F6F4;
        padding: 10px;
        border-radius: 5px;
    }

    .arrow-icon-menu:before {
        content: '';
        height: 15px;
        width: 15px;
        display: block;
        background-size: contain;
        background-image: url('<?php echo UD_ASSETS_PATH . 'icons/arrow.svg'; ?>');
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.home-icon:before {
        content: "\f102";
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.my-account-icon:before {
        content: "\f110";
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.settings-icon:before {
        content: "\f108";
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.meta-icon:before {
        content: "\f464";
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.control-icon:before {
        content: "\f522";
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.run-icon:before {
        content: "\f464";
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.files-icon:before {
        content: "\f110";
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.coming-icon:before {
        content: "\f110";
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.analysis-icon:before {
        background-image: url('<?php echo UD_ASSETS_PATH . 'icons/graph.svg'; ?>');
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li.shop-icon:before {
        background-image: url('<?php echo UD_ASSETS_PATH . 'icons/shop.svg'; ?>');
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li {
        display: flex;
        align-items: center;
    }

    .active_nav {
        /* border:1px solid #7ec9e7 !important;
        background:#EAF9FF !important; */
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li:hover {
        background: #F8F6F4;
        border-radius: 5px;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .content_left_footer_myaccount {
        background: #eaf9ff;
        margin-top: auto;
        margin-left: 20px;
        margin-right: 20px;
        font-size: 14px;
        color: #646464;
        padding: 9px 10px 10px 10px;
        font-weight: 400;
        position: relative;
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: transparent;
        transition: 0.4s;
        border-radius: 5px;
        margin-bottom: 17px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        line-height: 1;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main.side_icon_menu .content_left_footer_myaccount {
        text-indent: 1px;
        width: 35px;
        overflow: hidden;
        letter-spacing: 20px;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .content_left_footer_myaccount i {
        color: #646464;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .content_left_footer_myaccount:before {
    }

    .menu_navigation_mobile {
        display: none;
    }

    form.woocommerce-cart-form {
        padding: 40px;
    }

    #primary {
        background: none !important;
    }

    @media (max-width: 768px) {
        .custom_my_account_main_div {
            margin-top: 0;
        }

        .main_header .inner_wrapper_header .menu_button_mobile {
            display: flex !important;
        }

        .custom_my_account_main_div .my_account_sec_1 .menu_button_mobile {
            display: block;
        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: -800px;
            z-index: 1;
            /*         display:none; */
        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_right_myaccount_main {
            width: 100%;
        }

        .my_account_sec_2 {
            display: none;
        }

        .left_sec_header .outer_wrapper_myaccount .content_left_myaccount_main .content_left_heading_myaccount {
            margin-top: 15px;
            margin-bottom: 7px;
            color: #646464;
            font-size: 14px;
            font-weight: 400;
        }

        .menu_navigation_mobile {
            display: block;
        }

        .custom_my_account_main_div .outer_wrapper_myaccount {
            box-shadow: none;
        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main {
            background: #fff;
            box-shadow: none;
        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul {
            padding: 0 10px 0 10px;
        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .content_left_heading_myaccount.dashboard_head {
            margin-top: 20px;
        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .content_left_footer_myaccount {
            margin-left: 10px;
            margin-right: 10px;
        }

        ul.my_account_menu {
            border-top: 1px solid #c4bdbd;
            padding-top: 12px !important;
            border-bottom: 1px solid #c4bdbd;
        }

        ul.my_account_menu li {
            color: #646464;
            font-weight: 500;
            font-size: 16px;
        }

        .mobile_logo_my_account {
            display: block !important;
        }

        .display_logo_my_account {
            display: none !important;
        }

        .content_right_myaccount_main .up_arrow {
            left: 80% !important;
        }

        .lower_content_myaccount {
            top: 92%;
            width: 100% !important;
        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .mobile_menu {
            display: flex !important;
        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .content_left_heading_myaccount {
            padding-left: 10px;
        }

        .mobile_icon_pc_view {
            display: none;
        }

        #file_page_id {
            padding: 0 15px;
        }

        #file_page_id .main_div_show_files .common_divs span {
            top: -25px !important;
        }
    }

    @media (max-width: 1024px) {
        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li:hover {

        }

        .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li {

        }
    }

    @keyframes slide_right {
        0% {
            transform: translate(-89%, 0);
        }
        100% {
            transform: translate(0%, 0);
        }
    }

    .active_menu {
        /* color:black  !important;
        font-weight:700 !important; */
    }

    .custom_my_account_main_div .my_account_drop_down_menu {
        position: absolute;
        z-index: 11;
        width: 165px;
        left: -75px;
        top: 42px;
        background: #f8f6f4;
        box-shadow: 0 0 2px 0px #a29090;
        display: none;
    }

    .custom_my_account_main_div .my_account_drop_down_menu p {
        margin: 5px 15px 5px 15px;
        padding: 0px 15px;
        text-align: left;
        font-size: 14px;
        font-weight: 400;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        padding-right: 0;
    }

    .custom_my_account_main_div .my_account_drop_down_menu .arrow {
        content: "";
        top: -7px;
        left: 83%;
        position: absolute;
        width: 12px;
        height: 12px;
        border-top: 1px solid #bcb1b1;
        border-left: 1px solid #bcb1b1;
        background: #f8f6f4;
        transform: rotateZ(45deg);
    }

    .custom_my_account_main_div .my_account_drop_down_menu p span {
        font-size: 16px !important;
    }

    .my_account_drop_down_menu p:hover {
        background: white;
    }

    .custom_my_account_main_div .my_account_drop_down_menu hr {
        width: 90%;
        margin: auto;
    }

    .custom_my_account_main_div .mobile_logo_my_account {
        display: none;
    }

    .content_right_myaccount_main {
        position: relative;
    }

    .content_right_myaccount_main .up_arrow {
        position: absolute;
        left: 93%;
        top: 92%;
        background: #f8f6f4;
        padding: 20px;
        font-size: 30px;
        color: #646464;
        cursor: pointer;
    }

    .content_right_myaccount_main .up_arrow:before {
        transform: translate(-50%, -50%);
        position: absolute;
    }

    #template_page_id {
        padding: 0 40px;
        /*  position: relative; */
    }

    .custom_loader_myaccount {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #00000096;
        left: 0;
        top: 0;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }

    .custom_loader_myaccount span {
        width: 50px;
        height: 50px;
        border-top: 3px solid white;
        border-left: 3px solid white;
        border-radius: 50%;
        animation: rotate linear infinite 1s;
    }

    @keyframes rotatez {
        0% {
            transform: rotateZ(0deg)
        }
        100% {
            transform: rotateZ(360deg)
        }
    }

    .my_account_content_link a {
        display: block;
        width: 100%;
    }

    .progress_main {
        width: 100%;
        display: flex;
        align-items: center;
    }

    .progress_main .progress_bar {
        text-align: center;
        font-weight: 700;
        color: white;
        background-color: #404040de;
        margin: 12px 8px;
        width: 90%;
        border-radius: 2px;
        padding: 4px 0px;
        cursor: progress;
    }

    .pending_main {
        width: 100%;
        display: flex;
        align-items: center;
    }

    .pending_main .pending_bar {
        text-align: center;
        font-weight: 700;
        color: white;
        background-color: #2f6b6cde;
        margin: 12px 8px;
        width: 90%;
        border-radius: 2px;
        padding: 4px 0px;
        cursor: wait;
    }

    .lower_content_myaccount {
        position: fixed;
        top: 90%;
        width: 230px;
    }

    .file_data_refresh_loader {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #00000096;
        left: 0;
        top: 0;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }

    .file_data_refresh_loader span {
        width: 50px;
        height: 50px;
        border-top: 3px solid white;
        border-left: 3px solid white;
        border-radius: 50%;
        animation: rotate linear infinite 1s;
    }

    @keyframes rotate {
        0% {
            transform: rotateZ(0deg);
        }
        100% {
            transform: rotateZ(360deg);
        }
    }

    #file_page_id .main_div_show_files .common_divs {
        position: relative;
    }

    #file_page_id .main_div_show_files .common_divs span {
        position: absolute;
        right: 8px;
        font-size: 25px;
        color: #625b65;
        top: -15px;
        cursor: pointer;
    }

    .custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .mobile_menu {
        display: none;
        padding: 6px 0 9px;
        border-top: 1px solid lightgrey;
        margin-top: 12px;
    }

    #file_page_id .main_div_show_files .file_daownload_main::-webkit-scrollbar {
        width: 10px;
    }

    #file_page_id .main_div_show_files .file_daownload_main::-webkit-scrollbar-track {
        background: #eaf9ff;
    }

    #file_page_id .main_div_show_files .file_daownload_main::-webkit-scrollbar-thumb {
        background: #b2c8d0;
    }

    #file_page_id .main_div_show_files .file_daownload_main::-webkit-scrollbar-thumb:hover {
        background: #416470;
    }

    .page-id-9 {
        overflow: hidden;
    }

    #dashboard_home_outer_wrapper_ID {
        height: calc(100vh - 168px);
        overflow: hidden auto;
        overflow: -moz-scrollbars-none
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    #dashboard_home_outer_wrapper_ID::-webkit-scrollbar {
        display: none;
    }

    @media (max-width: 767px) {
        #dashboard_home_outer_wrapper_ID {
            height: calc(100vh - 102px);
        }
    }

    #file_page_id .main_div_show_files .file_daownload_main::-webkit-scrollbar-thumb:hover {
        background: #416470;
    }

    .my_account_link {
        position: relative;
    }

    ul.my_account_menu .my_account_link {
        border-radius: 15px;
        transition: all 0.3s;
        background: none;
    }

    ul.my_account_menu .my_account_link a {
        display: block;
        width: fit-content;
        padding: 0 10px;
        color: #040404 !important;
    }

    .my_account_link_last.active_menu_item .my_account_link,
    ul.my_account_menu .my_account_link.active_menu,
    ul.my_account_menu .my_account_link.con_active_menu {
        background: #2EAADC;
        color: #fff;
        cursor: pointer;
    }

    .my_account_link_last.active_menu_item .my_account_link a,
    ul.my_account_menu .my_account_link.active_menu a,
    ul.my_account_menu .my_account_link.con_active_menu a {
        color: #fff !important;
    }

    ul.my_account_menu .my_account_link:not(.active_menu):hover {
        background: #FFF;
    }

    ul.my_account_menu li.my_account_link a,
    ul.my_account_menu li.my_account_link a:focus,
    ul.my_account_menu li.my_account_link a:hover,
    ul.my_account_menu li.my_account_link a:visited {
        text-decoration: none !important;
        transition: all 0.3s;
    }

    ul.my_account_menu li.my_account_link:not(.active_menu):hover a {
        text-decoration: none !important;
    }

    .my_account_link a:hover ~ .tool_tip,
    .arrow-icon-menu:hover .tool_tip,
    .tooltip_trigger:hover .tool_tip,
    .tooltip_trigger a:hover .tool_tip {
        display: flex;
    }

    .my_account_link_last {
        display: flex;
        width: 100%;
        justify-content: end;
    }

    .active_menu_item {
        color: #2871e3 !important;
    }

    .active_li_menu {
        background: #EAF9FF !important;
        border-radius: 5px;
    }
</style>
<script>
    (function ($) {

        var url_string = window.location.href;
        var url = new URL(url_string);
        var tab = url.searchParams.get("tab") ?? 'dashboard';
        $('.my_account_link').removeClass('active_menu');
        $(`[data-tab=${tab}]`).addClass('active_menu');

        var navigation = $(".custom_my_account_main_div .my_account_sec_2").html();
        var navigation2 = $(".my_account_sec_2_right ul").html()
        $(".custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .menu_navigation_mobile").append(navigation)
        $(".custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main .menu_navigation_mobile ul").append(navigation2)

        $(".custom_my_account_main_div .my_account_sec_2 li").click(function () {
            $(".custom_my_account_main_div .my_account_sec_2 li").removeClass("active_menu")
            $(this).addClass("active_menu");
        });

        $(".custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li").click(function () {
            $(".custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main ul li").removeClass("active_nav")
            $(this).addClass("active_nav");
        });

//     $(".main_header .nav_menu_right span").click(function(){
//         $(this).next().slideToggle("fast")
//         $(this).next().css("display","flex")
//     })
    })(jQuery)
</script>

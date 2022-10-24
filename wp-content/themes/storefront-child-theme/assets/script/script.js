(function ($) {

    $(document).ready(function () {
        $('#shopInvoices').DataTable({
            dom: 'lpftrip',
        });

        $.ajaxSetup({cache: false});

        $(".left_content_link li a").click(function (e) {
            e.preventDefault();
            const pageUrl = $(this).attr('href');

            if (pageUrl === window.location.href) {
                return;
            }

            $("#content_right_myaccount_main_ID")
                .load(
                    pageUrl + ' #content_right_myaccount_main_inner_ID',
                    () => afterContentUpdate($(this))
                );
            return false;
        });

        scrollUp();
    })

    function switchMenu(currentItem) {
        $(".left_content_link li.active_li_menu.active_nav").removeClass('active_li_menu active_nav')
        currentItem.addClass('active_li_menu active_nav');
    }

    function afterContentUpdate(currentItem) {
        const url = currentItem.attr('href');

        scrollUp();
        switchMenu(currentItem.parent());

        window.history.pushState({ path: url }, document.title, url);
    }

    function scrollUp() {
        const content = document.getElementById('dashboard_home_outer_wrapper_ID') ||
            document.getElementById('user_profile_outer_wrapper_ID') ||
            document.querySelector('.setting_heading_main');
        const scrollUpButton = $('#site_up_arrow');

        if (content) {
            scrollUpButton.css('display', 'block');
            if (content.clientHeight < content.scrollHeight) {

                $(document).on('click', '#site_up_arrow', function () {
                    $(content).animate(
                        {
                            scrollTop: 0,
                        },
                        300,
                        'swing'
                    );
                })
            } else {
                scrollUpButton.css('display', 'none');
            }
        }
    }

})(jQuery);
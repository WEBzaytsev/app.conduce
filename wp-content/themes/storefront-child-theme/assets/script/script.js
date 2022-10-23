(function ($) {

    $(document).ready(function () {
        /*$('#shopInvoices').DataTable({
            dom: 'lpftrip',
        });*/

        $.ajaxSetup({cache: false});
        $(".left_content_link li a").click(function (e) {
            const pageUrl = $(this).attr('href');
            if (pageUrl !== window.location) {
                window.history.pushState({path: pageUrl}, '', pageUrl);
            }
            $("#content_right_myaccount_main_ID").load(
                pageUrl + ' #content_right_myaccount_main_inner_ID',
                scrollUp);

            return false;
        });

        scrollUp();
    })


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
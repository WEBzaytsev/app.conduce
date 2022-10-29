(function ($) {

    $(document).ready(function () {
        $('#shopInvoices').DataTable({
            dom: 'lpftrip',
        });

        $.ajaxSetup({cache: false});

        $(".left_content_link li a").click((e) => e.preventDefault());

        $(".left_content_link li").click(function (e) {
            const link = $(this).find('a');
            const pageUrl = link.attr('href');
            console.log(pageUrl)

            if (pageUrl === window.location.href) {
                return;
            }

            $("#content_right_myaccount_main_ID")
                .load(
                    pageUrl + ' #content_right_myaccount_main_inner_ID',
                    () => afterContentUpdate($(this), pageUrl)
                );
            return false;
        });

        $(document).on("click", ".delete_user_button", function (e) {
            e.preventDefault()
            $('.confirmation_background').fadeIn(300);
        })

        $(document).on('click', '.confirmation_background', function (e) {
            $('.confirmation_background').fadeOut(300);
        });

        $(document).on('click', '.delete_account_confirmation .close', function (e) {
            $('.confirmation_background').fadeOut(300);
        });

        $('.delete_account_confirmation-input-eye').on('click', function (e) {
            const passInput = $(this).parent().find('input');
            const isShow = $(this).hasClass('show');

            if (passInput.attr('type') === 'password' && isShow) {
                passInput.attr('type', 'text');
                $(this).removeClass('active');
                $('.delete_account_confirmation-input-eye.hide').addClass('active');
            }

            if (passInput.attr('type') === 'text' && !isShow) {
                passInput.attr('type', 'password');
                $(this).removeClass('active');
                $('.delete_account_confirmation-input-eye.show').addClass('active');
            }
        })

        scrollUp();
    })

    function switchMenu(currentItem) {
        $(".left_content_link li.active_li_menu").removeClass('active_li_menu active_nav')
        currentItem.addClass('active_li_menu active_nav');
    }

    function afterContentUpdate(currentItem, url) {
        scrollUp();
        switchMenu(currentItem);

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
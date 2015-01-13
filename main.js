$(function () {

    console.log('ALL RIGHT!');


    window.add_css_to_gf_forms = function () {

        $("[data-forms] textarea, [data-forms] input[type='text'], [data-forms] input[type='email'], [data-forms] select").addClass('form-control');
        $(".gform_button").removeClass('form-control').addClass('btn btn-primary btn-lg');

    };

    window.add_paralax_while_scrolling = function () {
        //var wh = $(window).offsetTop;
        //$(".banner-bg").css('background-position', 'center '+(wh-(wh *.95))+'px');
    };


    window.add_css_to_gf_forms();

    $(window).resize(window.make_home_bg_equal_to_window);
    $(window).scroll(window.add_paralax_while_scrolling);

    $(".navbar-nav.onepager a, [data-anchor] a").click(function (e) {


        $(this).parent().addClass('active').siblings().removeClass('active');

        var target = $(this).prop("hash") ? $(this).prop("hash") : "#home";

        if (target.indexOf("modal") >= 0) {

            $(target).modal('show');

        } else {

            $('html, body').stop().animate({
                scrollTop: $(target).offset().top
            }, 800);

        }

        console.log(target);
        e.preventDefault();
    });


    $(".owl").owlCarousel({

        autoPlay: 2000,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        navigation: false,
        rewindNav: false


    });


});
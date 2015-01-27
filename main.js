$(function () {


    console.log('ALL RIGHT!');

    var show_menu = false;

    new WOW().init();

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
                scrollTop: $(target).offset().top - $(".navbar-hide .navbar-header").height()
            }, 800);

            $("#bs-navbar-collapse-1").collapse('hide');

        }

        console.log(target);
        e.preventDefault();
    });


    $(window).scroll(function(){

        var offset = $("#partners").offset().top - $(".navbar-hide").height()-10;
        var window_top = $(this).scrollTop();

        if(window_top >= offset && ! show_menu){
            show_menu = true;
            $(".navbar-hide").slideDown(500);
            $(".navbar-hide").removeClass('gone');
        }else if(window_top < offset){
            show_menu = false;
            $(".navbar-hide").slideUp(400);
        }

    });


});

function slide(selector){
    $(selector).owlCarousel({

        autoPlay: Math.floor(Math.random() * (5000 - 2000 + 1)) + 2000,
        slideSpeed: 300,
        paginationSpeed: 300,
        singleItem: true,
        pagination: false,
        navigation: false


    });
}
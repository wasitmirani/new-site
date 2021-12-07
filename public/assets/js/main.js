/*-----------------------------------------------------------------------------------
    Template Name: Landio
    Description: Multipurpose Landing Page HTML Template
    Author: WebTend
    Author URI: https://webtend.net/
    Version: 1.0

    Note: This is Main Js file
-----------------------------------------------------------------------------------
    Js INDEX
    ===================
    01. Custom Mobile Menu
    02. Header Right Canvas Menu
    03. Testimonial Slider V1
    04. Testimonial Slider V2
    05. Testimonial Slider V3
    06. Testimonial Slider V4
    07. Testimonial Slider V5
    08. Hero V6 Slider
    09. Brands Slider
    10. Brands Slider V2
    11. Bootstrap Tooltip
    12. Counter Up JS
    13. WOW JS
    14. Magnific Popup
    15. Scroll To Top
    16. Preloader
    17. Sticky Menu
    18. Nice Select

-----------------------------------------------------------------------------------*/





(function($) {
    'use strict';

    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    let birthday = "Nov 1, 2021 00:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function() {

            let now = new Date().getTime(),
                distance = countDown - now;

            document.getElementById("days").innerText = Math.floor(distance / (day)),
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            if (distance < 0) {
                let headline = document.getElementById("headline"),
                    countdown = document.getElementById("countdown"),
                    content = document.getElementById("content");

                headline.innerText = "It's my birthday!";
                countdown.style.display = "none";
                content.style.display = "block";

                clearInterval(x);
            }
            //seconds
        }, 0)
        /*---------------------------------------------*
         * Custom Mobile Menu
        ---------------------------------------------*/
    function mainMenu() {
        // Variables
        var var_window = $(window),
            navContainer = $('.header-navigation'),
            navbarToggler = $('.navbar-toggler'),
            navMenu = $('.nav-menu'),
            navMenuLi = $('.nav-menu ul li ul li'),
            closeIcon = $('.navbar-close');
        // navbar toggler
        navbarToggler.on('click', function() {
            navbarToggler.toggleClass('active');
            navMenu.toggleClass('menu-on');
        });
        // close icon
        closeIcon.on('click', function() {
            navMenu.removeClass('menu-on');
            navbarToggler.removeClass('active');
        });
        // adds toggle button to li items that have children
        navMenu.find('li a').each(function() {
            if ($(this).next().length > 0) {
                $(this).parent('li').append('<span class="dd-trigger"><i class="fas fa-angle-down"></i></span>');
            }
        });
        // expands the dropdown menu on each click
        navMenu.find('li .dd-trigger').on('click', function(e) {
            e.preventDefault();
            $(this).parent('li').children('ul').stop(true, true).slideToggle(350);
            $(this).parent('li').toggleClass('active');
        });
        // check browser width in real-time
        function breakpointCheck() {
            var windoWidth = window.innerWidth;
            if (windoWidth <= 1199) {
                navContainer.addClass('breakpoint-on');
            } else {
                navContainer.removeClass('breakpoint-on');
            }
        }
        breakpointCheck();
        var_window.on('resize', function() {
            breakpointCheck();
        });
    };
    mainMenu();

    /*---------------------------------------------*
     * Header Right Canvas Menu
    ---------------------------------------------*/

    $('.app-active').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: true,
        centerMode: true,
        centerPadding: 0,
        autoplay: true,
        responsive: [{
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    var panelIcon = $('.off-menu'),
        panelClose = $('.panel-close'),
        panelWrap = $('.offcanvas-panel');
    panelIcon.on('click', function(e) {
        panelWrap.toggleClass('panel-on');
        e.preventDefault();
    });
    panelClose.on('click', function(e) {
        panelWrap.removeClass('panel-on');
        e.preventDefault();
    });

    $(".nav-toggle, .cross-wrap").on('click', function(e) {
        $(".menu-toggle").toggleClass("active");
    });
    $(".menu-overlay").on('click', function(e) {
        e.preventDefault();
        $(".nav-menu").toggleClass("menu-on");
        $(".menu-toggle").toggleClass("active");
        $(".navbar-toggler").toggleClass("active");
    });
    $(".menu-overlay").on('click', function(e) {
        e.preventDefault();
        $(".offcanvas-panel").toggleClass("panel-on");
    });

    /*---------------------------------------------*
     * Testimonial Slider V1
    ---------------------------------------------*/
    $('#testimonial-slider-v1').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: false,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    /*---------------------------------------------*
     * Testimonial Slider V2
    ---------------------------------------------*/
    $('#testimonial-slider-v2').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: false,
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    /*---------------------------------------------*
     * Testimonial Slider V3
    ---------------------------------------------*/
    $('#testimonial-slider-v3').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    /*---------------------------------------------*
     * Testimonial Slider V4
    ---------------------------------------------*/
    $('#testimonial-slider-v4').slick({
        dots: false,
        arrows: true,
        infinite: false,
        autoplay: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: false,
        prevArrow: '<span class="prev"><i class="fas fa-arrow-left"></i></span>',
        nextArrow: '<span class="next"><i class="fas fa-arrow-right"></i></span>',
        responsive: [{
            breakpoint: 575,
            settings: {
                arrows: false,
                autoplay: true,
                dots: true
            }
        }]
    });

    /*---------------------------------------------*
     * Testimonial Slider V5
    ---------------------------------------------*/
    $('#testimonial-slider-v5').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: false,
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }]
    });

    /*---------------------------------------------*
     * Hero V6 Slider
    ---------------------------------------------*/
    function heroSliderTwo() {
        var BasicSlider = $('.hero-slider');
        BasicSlider.on('init', function(e, slick) {
            var $firstAnimatingElements = $('.hero-slide-single:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.hero-slide-single[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        BasicSlider.slick({
            dots: true,
            arrows: true,
            infinite: false,
            autoplay: true,
            speed: 1000,
            fade: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<span class="prev"><i class="fas fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fas fa-angle-right"></i></span>',
            responsive: [{
                breakpoint: 575,
                settings: {
                    arrows: false
                }
            }]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function() {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function() {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    heroSliderTwo();

    /*---------------------------------------------*
     * Brands Slider
    ---------------------------------------------*/
    $('#brands-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 385,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    //Faq
    $('.faq-wrapper .faq-title').on('click', function(e) {
        var element = $(this).parent('.faq-item');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('.faq-content').removeClass('open');
            element.find('.faq-content').slideUp(300, "swing");
        } else {
            element.addClass('open');
            element.children('.faq-content').slideDown(300, "swing");
            element.siblings('.faq-item').children('.faq-content').slideUp(300, "swing");
            element.siblings('.faq-item').removeClass('open');
            element.siblings('.faq-item').find('.faq-title').removeClass('open');
            element.siblings('.faq-item').find('.faq-content').slideUp(300, "swing");
        }
    });
    //Faq
    $('.faq--area .faq-title').on('click', function(e) {
        var element = $(this).parent('.faq--item');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('.faq-content').removeClass('open');
            element.find('.faq-content').slideUp(300, "swing");
        } else {
            element.addClass('open');
            element.children('.faq-content').slideDown(300, "swing");
            element.siblings('.faq--item').children('.faq-content').slideUp(300, "swing");
            element.siblings('.faq--item').removeClass('open');
            element.siblings('.faq--item').find('.faq-title').removeClass('open');
            element.siblings('.faq--item').find('.faq-content').slideUp(300, "swing");
        }
    });
    /*---------------------------------------------*
     * Brands Slider V2
    ---------------------------------------------*/
    $('#brands-slider-v2').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 1000,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 385,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 300,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    /*---------------------------------------------*
     * Bootstrap Tooltip
    ---------------------------------------------*/
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

    /*---------------------------------------------*
     * Counter Up JS
    ---------------------------------------------*/
    $('.counter').counterUp({
        delay: 80,
        time: 4000
    });

    /*---------------------------------------------*
     * WOW JS
    ---------------------------------------------*/
    new WOW().init();

    /*---------------------------------------------*
     * Magnific Popup
    ---------------------------------------------*/
    $('.play-video').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'iframe',
        });
    });

    $('.gallery-img-popup').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        gallery: {
            enabled: true
        },
    });

    /*---------------------------------------------*
     * Scroll To Top
    ---------------------------------------------*/
    // Scroll Target Animation
    if ($(".scroll-to-target").length) {
        $(".scroll-to-target").on("click", function() {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate({
                    scrollTop: $(target).offset().top,
                },
                1000
            );
            return false;
        });
    }
    // Window Scroll Event
    $(window).on("scroll", function() {
        if ($(".scroll-to-top").length) {
            var strickyScrollPos = 100;
            if ($(window).scrollTop() > strickyScrollPos) {
                $(".scroll-to-top").fadeIn(500);
            } else if ($(this).scrollTop() <= strickyScrollPos) {
                $(".scroll-to-top").fadeOut(500);
            }
        }
    });

    /*---------------------------------------------*
     * Preloader
    ---------------------------------------------*/
    $(window).on('load', function() {
        $('.preloader').delay(100).fadeOut(100);
    })

    /*---------------------------------------------*
     * Sticky Menu
    ---------------------------------------------*/
    $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 110) {
            $(".header-navigation").removeClass("sticky");
        } else {
            $(".header-navigation").addClass("sticky");
        }
    });

    /*---------------------------------------------*
     * Nice Select
    ---------------------------------------------*/
    $('select').niceSelect();

})(jQuery);
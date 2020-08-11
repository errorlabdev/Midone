import slick from 'slick-carousel'

(function($) { 
    "use strict";
        
    // Slick Carousel
    if ($('.slick-carousel').length) {
        $('.slick-carousel').each(function() {
            $(this).slick({
                arrows: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000
            })
        })
    }

    if ($('.slick-navigator').length) {
        $('.slick-navigator').each(function() {
            $(this).on('click', function() {
                if ($(this).data('target') == 'prev') {
                    $('#' + $(this).data('carousel')).slick('slickPrev')
                } else {
                    $('#' + $(this).data('carousel')).slick('slickNext')
                }
            })
        })
    }

    // Slider widget page
    if ($('.single-item').length) {
        $('.single-item').slick()
    }

    if ($('.multiple-items').length) {
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        })
    }

    if ($('.responsive-mode').length) {
        $('.responsive-mode').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        })
    }

    if ($('.center-mode').length) {
        $('.center-mode').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 1,
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }]
        })
    }

    if ($('.fade-mode').length) {
        $('.fade-mode').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        })
    }
})($)
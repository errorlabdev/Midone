(function($) { 
    "use strict";
        
    // Mobile Menu
    $('#mobile-menu-toggler').on('click', function() {
        if ($('.mobile-menu').find('ul').first().is(':visible')) {
            $('.mobile-menu').find('ul').first().slideUp()
        } else {
            $('.mobile-menu').find('ul').first().slideDown()
        }
    })

    $('.mobile-menu').find('.menu').on('click', function() {
        if ($(this).parent().find('ul').length) {
            if ($(this).parent().find('ul').first().is(':visible')) {
                $(this).find('.menu__sub-icon').removeClass('transform rotate-180')
                $(this).parent().find('ul').first().slideUp({
                    done: function() {
                        $(this).removeClass('menu__sub-open')
                    }
                })
            } else {
                $(this).find('.menu__sub-icon').addClass('transform rotate-180')
                $(this).parent().find('ul').first().slideDown({
                    done: function() {
                        $(this).addClass('menu__sub-open')
                    }
                })
            }
        }
    })
})($)
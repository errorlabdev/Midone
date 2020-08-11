(function($) { 
    "use strict";
        
    // Side Menu
    $('.side-menu').on('click', function() {
        if ($(this).parent().find('ul').length) {
            if ($(this).parent().find('ul').first().is(':visible')) {
                $(this).find('.side-menu__sub-icon').removeClass('transform rotate-180')
                $(this).removeClass('side-menu--open')
                $(this).parent().find('ul').first().slideUp({
                    done: function() {
                        $(this).removeClass('side-menu__sub-open')
                    }
                })
            } else {
                $(this).find('.side-menu__sub-icon').addClass('transform rotate-180')
                $(this).addClass('side-menu--open')
                $(this).parent().find('ul').first().slideDown({
                    done: function() {
                        $(this).addClass('side-menu__sub-open')
                    }
                })
            }
        }
    })
})($)
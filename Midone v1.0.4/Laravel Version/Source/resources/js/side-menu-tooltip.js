import tooltipster from 'tooltipster'

(function($) { 
    "use strict";
        
    // Side menu tooltipster
    let initTooltips = (function tooltips(init) {
        $('.side-menu').each(function() {
            if ($('.side-menu__title').first().is(":hidden") && (!$(this).hasClass('tooltipstered') || init)) {
                let content = $(this).find('.side-menu__title').html().replace(/<[^>]*>?/gm, '').trim()
                $(this).tooltipster({
                    delay: 0,
                    side: 'right',
                    content: content,
                    theme: 'tooltipster-borderless'
                })
            } else if (!$('.side-menu__title').first().is(":hidden") && $(this).hasClass('tooltipstered')) {
                $(this).tooltipster('destroy')
            }
        })

        return tooltips
    })(true)

    $(window).resize(function() {
        initTooltips()
    })
})($)
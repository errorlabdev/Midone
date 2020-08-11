import tooltipster from 'tooltipster'

(function($) { 
    "use strict";
        
    // Tooltipster
    $('.tooltip').each(function() {
        let options = {
            delay: 0,
            theme: 'tooltipster-borderless'
        }

        if ($(this).data('event') == 'on-click') {
            options.trigger = 'click'
        }

        if ($(this).data('theme') == 'light') {
            options.theme = 'tooltipster-shadow'
        }

        if ($(this).data('side') !== undefined) {
            options.side = $(this).data('side')
        }

        $(this).tooltipster(options)
    })
})($)
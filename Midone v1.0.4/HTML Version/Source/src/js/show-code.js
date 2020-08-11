(function($) { 
    "use strict";
        
    // Show code or preview
    $('body').on('change', '.show-code', function() {
        let elementId = $(this).data('target')
        if ($(this).is(":checked")) {
            $(elementId).find('.preview').hide()
            $(elementId).find('.source-code').fadeIn()
        } else {
            $(elementId).find('.preview').fadeIn()
            $(elementId).find('.source-code').hide()
        }
    })
})($)
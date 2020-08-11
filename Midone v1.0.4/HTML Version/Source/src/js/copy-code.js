(function($) { 
    "use strict";
        
    // Copy original code
    $('body').on('click', '.copy-code', function() {
        let elementId = $(this).data('target')
        $(elementId).find('textarea')[0].select()
        $(elementId).find('textarea')[0].setSelectionRange(0, 99999)
        document.execCommand("copy")
    })
})($)
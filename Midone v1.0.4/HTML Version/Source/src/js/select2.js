import select2 from 'select2'

(function($) { 
    "use strict";
        
    // Select2
    $('.select2').each(function() {
        let options = {}

        if ($(this).data('placeholder')) {
            options.placeholder = $(this).data('placeholder')
        }

        if ($(this).data('hide-search')) {
            options.minimumResultsForSearch = -1
        }

        $(this).select2(options)
    })
})($)
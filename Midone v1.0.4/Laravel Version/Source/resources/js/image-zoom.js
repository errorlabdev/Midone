import Drift from 'drift-zoom'

(function($) { 
    "use strict";
        
    // Image zoom
    if ($('.image-zoom').length) {
        $('.image-zoom').each(function() {
            new Drift($(this).find('img')[0], {
                paneContainer: $(this)[0]
            })
        })
    }
})($)
(function($) { 
    "use strict";
        
    // Show tab content
    $('body').on('click', 'a[data-toggle="tab"]', function(key, el) {
        // Set active tab nav
        $(this).closest('.nav-tabs')
            .find('a[data-toggle="tab"]')
            .removeClass('active')
        $(this).addClass('active')

        // Set active tab content
        let elementId = $(this).attr('data-target')
        $(elementId).closest('.tab-content')
            .find('.tab-content__pane')
            .removeClass('active')
        $(elementId).addClass('active')
    })
})($)
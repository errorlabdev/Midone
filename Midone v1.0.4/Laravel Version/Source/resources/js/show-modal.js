(function($) { 
    "use strict";
        
    // Show modal
    $('#programmatically-show-modal').on('click', function() {
        $('#programmatically-modal').modal('show')
    })

    // Hide modal
    $('#programmatically-hide-modal').on('click', function() {
        $('#programmatically-modal').modal('hide')
    })

    // Toggle modal
    $('#programmatically-toggle-modal').on('click', function() {
        $('#programmatically-modal').modal('toggle')
    })
})($)
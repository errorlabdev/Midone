(function($) { 
    "use strict";

    // Show accordion content
    $('body').on('click', '.accordion__pane__toggle', function() {
        // Close active accordion
        $(this).closest('.accordion')
            .find('.accordion__pane')
            .find('.accordion__pane__content')
            .slideUp({
                done: function() {
                    $(this).closest('.accordion__pane').removeClass('active')
                }
            })

        // Set active accordion
        if ($(this).closest('.accordion__pane').hasClass('active')) {
            $(this).closest('.accordion__pane')
                .find('.accordion__pane__content')
                .slideUp({
                    done: function() {
                        $(this).closest('.accordion__pane').removeClass('active')
                    }
                })
        } else {
            $(this).closest('.accordion__pane')
                .find('.accordion__pane__content')
                .slideDown({
                    done: function() {
                        $(this).closest('.accordion__pane').addClass('active')
                    }
                })
        }
    })
})($)
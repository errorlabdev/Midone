(function($) {
    // Get highest z-index
    function getHighestZindex() {
        let zIndex = 50
        $('.modal').each(function() {
            if ($(this).css('z-index') !== 'auto' && $(this).css('z-index') > zIndex) {
                zIndex = parseInt($(this).css('z-index'))
            }
        })

        return zIndex
    }

    // Get scrollbar width
    function getScrollbarWidth(el) {
        return window.innerWidth - $(el)[0].clientWidth
    }

    // Show modal with z-index
    function show(el) {
        // Move modal element to body
        $('<div data-modal-replacer="' + $(el).attr('id') + '"></div>').insertAfter(el)
        $(el).css({
            'margin-top': 0,
            'margin-left': 0
        })
        $(el).appendTo('body')

        // Show modal by highest z-index
        setTimeout(() => {
            $(el).addClass('show').css('z-index', getHighestZindex() + 1)
        }, 200)

        // Setting up modal scroll
        $('body').css('padding-right', (parseInt($('body').css('padding-right')) + getScrollbarWidth('html')) + 'px')
            .addClass('overflow-y-hidden')
        $('.modal').removeClass('overflow-y-auto')
            .css('padding-left', '0px')
        $(el).addClass('overflow-y-auto')
            .css('padding-left', getScrollbarWidth(el) + 'px')
            .addClass($('.modal.show').length ? 'modal__overlap' : '')
    }

    // Hide modal & remove modal scroll
    function hide(el) {
        if ($(el).hasClass('modal') && $(el).hasClass('show')) {
            $(el).removeClass('show')

            setTimeout(() => {
                $(el).removeAttr('style')
                    .removeClass('modal__overlap')
                    .removeClass('overflow-y-auto')

                // Add scroll to highest z-index modal if exist
                $('.modal').each(function() {
                    if (parseInt($(this).css('z-index')) === getHighestZindex()) {
                        $(this).addClass('overflow-y-auto')
                            .css('padding-left', getScrollbarWidth(this) + 'px')
                    }
                })

                // Return back scroll to body if no more modal showed up
                if (getHighestZindex() == 50) {
                    $('body').removeClass('overflow-y-hidden')
                        .css('padding-right', '')
                }

                // Return back modal element to it's first place
                $('[data-modal-replacer="' + $(el).attr('id') + '"]').replaceWith(el)
            }, 200)
        }
    }

    // Toggle modal
    function toggle(el) {
        if ($(el).hasClass('modal') && $(el).hasClass('show')) {
            hide(el)
        } else {
            show(el)
        }
    }

    // Show modal
    $('body').on('click', 'a[data-toggle="modal"]', function() {
        show($(this).attr('data-target'))
    })

    // Hide modal
    $('body').on('click', function(event) {
        hide(event.target)
    })

    // Dismiss modal by link
    $('body').on('click', '[data-dismiss="modal"]', function() {
        let modal = $(this).closest('.modal')[0]
        hide(modal)
    })

    $.fn.modal = function(event) {
        if (event == 'show') {
            show(this)
        } else if (event == 'hide') {
            hide(this)
        } else if (event == 'toggle') {
            toggle(this)
        }
    }
}($))
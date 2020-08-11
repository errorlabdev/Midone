(function($) { 
    "use strict";
        
    $('.chat__chat-list').children().each(function() {
        $(this).on('click', function() {
            $('.chat__box').children('div:nth-child(2)').fadeOut({
                done: function() {
                    $('.chat__box').children('div:nth-child(1)').fadeIn({
                        done: function() {
                            $(this).removeClass('hidden').removeAttr('style')
                        }
                    })        
                }
            })
        })
    })
})($)
import validate from 'jquery-validation'

(function($) { 
    "use strict";
        
    $('.validate-form').each(function() {
        $(this).validate()
    })
})($)
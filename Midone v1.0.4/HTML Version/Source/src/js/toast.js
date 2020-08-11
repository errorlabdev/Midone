import toast from 'jquery-toast-plugin'

(function($) { 
    "use strict";
        
    // Basic Toast
    $('#basic-non-sticky-toast').on('click', function() {
        $.toast("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, consequuntur doloremque eveniet eius eaque dicta repudiandae illo ullam. Minima itaque sint magnam dolorum asperiores repudiandae dignissimos expedita, voluptatum vitae velit.")
    })
    $('#basic-sticky-toast').on('click', function() {
        $.toast({
            text : "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, consequuntur doloremque eveniet eius eaque dicta repudiandae illo ullam. Minima itaque sint magnam dolorum asperiores repudiandae dignissimos expedita, voluptatum vitae velit.",
            hideAfter : false
        })
    })

    // HTML Toast
    $('#html-non-sticky-toast').on('click', function() {
        $.toast("Let's test some HTML stuff... <a href='#'>github</a>")
    })
    $('#html-sticky-toast').on('click', function() {
        $.toast({
            text : "<strong>Remember!</strong> You can <span class='font-medium'>always</span> introduce your own × HTML and <span class=\'font-medium\'>CSS</span> in the toast.",
            hideAfter : false
        })
    })
})($)
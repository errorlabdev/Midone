import helper from './helper'
import hljs from 'highlight.js'
import jsBeautify from 'js-beautify'

(function($) { 
    "use strict";
        
    // Highlight Code
    $('.source-preview').each(function() {
        let source = $(this).find('code').html()

        // First replace
        let replace = helper.replaceAll(source, 'HTMLOpenTag', '<')
        replace = helper.replaceAll(replace, 'HTMLCloseTag', '>')

        // Save for copy code function
        let originalSource = $('<textarea style="margin-left: 1000000px;" class="fixed w-1 h-1"></textarea>').val(replace)
        $(this).append(originalSource)

        // Beautify code
        replace = jsBeautify.html(replace)

        // Format for highlight.js
        replace = helper.replaceAll(replace, '<', '&lt;')
        replace = helper.replaceAll(replace, '>', '&gt;')
        $(this).find('code').html(replace)
    })

    hljs.initHighlightingOnLoad()
})($)
import summernote from '../../node_modules/summernote/dist/summernote-lite.js'
import summernoteCss from '../../node_modules/summernote/dist/summernote-lite.css'

(function($) { 
    "use strict";
        
    // Summernote
    $('.summernote').each(function() {
        let options = {
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'italic']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
            ]
        }

        if ($(this).data('feature') == 'basic') {
            options.toolbar = [
                ['font', ['bold', 'underline', 'italic']]
            ]
        }

        if ($(this).data('feature') == 'all') {
            options.toolbar = [
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        }

        if ($(this).data('height') !== undefined) {
            options.height = $(this).data('height')
        }

        $(this).summernote(options)
    })
})($)
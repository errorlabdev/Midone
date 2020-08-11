import moment from 'moment'
import daterangepicker from 'daterangepicker'

(function($) { 
    "use strict";
        
    // Daterangepicker
    $('.datepicker').each(function() {
        let options = {
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'), 10)
        }

        if ($(this).data('daterange')) {
            options.singleDatePicker = false
        }
        
        if ($(this).data('timepicker')) {
            options.timePicker = true
            options.locale = {
                format: 'M/DD hh:mm A'
            }
        }

        $(this).daterangepicker(options)
    })
})($)
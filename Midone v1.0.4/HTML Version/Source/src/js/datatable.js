import dt from 'datatables.net'
import dtResponsive from 'datatables.net-responsive-dt'

(function($) { 
    "use strict";
        
    // Datatable
    $('.datatable').DataTable({
        responsive: true
    })
})($)
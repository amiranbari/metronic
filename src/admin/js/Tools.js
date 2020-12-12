var KTDatatables = function() {
    var admin_list = function() {
        var table = $('#datatable_admin_list');

        // begin first table
        table.DataTable({
            responsive: true,

            // DOM Layout settings
            dom: `<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            lengthMenu: [5, 10, 25, 50, 100],
            pageLength: 10,
            language: {
                'lengthMenu': 'Display _MENU_',
            }
        });
    };
    return {
        init: function() {
            admin_list();
        }
    };
}();
jQuery(document).ready(function() {
    KTDatatables.init();
});

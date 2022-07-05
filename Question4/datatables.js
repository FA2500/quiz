
       $(document).ready(function () {

        var table =  $('#example').DataTable({
        "paging":true,
        "searching":true,
        "ordering": true,
        order:[[0,'asc']],
    });
    $('a.toggle-vis').on('click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column($(this).attr('data-column'));
 
        // Toggle the visibility
        column.visible(!column.visible());
    });
});

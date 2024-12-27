$(document).ready(function () {
    $.fn.dataTable.ext.errMode = "none";
    var table = $("#data-table").DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: true,
        ajax: {
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": _token,
            },
            url: baseUrl + "my-books/ajax",
            data: function(d) {
                d.page = $("#data-table").data("page"),
                d.category = $('#category').val()
            },
        },
        order: [],
        columns: [
            // { data: 'id', name: 'id', orderable: true },
            { data: "title", name: "title" },
            { data: "authors", name: "authors" },
            // { data: "isbn", name: "isbn" },
            { data: "category", name: "category"},
            { data: "images", name: "images", orderable: false },
            { data: "action", name: "action", orderable: false },
        ],
        drawCallback: function (settings) {
            var totalBooks = settings.json.isAnyBookPresent;
            if (totalBooks == 0) {
                $("#no-books").removeAttr("hidden");
            }
        },
        oLanguage: {},
    });

    $('#category').on('change', function() {
        table.ajax.reload(null, false);
        $('#clear').removeAttr('hidden');
    });

    $('#clear').on('click',function(){
        $('#category').val('');
        table.ajax.reload(null, false);
        $('#clear').attr('hidden',true);
    });
});

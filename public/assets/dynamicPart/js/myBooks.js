$(document).ready(function(){
    $.fn.dataTable.ext.errMode = "none";
    $('#data-table').DataTable({
        processing:true,
        serverSide:true,
        responsive:true,
        searching:true,
        ajax:{
            type:'POST',
            headers:{
                'X-CSRF-TOKEN':_token
            },
            url:baseUrl+"myBooks/ajax",
        },
        order:[],
        columns:[
            {data:'id', name:'id', orderable:true},
            {data:'title', name:'title',orderable:true},
            {data:'authors', name:'authors',orderable:true},
            {data:'isbn', name:'isbn',orderable:true},
            // {data:'images', name:'images'},
            {data:'action', name:'action'}
        ],
        oLanguage:{

        }
    });
});
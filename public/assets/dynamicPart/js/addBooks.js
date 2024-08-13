$(document).ready(function() {

    $('#frmAddBook').validate({
        rules:{
            title:{required:true},
            authors:{required:true},
            // isbn:{required:true},
            'book_images[]':{required:true}
        }
    });

    $('#search_books').autocomplete({
        source:function(request, response){
            $.ajax({
                url:'https://www.googleapis.com/books/v1/volumes',
                dataType:'json',
                data:{
                    q:request.term,
                    maxResults:3,
                    key:$('#apiKey').val(),
                },
                success:function(data){
                    console.log(data);
                    var dataList = data.items.map(function(item) {
                        // return '<li class="list-group-item">' + item.volumeInfo.title + ', ' + (item.volumeInfo.authors || []).join(', ') + '</li>';
                        var title = item.volumeInfo.title;
                        var authors = (item.volumeInfo.authors || []).join(', ');
                        var thumbnail = item.volumeInfo.imageLinks ? item.volumeInfo.imageLinks.thumbnail : 'default-image.jpg'; // Use a default image if none available

                        return `
                            <li class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="${thumbnail}" alt="Book cover" class="img-thumbnail mr-3" style="width: 50px; height: auto;">
                                        <div>
                                            <strong>${title}</strong><br>
                                            <small>${authors}</small>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary addBook" data-title="${title}" data-authors="${authors}">Add</button>
                                </div>
                            </li>
                        `;
                    });
            
                    $('#unordered_List').html(dataList.join(''));
                }
            });
        },
        select: function(event, ui) {
            // On selection, you can do something with the selected item
            console.log('Selected: ' + ui.item.value + ' by ' + (ui.item.authors || []).join(', '));
        },
        minLength: 2
    });

    $('#search_books').on('input', function() {
        if ($(this).val().length === 0) {
            $('#unordered_List').empty();
        }
    });
    
    $(document).on('click','.addBook',function(){
        $('#search_books').val('');
        $('#unordered_List').empty();
        $('#title').val('');
        $('#authors').val('');
        $('#title').val($(this).data('title'));
        $('#authors').val($(this).data('authors'));
    });
});
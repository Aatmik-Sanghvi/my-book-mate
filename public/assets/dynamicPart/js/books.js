$(document).ready(function () {
    $.fn.dataTable.ext.errMode = "none";
    getLocation();
    // $('#data-table').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     responsive: true,
    //     searching: true,
    //     ajax: {
    //         type: 'POST',
    //         headers: {
    //             'X-CSRF-TOKEN': _token
    //         },
    //         url: baseUrl + "my-books/ajax",
    //         data: {
    //             'page': $('#data-table').data('page'),
    //             'city': city
    //         }
    //     },
    //     order: [],
    //     columns: [
    //         // { data: 'id', name: 'id', orderable: true },
    //         { data: 'title', name: 'title', orderable: true },
    //         { data: 'authors', name: 'authors', orderable: true },
    //         { data: 'isbn', name: 'isbn', orderable: true },
    //         // {data:'images', name:'images'},
    //         { data: 'action', name: 'action' }
    //     ],
    //     oLanguage: {

    //     }
    // });

    function getLocation(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        }else{
            toastr.info('Geolocation is not supported by this browser.')
        }
    }
    
    function showPosition(position){
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        console.log(latitude, longitude);
        
        const url = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=AIzaSyC4QdyCtd3M8QfeAR4XEfcIrjHw-TRPlJI`;

        fetch(url).then((response)=>response.json()).then((data)=>{
            city = data.results[0].address_components.find((component) => component.types.includes("locality")).long_name;
            getBookdatatable(city);
        })

    }

    function showError(error) {
        if(error.PERMISSION_DENIED || error.POSITION_UNAVAILABLE || error.TIMEOUT || error.UNKNOWN_ERROR) {
            getBookdatatable();
        }
    }

    function getBookdatatable(city=null){
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            searching: true,
            ajax: {
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': _token
                },
                url: baseUrl + "my-books/ajax",
                data: {
                    'page': $('#data-table').data('page'),
                    'city': city
                }
            },
            order: [],
            columns: [
                // { data: 'id', name: 'id', orderable: true },
                { data: 'title', name: 'title', orderable: true },
                { data: 'authors', name: 'authors', orderable: true },
                { data: 'isbn', name: 'isbn', orderable: true },
                // {data:'images', name:'images'},
                { data: 'action', name: 'action' }
            ],
            oLanguage: {
    
            }
        });
    }
});
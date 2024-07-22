let autocomplete;
function initAutocomplete(){
    autocomplete = new google.maps.places.Autocomplete(
        document.getElementById('address'),
        {
            types: ['establishment'],
            fields: ['place_id','geometry','name']
        }
    );
}
$(document).ready(function(){

    $('#registerFrm').validate({
        errorPlacement: function(error, element){
            if(element.attr('name') == 'name'){
                error.insertAfter('.name');
            }
            if(element.attr('name') == 'email'){
                error.insertAfter('.email');
            }
            if(element.attr('name') == 'phone_number'){
                error.insertAfter('.phone_number');
            }
            if(element.attr('name') == 'address'){
                error.insertAfter('.address');
            }
            if(element.attr('name') == 'city'){
                error.insertAfter('.city');
            }
            if(element.attr('name') == 'state'){
                error.insertAfter('.state');
            }
            if(element.attr('name') == 'country'){
                error.insertAfter('.country');
            }
            if(element.attr('name') == 'postal_code'){
                error.insertAfter('.postal_code');
            }
        }
    });

    var autocomplete;
    var autocomplete2;

    autocomplete = new google.maps.places.Autocomplete((document.getElementById('address')),{
        componentRestrictions:{country:['in']}
    });
    // autocomplete2 = new google.maps.places.Autocomplete((document.getElementById('city')));

    autocomplete.addListener('place_changed',onPlaceChange)
    // autocomplete2.addListener('place_changed',onPlaceChange2);

    // function onPlaceChange2(){
    //     let responseLength = autocomplete2.getPlace().address_components.length;
    //     let component = autocomplete2.getPlace().address_components;
    //     if(responseLength > 0){
    //         for (let i = 0; i < responseLength; i++) {
    //             if(component[i].types.includes('administrative_area_level_3')){
    //                 return $('#city').val(component[i].long_name);
    //             }
    //         }
    //     }
    // }

    function onPlaceChange(){        
        // console.log(autocomplete.getPlace());
        // let responseLength = autocomplete.getPlace().address_components.length;
        // let component = autocomplete.getPlace().address_components;
        const place = autocomplete.getPlace();
        console.log(place);
        let address = "";
        // if(responseLength > 0){
            for (component of place.address_components) {
                let componentType = component.types[0];
                switch(componentType){
                    case "premise":{
                        address = `${component.long_name} ${address}`;
                        break;
                    }

                    case "neighborhood":{
                        address += `, ${component.long_name}`;
                        break;
                    }

                    case "sublocality_level_2":{
                        address += `, ${component.long_name}`;
                        break;
                    }

                    case "sublocality_level_1":{
                        address += `, ${component.long_name}`;
                        break;
                    }

                    // case "administrative_area_level_3":{
                    //     $('#city').val(component.long_name);  
                    //     break;  
                    // }

                    // case "administrative_area_level_1":{
                    //     $('#state').val(component.long_name);    
                    //     break;
                    // }

                    // case "country":{
                    //     $('#country').val(component.long_name);
                    //     break;
                    // }

                    case "postal_code":{
                        $('#postal_code').val(component.long_name);
                        break;
                    }
                }
                // if(component[i].types.includes('route')){
                //     $('#address').val(component[i].long_name);
                // }else if(component[i].types.includes('administrative_area_level_3')){
                //     $('#city').val(component[i].long_name);
                // }else if(component[i].types.includes('administrative_area_level_1')){
                //     $('#state').val(component[i].long_name);
                // }else if(component[i].types.includes('country')){
                //     $('#country').val(component[i].long_name);
                // }else if(component[i].types.includes('postal_code')){
                //     $('#postal_code').val(component[i].long_name);
                // }
            }
            console.log(address);
            
            $("#address").val(address);
        // }
    }
});
// let autocomplete;
// function initAutocomplete() {
//     const input = document.getElementById("address");
//     const options = {
//         componentRestrictions: { country: "IN" }
//     }
//     autocomplete = new google.maps.places.Autocomplete(input, options);
//     autocomplete.addListener("place_changed", onPlaceChange)
// }

// function onPlaceChange() {
//     const place = autocomplete.getPlace();
//     console.log(place.formatted_address)
//     console.log(place.geometry.location.lat())
//     console.log(place.geometry.location.lng())
// }
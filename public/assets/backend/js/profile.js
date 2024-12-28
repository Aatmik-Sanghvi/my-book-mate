$(document).ready(function(){
    $('#frmProfile').validate();
    $('.changeImg').on('click',function(){
        $('#profile_photo').click();
    });

    $('#profile_photo').on('change', function(event){
        var file = event.target.files[0];
        if(file){
            var formData = new FormData();
            formData.append('profile_image',file);
            formData.append('old_image',oldFile);
        
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN':_token
                },
                url:baseUrl + 'chg-pfl-pic',
                type:'POST',
                data:formData,
                processData: false, // Do not process the data
                contentType: false, // Do not set content type
                success:function(response){
                    $('.changeImg, .header_img a img').attr('src',response.image_url);
                    toastr.success(response.success)
                },
                error:function(xhr, status, error){
                    console.error("XHR:", xhr);
                    console.error("Status:", status);
                    console.error("Error:", error);
                    toastr.error(error);
                }
            });
        }
    });
});
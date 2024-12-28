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
                    $('.changeImg').attr('src',response.image_url);
                    toastr.success('Profile image updated successfully!')
                },
                error:function(xhr, status, error){
                    console.error('Error updating profile image:', error);
                    toastr.error('Something went wrong! we are working on it.');
                }
            });
        }
    });
});
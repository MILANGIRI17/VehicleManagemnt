$(document).ready(function(){
    //remove spaces and other unique character in slug or slug generator
    // function slugify(text)
    // {
    //     return text.toString().toLowerCase()
    //         .replace(/\s+/g, '-')           // Replace spaces with -
    //         .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    //         .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    //         .replace(/^-+/, '')             // Trim - from start of text
    //         .replace(/-+$/, '');            // Trim - from end of text
    // }
    // $('#title').keyup(function (){
    //    let tv=$('#title').val()
    //     $('#slug').val(slugify(tv))
    // });

    //remove alert message
    setTimeout(()=>{
        $('.alert').hide('slow')
    },2000);

    //imageMagnify
    $('.image-content').magnificPopup({
        type:'image',
        delegate:'a'
    });
    // CKEDITOR.replace('meta_description');
    // CKEDITOR.replace('summary');
    // CKEDITOR.replace('description');

    fetchVehicleType();
    function fetchVehicleType(){
        $.ajax({
            type:"GET",
            url:"/fetch-vehicle-type",
            dataType:'json',
            success: function(response){
                console.log(response.vehicleType);
            }
        });
    }
});

$(document).ready( function () {
    $('#table_id').DataTable();
} );



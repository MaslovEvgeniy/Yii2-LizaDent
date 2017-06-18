function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.preview').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#article-file").change(function(){
    readURL(this);
});

$('.confirm').on('click', function(e){
    if ($('[name="selection[]"]:checked').length === 0) {
        e.preventDefault();
        alert("Ничего не выбрано!");
    }
});
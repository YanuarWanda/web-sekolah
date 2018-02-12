//Modal Preview Image
var modal = $('#myModal');
var img = $('.imgZoom');
var modalImg = $("#img01");
var captionText = $('#caption');
var span = $(".close");

img.on('click', function(){
    modal.fadeIn(500);
    modalImg.attr('src', $(this).attr('src'));
    captionText.html($(this).attr('alt'));
});

span.on('click', function(){
    modal.fadeOut(500);
});

modal.on('click', function(){
    modal.fadeOut(500);
});

$('.remove').on('click', function(){
    var url = $(this).attr('href');
    swal({
        title: 'Hapus data?',
        text: 'Data yang dihapus tidak bisa dikembalikan!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Okelah, hapus aja!'
    }).then((result) =>{
        if(result.value) {
            window.location.replace(url);
        }
    });
});
/* -------------------------------------- */

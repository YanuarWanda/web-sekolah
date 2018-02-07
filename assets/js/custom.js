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

/* -------------------------------------- */

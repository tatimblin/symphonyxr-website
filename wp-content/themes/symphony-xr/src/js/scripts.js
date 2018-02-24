$(document).ready(function(){

    
var $gallery = $('.gallery').flickity({
    // options
    cellAlign: 'center',
    contain: true,
    wrapAround: true,
    prevNextButtons: false
});

$gallery.on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
  if ( typeof cellIndex == 'number' ) {
    $gallery.flickity( 'select', cellIndex );
  }
});
    
if ($("body").hasClass("home")) {
    var whichPost = 0;
    $(".home-post-item").mouseenter(
        function () {
            whichPost = $(this).index();
            $('.home-post-img img').removeClass('wp-post-image-in');
            $('.home-post-img img:nth-child(' + whichPost + ')').addClass('wp-post-image-in');
        }
    );
}
    
}); // doc ready
let images = document.getElementsByTagName("img");
for (let image of images) {
  image.addEventListener("load", fadeImg);
  image.style.opacity = "0";
}

function fadeImg() {
  this.style.transition = "opacity 2s";
  this.style.opacity = "1";
}

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
    
}); // doc ready
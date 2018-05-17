$(document).ready(function(){

// If Simple Image Gallery
var galleryExists = document.getElementById("footer-gallery");
if (typeof(galleryExists) != 'undefined' && galleryExists != null) {
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
}
    
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
    
if ($("body").hasClass("page-template-page-product")) {
    var $goalMedia = $('.goal-media').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        asNavFor: '.goal-text',
        wrapAround: true,
        prevNextButtons: false
    });
    var $goalText = $('.goal-text').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        asNavFor: '.goal-media',
        wrapAround: true,
        prevNextButtons: false,
        pageDots: false,
        selectedAttraction: 1,
        friction: 1,
        draggable: false
    });
    
    $('.goal-btn').on( 'click', function() {
        $goalText.flickity( 'next', true );
    });
}
    
if ($("body").hasClass("page-template-page-process")) {
    
    // Scroll reveal
    window.sr = ScrollReveal();
    sr.reveal('.process-blog-item-img', {
        origin: 'bottom',
        distance: '80px',
        scale: 0.9,
        delay: 300
    });
    sr.reveal('.process-blog-item', {
        
    });
    
}
    
if ($("body").hasClass("single-podcast")) {
    
    var wavesurfer = WaveSurfer.create({
        container: document.querySelector('#waveform'),
        waveColor: '#E1E0EF',
        progressColor: '#744894',
        hideScrollbar: true,
        //barWidth: 1
    });

    // get podcast audio file
    wavesurfer.load( $( "#audio-file" ).html() );
    
    // play/pause button
    $('.single-title').on( 'click', function() {
        wavesurfer.playPause();
        $('.single-title').toggleClass('single-title-pause');
    });
    
    // resizes with browser
    var responsiveWave = wavesurfer.util.debounce(function() {
      wavesurfer.empty();
      wavesurfer.drawBuffer();
    }, 150);

    window.addEventListener('resize', responsiveWave);
}
    
// Unique experience page code
if ($("body").hasClass("page-template-page-experience")) {
    
    var banner = $( '.media-player' ).height();

    $( window ).scroll(function() {
        size = banner - $(document).scrollTop();
            $('.media-player').css('height', size);
    });

    $('.media-player').click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    var vid = document.getElementById("video-banner");
    vid.volume = 0.1;
    
    // Video Slider
    var $videoSlider = $('.video-carousel').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        pageDots: false,
        draggable: false,
        prevNextButtons: false,
    });
    
    var $videoSliderNav = $('.video-carousel-nav').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        asNavFor: '.video-carousel',
        pageDots: false,
        prevNextButtons: false,
    });
}

// Images loaded
$('#main').imagesLoaded()
  .done( function( instance ) {
    console.log('all images successfully loaded');
    $('.hero-img').addClass('loaded');
    $('.hero-title-content-wrap').addClass('loaded');
    $('.single-header-hero').addClass('loaded');
    $('.page-content').addClass('loaded');
  });
    
}); // doc ready
$(document).ready(function(){var e=$(".gallery").flickity({cellAlign:"center",contain:!0,wrapAround:!0,prevNextButtons:!1});if(e.on("staticClick.flickity",function(t,a,o,l){"number"==typeof l&&e.flickity("select",l)}),$("body").hasClass("home")){var t=0;$(".home-post-item").mouseenter(function(){t=$(this).index(),$(".home-post-img img").removeClass("wp-post-image-in"),$(".home-post-img img:nth-child("+t+")").addClass("wp-post-image-in")})}if($("body").hasClass("page-template-page-product")){var a=$(".goal-media").flickity({cellAlign:"center",contain:!0,asNavFor:".goal-text",wrapAround:!0,prevNextButtons:!1}),o=$(".goal-text").flickity({cellAlign:"center",contain:!0,asNavFor:".goal-media",wrapAround:!0,prevNextButtons:!1,pageDots:!1,selectedAttraction:1,friction:1,draggable:!1});$(".goal-btn").on("click",function(){o.flickity("next",!0)})}if($("body").hasClass("page-template-page-process")&&(window.sr=ScrollReveal(),sr.reveal(".process-blog-item-img",{origin:"bottom",distance:"80px",scale:.9,delay:300}),sr.reveal(".process-blog-item",{})),$("body").hasClass("single-podcast")){var l=WaveSurfer.create({container:document.querySelector("#waveform"),waveColor:"#E1E0EF",progressColor:"#744894",hideScrollbar:!0});l.load($("#audio-file").html()),$(".single-title").on("click",function(){l.playPause(),$(".single-title").toggleClass("single-title-pause")});var i=l.util.debounce(function(){l.empty(),l.drawBuffer()},150);window.addEventListener("resize",i)}$("#main").imagesLoaded().done(function(e){console.log("all images successfully loaded"),$(".hero-img").addClass("loaded"),$(".hero-title-content-wrap").addClass("loaded"),$(".page-content").addClass("loaded")})});
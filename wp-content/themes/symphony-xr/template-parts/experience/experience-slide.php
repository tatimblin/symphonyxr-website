<?php
/**
 * Template part for video carousel.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter_theme
 */

?>
   
<?php //if( have_rows('video_slider') ): ?>
<div class="video-slider">
    <div class="video-carousel">
       
        <?php while ( have_rows('video_slider')): the_row(); ?>
        
        <div class="video-carousel-item">
            <iframe src="<?php the_sub_field('video'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        
        <?php endwhile; ?>
        
    </div>
    <div class="video-carousel-nav">
       
        <?php while ( have_rows('video_slider')): the_row(); ?>
        
        <div class="video-carousel-nav-item">
            <div class="video-carousel-nav-item-img" style="background-image: url('<?php the_sub_field('video_thumbnail'); ?>');"></div>
            <p><?php the_sub_field('video_title'); ?></p>
        </div>
        
        <?php endwhile; ?>
        
    </div>
</div>

<?php //else :

    // no rows found

//endif; ?>
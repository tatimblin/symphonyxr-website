<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package symphony_xr
 */

?> 

<div class="hero">
    <div class="hero-title">
        <div class="hero-title-content-wrap">
        <div class="hero-title-content">
            <h4><?php echo get_field('hero_title_meta'); ?></h4>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		</div>
		<?php if( have_rows('hero_cta') ): ?>
            <div class="hero-title-cta">
            <?php while( have_rows('hero_cta') ): the_row(); ?>
                <div class="button">
                    <?php the_sub_field('hero_cta_text'); ?>
                </div>
            <?php endwhile; ?>
            </div>
		<?php endif; ?>
	</div><!-- .hero-title -->
	<div class="hero-img" style="background-image: url('<?php echo get_field('hero_image'); ?>');">
	    
	</div>
</div>

<div class="page-content">
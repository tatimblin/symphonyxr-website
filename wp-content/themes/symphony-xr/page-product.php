<?php
/**
 * Template Name: Product Template
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main">
    
    <?php get_template_part( 'template-parts/content', 'hero' ); ?>
           
    <?php get_template_part( 'template-parts/content', 'about' ); ?>
            
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>

	</div><!-- #main -->

<?php
get_footer();

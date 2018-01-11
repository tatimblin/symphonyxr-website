<?php
/**
 * Template Name: Homepage Template
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main">
    
    <?php get_template_part( 'template-parts/content', 'hero' ); ?>
            
	<?php get_template_part( 'template-parts/content', 'about' ); ?>
	
	<?php get_template_part( 'template-parts/content', 'timeline' ); ?>

	</div><!-- #main -->

<?php
get_footer();

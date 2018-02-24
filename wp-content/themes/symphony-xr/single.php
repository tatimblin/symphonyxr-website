<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main">

	<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'single-blog', get_post_format() );
	endwhile; // End of the loop.
	?>

	</div><!-- #main -->

<?php
get_footer();

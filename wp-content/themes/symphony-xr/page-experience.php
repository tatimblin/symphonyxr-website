<?php
/**
 * Template Name: Experience Template
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main">
    
    <?php 
        get_template_part( 'template-parts/content', 'hero' );
        get_template_part( 'template-parts/experience/experience', 'static' );
        get_template_part( 'template-parts/experience/experience', 'slide' );
    ?>

	</div><!-- #main -->

<?php
get_footer();

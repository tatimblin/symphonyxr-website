<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_theme
 */

?>
   
    <?php get_template_part( 'template-parts/footer', 'gallery' ); ?>
    
    <?php get_template_part( 'template-parts/footer', 'cta' ); ?>
    
    <?php if ( is_page_template( 'page-experience.php') || is_page_template( 'page-product.php') || is_page_template( 'page-process.php') ) { ?>
        
        <?php get_template_part( 'template-parts/footer', 'destination' ); ?>
        
    <?php } ?>

	</div><!-- #content -->

	<div class="site-footer">
	    <div class="site-footer-map">
	        <div class="site-footer-map-col">
	            <h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
	            <p>
	                info@symphonyxr.com<br>
	                3401 Market St.,<br>
	                Philadelphia, PA 19104
	            </p>
	        </div>
	        <div class="site-footer-map-col">
	            <?php wp_nav_menu(); ?>
	        </div>
	    </div>
		<div class="site-info">
			Copyright &copy; <?php echo date('Y'); ?> | timblin.co
		</div><!-- .site-info -->
	</div><!-- .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/fb-share.jpg" />
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-XXXXXX-XX', 'auto');
	  ga('send', 'pageview');
	</script>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader" href="#content">Skip to content</a>

	<div class="site-header">
		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                
            </a>
		</div><!-- .site-title -->

		<div class="main-navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</div><!-- .main-navigation -->
	</div><!-- .site-header -->

	<div id="content" class="site-content">

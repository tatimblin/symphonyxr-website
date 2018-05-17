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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116928593-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-116928593-1');
    </script>


</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader" href="#content">Skip to content</a>
	
	<?php if ( is_page_template( 'page-experience.php' ) ) {
        get_template_part( 'template-parts/experience/video', 'banner' );
    } ?>

	<div class="site-header">
		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                SXR
            </a>
		</div><!-- .site-title -->

		<div class="main-navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</div><!-- .main-navigation -->
	</div><!-- .site-header -->

	<div id="content" class="site-content">

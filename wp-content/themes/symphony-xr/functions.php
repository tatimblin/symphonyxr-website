<?php
/**
 * starter_theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starter_theme
 */

if ( ! function_exists( 'starter_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starter_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on starter_theme, use a find and replace
	 * to change 'starter_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starter_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'starter_theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Remove unwanted info from head.
	 */
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action ('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action( 'wp_head', 'wp_shortlink_wp_head');
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

}
endif; // starter_theme_setup
add_action( 'after_setup_theme', 'starter_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function starter_theme_scripts() {
	wp_enqueue_style( 'starter_theme-style', get_template_directory_uri() . '/css/styles.css' );

	// Load scripts
	if (!is_admin()) add_action("wp_enqueue_scripts", "load_js", 11);
	function load_js() {
		wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), false, false);
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js', array(), null, true);
		wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), null, true);
		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), null, true);
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );


// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Podcasts', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Podcast', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Podcasts', 'text_domain' ),
		'name_admin_bar'        => __( 'Podcast', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Podcasts', 'text_domain' ),
		'add_new_item'          => __( 'Add New Podcast', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Podcast', 'text_domain' ),
		'edit_item'             => __( 'Edit Podcast', 'text_domain' ),
		'update_item'           => __( 'Update Podcast', 'text_domain' ),
		'view_item'             => __( 'View Podcast', 'text_domain' ),
		'view_items'            => __( 'View Podcasts', 'text_domain' ),
		'search_items'          => __( 'Search Podcast', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Podcast', 'text_domain' ),
		'description'           => __( 'Audio recordings of team developments', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-audio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'podcast', $args );

}
add_action( 'init', 'custom_post_type', 0 );

//CUSTOM POST TYPE TEAMMATES
// Register Custom Post Type
function teammate_post_type() {

	$labels = array(
		'name'                  => _x( 'Teammates', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Teammate', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Teammates', 'text_domain' ),
		'name_admin_bar'        => __( 'Teammate', 'text_domain' ),
		'archives'              => __( 'Teammate Archives', 'text_domain' ),
		'attributes'            => __( 'Teammate Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Teammates', 'text_domain' ),
		'add_new_item'          => __( 'Add New Teammate', 'text_domain' ),
		'add_new'               => __( 'Add Teammate', 'text_domain' ),
		'new_item'              => __( 'New Teammate', 'text_domain' ),
		'edit_item'             => __( 'Edit Teammate', 'text_domain' ),
		'update_item'           => __( 'Update Teammate', 'text_domain' ),
		'view_item'             => __( 'View Teammate', 'text_domain' ),
		'view_items'            => __( 'View Teammates', 'text_domain' ),
		'search_items'          => __( 'Search Teammates', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Profile picture', 'text_domain' ),
		'set_featured_image'    => __( 'Set Profile picture', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Profile picture', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Profile picture', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'team',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Teammate', 'text_domain' ),
		'description'           => __( 'Member of the SXR Team', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'teammate', $args );

}
add_action( 'init', 'teammate_post_type', 0 );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


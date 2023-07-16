<?php
// this function use to show the manu option in admin panal
register_nav_menus(
	array('primary-manu' => 'Top Manu', 'secondary-menu' => 'Footer Menu')
);

add_theme_support('post-thumbnails');	// for show the features image option in admin dashboard
add_theme_support('custom-header');
add_theme_support('title-tag');
add_post_type_support( 'page', 'excerpt' );

$post_type_path = get_template_directory().'/inc/post-types/';
require_once($post_type_path.'client-info.php');		// Client post type call

// for the social icon side bar
register_sidebar(
	array(
		'name' => 'Social Icon',
		'id' => 'social-icon'
	)
);

// for the footer side bar1
register_sidebar(
	array(
		'name' => 'Footer sidebar 1',
		'id' => 'footer-sidebar1'
	)
);
// for the style sheet of the page 
function webbling_register_stylesheet()
{
	$theme_version = wp_get_theme()->get('Version');
	// add default theme style.css
	wp_enqueue_style('style', get_stylesheet_uri(), array(), $theme_version);
	// add others library styles
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, $theme_version);
	wp_enqueue_style('font-aswom', get_template_directory_uri() . '/assets/css/font-awesome.min.css', null, $theme_version);
	wp_enqueue_style('owl-min-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', null, $theme_version);
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css', null, $theme_version);
	wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', null, $theme_version);
	// for custom style sheet
	wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css', null, $theme_version);
}
add_action('wp_enqueue_scripts', 'webbling_register_stylesheet');

// for the scripting files add
function wp_register_scripts()
{
	$theme_version = wp_get_theme()->get('Version');
	// add scripting librarys
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.2.min.js', array('jquery'), $theme_version, false);
	wp_enqueue_script('bootstrap-bundle-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), $theme_version, false);
	wp_enqueue_script('owl-min-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), $theme_version, false);
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), $theme_version, false);
	// for the cutom scripts
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), $theme_version, false);
}
add_action('wp_enqueue_scripts', 'wp_register_scripts');

if (function_exists('acf_add_options_page')) :

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Header Settings',
		'menu_title'    => 'Header',
		'parent_slug'   => 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Footer Settings',
		'menu_title'    => 'Footer',
		'parent_slug'   => 'theme-general-settings',
	));
endif;

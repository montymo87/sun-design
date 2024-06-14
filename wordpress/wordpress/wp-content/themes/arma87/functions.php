<?php

/**
 * Preventing caching scripts and styles.
 */
define('ASSETS_VERSION', time());

global $allowed_html;
$allowed_html = array(
	'a' => array(
		'href'  => true,
		'title' => true,
	),
	'h1'     => array(),
	'h2'     => array(),
	'h3'     => array(),
	'h4'     => array(),
	'h5'     => array(),
	'h6'     => array(),
	'p'      => array(),
	'i'      => array(),
	'b'      => array(),
	'br'     => array(),
	'ul'     => array(),
	'ol'     => array(),
	'li'     => array(),
	'em'     => array(),
	'hr'     => array(),
	'del'    => array(),
	'ins'    => array(
		'datetime' => true
	),
	'img'    => array(
		'src' => true,
		'alt' => true
	),
	'strong' => array(),
	'blockquote' => array(),
);

/**
 * Add styles
 */
function register_styles()
{
	$global_styles = get_template_directory_uri() . '/assets/css/app.css';


	wp_register_style('theme_styles', $global_styles, false, ASSETS_VERSION);


	wp_enqueue_style('theme_styles');
}


/**
 * Add scripts
 */
function register_scripts()
{
	$main_js = get_template_directory_uri() . '/assets/js/app.js';

	wp_deregister_script('jquery');

	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '1.0.0', true);
	wp_register_script('main', $main_js, array('jquery'), ASSETS_VERSION, true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('main');
}


/**
 * Theme setup
 */
function theme_setup()
{
	add_theme_support('menus');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array(
		'search-form'
	));

	add_action('wp_enqueue_scripts', 'register_styles');
	add_action('wp_enqueue_scripts', 'register_scripts');

	register_nav_menus(array(
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu',
	));
}

add_action('after_setup_theme', 'theme_setup');

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Global',
		'menu_title' => 'Global Settings',
		'menu_slug' => 'systems',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}

/**
 * Add viewport meta tag
 */

function set_viewport()
{
?>
	<meta name="viewport" content="width=device-width" />
<?php
}

add_action('wp_head', 'set_viewport');

// Отключаем редактор Gutenberg.
add_filter('use_block_editor_for_post', '__return_false');

/**
 * Remove <p> Tag From Contact Form 7
 */
add_filter('wpcf7_autop_or_not', '__return_false');

// /**
//  * logo support
//  */

function my_theme_setup()
{
	add_theme_support('custom-logo', array(
		'flex-height' => false,
		'flex-width'  => false,
		'unlink-homepage-logo' => true,
	));
}
add_action('after_setup_theme', 'my_theme_setup');

// to remove span custom-logo-link
function custom_logo_without_span($html)
{
	$html = preg_replace('/<span[^>]*>/i', '', $html);
	$html = str_replace('</span>', '', $html);
	// remove width and height attr from img
	$html = preg_replace('/(width|height)="\d*"\s/', "", $html);

	return $html;
}
add_filter('get_custom_logo', 'custom_logo_without_span');

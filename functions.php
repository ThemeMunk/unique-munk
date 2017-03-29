<?php
/**
 * Unique_Munk functions and definitions.
 *
 * Do not go gentle into that good night,
 * Old age should burn and rave at close of day;
 * Rage, rage against the dying of the light.
 *
 * Though wise men at their end know dark is right,
 * Because their words had forked no lightning they
 * Do not go gentle into that good night.
 *
 * Dylan Thomas, 1914 - 1953
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package    unique_munk
 * @subpackage Functions
 * @author     ThemeMunk <support@thememunk.com>
 * @copyright  Copyright (c) 2015 - 2016, ThemeMunk
 * @link       http://thememunk.com/theme/unique-munk
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! function_exists( 'uniquemunk_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function uniquemunk_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on uniquemunk, use a find and replace
	 * to change 'unique-munk' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'unique-munk' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// add custmo logo support
	add_theme_support( 'custom-logo', array(
		'height'      => 70,
		'width'       => 185,
		'flex-width' => true,
		'flex-height' => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'uniquemunk-feature', 850, 450, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'unique-munk' ),
		'topmenu' => esc_html__( 'Top Header Menu', 'unique-munk' ),
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

	$uniquemunk_args = array(
		'default-color' => 'F0F1F1',
		'default-image' => '',
	);
	add_theme_support( 'custom-background', $uniquemunk_args );


}
endif;
add_action( 'after_setup_theme', 'uniquemunk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function uniquemunk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'uniquemunk_content_width', 720 );
}
add_action( 'after_setup_theme', 'uniquemunk_content_width', 0 );


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... * 
 */
if ( ! function_exists( 'uniquemunk_excerpt_more' ) && ! is_admin() ) :

function uniquemunk_excerpt_more() {
	return ' &hellip; ';
}
add_filter( 'excerpt_more', 'uniquemunk_excerpt_more' );

endif;

/* Change Excerpt length */
if ( ! function_exists( 'uniquemunk_excerpt_length' ) && ! is_admin() ) :

function uniquemunk_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'uniquemunk_excerpt_length', 999 );

endif;


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function uniquemunk_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'unique-munk' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'uniquemunk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function uniquemunk_scripts() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'jquery-meanmenu', get_template_directory_uri() . '/css/meanmenu.css' );
	wp_enqueue_style( 'jquery-sidr-light', get_template_directory_uri() . '/css/jquery.sidr.light.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'uniquemunk-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js', array('jquery'), true );
	wp_enqueue_script( 'jquery-sidr', get_template_directory_uri() . '/js/jquery.sidr.js', array('jquery'), true );
	wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.js', array('jquery'), true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), true );
	wp_enqueue_script( 'uniquemunk-js', get_template_directory_uri() . '/js/unique-munk.js', array('jquery'), true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'uniquemunk_scripts' );

/**
 * Registers an editor stylesheet for the theme.
 */
function uniquemunk_theme_add_editor_styles() {
	add_editor_style( 'css/editor-style.css' );
}
add_action( 'admin_init', 'uniquemunk_theme_add_editor_styles' );


/**
 * Register custom fonts.
 */
function uniquemunk_fonts_url() {

	$fonts_url = '';
	
	/* Translators: If there are characters in your language that are not
	* supported by Source Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$source_sans = _x( 'on', 'Source Sans Pro: on or off', 'unique-munk' );
	 
	/* Translators: If there are characters in your language that are not
	* supported by Coda, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$coda = _x( 'on', 'Coda: on or off', 'unique-munk' );
	 
	if ( 'off' !== $source_sans || 'off' !== $coda ) {
	$font_families = array();	
	 
	if ( 'off' !== $source_sans ) {
	$font_families[] = 'Source Sans Pro:300,400,600,700,900';
	}
	 
	if ( 'off' !== $coda ) {
	$font_families[] = 'Coda';
	}
	 
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	 
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );
}

function uniquemunk_scripts_styles() {
	wp_enqueue_style( 'unique-munk-fonts', uniquemunk_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'uniquemunk_scripts_styles' );


function uniquemunk_admin_scripts() {
	
	wp_enqueue_style( 'unique-munk-admin-style',get_template_directory_uri().'/inc/css/admin.css', '1.0', 'screen' );
	
}
add_action( 'customize_controls_enqueue_scripts', 'uniquemunk_admin_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer functions
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme Info in Customizer
 */
require get_template_directory() . '/inc/info.php';
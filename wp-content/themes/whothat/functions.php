<?php
/**
 * Created by PhpStorm.
 * User: SK-WhoThat
 * Date: 27-07-2017
 * Time: 14:25
 */
defined( 'ABSPATH' ) or die();
define( 'WHOTHAT_SITE_VERSION', '1.0.0' );

/**
 * include : CUSTOM FUNCTIONS
 */
//include_once get_template_directory() . '/functions/lana-menu.php';
include_once get_template_directory() . '/functions/whothat-theme.php';
include_once get_template_directory() . '/functions/whothat-theme-customizer.php';
include_once get_template_directory() . '/functions/whothat-composer-elements.php';
include_once get_template_directory() . '/functions/whothat-extras.php';

/**
 * REMOVE WP STUFF
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rest_output_link_wp_head', 10 );
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10 );

/**
 * ACQUIRE FONT-AWESOME
 */
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

/**
 * CSS
 */


/**
 * JAVASCRIPT
 */
//wp_enqueue_script( 'main', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.1, true);
wp_register_script( 'hamburger', get_template_directory_uri() . '/js/hamburger.js', array( 'jquery' ), '1.0.0' );
wp_enqueue_script( 'hamburger' );
wp_register_script( 'loader', get_template_directory_uri() . '/js/loader.js', array( 'jquery' ), '1.0.0' );
wp_enqueue_script( 'loader' );


/**
 * ADD SUPPORT FOR NAV_MENUS.
 */
function main_nav() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu-1' => __( 'Footer Menu 1' ),
			'footer-menu-2' => __( 'Footer Menu 2' ),
			'footer-menu-3' => __( 'Footer Menu 3' ),

		)
	);
}
add_action( 'init', 'main_nav' );
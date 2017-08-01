<?php
defined( 'ABSPATH' ) or die();

/**
 * Include the TGM_Plugin_Activation class
 */
require_once get_template_directory() . '/functions/class-tgm-plugin-activation.php';

/**
 * Register the required plugins for this theme
 */
function lana_site_register_required_plugins() {

	$plugins = array(
		array(
			'name'               => __( 'Lana Shortcodes', 'lana-site' ),
			'slug'               => 'lana-shortcodes',
			'required'           => false,
			'version'            => '1.0.6',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => ''
		),
		array(
			'name'               => __( 'Lana Breadcrumb', 'lana-site' ),
			'slug'               => 'lana-breadcrumb',
			'required'           => false,
			'version'            => '1.0.1',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => ''
		),
		array(
			'name'               => __( 'Lana Widgets', 'lana-site' ),
			'slug'               => 'lana-widgets',
			'required'           => false,
			'version'            => '1.0.6',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => ''
		),
		array(
			'name'               => __( 'Lana Contact Form', 'lana-site' ),
			'slug'               => 'lana-contact-form',
			'required'           => false,
			'version'            => '1.0.2',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => ''
		)
	);

	$config = array(
		'id'           => 'lana',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => ''
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'lana_site_register_required_plugins' );
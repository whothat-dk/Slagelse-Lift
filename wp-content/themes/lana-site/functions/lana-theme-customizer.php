<?php
defined( 'ABSPATH' ) or die();

/**
 * Class Lana_Site_Customize
 */
class Lana_Site_Customize{

	/**
	 * @param WP_Customize_Manager $wp_customize
	 */
	public static function register( $wp_customize ) {

		/**
		 * Site Identity
		 */
		$wp_customize->get_setting( 'custom_logo' )->transport     = 'refresh';
		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

		/**
		 * Display
		 * options
		 */
		$wp_customize->add_section( 'lana_site_display', array(
			'title'      => __( 'Display', 'lana-site' ),
			'priority'   => 35,
			'capability' => 'edit_theme_options'
		) );

		/** display - style */
		$wp_customize->add_setting( 'lana_site_display_style', array(
			'default'           => 'inverse',
			'sanitize_callback' => 'lana_site_sanitize_display_style',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_display_style_select', array(
			'label'       => __( 'Display Style', 'lana-site' ),
			'section'     => 'lana_site_display',
			'settings'    => 'lana_site_display_style',
			'type'        => 'select',
			'choices'     => array(
				'default' => __( 'Default (light)', 'lana-site' ),
				'inverse' => __( 'Inverse (dark)', 'lana-site' )
			),
			'description' => __( 'Select the display style', 'lana-site' )
		) );

		/** display - layout */
		$wp_customize->add_setting( 'lana_site_display_layout', array(
			'default'           => 'wide',
			'sanitize_callback' => 'lana_site_sanitize_display_layout',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_display_layout_select', array(
			'label'       => __( 'Display Layout', 'lana-site' ),
			'section'     => 'lana_site_display',
			'settings'    => 'lana_site_display_layout',
			'type'        => 'select',
			'choices'     => array(
				'boxed' => __( 'Boxed', 'lana-site' ),
				'wide'  => __( 'Wide', 'lana-site' )
			),
			'description' => __( 'Select the body display layout', 'lana-site' )
		) );

		/** display - navbar position */
		$wp_customize->add_setting( 'lana_site_display_navbar_position', array(
			'default'           => 'header',
			'sanitize_callback' => 'lana_site_sanitize_display_navbar_position',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_display_navbar_position_select', array(
			'label'       => __( 'Navbar Position', 'lana-site' ),
			'section'     => 'lana_site_display',
			'settings'    => 'lana_site_display_navbar_position',
			'type'        => 'select',
			'choices'     => array(
				'header'  => __( 'in Header', 'lana-site' ),
				'content' => __( 'in Content', 'lana-site' )
			),
			'description' => __( 'Select the navbar position', 'lana-site' )
		) );

		/** display - navbar sticky */
		$wp_customize->add_setting( 'lana_site_display_navbar_sticky', array(
			'default'           => '0',
			'sanitize_callback' => 'lana_site_sanitize_display_navbar_sticky',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_nav_sticky_select', array(
			'label'       => __( 'Navbar Sticky', 'lana-site' ),
			'section'     => 'lana_site_display',
			'settings'    => 'lana_site_display_navbar_sticky',
			'type'        => 'select',
			'choices'     => array(
				'0' => 'Disabled',
				'1' => 'Enabled'
			),
			'description' => __( 'Select the sticky navbar option', 'lana-site' )
		) );

		/**
		 * Header
		 * options
		 */
		$wp_customize->add_section( 'lana_site_header', array(
			'title'      => __( 'Header', 'lana-site' ),
			'priority'   => 36,
			'capability' => 'edit_theme_options'
		) );

		/** header - site title font */
		$wp_customize->add_setting( 'lana_site_header_site_title_font', array(
			'default'           => 'Pacifico',
			'sanitize_callback' => 'lana_site_sanitize_header_site_title_font',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$google_fonts_link = 'http://google.com/fonts';

		$wp_customize->add_control( 'lana_site_header_site_title_font_select', array(
			'label'       => __( 'Site Title Font', 'lana-site' ),
			'section'     => 'lana_site_header',
			'settings'    => 'lana_site_header_site_title_font',
			'type'        => 'text',
			'description' => __( 'Select the logo Google Fonts', 'lana-site' ) . ' (<a href="' . $google_fonts_link . '" target="_blank">google.com/fonts</a>)'
		) );

		/** header - site title position */
		$wp_customize->add_setting( 'lana_site_header_site_title_position', array(
			'default'           => 'center',
			'sanitize_callback' => 'lana_site_sanitize_header_site_title_position',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_header_site_title_position_select', array(
			'label'       => __( 'Site Title Position', 'lana-site' ),
			'section'     => 'lana_site_header',
			'settings'    => 'lana_site_header_site_title_position',
			'type'        => 'select',
			'choices'     => array(
				'left'   => __( 'Left', 'lana-site' ),
				'center' => __( 'Center', 'lana-site' )
			),
			'description' => __( 'Select the Site Title (or Logo) position', 'lana-site' )
		) );

		/** header - search widget */
		$wp_customize->add_setting( 'lana_site_header_search_widget', array(
			'default'           => '0',
			'sanitize_callback' => 'lana_site_sanitize_header_search_widget',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_header_search_widget_select', array(
			'label'       => __( 'Search Widget', 'lana-site' ),
			'section'     => 'lana_site_header',
			'settings'    => 'lana_site_header_search_widget',
			'type'        => 'select',
			'choices'     => array(
				'1' => __( 'Display', 'lana-site' ),
				'0' => __( 'Hidden', 'lana-site' )
			),
			'description' => __( 'The search widget always hidden when Site Title Position is center', 'lana-site' )
		) );

		/**
		 * Colors
		 */
		$lana_background_color_default = '';
		$lana_tagline_color_default    = '';

		/** default style default color */
		if ( get_theme_mod( 'lana_site_display_style', 'inverse' ) == 'default' ) {
			$lana_background_color_default = 'eeeeee';
			$lana_tagline_color_default    = '';
		}

		/** inverse style default color */
		if ( get_theme_mod( 'lana_site_display_style', 'inverse' ) == 'inverse' ) {
			$lana_background_color_default = '37434b';
			$lana_tagline_color_default    = 'fff';
		}

		$wp_customize->get_setting( 'background_color' )->default   = $lana_background_color_default;
		$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

		/** lana tagline color */
		$wp_customize->add_setting( 'lana_site_tagline_color', array(
			'default'           => $lana_tagline_color_default,
			'sanitize_callback' => 'sanitize_hex_color_no_hash',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lana_site_tagline_color', array(
			'label'       => __( 'Tagline Color', 'lana-site' ),
			'section'     => 'colors',
			'settings'    => 'lana_site_tagline_color',
			'description' => __( 'Select the tagline (site description in header) color', 'lana-site' )
		) ) );

		/**
		 * Background Image
		 */
		$wp_customize->get_setting( 'background_image' )->transport = 'refresh';

		/** lana background image */
		$wp_customize->add_setting( 'lana_site_background_image', array(
			'default'           => 'shattered',
			'sanitize_callback' => 'lana_site_sanitize_background_image',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_background_image_select', array(
			'label'       => __( 'Lana Site - Background Image', 'lana-site' ),
			'section'     => 'background_image',
			'settings'    => 'lana_site_background_image',
			'type'        => 'select',
			'choices'     => array(
				'flowers'   => __( 'flowers.png', 'lana-site' ),
				'games'     => __( 'games.png', 'lana-site' ),
				'shattered' => __( 'shattered.png', 'lana-site' ),
				'waves'     => __( 'waves.png', 'lana-site' )
			),
			'description' => __( 'Select the predefined body background image', 'lana-site' )
		) );

		/**
		 * Footer
		 * options
		 */
		$wp_customize->add_section( 'lana_site_footer', array(
			'title'      => __( 'Footer', 'lana-site' ),
			'priority'   => 110,
			'capability' => 'edit_theme_options'
		) );

		/** footer - type */
		$wp_customize->add_setting( 'lana_site_footer_type', array(
			'default'           => 'text',
			'sanitize_callback' => 'lana_site_sanitize_footer_type',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_footer_type_select', array(
			'label'       => __( 'Footer Type', 'lana-site' ),
			'section'     => 'lana_site_footer',
			'settings'    => 'lana_site_footer_type',
			'type'        => 'select',
			'choices'     => array(
				'text'   => __( 'Text', 'lana-site' ),
				'navbar' => __( 'Navbar (Lana Footer Menu)', 'lana-site' )
			),
			'description' => __( 'Select the footer type', 'lana-site' )
		) );

		/** footer - text */
		$wp_customize->add_setting( 'lana_site_footer_text', array(
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );

		$wp_customize->add_control( 'lana_site_footer_text_text', array(
			'label'    => __( 'Footer Text', 'lana-site' ),
			'section'  => 'lana_site_footer',
			'settings' => 'lana_site_footer_text',
			'type'     => 'text'
		) );

		/** footer - position */
		$wp_customize->add_setting( 'lana_site_footer_position', array(
			'default'           => 'right',
			'sanitize_callback' => 'lana_site_sanitize_footer_position',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_footer_position_select', array(
			'label'       => __( 'Footer Position', 'lana-site' ),
			'section'     => 'lana_site_footer',
			'settings'    => 'lana_site_footer_position',
			'type'        => 'select',
			'choices'     => array(
				'left'  => __( 'Left', 'lana-site' ),
				'right' => __( 'Right', 'lana-site' )
			),
			'description' => __( 'Select the footer position', 'lana-site' )
		) );

		/** footer - copyright position */
		$wp_customize->add_setting( 'lana_site_footer_copyright_position', array(
			'default'           => 'left',
			'sanitize_callback' => 'lana_site_sanitize_footer_copyright_position',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options'
		) );

		$wp_customize->add_control( 'lana_site_footer_copyright_position_select', array(
			'label'       => __( 'Footer Copyright Position', 'lana-site' ),
			'section'     => 'lana_site_footer',
			'settings'    => 'lana_site_footer_copyright_position',
			'type'        => 'select',
			'choices'     => array(
				'left'  => __( 'Left', 'lana-site' ),
				'right' => __( 'Right', 'lana-site' )
			),
			'description' => __( 'Select the footer copyright text position', 'lana-site' )
		) );
	}

	/**
	 * Inline style
	 * custom WordPress settings
	 * Used by hook: 'wp_enqueue_scripts'
	 * @see add_action('wp_enqueue_scripts',$func)
	 */
	public static function custom_inline_style() {

		$lana_background_color_default = '';
		$lana_tagline_color_default    = '';

		/** default style default color */
		if ( get_theme_mod( 'lana_site_display_style', 'inverse' ) == 'default' ) {
			$lana_background_color_default = 'eeeeee';
			$lana_tagline_color_default    = '';
		}

		/** inverse style default color */
		if ( get_theme_mod( 'lana_site_display_style', 'inverse' ) == 'inverse' ) {
			$lana_background_color_default = '37434b';
			$lana_tagline_color_default    = 'fff';
		}

		wp_add_inline_style( 'lana-site-theme', self::generate_css( 'body', 'background-color', 'background_color', $lana_background_color_default, '#' ) );
		wp_add_inline_style( 'lana-site-theme', self::generate_css( '.header .site-title', 'font-family', 'lana_site_header_site_title_font', 'Pacifico', '"', '"' ) );
		wp_add_inline_style( 'lana-site-theme', self::generate_css( '.header .site-description', 'color', 'lana_site_tagline_color', $lana_tagline_color_default, '#' ) );
	}

	/**
	 * Enqueue style
	 * google fonts
	 * Used by hook: 'wp_enqueue_scripts'
	 * @see add_action('wp_enqueue_scripts',$func)
	 */
	public static function custom_enqueue_style() {

		$font_family = get_theme_mod( 'lana_site_header_site_title_font', 'Pacifico' );
		$font_family = str_replace( ' ', '+', $font_family );

		wp_enqueue_style( 'header-font', 'http://fonts.googleapis.com/css?family=' . esc_attr( $font_family ) );
	}

	/**
	 * This outputs the javascript needed to automate the live settings preview
	 * Used by hook: 'customize_preview_init'
	 * @see add_action('customize_preview_init',$func)
	 */
	public static function live_preview() {
		wp_enqueue_script( 'lana-site-customizer-preview', get_template_directory_uri() . '/js/customize-preview.js', array(
			'jquery',
			'customize-preview'
		), LANA_SITE_VERSION, true );
	}

	/**
	 * This will generate a line of CSS for use in header output
	 * If the setting ($mod_name) has no defined value, the CSS will not be output
	 * @uses get_theme_mod()
	 *
	 * @param $selector - CSS selector
	 * @param $style - CSS *property* to modify
	 * @param $theme_mod_name - 'theme_mod' name
	 * @param bool|false $theme_mod_default - 'theme_mod' default
	 * @param string $prefix - before the CSS property
	 * @param string $postfix - after the CSS property
	 * @param bool|true $echo
	 *
	 * @return string
	 */
	public static function generate_css( $selector, $style, $theme_mod_name, $theme_mod_default = false, $prefix = '', $postfix = '', $echo = false ) {
		$return = '';
		$mod    = get_theme_mod( $theme_mod_name, $theme_mod_default );

		if ( ! empty( $mod ) ) {
			$return = sprintf( '%s { %s:%s; }', $selector, $style, $prefix . $mod . $postfix );
			if ( $echo ) {
				echo $return;
			}
		}

		return $return;
	}
}

add_action( 'customize_register', array( 'Lana_Site_Customize', 'register' ) );
add_action( 'wp_enqueue_scripts', array( 'Lana_Site_Customize', 'custom_inline_style' ), 11 );
add_action( 'wp_enqueue_scripts', array( 'Lana_Site_Customize', 'custom_enqueue_style' ), 11 );
add_action( 'customize_preview_init', array( 'Lana_Site_Customize', 'live_preview' ) );

/**
 * Lana Site - Customize Controls
 * scripts
 */
function lana_site_customize_controls_scripts() {

	wp_enqueue_script( 'lana-site-customize-controls', get_template_directory_uri() . '/js/customize-controls.js', array(
		'jquery'
	), LANA_SITE_VERSION, true );

	wp_localize_script( 'lana-site-customize-controls', 'lanaL10n', array(
		'lanaSiteLabel' => __( 'Lana Site', 'lana-site' )
	) );
}

add_action( 'customize_controls_enqueue_scripts', 'lana_site_customize_controls_scripts' );

/**
 * Lana Site - Customize Controls
 * styles
 */
function lana_site_customize_controls_styles() {

	wp_enqueue_style( 'lana-site-customize-controls', get_template_directory_uri() . '/css/customize-controls.css', array(), LANA_SITE_VERSION );
}

add_action( 'customize_controls_enqueue_scripts', 'lana_site_customize_controls_styles' );

/**
 * Sanitize
 * display - style
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_display_style( $value ) {

	$default_value     = 'inverse';
	$acceptable_values = array( 'default', 'inverse' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * display - layout
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_display_layout( $value ) {

	$default_value     = 'wide';
	$acceptable_values = array( 'boxed', 'wide' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * dislay - navbar position
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_display_navbar_position( $value ) {

	$default_value     = 'header';
	$acceptable_values = array( 'header', 'content' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * dislay - navbar sticky
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_display_navbar_sticky( $value ) {

	$default_value     = '0';
	$acceptable_values = array( '0', '1' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * header - site title font
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_header_site_title_font( $value ) {

	$default_value = 'Pacifico';

	if ( $value == '' ) {
		$value = $default_value;
	}

	return sanitize_text_field( $value );
}

/**
 * Sanitize
 * header - site title position
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_header_site_title_position( $value ) {

	$default_value     = 'center';
	$acceptable_values = array( 'left', 'center' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * header - search widget
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_header_search_widget( $value ) {

	$default_value     = '0';
	$acceptable_values = array( '0', '1' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * background image
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_background_image( $value ) {

	$default_value     = 'shattered';
	$acceptable_values = array( 'flowers', 'games', 'shattered', 'waves' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * footer - type
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_footer_type( $value ) {

	$default_value     = 'text';
	$acceptable_values = array( 'text', 'navbar' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * footer - position
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_footer_position( $value ) {

	$default_value     = 'right';
	$acceptable_values = array( 'left', 'right' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Sanitize
 * footer - copyright position
 *
 * @param $value
 *
 * @return string
 */
function lana_site_sanitize_footer_copyright_position( $value ) {

	$default_value     = 'left';
	$acceptable_values = array( 'left', 'right' );

	if ( ! in_array( $value, $acceptable_values ) ) {
		$value = $default_value;
	}

	return $value;
}

/**
 * Add predefined background image to body class
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_body_class( $classes ) {

	/** check theme mod */
	if ( get_theme_mod( 'background_image', '' ) != '' ) {
		return $classes;
	}

	/** add lana predefined background image */
	return array_merge( $classes, array(
		'lana-background-image',
		get_theme_mod( 'lana_site_background_image', 'shattered' )
	) );
}

add_filter( 'body_class', 'lana_site_theme_customize_body_class', 1000 );

/**
 * Add theme customize display layout to main navbar
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_layout_class_to_main_navbar( $classes ) {

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'wide' ) {
		$classes[] = 'wide-navigation';
	}

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'boxed' ) {
		$classes[] = 'boxed-navigation';
	}

	return $classes;
}

add_filter( 'lana_site_main_navbar_in_header_class', 'lana_site_theme_customize_display_layout_class_to_main_navbar' );
add_filter( 'lana_site_main_navbar_in_content_class', 'lana_site_theme_customize_display_layout_class_to_main_navbar' );

/**
 * Add theme customize display layout to main navbar
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_layout_class_to_navbar_in_content_container( $classes ) {

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'wide' ) {
		$classes[] = 'container';
	}

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'boxed' ) {
		$classes[] = 'without-container';
	}

	return $classes;
}

add_filter( 'lana_site_main_navbar_in_content_container_class', 'lana_site_theme_customize_display_layout_class_to_navbar_in_content_container' );

/**
 * Add theme customize display style to main navbar
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_style_class_to_main_navbar( $classes ) {

	/** add navbar style */
	return array_merge( $classes, array(
		'navbar-' . get_theme_mod( 'lana_site_display_style', 'inverse' )
	) );
}

add_filter( 'lana_site_main_navbar_class', 'lana_site_theme_customize_display_style_class_to_main_navbar' );

/**
 * Add theme customize display layout to main container
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_layout_class_to_main_container( $classes ) {

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'wide' ) {
		$classes[] = 'main-wide';
	}

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'boxed' ) {
		$classes[] = 'main-boxed';
		$classes[] = 'container';
	}

	return $classes;
}

add_filter( 'lana_site_main_container_class', 'lana_site_theme_customize_display_layout_class_to_main_container' );

/**
 * Add theme customize display style to header
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_style_class_to_header( $classes ) {

	/** add header style */
	return array_merge( $classes, array(
		get_theme_mod( 'lana_site_display_style', 'inverse' )
	) );
}

add_filter( 'lana_site_header_class', 'lana_site_theme_customize_display_style_class_to_header' );

/**
 * Add theme customize display layout to header container
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_layout_class_to_header_container( $classes ) {

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'wide' ) {
		$classes[] = 'container';
	}

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'boxed' ) {
		$classes[] = 'boxed';
	}

	return $classes;
}

add_filter( 'lana_site_header_container_class', 'lana_site_theme_customize_display_layout_class_to_header_container' );

/**
 * Add theme customize header position to header site title container
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_header_site_title_position_class_to_header_site_title_container( $classes ) {

	if ( get_theme_mod( 'lana_site_header_site_title_position', 'center' ) == 'left' ) {
		$classes[] = 'col-md-6';
	}

	if ( get_theme_mod( 'lana_site_header_site_title_position', 'center' ) == 'center' ) {
		$classes[] = 'col-md-12';
		$classes[] = 'text-center';
	}

	return $classes;
}

add_filter( 'lana_site_header_site_title_container_class', 'lana_site_theme_customize_header_site_title_position_class_to_header_site_title_container' );

/**
 * Add theme customize display navbar position to breadcrumb container
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_navbar_position_class_to_breadcrumb_container( $classes ) {

	if ( get_theme_mod( 'display_navbar_position', 'header' ) == 'header' ) {
		$classes[] = 'breadcrumb-border';
	}

	return $classes;
}

add_filter( 'lana_site_breadcrumb_container_class', 'lana_site_theme_customize_display_navbar_position_class_to_breadcrumb_container' );

/**
 * Add theme customize display layout to breadcrumb container inner
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_layout_class_to_breadcrumb_container_inner( $classes ) {

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'wide' ) {
		$classes[] = 'container';
	}

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'boxed' ) {
		$classes[] = 'boxed';
	}

	return $classes;
}

add_filter( 'lana_site_breadcrumb_container_inner_class', 'lana_site_theme_customize_display_layout_class_to_breadcrumb_container_inner' );

/**
 * Add theme customize display layout to main content container
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_layout_class_to_main_content_container( $classes ) {

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'wide' ) {
		$classes[] = 'wide-content';
		$classes[] = 'container';
	}

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'boxed' ) {
		$classes[] = 'boxed-content';
		$classes[] = 'container-fluid';
	}

	return $classes;
}

add_filter( 'lana_site_main_content_container_class', 'lana_site_theme_customize_display_layout_class_to_main_content_container' );

/**
 * Add theme customize display layout to pre footer
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_layout_class_to_pre_footer( $classes ) {

	if ( get_theme_mod( 'lana_site_display_layout', 'wide' ) == 'boxed' ) {
		$classes[] = 'boxed';
	}

	return $classes;
}

add_filter( 'lana_site_pre_footer_class', 'lana_site_theme_customize_display_layout_class_to_pre_footer' );

/**
 * Add theme customize display style to pre footer
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_style_class_to_pre_footer( $classes ) {

	/** add pre footer style */
	return array_merge( $classes, array(
		get_theme_mod( 'lana_site_display_style', 'inverse' )
	) );
}

add_filter( 'lana_site_pre_footer_class', 'lana_site_theme_customize_display_style_class_to_pre_footer' );

/**
 * Add theme customize display style to footer
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_display_style_class_to_footer( $classes ) {

	/** add footer style */
	return array_merge( $classes, array(
		get_theme_mod( 'lana_site_display_style', 'inverse' )
	) );
}

add_filter( 'lana_site_footer_class', 'lana_site_theme_customize_display_style_class_to_footer' );

/**
 * Add theme customize footer position to footer
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_footer_position_class_to_footer( $classes ) {

	/** add footer position */
	return array_merge( $classes, array(
		'pull-' . get_theme_mod( 'lana_site_footer_position', 'right' )
	) );
}

add_filter( 'lana_site_footer_text_class', 'lana_site_theme_customize_footer_position_class_to_footer' );
add_filter( 'lana_site_footer_navbar_class', 'lana_site_theme_customize_footer_position_class_to_footer' );

/**
 * Add theme customize footer copyright position to footer copyright
 *
 * @param $classes
 *
 * @return array
 */
function lana_site_theme_customize_footer_copyright_position_class_to_footer_copyright( $classes ) {

	/** add footer copyright position */
	return array_merge( $classes, array(
		'pull-' . get_theme_mod( 'lana_site_footer_copyright_position', 'right' )
	) );
}

add_filter( 'lana_site_footer_copyright_class', 'lana_site_theme_customize_footer_copyright_position_class_to_footer_copyright' );

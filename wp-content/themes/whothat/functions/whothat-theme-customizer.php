<?php
/**
 * Created by PhpStorm.
 * User: SK-WhoThat
 * Date: 31-07-2017
 * Time: 14:48
 */
defined( 'ABSPATH' ) or die();

// ADD SUPPORT FOR THEME CUSTOMIZATION
add_action( 'customize_register', 'theme_options' );

/**
 * Wp Customize
 */
function theme_options( $wp_customize ) {

	// Header settings
	$wp_customize->add_section( 'header_options',
		array(
			'title'       => __( 'Header Settings', 'slagelselift' ),
			'priority'    => 100,
			'description' => __('Change header options here.', 'slagelselift'),
		)
	);

	// Footer settings
	$wp_customize->add_section( 'footer_options',
		array(
			'title'       => __( 'Footer Settings', 'slagelselift' ),
			'priority'    => 100,
			'description' => __('Change footer options here.', 'slagelselift'),
		)
	);

	// Header
	$wp_customize->add_setting( 'header_logo' );
	$wp_customize->add_setting( 'resp_logo' );
	$wp_customize->add_setting( 'header_background' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
		'label'         => __( 'Logo', 'slagelselift' ),
		'section'       => 'header_options',
		'settings'      => 'header_logo',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'resp_logo', array(
		'label'         => __( 'Mobile menu logo', 'slagelselift' ),
		'section'       => 'header_options',
		'settings'      => 'resp_logo',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_background', array(
		'label'         => __( 'Header background image', 'slagelselift' ),
		'section'       => 'header_options',
		'settings'      => 'header_background',
		'height'        => 200,
		'flex-height'   => true,
		'default-image' => get_template_directory_uri() . './assets/images/banner-bg.jpg',
		'header-text'   => false,
	) ) );

	// Footer
	$wp_customize->add_setting( 'footer_logo' );
	$wp_customize->add_setting( 'footer_slagelse_vej' );
	$wp_customize->add_setting( 'footer_slagelse_by' );
	$wp_customize->add_setting( 'footer_herlev_vej' );
	$wp_customize->add_setting( 'footer_herlev_by' );
	$wp_customize->add_setting( 'footer_contact_mail' );
	$wp_customize->add_setting( 'footer_contact_tel' );
	$wp_customize->add_setting( 'footer_logo_1' );
	$wp_customize->add_setting( 'footer_logo_2' );
	$wp_customize->add_setting( 'footer_logo_3' );
	$wp_customize->add_setting( 'footer_logo_4' );
	$wp_customize->add_setting( 'footer_disclaimer' );

	// Footer : LOGO
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label'         => __( 'LOGO', 'slagelselift' ),
		'section'       => 'footer_options',
		'settings'      => 'footer_logo',
	) ) );

	// Footer : SLAGELSE
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_slagelse_vej', array(
		'label'         => __( 'SLAGELSE', 'slagelselift' ),
		'section'       => 'footer_options',
		'settings'      => 'footer_slagelse_vej',
		'type'          => 'text',
		'description'   => 'Adresse',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_slagelse_by', array(
		'section'       => 'footer_options',
		'settings'      => 'footer_slagelse_by',
		'type'          => 'text',
		'description'   => 'Postnr. & By',
	) ) );

	// Footer : HERLEV
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_herlev_vej', array(
		'label'         => __( 'HERLEV', 'slagelselift' ),
		'section'       => 'footer_options',
		'settings'      => 'footer_herlev_vej',
		'type'          => 'text',
		'description'   => 'Addresse',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_herlev_by', array(
		'section'       => 'footer_options',
		'settings'      => 'footer_herlev_by',
		'type'          => 'text',
		'description'   => 'Postnr. & By',
	) ) );

	// Footer : CONTACT
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_mail', array(
		'label'         => __( 'KONTAKT', 'slagelselift' ),
		'section'       => 'footer_options',
		'settings'      => 'footer_contact_mail',
		'type'          => 'email',
		'description'   => 'Mail',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_tel', array(
		'section'       => 'footer_options',
		'settings'      => 'footer_contact_tel',
		'type'          => 'text',
		'description'   => 'Telefon',
	) ) );

	// Footer : IMAGE #1
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_1', array(
		'label'    => __( 'FOOTER LOGO #1', 'slagelselift' ),
		'section'  => 'footer_options',
		'settings' => 'footer_logo_1',
	) ) );

	// Footer : IMAGE #2
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_2', array(
		'label'    => __( 'FOOTER LOGO #2', 'slagelselift' ),
		'section'  => 'footer_options',
		'settings' => 'footer_logo_2',
	) ) );

	// Footer : IMAGE #3
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_3', array(
		'label'    => __( 'FOOTER LOGO #3', 'slagelselift' ),
		'section'  => 'footer_options',
		'settings' => 'footer_logo_3',
	) ) );

	// Footer : IMAGE #4
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_4', array(
		'label'    => __( 'FOOTER LOGO #4', 'slagelselift' ),
		'section'  => 'footer_options',
		'settings' => 'footer_logo_4',
	) ) );

	// Footer : DISCLAIMER
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_disclaimer', array(
		'section'       => 'footer_options',
		'settings'      => 'footer_disclaimer',
		'type'          => 'text',
		'description'   => 'DISCLAIMER',
	) ) );
}
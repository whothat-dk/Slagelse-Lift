<?php
/**
 * Created by PhpStorm.
 * User: SK-WhoThat
 * Date: 31-07-2017
 * Time: 14:48
 */
defined( 'ABSPATH' ) or die();

//ADD SUPPORT FOR THEME CUSTOMIZATION
add_action( 'customize_register', 'theme_options' );

/**
 * Wp Customize
 */
function theme_options( $wp_customize ) {

	//Header settings
	$wp_customize->add_section( 'header_options',
		array(
			'title'       => __( 'Header Settings', 'priisholm' ),
			'priority'    => 100,
			'description' => __('Change header options here.', 'priisholm'),
		)
	);

	//footer settings
	$wp_customize->add_section( 'footer_options',
		array(
			'title'       => __( 'Footer Settings', 'espenheins' ),
			'priority'    => 100,
			'description' => __('Change footer options here.', 'espenheins'),
		)
	);

	//Header
	$wp_customize->add_setting( 'header_logo' );
	$wp_customize->add_setting( 'resp_logo' );
	$wp_customize->add_setting( 'header_background' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
		'label'    => __( 'Logo', 'slagelse lift' ),
		'section'  => 'header_options',
		'settings' => 'header_logo',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'resp_logo', array(
		'label'         => __( 'Mobile menu logo', 'slagelse lift' ),
		'section'       => 'header_options',
		'settings'      => 'resp_logo',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_background', array(
		'label'         => __( 'Header background image', 'slagelse lift' ),
		'section'       => 'header_options',
		'settings'      => 'header_background',
		'height'        => 200,
		'flex-height'   => true,
		'default-image' => get_template_directory_uri() . './assets/images/banner-bg.jpg',
		'header-text'   => false,
	) ) );

	//Footer
	$wp_customize->add_setting( 'footer_logo' );
	$wp_customize->add_setting( 'footer_company' );
	$wp_customize->add_setting( 'footer_address' );
	$wp_customize->add_setting( 'footer_city' );
	$wp_customize->add_setting( 'footer_cvr' );
	$wp_customize->add_setting( 'footer_tel' );
	$wp_customize->add_setting( 'footer_email' );
	$wp_customize->add_setting( 'footer_logo_1' );
	$wp_customize->add_setting( 'footer_logo_2' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label'    => __( 'Logo', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_logo',
	) ) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_company', array(
		'label'    => __( 'Company', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_company',
		'type'     => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_address', array(
		'label'    => __( 'Address', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_address',
		'type'     => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_city', array(
		'label'    => __( 'City', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_city',
		'type'     => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_cvr', array(
		'label'    => __( 'CVR', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_cvr',
		'type'     => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_tel', array(
		'label'    => __( 'Telephone', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_tel',
		'type'     => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_email', array(
		'label'    => __( 'Email', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_email',
		'type'     => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_1', array(
		'label'    => __( 'Footer logoer 1', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_logo_1',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_2', array(
		'label'    => __( 'Footer logoer 2', 'espenheins' ),
		'section'  => 'footer_options',
		'settings' => 'footer_logo_2',
	) ) );
}
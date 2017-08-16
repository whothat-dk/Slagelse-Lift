<?php
/**
 * Created by PhpStorm.
 * User: SK-WhoThat
 * Date: 02-08-2017
 * Time: 15:16
 */

/**
 * Visual composer settings
 *
 * __ : Before VC Init
 */

add_action( 'vc_before_init', 'vc_before_init_actions' );

function vc_before_init_actions() {

	/**
	 * Require new custom Element
	 *
	 * [ Note!...                               ]
	 * [ Order here, will arrange the elements  ]
	 * [ in Visual Composer elements-tab!       ]
	 *
	 */

	// Page Content Elements
	require_once( get_template_directory().'/composer/contactBox.php' );
	require_once( get_template_directory().'/composer/imageBox.php' );
	require_once( get_template_directory().'/composer/iconbox.php' );
	require_once( get_template_directory().'/composer/mailSignUp.php' );

	// Social Elements
	require_once( get_template_directory().'/composer/socialFacebook.php' );
}
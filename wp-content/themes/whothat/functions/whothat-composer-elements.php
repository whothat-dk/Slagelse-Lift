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
	require_once( get_template_directory().'/composer/content-imageBox.php' );
	require_once( get_template_directory().'/composer/social-Facebook.php' );
	require_once( get_template_directory().'/composer/fa_iconbox.php' );
	//require_once( get_template_directory().'/composer/infoBox.php' );
	//require_once( get_template_directory().'/composer/employeeBox.php' );
	//require_once( get_template_directory().'/composer/faIconBox.php' );

}
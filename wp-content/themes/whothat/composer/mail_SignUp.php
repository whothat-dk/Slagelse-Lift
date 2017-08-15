<?php
/*
Element Description: VC mail signup form
*/

// Element Class
class vc_mailSignUp extends WPBakeryShortCode {

	// Element Init
	function __construct() {
		add_action( 'init', array( $this, 'vc_mailSignUp_mapping' ) );
		add_shortcode( 'vc_mailSignUp', array( $this, 'vc_render_mailSignUp' ) );
	}

	// Element Mapping
	public function vc_mailSignUp_mapping() {

		// Stop all if VC is not enabled
		if ( !defined( 'WPB_VC_VERSION' ) ) {
			return;
		}

		// Map the block with vc_map()
		vc_map(
			array(
				'name' => __('WHOTHAT mail SignUp-form', 'mailSignUp'),
				'base' => 'vc_mailSignUp',
				'description' => __('Custom imagebox, for displaying an image along with a title & subtext', 'mailSignUp'),
				'category' => __('WHOTHAT elements', 'mailSignUp'),
				'icon' => get_template_directory_uri().'/assets/icons/ic_vc-element_imagebox.png',
				'params' => array(

				),
			)
		);

	}


	// Element HTML
	public function vc_render_mailSignUp( $atts ) {

		// Params extraction
		extract(
			shortcode_atts(
				array(

				),
				$atts
			)
		);
		$href = vc_build_link( $target_link );

		// Fill $html var with data
		$html = '
	        <div class="vc_mailSignUp_wrap ' . esc_attr( $css ) . '">
                <div class="mailSignUpForm">
                    <h3>TILMELD NYHEDSBREV</h3>
                    <p>få nyheder og tilbud direkte ind<br>i indbakken.</p>
                    <form action="" method="post">
                        <input  id="signName" type="text" placeholder="Dit navn" value="" maxlength="" autocomplete="on" onmousedown="" onblur="" />
                        <input  id="signCompany" type="text" placeholder="Evt. firmanavn" value="" maxlength="" autocomplete="on" onmousedown="" onblur="" />
                        <input  id="signEmail" type="text" placeholder="Din e-mail adressse" value="" maxlength="" autocomplete="on" onmousedown="" onblur="" />
                        <button id="signUpBtn" type="submit" value=""/><span><a>Tilmeld dig nyhedsbrevet</a></span>
                    </form>
				</div>
	        </div>
        ';

		return $html;

	}

} // End Element Class

// Element Class Init
new vc_mailSignUp();
?>
<?php
/*
Element Description: VC fa icon_Box
*/

// Element Class
class vc_contactbox extends WPBakeryShortCode {

	// Element Init
	function __construct() {
		add_action( 'init', array( $this, 'vc_contactbox_mapping' ) );
		add_shortcode( 'vc_contactbox', array( $this, 'vc_render_contactbox' ) );
	}

	// Element Mapping
	public function vc_contactbox_mapping() {

		// Stop all if VC is not enabled
		if ( !defined( 'WPB_VC_VERSION' ) ) {
			return;
		}

		// Map the block with vc_map()
		vc_map(
			array(
				'name' => __('WHOTHAT Contact Box', 'vc_contactbox'),
				'base' => 'vc_contactbox',
				'description' => __('DESC', 'vc_contactbox'),
				'category' => __('WHOTHAT elements', 'vc_contactbox'),
				'icon' => get_template_directory_uri().'/assets/icons/ic_vc-element_imagebox.png',
				'params' => array(

					// contact : PHONE
					array(
						'param_name'    => 'vc_contactbox_phone',
						'heading'       => __( 'PHONE NUMBER', 'vc_contactbox' ),
						'description'   => __( 'Type in your contact phonenumber', 'vc_contactbox' ),
						'weight'        => 0,
						'type'          => 'textfield',
						'holder'        => 'h3',
						'placeholder'   => 'default text',
						'admin_label'   => false,
					),
					// Extra class
					array(
						'param_name'    => 'vc_contactbox_extracss',
						'heading'       => __( 'Extra class name', 'vc_contactbox' ),
						'description'   => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'vc_contactbox' ),
						'weight'        => 0,
						'type'          => 'textfield',
					),
					// CSS editor
					array(
						'param_name'    => 'vc_contactbox_cssoptions',
						'heading'       => __( 'Css', 'vc_contactbox' ),
						'description'   => __( 'xx', 'vc_contactbox' ),
						'group'         => __( 'Design options', 'vc_contactbox' ),
						'weight'        => 1,
						'type'          => 'css_editor',
					),
				),
			)
		);
	}


	// Element HTML
	public function vc_render_contactbox( $atts ) {

		// Params extraction
		extract(
			shortcode_atts(
				array(

					'vc_contactbox_phone'       => '',
					'vc_contactbox_extracss'    => '',
					'vc_contactbox_cssoptions'  => ''
				),
				$atts
			)
		);



		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $vc_contactbox_cssoptions, ' ' ), $this->settings['base'], $atts );
		// Fill $html var with data
		$html = '
	        <div class="vc_contactbox_wrap ' . $vc_contactbox_extracss . '">
                <div class="contactbox ' .esc_attr( $css_class ). '">
                    <h6>RING OG HØR NÆRMERE</h6>
                    <h1>'.$vc_contactbox_phone.'</h1>
				</div>
	        </div>
        ';

		return $html;

	}

} // End Element Class


// Element Class Init
new vc_contactbox();
?>
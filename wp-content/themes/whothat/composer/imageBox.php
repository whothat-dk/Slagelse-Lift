<?php
/*
Element Description: VC fa icon_Box
*/

// Element Class
class vc_imagebox extends WPBakeryShortCode {

	// Element Init
	function __construct() {
		add_action( 'init', array( $this, 'vc_imagebox_mapping' ) );
		add_shortcode( 'vc_imagebox', array( $this, 'vc_render_imagebox' ) );
	}

	// Element Mapping
	public function vc_imagebox_mapping() {

		// Stop all if VC is not enabled
		if ( !defined( 'WPB_VC_VERSION' ) ) {
			return;
		}

		// Map the block with vc_map()
		vc_map(
			array(
				'name' => __('WHOTHAT Image Box', 'image_box'),
				'base' => 'vc_imagebox',
				'description' => __('DESC', 'vc_imagebox'),
				'category' => __('WHOTHAT elements', 'vc_imagebox'),
				'icon' => get_template_directory_uri().'/assets/icons/ic_vc-element_imagebox.png',
				'params' => array(

					// ICON
					array(
						'param_name'    => 'vc_imagebox_image',
						'heading'       => __( 'ICON', 'vc_imagebox' ),
						'description'   => __( 'Set icon', 'vc_imagebox' ),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'textfield',
						'holder'        => 'h3',
						'admin_label'   => false,
					),
					// icon : LINK
					array(
						'param_name'    => 'vc_imagebox_targetlink',
						'heading'       => __( 'ICON LINK', 'vc_imagebox' ),
						'description'   => __( 'Choose which page to go to when clicked', 'vc_imagebox' ),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'vc_link',
						'admin_label'   => false,
					),
					// icon : LABEL
					array(
						'param_name'    => 'vc_imagebox_label',
						'heading'       => __( 'ICON LABEL', 'vc_imagebox' ),
						'description'   => __( 'Sets the label of the icon', 'vc_imagebox' ),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'textfield',
						'holder'        => 'h3',
						'admin_label'   => false,
					),
					// icon : SUBTEXT
					array(
						'param_name'    => 'vc_imagebox_subtext',
						'heading'       => __( 'ICON SUBTEXT', 'vc_imagebox' ),
						'description'   => __( 'Sets the subtext of the icon', 'vc_imagebox' ),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'textfield',
						'holder'        => 'h3',
						'admin_label'   => false,
					),
					// Extra class
					array(
						'param_name'    => 'vc_imagebox_extraCSS',
						'heading'       => __( 'Extra class name', 'vc_imagebox' ),
						'description'   => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'vc_imagebox' ),
						'group'         => __( 'Design options', 'vc_imagebox' ),
						'weight'        => 0,
						'type'          => 'textfield',
					),
					// CSS editor
					array(
						'param_name'    => 'vc_imagebox_cssOptions',
						'heading'       => __( 'Css', 'vc_imagebox' ),
						'description'   => __( 'xx', 'vc_imagebox' ),
						'group'         => __( 'Design options', 'vc_imagebox' ),
						'weight'        => 1,
						'type'            => 'css_editor',
					),
				),
			)
		);
	}


	// Element HTML
	public function vc_render_iconbox( $atts ) {



		// Params extraction
		extract(
			shortcode_atts(
				array(

					'vc_imagebox_image'      => '',
					'vc_imagebox_targetlink' => '',
					'vc_imagebox_label'      => 'icon LABEL',
					'vc_imagebox_subtext'    => 'icon SUBTEXT',
					'vc_imagebox_extraCSS'   => '',
					'vc_imagebox_cssOptions' => '',
				),
				$atts
			)
		);

		$href = vc_build_link( $target_link );
		if(strlen($href[url]) > 1) {

			$anchor =  '<a href="'. $href[url] .'" target="'.$href[target].'" class="vc_imagebox_targetlink" >';
			$anchor_end =  '</a>';
		} else {

			$anchor =  '';
			$anchor_end =  '';
		}



		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $vc_iconbox_cssOptions, ' ' ), $this->settings['base'], $atts );
		// Fill $html var with data
		$html = ' 
	        <div class="vc_imagebox_wrap ' . $vc_imagebox_extraCSS. '">
				<div class="imagebox ' .esc_attr( $css_class ). '">
					<img class="svg" src="'.$vc_imagebox_image.'">
					<h4>'.$vc_imagebox_label.'</h4>
					<p>'.$vc_imagebox_subtext.'</p>	
				</div>
			</div>	
        ';

		return $html;

	}

} // End Element Class


// Element Class Init
new vc_imagebox();
?>
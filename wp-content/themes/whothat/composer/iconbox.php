<?php
/*
Element Description: VC fa icon_Box
*/

// Element Class 
class vc_iconbox extends WPBakeryShortCode {

	// Element Init
	function __construct() {
		add_action( 'init', array( $this, 'vc_iconbox_mapping' ) );
		add_shortcode( 'vc_iconbox', array( $this, 'vc_render_iconbox' ) );
	}

	// Element Mapping
	public function vc_iconbox_mapping() {

		// Stop all if VC is not enabled
		if ( !defined( 'WPB_VC_VERSION' ) ) {
			return;
		}

		// Map the block with vc_map()
		vc_map(
			array(
				'name' => __('WHOTHAT Icon Box', 'icon_box'),
				'base' => 'vc_iconbox',
				'description' => __('DESC', 'vc_iconbox'),
				'category' => __('WHOTHAT elements', 'vc_iconbox'),
				'icon' => get_template_directory_uri().'/assets/icons/ic_vc-element_imagebox.png',
				'params' => array(

					// ICON
					array(
						'param_name'    => 'vc_iconbox_image',
						'heading'       => __( 'ICON', 'vc_iconbox' ),
						'description'   => __( 'Set icon', 'vc_iconbox' ),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'textfield',
						'holder'        => 'h3',
						'admin_label'   => false,
					),
					// icon : LINK
					array(
						'param_name'    => 'vc_iconbox_targetlink',
						'heading'       => __( 'ICON LINK', 'vc_iconbox' ),
						'description'   => __( 'Choose which page to go to when clicked', 'vc_iconbox' ),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'vc_link',
						'admin_label'   => false,
					),
					// icon : LABEL
					array(
						'param_name'    => 'vc_iconbox_label',
						'heading'       => __( 'ICON LABEL', 'vc_iconbox' ),
						'description'   => __( 'Sets the label of the icon', 'vc_iconbox' ),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'textfield',
						'holder'        => 'h3',
						'admin_label'   => false,
					),
					// icon : SUBTEXT
					array(
						'param_name'    => 'vc_iconbox_subtext',
						'heading'       => __( 'ICON SUBTEXT', 'vc_iconbox' ),
						'description'   => __( 'Sets the subtext of the icon', 'vc_iconbox' ),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'textfield',
						'holder'        => 'h3',
						'admin_label'   => false,
					),
					// Extra class
					array(
						'param_name'    => 'vc_iconbox_extraCSS',
						'heading'       => __( 'Extra class name', 'vc_iconbox' ),
						'description'   => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'vc_iconbox' ),
						'group'         => __( 'Design options', 'vc_iconbox' ),
						'weight'        => 0,
						'type'          => 'textfield',
					),
					// CSS editor
					array(
						'param_name'    => 'vc_iconbox_cssOptions',
						'heading'       => __( 'Css', 'vc_iconbox' ),
						'description'   => __( 'xx', 'vc_iconbox' ),
						'group'         => __( 'Design options', 'vc_iconbox' ),
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

					'vc_iconbox_image'      => '',
					'vc_iconbox_targetlink' => '',
					'vc_iconbox_label'      => 'icon LABEL',
					'vc_iconbox_subtext'    => 'icon SUBTEXT',
					'vc_iconbox_extraCSS'   => '',
					'vc_iconbox_cssOptions' => '',
				),
				$atts
			)
		);

		$href = vc_build_link( $target_link );
		if(strlen($href[url]) > 1) {

			$anchor =  '<a href="'. $href[url] .'" target="'.$href[target].'" class="vc_iconbox_targetlink" >';
			$anchor_end =  '</a>';
		} else {

			$anchor =  '';
			$anchor_end =  '';
		}

		// ...
		$svg = file_get_contents($vc_iconbox_image);

		// ...
		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $vc_iconbox_cssOptions, ' ' ), $this->settings['base'], $atts );
		// Fill $html var with data
		$html = ' 
	        <div class="vc_iconbox_wrap ' . $vc_iconbox_extraCSS. '">
				<div class="iconbox ' .esc_attr( $css_class ). '">
					
					<!-- Parsing the .svg image into the box -->
					'.$svg.'
					<!-- Parsing the labels into the box -->
					<h4>'.$vc_iconbox_label.'</h4>
					<p>'.$vc_iconbox_subtext.'</p>	
				</div>
			</div>	
        ';

		return $html;

	}

} // End Element Class


// Element Class Init
new vc_iconbox();
?>
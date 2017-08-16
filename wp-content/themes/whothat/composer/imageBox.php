<?php
/*
Element Description: VC Image Box
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
				'description' => __('Custom imagebox, for displaying an image along with a title & subtext', 'image_box'),
				'category' => __('WHOTHAT elements', 'image_box'),
				'icon' => get_template_directory_uri().'/assets/icons/ic_vc-element_imagebox.png',
				'params' => array(

					array(
						'type' => 'attach_image',
						'holder' => 'img',
						'heading' => __( 'Icon', 'image_box' ),
						'param_name' => 'icon',
						'admin_label' => false,
						'weight' => 0,
						'group' => 'General',
					),

					array(
						'type' => 'textfield',
						'holder' => 'h4',
						'heading' => __( 'Title', 'image_box' ),
						'param_name' => 'title',
						'value' => __( 'Input title', 'image_box' ),
						'admin_label' => false,
						'weight' => 1,
						'group' => 'General',
					),

					array(
						'type' => 'textfield',
						'holder' => 'h6',
						'heading' => __( 'Subtitle', 'image_box' ),
						'param_name' => 'subtitle',
						'value' => __( 'Input title', 'image_box' ),
						'admin_label' => false,
						'weight' => 2,
						'group' => 'General',
					),

					array(
						'type' => 'colorpicker',
						'heading' => __( 'Hover color', 'image_box' ),
						'param_name' => 'hover_color',
						'value' => __( 'Hover color', 'image_box' ),
						'admin_label' => false,
						'weight' => 3,
						'group' => 'General',
					),

					array(
						'type' => 'vc_link',
						'heading' => __( 'Choose page', 'image_box' ),
						'param_name' => 'target_link',
						'admin_label' => false,
						'weight' => 4,
						'group' => 'General',
					),

					array(
						'type' => 'css_editor',
						'heading' => __( 'Css', 'image_box' ),
						'param_name' => 'css',
						'group' => __( 'Design options', 'image_box' ),
					),
				),
			)
		);

	}


	// Element HTML
	public function vc_render_imagebox( $atts ) {

		// Params extraction
		extract(
			shortcode_atts(
				array(
					'icon'   => '',
					'title' => '',
					'subtitle'   => '',
					'hover_color' => '',
					'target_link' => '',
					'css' => '',
				),
				$atts
			)
		);
		$href = vc_build_link( $target_link );

		// Fill $html var with data
		$html = '
	        <div class="vc_imagebox_wrap ' . esc_attr( $css ) . '">
				<a href="'.$href[url].'" class="imagebox_link" >
	                <div class="vc_imagebox_image" >
	                	'.$iconlink.'
	                </div>
	                <div class="vc_imagebox_text">
	                
					</div>
        		</a>
	        </div>
        ';

		return $html;

	}

} // End Element Class


// Element Class Init
new vc_imagebox();
?>
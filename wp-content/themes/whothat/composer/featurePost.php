<?php
/*
Element Description: VC fa icon_Box
*/

// Element Class
class vc_featurePost extends WPBakeryShortCode {

	// Element Init
	function __construct() {
		add_action( 'init', array( $this, 'vc_featurePost_mapping' ) );
		add_shortcode( 'featurePost', array( $this, 'vc_render_featurePost' ) );
	}

	// Element Mapping
	public function vc_featurePost_mapping() {

		// Stop all if VC is not enabled
		if ( !defined( 'WPB_VC_VERSION' ) ) {
			return;
		}

		$params = array(
			'limit' => -1
		);

		// Run the find
		$findNews = pods( 'news', $params );

		// Loop through the records returned
		$arrPost = array();
		while ( $findNews->fetch() ) {

			$arrpost[$findNews->display('title')] = $findNews->field('id');
		}

		// Map the block with vc_map()
		vc_map(
			array(
				'name' => __('WHOTHAT Feature Post', 'featurePost'),
				'base' => 'featurePost',
				'description' => __('DESC', 'featurePost'),
				'category' => __('WHOTHAT elements', 'featurePost'),
				'icon' => get_template_directory_uri().'/assets/icons/ic_vc-element_imagebox.png',
				'params' => array(

					// Selector (dropdown)
					array(
						"param_name"    => "vc_featurepost_selector",
						'heading'       => __( 'Select News', 'featurePost' ),
						"description"   => __("Random will have higher priority if its checked", "featurePost"),
						'group'         => 'General',
						'weight'        => 0,
						"type"          => "dropdown",
						"value"         => $arrpost
					),

					// Randomizer (checkbox)
					array(
						'param_name'    => 'vc_featurePost_randomizr',
						'heading'       => __( 'Random?', 'featurePost' ),
						"description"   => __("Random DESC", "featurePost"),
						'group'         => 'General',
						'weight'        => 0,
						'type'          => 'checkbox',
						'value'         => array( __( '', 'featurePost' ) => true )
					),

					// Extra class
					array(
						'param_name'    => 'vc_featurePost_extraCSS',
						'heading'       => __( 'Extra class name', 'featurePost' ),
						'description'   => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'featurePost' ),
						'group'         => __( 'Design options', 'featurePost' ),
						'weight'        => 0,
						'type'          => 'textfield'
					),
					// CSS editor
					array(
						'param_name'    => 'vc_featurePost_cssOptions',
						'heading'       => __( 'Css', 'featurePost' ),
						'description'   => __( 'xx', 'featurePost' ),
						'group'         => __( 'Design options', 'featurePost' ),
						'weight'        => 1,
						'type'          => 'css_editor'
					),
				),
			)
		);
	}



	// Element HTML
	public function vc_render_featurePost( $atts ) {

		// Params extraction
		extract(
			shortcode_atts(
				array(

					'vc_featurepost_selector'   => '',
					'vc_featurePost_randomizr'  => '',
					'vc_featurePost_extraCSS'   => '',
					'vc_featurePost_cssOptions' => '',
				),
				$atts
			)
		);

		if($vc_featurePost_randomizr == 1){

			$params = array(

				'limit' => 1,
				'orderby' => 'RAND()'
			);

		}

		else {

			$params = array(

				'limit' => 1,
				'where' => 't.ID =' .$vc_featurepost_selector,
				'orderby' => 'RAND()'
			);
		}

		// Run the find
		$news = pods( 'news', $params );

		// Loop through the records returned
		while ( $news->fetch() ) {
			$img = get_the_post_thumbnail($news->field('id'));
			$heading = $news->display('title');
			$subtext = $news->display('subtext');
			$braking = $news->display('post_content');
		}

		// ...
		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $vc_featurePost_cssOptions, ' ' ), $this->settings['base'], $atts );
		// Fill $html var with data
		$html = ' 
	        <div class="vc_featurePost_wrap ' . $vc_featurePost_extraCSS. '">
				<div class="featurePost ' .esc_attr( $css_class ). '">
					<!-- Parsing feat. image into the box  -->
					<img src='.$img.'
					<!-- Parsing the label(s) into the box -->
					<h3>'.$heading.'</h3>
					<p>'.$subtext.'</p>
					<!-- Button for reading MORE -->
					<button id="readMoreBtn" type="submit" value=""/><span><a>Læs hele nyheden</a></span>
				</div>
			</div>	
        ';

		return $html;

	}

} // End Element Class


// Element Class Init
new vc_featurePost();
?>
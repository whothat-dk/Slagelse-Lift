<?php
/*
Element Description: VC employee Box
*/


// Element Class
class vc_featurePost extends WPBakeryShortCode {

	// Element Init
	function __construct() {
		add_action( 'init', array( $this, 'vc_featurePost_mapping' ) );
		add_shortcode( 'vc_featurePost', array( $this, 'vc_render_featurePost' ) );
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
			$arrpost[$findNews->display('news_name')] = $findNews->field('id');
		}
		// Map the block with vc_map()
		vc_map(
			array(
				'name' => __('WHOTHAT Featured News', 'featurePost'),
				'base' => 'vc_featurePost',
				'description' => __('DESC', 'featurePost'),
				'category' => __('WHOTHAT elements', 'featurePost'),
				'icon' => get_template_directory_uri().'/assets/icons/ic_vc-element_imagebox.png',
				'params' => array(

					array(
						"type" => "dropdown",
						'admin_label' => true,
						"param_name" => "news_single",
						'group' => 'General',
						"value" => $arrpost,
						"description" => __("Random will have higher priority if its checked", "featurePost")
					),

					array(
						'type' => 'checkbox',
						'group' => 'General',
						'heading' => __( 'Random?', 'featurePost' ),
						'param_name' => 'randomize',
						'value' => array( __( '', 'featurePost' ) => true )
					),

					array(
						'type' => 'css_editor',
						'heading' => __( 'Css', 'featurePost' ),
						'param_name' => 'css',
						'group' => __( 'Design options', 'featurePost' ),
					),
				),
			)
		);
	}


	// Element HTML
	public function vc_render_featurePost ( $atts ) {

		// Params extraction
		extract(
			shortcode_atts(
				array(
					'news_single' => '',
					'randomize' => '',
					'css' => '',
				),
				$atts
			)
		);

		if($randomize == 1){
			$params = array(
				'limit' => 1,
				'orderby' => 'RAND()'
			);

		} else {
			$params = array(
				'limit' => 1,
				'where' => 't.ID =' . $news_single,
				'orderby' => 'RAND()'
			);
		}

		// Run the find
		$news = pods( 'news', $params );

		// Loop through the records returned
		while ( $news->fetch() ) {
			$img            = get_the_post_thumbnail($news->field('id'));
			//$heading        = get_the_post_title($news->field('id'));
			$intro          = $news->display('news_subtext');
			$content        = $news->display('news_context');
			$content2       = $news->display('post_content');
			//$testimonial    = strip_tags($testimonial, "<br>");
		}

		// Fill $html var with data
		$html = '
        <div class="vc_featurePost_wrap ' . esc_attr( $css ) . '">
            <div class="vc_featurePost_container">
                <div  class="vc_featurePost_image">'.$img.'</div>
                <p class="vc_featurePost_heading">"'.$heading.'"</p>
                <p class="vc_featurePost_subText">"'.$intro.'"</p>
            </div>
        </div>';

		return $html;

	}

} // End Element Class


// Element Class Init
new vc_featurePost();
?>
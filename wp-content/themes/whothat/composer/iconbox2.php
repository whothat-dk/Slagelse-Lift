<?php 
/*
Element Description: VC fa icon_Box
*/
 
// Element Class 
class vc_iconbox2 extends WPBakeryShortCode {
     
    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'vc_iconbox2_mapping' ) );
        add_shortcode( 'vc_iconbox2', array( $this, 'vc_render_iconbox2' ) );
    }
     
    // Element Mapping
    public function vc_iconbox2_mapping() {
         
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
         
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('WHOTHAT Icon Box 2', 'icon_box2'),
                'base' => 'vc_iconbox2',
                'description' => __('DESC', 'vc_iconbox2'),
                'category' => __('WHOTHAT elements', 'vc_iconbox2'),
                'icon' => get_template_directory_uri().'/assets/icons/ic_vc-element_imagebox.png',
                'params' => array(

	                // icon : icon_dev_v0.2
	                array(
		                'param_name'    => 'vc_iconbox_icon',
		                'heading'       => __( 'ICON', 'vc_iconbox2' ),
		                'description'   => __( 'Sets the icon of the icon', 'vc_iconbox2' ),
		                'group'         => 'General',
		                'weight'        => 0,
		                'type'          => 'textfield',
		                'admin_label'   => true,
	                ),
	                // icon : LINK
                    array(
	                    'param_name'    => 'vc_iconbox_targetlink',
	                    'heading'       => __( 'ICON LINK', 'vc_iconbox2' ),
	                    'description'   => __( 'Choose which page to go to when clicked', 'vc_iconbox2' ),
	                    'group'         => 'General',
	                    'weight'        => 0,
                        'type'          => 'vc_link',
	                    'admin_label'   => false,
                    ),
	                // icon : LABEL
	                array(
		                'param_name'    => 'vc_iconbox_label',
		                'heading'       => __( 'ICON LABEL', 'vc_iconbox2' ),
		                'description'   => __( 'Sets the label of the icon', 'vc_iconbox2' ),
		                'group'         => 'General',
		                'weight'        => 0,
		                'type'          => 'textfield',
		                'holder'        => 'h3',
		                'admin_label'   => true,
	                ),
	                // icon : SUBTEXT
	                array(
		                'param_name'    => 'vc_iconbox_subtext',
		                'heading'       => __( 'ICON SUBTEXT', 'vc_iconbox2' ),
		                'description'   => __( 'Sets the subtext of the icon', 'vc_iconbox2' ),
		                'group'         => 'General',
		                'weight'        => 0,
		                'type'          => 'textfield',
		                'holder'        => 'h3',
		                'admin_label'   => false,
	                ),
					// Extra class
	                array(
		                'param_name'    => 'vc_iconbox_extraCSS',
		                'heading'       => __( 'Extra class name', 'vc_iconbox2' ),
		                'description'   => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'vc_iconbox2' ),
		                'group'         => __( 'Design options', 'vc_iconbox2' ),
		                'weight'        => 0,
		                'type'          => 'textfield',
	                ),
					// CSS editor
                    array(
	                    'param_name'    => 'vc_iconbox_cssOptions',
                        'heading'       => __( 'Css', 'vc_iconbox2' ),
	                    'description'   => __( 'xx', 'vc_iconbox2' ),
                        'group'         => __( 'Design options', 'vc_iconbox2' ),
                        'weight'        => 1,
                        'type'            => 'css_editor',
                    ),
                ),
            )
        );
    }
     
     
    // Element HTML
    public function vc_render_iconbox2 ( $atts ) {
         
        // Params extraction
        extract(
            shortcode_atts(
                array(

	                'vc_iconbox_icon'      => '',
	                'vc_iconbox_targetlink' => '',
	                'vc_iconbox_label'      => 'Stefan',
                    'vc_iconbox_subtext'    => 'hejsa',
                    'vc_iconbox_extraCSS'   => '',
                    'vc_iconbox_cssOptions' => '',
                ), 
                $atts
            )
        );

	$text = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="94.375px" height="94.375px" viewBox="0 0 94.375 94.375" enable-background="new 0 0 94.375 94.375" xml:space="preserve">
<g>
	<defs>
		<rect id="SVGID_1_" width="94.375" height="94.375"/>
	</defs>
	<clipPath id="SVGID_2_">
		<use xlink:href="#SVGID_1_"  overflow="visible"/>
	</clipPath>
	<path clip-path="url(#SVGID_2_)" fill="#034B70" d="M25.123,51.716c0.422-0.317,11.607-21.209,11.607-21.209H25.756
		C25.756,30.507,24.701,52.032,25.123,51.716"/>
	<path clip-path="url(#SVGID_2_)" fill="#034B70" d="M55.407,59.256v8.121l18.867-0.861C70.319,64.936,59.067,60.755,55.407,59.256"
		/>
	<path clip-path="url(#SVGID_2_)" fill="#034B70" d="M94.375,43.222l-6.995,0.369v-0.317h-3.166v22.811
		c2.251-0.08,5.892-0.211,10.161-0.366V43.222z"/>
	<path clip-path="url(#SVGID_2_)" fill="#034B70" d="M80.773,43.274h-1.308v-0.633h-8.019c0,0-0.074-0.339-0.057-0.455
		c-0.689,0.097-7.753-0.02-7.753-0.02v-0.422h-4.695c0,0-2.369,4.409-3.534,6.804v8.916l21.909,8.912l3.423-0.156
		C80.756,61.403,80.793,49.339,80.773,43.274"/>
	<path clip-path="url(#SVGID_2_)" fill="#034B70" d="M2.542,66.84v-1.195h4.01v1.477h6.014c0,0-0.211-3.798,0-3.798h1.651
		c0,0-0.354-7.07,0-7.07h2.254v7.175h2.321v2.533h2.955v2.954l31.339-1.432V52.986c-0.465,0.708-0.844,1.262-0.844,1.262
		l-0.633-1.306v4.683c0,0-1.268,1.267-1.479,1.478s-2.321,0-2.321,0v1.266H24.279l-1.794-1.688V25.124c0-0.949,20.26,0,20.26,0
		v1.267h9.813v2.04h-2.954l3.744,14.367l0.056-0.157l-0.635-11.396c0,0,4.926-0.985,4.926,0v6.894h0.844v-0.985h4.643
		c0,0-0.211-1.337,0-1.126s7.738,0,7.738,0v-1.555c0,0.148,7.879,0,7.879,0v-1.821h7.456v-0.845l8.121-0.399v-1.297l-8.684,0.606
		c0,0-1.267-2.532-0.845-2.532c0.229,0,5.083-0.311,9.528-0.612V12c0-6.6-5.4-12-12-12H12C5.4,0,0,5.4,0,12v54.98
		C1.35,66.925,2.542,66.84,2.542,66.84"/>
	<polygon clip-path="url(#SVGID_2_)" fill="#034B70" points="38.735,27.552 25.651,27.552 25.651,29.188 37.258,29.188 	"/>
	<path clip-path="url(#SVGID_2_)" fill="#034B70" d="M11.57,81.483c0,1.143,0.926,2.068,2.069,2.068
		c1.143,0,2.069-0.926,2.069-2.068c0-1.144-0.926-2.069-2.069-2.069C12.496,79.414,11.57,80.34,11.57,81.483 M14.217,81.402
		c0,0.273-0.223,0.497-0.497,0.497c-0.274,0-0.497-0.224-0.497-0.497c0-0.274,0.223-0.497,0.497-0.497
		C13.994,80.905,14.217,81.128,14.217,81.402"/>
	<path clip-path="url(#SVGID_2_)" fill="#034B70" d="M35.183,73.453L16.33,72.608v6.025c0.845,0.748,1.389,1.828,1.389,3.046
		c0,2.253-1.826,4.08-4.08,4.08c-2.253,0-4.08-1.827-4.08-4.08c0-2.254,1.827-4.081,4.08-4.081c0.374,0,0.729,0.067,1.073,0.161
		v-5.714H6.341v-2.251H1.698V68.81H0v13.565c0,6.6,5.4,12,12,12h70.375c6.6,0,12-5.4,12-12v-11.93L35.183,73.453z"/>
	<path clip-path="url(#SVGID_2_)" fill="#034B70" d="M39.685,53.984c0.211,0.053,0-24.322,0-24.322S25.967,53.721,25.651,53.984
		C25.651,53.984,39.474,53.932,39.685,53.984"/></g></svg>';

	    $href = vc_build_link( $target_link );
        if(strlen($href[url]) > 1) {

            $anchor =  '<a href="'. $href[url] .'" target="'.$href[target].'" class="vc_iconbox2_targetlink" >';
            $anchor_end =  '</a>';
        } else {

            $anchor =  '';
            $anchor_end =  '';
        }
        $test = base64_decode($vc_iconbox_icon);

	    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $vc_iconbox_cssOptions, ' ' ), $this->settings['base'], $atts );
	    // Fill $html var with data
	    $html = '
	        <div class="vc_iconbox_wrap ' . $vc_iconbox_extraCSS. '">
                <div class="iconbox ' .esc_attr( $css_class ). '">
                    '.$text.'
                    <h4>'.$vc_iconbox_label.'</h4>
                    <p>'.$vc_iconbox_subtext.'</p>
				</div>
	        </div>
        ';

	    return $html;
         
    }
     
} // End Element Class
 
 
// Element Class Init
new vc_iconbox2 ();
?>
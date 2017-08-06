<?php
/**
 * Created by PhpStorm.
 * User: SK-WhoThat
 * Date: 04-08-2017
 * Time: 16:15
 */

/**
 * function to aloows .SVG uploads
 */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
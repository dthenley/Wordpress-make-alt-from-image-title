<?php 
/*
 * Check images to make sure if there is no alt tag for assigned, it takes the title tag and put it in the alt tag
 * Add to functions.php file in theme or child theme
 */
 if ( ! function_exists( 'image_alt_tag_fix' ) ) {
 
	function image_alt_tag_fix( $atts, $attachment ) {

		//check if image has alt tag assigned
	    if (!$atts['alt'] ) {
	    	//assign title of image(title tag) to alt tag
	        $atts['alt'] = $attachment->post_title;
	    }
	    return $atts;
	}
	add_filter( 'wp_get_attachment_image_attributes', 'image_alt_tag_fix', 10, 2 );
}

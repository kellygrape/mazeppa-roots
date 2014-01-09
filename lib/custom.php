<?php
/**
 * Custom functions
 */
  add_filter('roots_wrap_base', 'mazeppa_wrap_base_cpts'); // Add our function to the roots_wrap_base filter

  function mazeppa_wrap_base_cpts($templates) {
    $cpt = get_post_type(); // Get the current post type
    if ($cpt) {
       array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
    }
    return $templates; // Return our modified array with base-$cpt.php at the front of the queue
  }


function bigButtonShortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '',
			'title' => '',
		), $atts )
	);

	// Code
	return '<div class="clearfix"><a href="' . $link . '" class="btn btn-large btn-primary">' . $title . '</a></div>';

}
add_shortcode( 'big-button', 'bigButtonShortcode' );
<?php
/**
 * Testimonials start template
 */
$settings = $this->get_settings();
$data_settings = $this->generate_setting_json();
$data_settings = str_replace( "}'", ",\"asNavFor\": \".jw-testimonials-thumbnails\"}'", $data_settings );

$use_comment_corner = $this->get_settings( 'use_comment_corner' );

$class_array[] = 'jw-testimonials__instance';
$class_array[] = 'elementor-slick-slider';

if ( filter_var( $use_comment_corner, FILTER_VALIDATE_BOOLEAN ) ) {
	$class_array[] = 'jw-testimonials--comment-corner';
}

$classes = implode( ' ', $class_array );
?>
<div class="<?php printf('%s', $classes) ; ?>" <?php printf('%s', $data_settings) ; ?>>

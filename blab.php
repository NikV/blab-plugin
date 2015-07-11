<?php
/**
 * Plugin Name: The Blab.im Plugin
 * Plugin URI:
 * Description: The unofficial plugin for Blab.im that allows you to embed a user's stream into your WordPress site
 * Version: 1.0
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * License: GPL2
 */

/**
 * The main Blab shortcode function
 *
 * @param array $atts The Shortcode Attributes
 */
function blab_shortcode( $atts ) {
	$a = shortcode_atts( array(
		'user' => '',
	), $atts );

	$echo =  $a['user'];
	echo $echo;
	echo "<iframe src='https://blab.im/$echo' height='700px' width='100%'></iframe>";

}

add_shortcode( 'blab', 'blab_shortcode' );

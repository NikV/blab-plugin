<?php
/**
 * Plugin Name: The Blab.im Plugin
 */

function blab_shortcode( $att ) {
	$a = shortcode_atts( array(
		'user' => '',
	), $atts );

	$echo =  $a['user'];
	echo $echo;
	echo "<iframe src='https://blab.im/$echo' height='700px' width='100%'></iframe>";

}

add_shortcode( 'blab', 'blab_shortcode' );

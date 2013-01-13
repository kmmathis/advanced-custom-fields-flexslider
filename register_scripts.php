<?php

function acffs_scripts() {
	wp_enqueue_script(
		'flexsliderjs',
		plugins_url('/assets/js/acffs.js', __FILE__),
		array('jquery')
	);
}
add_action('wp_enqueue_scripts', 'acffs_scripts');

function acffs_styles() {
	wp_register_style( 'flexslidercss', plugins_url('/assets/css/acffs.css', __FILE__) );
	wp_enqueue_style( 'flexslidercss' );
}
add_action( 'wp_enqueue_scripts', 'acffs_styles' );
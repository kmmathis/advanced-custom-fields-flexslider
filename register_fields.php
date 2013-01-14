<?php

// Register the options page for the slider.
// Uses ACF Options Page Add-On

function register_slide_options_page() {
	if(function_exists("register_options_page"))
	{
	    register_options_page('Slider');
	}
}

add_action( 'init', 'register_slide_options_page');

// Register the custom fields for our slides
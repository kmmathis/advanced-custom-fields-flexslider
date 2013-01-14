<?php
/*
	Plugin Name: Advanced Custom Fields Flex Slider
	Plugin URI: http://korymathis.com/advanced-custom-fields-flexslider
	Description: A slider built with the Advanced Custom Fields plugin and WooThemes' FlexSlider.
	Author: Kory Mathis
	Author URI: http://korymathis.com
	Version: 0.1
*/

// Create Slides post type
include_once('register_post_type.php');

// Register the fields with ACF
include_once('register_fields.php');

// Register the flexslider scripts
include_once('register_scripts.php');

// create a function that returns a loop of slides
include_once('create_loop.php');

// register the widget
include_once('register_widget.php');
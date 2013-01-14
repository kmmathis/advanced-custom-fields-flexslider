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

/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */

function register_slide_fields() {
	if(function_exists("register_field_group"))
	{
		register_field_group(array (
			'id' => '50f45218adee8',
			'title' => 'Slider',
			'fields' => 
			array (
				0 => 
				array (
					'key' => 'field_7',
					'label' => 'Slide',
					'name' => 'slide',
					'type' => 'repeater',
					'order_no' => 0,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 
					array (
						'status' => 0,
						'rules' => 
						array (
							0 => 
							array (
								'field' => 'null',
								'operator' => '==',
							),
						),
						'allorany' => 'all',
					),
					'sub_fields' => 
					array (
						'field_9' => 
						array (
							'label' => 'Slide Image',
							'name' => 'slide_image',
							'type' => 'image',
							'instructions' => '',
							'column_width' => '',
							'save_format' => 'url',
							'preview_size' => 'thumbnail',
							'order_no' => 0,
							'key' => 'field_9',
						),
						'field_8' => 
						array (
							'label' => 'Slide Description',
							'name' => 'slide_description',
							'type' => 'textarea',
							'instructions' => 'Enter a short description for this slide.',
							'column_width' => '',
							'default_value' => '',
							'formatting' => 'none',
							'order_no' => 1,
							'key' => 'field_8',
						),
						'field_11' => 
						array (
							'label' => 'Slide Post',
							'name' => 'slide_post',
							'type' => 'page_link',
							'instructions' => 'Link this slide to a post or page.',
							'column_width' => '',
							'post_type' => 
							array (
								0 => 'post',
								1 => 'page',
							),
							'allow_null' => 1,
							'multiple' => 0,
							'order_no' => 2,
							'key' => 'field_11',
						),
						'field_12' => 
						array (
							'label' => 'Slide URL',
							'name' => 'slide_url',
							'type' => 'text',
							'instructions' => 'Link this slide to a custom URL',
							'column_width' => '',
							'default_value' => '',
							'formatting' => 'none',
							'order_no' => 3,
							'key' => 'field_12',
						),
					),
					'row_min' => 0,
					'row_limit' => '',
					'layout' => 'table',
					'button_label' => 'Add Slide',
				),
			),
			'location' => 
			array (
				'rules' => 
				array (
					0 => 
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-slider',
						'order_no' => 0,
					),
				),
				'allorany' => 'all',
			),
			'options' => 
			array (
				'position' => 'normal',
				'layout' => 'no_box',
				'hide_on_screen' => 
				array (
				),
			),
			'menu_order' => 0,
		));
	}
}

add_action( 'init', 'register_slide_fields');
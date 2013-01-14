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

function register_slide_fields() {

	if(function_exists("register_field_group"))
	{
		register_field_group(array (
			'id' => '50f458eec3f5a',
			'title' => 'Slider',
			'fields' => 
			array (
				0 => 
				array (
					'key' => 'field_7',
					'label' => 'Slides',
					'name' => 'acffs_slides',
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
								'value' => '',
							),
						),
						'allorany' => 'all',
					),
					'sub_fields' => 
					array (
						'field_9' => 
						array (
							'label' => 'Slide Image',
							'name' => 'acffs_slide_image',
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
							'name' => 'acffs_slide_description',
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
							'name' => 'acffs_slide_post',
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
							'name' => 'acffs_slide_url',
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
				1 => 
				array (
					'key' => 'field_13',
					'label' => 'Slide Banner',
					'name' => 'acffs_slide_banner',
					'type' => 'text',
					'order_no' => 1,
					'instructions' => 'Enter text here to display it as a banner over the slider.',
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
								'value' => '',
							),
						),
						'allorany' => 'all',
					),
					'default_value' => '',
					'formatting' => 'none',
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
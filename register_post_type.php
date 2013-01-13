<?php
// slides post type
function slide_post_type() {
	register_post_type('slides',
	  array(
	    'label' => 'Slides',
	    'description' => '',
	    'public' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    'rewrite' => array('slug' => ''),
	    'query_var' => true,
	    'exclude_from_search' => false,
	    'supports' => array('title','thumbnail',),
	    'labels' => array (
	        'name' => 'Slides',
	        'singular_name' => 'Slide',
	        'menu_name' => 'Slides',
	        'add_new' => 'Add Slide',
	        'add_new_item' => 'Add New Slide',
	        'edit' => 'Edit',
	        'edit_item' => 'Edit Slide',
	        'new_item' => 'New Slide',
	        'view' => 'View Slide',
	        'view_item' => 'View Slide',
	        'search_items' => 'Search Slides',
	        'not_found' => 'No Slides Found',
	        'not_found_in_trash' => 'No Slides Found in Trash',
	        'parent' => 'Parent Slide',
	    ),
	  )
	);
}
add_action( 'init', 'slide_post_type');
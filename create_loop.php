<?php 

function acffs_loop() {

	echo '<div class="flexslider acffs"><ul class="slides">';

	while(the_repeater_field('slide','option')):
		$link_open = '';
		$link_close = '';
		$link_more = '';
		if ( get_sub_field('slide_post') ) {
			$link_open = '<a href="' . get_sub_field('slide_post') . '">';
			$link_close = '</a>';
			$link_more = ' <a href="' . get_sub_field('slide_post') . '">[Read more]</a>';
		} elseif ( get_sub_field('slide_url') ) {
			$link_open = '<a href="' . get_sub_field('slide_url') . '">';
			$link_close = '</a>';
			$link_more = ' <a href="' . get_sub_field('slide_url') . '">[Read more]</a>';
		}
		echo $link_open . '<img src="' . get_sub_field('slide_image') . '" alt="" />' . $link_close;
		if ( get_sub_field('slide_description') ) {
			echo '<p class="acffs_description">' . get_sub_field('slide_description') . $link_more . '</p>';
		}
	endwhile;

}

?>
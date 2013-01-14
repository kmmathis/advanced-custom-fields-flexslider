<?php 

function acffs_loop() {

	echo '<div class="flexslider acffs"><ul class="slides">';

	if ( get_field('acffs_slide_banner', 'option') ) {
		echo '<p class="acffs_banner">' . get_field('acffs_slide_banner', 'option') . '</p>';
	}

	while(the_repeater_field('acffs_slides','option')):
		$link_open = '';
		$link_close = '';
		$link_more = '';
		if ( get_sub_field('acffs_slide_post') ) {
			$link_open = '<a href="' . get_sub_field('acffs_slide_post') . '">';
			$link_close = '</a>';
			$link_more = ' <a href="' . get_sub_field('acffs_slide_post') . '">[Read more]</a>';
		} elseif ( get_sub_field('acffs_slide_url') ) {
			$link_open = '<a href="' . get_sub_field('acffs_slide_url') . '">';
			$link_close = '</a>';
			$link_more = ' <a href="' . get_sub_field('acffs_slide_url') . '">[Read more]</a>';
		}
		echo '<li>' . $link_open . '<img src="' . get_sub_field('acffs_slide_image') . '" alt="" />' . $link_close;
		if ( get_sub_field('acffs_slide_description') ) {
			echo '<p class="acffs_description">' . get_sub_field('acffs_slide_description') . $link_more . '</p>';
		}
		echo '</li>';
	endwhile;

	echo '</ul></div>';

}

?>
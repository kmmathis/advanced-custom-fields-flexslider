<?php

function acffs_loop() {

	$args = array(
		'post_type' => 'slides'
	);

	$the_query = new WP_Query( $args ); ?>

	<div class="flexslider acffs">
			<ul class="slides">

	<?php
	while ( $the_query->have_posts() ) : $the_query->the_post(); 
	$slide_url = '';
	if (get_field('acffs_post')) {
		$slide_url = get_field('acffs_post');
	} elseif (get_field('acffs_page')) {
		$slide_url = get_field('acffs_page');
	} elseif (get_field('acffs_custom_url')) {
		$slide_url = get_field('acffs_custom_url');
	}
	?>
				<li>
					<?php if ($slide_url != '') { ?>
						<a href="<?php echo $slide_url; ?>"><?php the_post_thumbnail(); ?></a>
					<?php } else { ?>
						<?php the_post_thumbnail(); ?>
					<?php } ?>
					<?php if (get_field('acffs_description')) { ?>
						<p class="acffs_description">
							<?php the_field('acffs_description'); ?>
							<?php if ($slide_url != '') { ?>
								<a href="<?php echo $slide_url; ?>">[Read More]</a>
							<?php } ?>
						</p>
					<?php } ?>
				</li>
	<?php endwhile; ?>

			</ul>
		</div>

<?php

	wp_reset_query();
	wp_reset_postdata();

}


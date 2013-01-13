<?php

class acffs_widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
	 		'acffs_widget', // Base ID
			'Avanced Custom Fields FlexSlider', // Name
			array( 'description' => __( 'Displays the ACFFS.' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		// print the widget title
		echo $before_widget;
		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;

		$widget_content = acffs_loop();

		// print the widget content
		echo __( $widget_content, 'text_domain' );
		echo $after_widget;
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}

	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( '', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}

}

add_action( 'widgets_init', create_function( '', 'register_widget( "acffs_widget" );' ) );
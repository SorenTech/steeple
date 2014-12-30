<?php
/**
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage steeple
 * @since Steeple 0.2.0
 */
?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
	<?php
		/**
		 * Fires before the steeple featured content.
		 *
		 * @since Steeple 0.2.0
		 */
		do_action( 'steeple_featured_posts_before' );

		$featured_posts = steeple_get_featured_posts();
		foreach ( (array) $featured_posts as $order => $post ) :
			setup_postdata( $post );

			 // Include the featured content template.
			get_template_part( 'content', 'featured-post' );
		endforeach;

		/**
		 * Fires after the Steeple featured content.
		 *
		 * @since Steeple 0.2.0
		 */
		do_action( 'steeple_featured_posts_after' );

		wp_reset_postdata();
	?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content .featured-content -->

<?php
/**
 * @var WPLib_Post $entity
 */
?>
<span class="posted-on">
	<?php
	printf(
		esc_html_x( 'Posted on %s', 'post date', 'underscores4wplib' ),
		$entity->get_link( $entity->get_template_html( 'post-timestamp' ), 'rel=bookmark&is_html=1' )
	);
	?>
</span>
<span class="byline">
	<?php printf( esc_html_x( 'by %s', 'post author', 'underscores4wplib' ), $entity->get_author_hcard_html() ); ?>
</span>




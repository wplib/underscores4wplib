<?php
/**
 * @var WPLib_Post $item
 */
?>
<span class="posted-on">
	<?php
	printf(
		esc_html_x( 'Posted on %s', 'post date', 'underscores4wplib' ),
		$item->get_link( $item->get_template_html( 'post-timestamp' ), 'rel=bookmark&is_html=1' )
	);
	?>
</span>
<span class="byline">
	<?php printf( esc_html_x( 'by %s', 'post author', 'underscores4wplib' ), $item->get_author_hcard_html() ); ?>
</span>




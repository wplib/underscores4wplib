<?php
/**
 * The template part asking the user to get started blogging.

 * @package underscores4wplib
 *
 * @var Underscores $theme
 */
?>
<p>
<?php
	wp_kses_post(
		printf(
			__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'underscores4wplib' ),
			esc_url( WPLib::new_post_url() )
		)
	);
?>
</p>

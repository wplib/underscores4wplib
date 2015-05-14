<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package underscores4wplib
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function wplib_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'wplib_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function wplib_jetpack_setup
add_action( 'after_setup_theme', 'wplib_jetpack_setup' );

function wplib_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function wplib_infinite_scroll_render

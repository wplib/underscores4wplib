<?php
/**
 * The template part for "Designed by WP.

 * @package underscores4wplib
 *
 * @var Underscores $theme
 */

printf(
	esc_html__( 'Theme %1$s: Designed by %2$s, Built by %3$s.', 'underscores4wplib' ),
	'wplib',
	$theme->get_link( 'http://underscores.me', 'Underscores.me', 'rel=designer' ),
	$theme->get_link( 'http://wplib.org', 'The WPLib Team', 'rel=developer' )
);

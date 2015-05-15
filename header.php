<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package underscores4wplib
 *
 * @var LawPress $theme
 */
?><!DOCTYPE html>
<html <?php $theme->the_html_attributes(); ?>>
<head>
<?php
	$theme->the_meta_charset_html();

	$theme->the_link_profile_html();

	$theme->the_link_pingback_html();

	$theme->the_meta_viewport_html( array(
		'width'         => 'device-width',
		'initial-scale' => '1.0',
	));
	$theme->the_wp_head_html();
?>
</head>

<body <?php $theme->the_body_attributes(); ?>>

	<div id="page" class="hfeed site">

		<?php $theme->the_screen_reader_skip_link(); ?>

		<header id="masthead" class="site-header" role="banner">

			<div class="site-branding">

				<h1 class="site-title"><?php $theme->the_site_name_link(); ?></h1>

				<h2 class="site-description"><?php $theme->the_site_description(); ?></h2>

			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">

					<?php esc_html_e( 'Primary Menu', 'underscores4wplib' ); ?>

				</button>

				<?php $theme->the_menu_html(); ?>

			</nav>

		</header>

		<div id="content" class="site-content">

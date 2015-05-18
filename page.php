<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package underscores4wplib
 *
 * @var Underscores $theme
 */

$theme->the_header_html(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php

			$page = $theme->page_entity();

			$page->the_template( 'content', 'page' );

			if ( $page->user_can_see_comments() ) :

				$page->the_template( 'comments' );

			endif;

		?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
$theme->the_sidebar_html();
$theme->the_footer_html();

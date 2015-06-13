<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores4wplib
 *
 * @var Underscores_Theme $theme
 */

$theme->the_header_html(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php
		if ( ! $theme->has_posts() ) :

			$theme->the_template( 'content', 'none' );

		else :

			foreach( $theme->get_post_list() as $entry ) :

				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				$entry->the_template( 'content', $entry->format_slug() );

			endforeach;

			$theme->the_template( 'posts-navigation' );

		endif;

	?>
	</main>
</div>

<?php
$theme->the_sidebar_html();
$theme->the_footer_html();


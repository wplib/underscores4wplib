<?php
/**
 * The template for displaying archive pages.
 *
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
		?>
			<header class="page-header">
			<?php

				$theme->the_archive_title();

				$theme->the_archive_description();

			?>
			</header>
			<?php

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


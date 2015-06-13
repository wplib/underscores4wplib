<?php
/**
 * The template for displaying search results pages.
 *
 * @package underscores4wplib
 *
 * @var Underscores_Theme $theme
 */

$theme->the_header_html(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<header class="page-header">
			<h1 class="page-title"><?php $theme->the_labeled_search_query_html(); ?></h1>
		</header><!-- .page-header -->
		<?php

		if ( ! $theme->has_posts() ) :

			$theme->the_template( 'content', 'none' );

		else:

			foreach( $theme->get_post_list() as $entry ) :

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				$entry->the_template( 'content', 'search' );

			endforeach;

			$theme->the_template( 'posts-navigation' );

		endif;

	?>
	</main><!-- #main -->
</section><!-- #primary -->

<?php
$theme->the_sidebar_html();
$theme->the_footer_html();



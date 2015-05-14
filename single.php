<?php
/**
 * The template for displaying all single posts.
 *
 * @package underscores4wplib
 *
 * @var Underscores $theme
 */

$theme->the_header_html(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php

		$post = $theme->post_entity();

		$post->the_template( 'content-single' );
		$post->the_edit_link();

		if ( $post->has_adjacent_posts() ):

			$post->the_template( 'post-navigation' );

		endif;

		if ( $theme->user_can_see_comments( $post ) ) :

			$post->the_comments_html();

		endif;

		?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
$theme->the_sidebar_html();
$theme->the_footer_html();



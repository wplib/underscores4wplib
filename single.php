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

		$entity = $theme->post_entity();

		$entity->the_template( 'content-single' );
		$entity->the_edit_link();

		if ( $entity->has_adjacent_posts() ):

			$entity->the_template( 'post-navigation' );

		endif;

		if ( $entity->user_can_see_comments() ) :

			$entity->the_comments_html();

		endif;

		?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
$theme->the_sidebar_html();
$theme->the_footer_html();



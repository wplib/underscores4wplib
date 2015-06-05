<?php
/**
 * The template for displaying all single posts.
 *
 * @package underscores4wplib
 *
 * @var Underscores $theme
 */


$item = new WPLib_Post( $post );


$theme->the_header_html(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php

		$item = $theme->post_item();

		$item->the_template( 'content-single' );
		$item->the_edit_link();

		if ( $item->has_adjacent_posts() ):

			$item->the_template( 'post-navigation' );

		endif;

		if ( $item->user_can_see_comments() ) :

			$item->the_comments_html();

		endif;

		?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
$theme->the_sidebar_html();
$theme->the_footer_html();



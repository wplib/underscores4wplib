<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores4wplib
 *
 * @var Underscores $theme
 *
 */
?>
<section class="no-results not-found">
	<header class="page-header">

		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'underscores4wplib' ); ?></h1>

	</header>

	<div class="page-content">
	<?php

		if ( $theme->is_home() && $theme->user_can( 'publish_posts' ) ) :

			$theme->the_template( 'message-start-blogging' );

		elseif (  $theme->doing_search() ) :

			$theme->the_template( 'message-failed-search' );

		else :

			$theme->the_template( 'message-no-posts' );

		endif;

	?>
	</div>
</section>

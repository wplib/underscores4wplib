<?php
/**
 * @var WPLib_Post $entity
 */
?>
<nav class="navigation post-navigation" role="navigation">
	<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'underscores4wplib' ); ?></h2>
	<div class="nav-links">
		<?php

			$entity->the_previous_post_link();

			$entity->the_next_post_link();

		?>
	</div><!-- .nav-links -->
</nav><!-- .navigation -->

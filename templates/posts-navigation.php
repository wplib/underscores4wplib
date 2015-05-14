<?php
/**
 * @var Underscores $theme
 */
if ( 1 < $theme->post_count() ) :
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'wplib' ); ?></h2>
		<div class="nav-links">
			<?php
			$theme->the_next_posts_link();
			$theme->the_previous_posts_link();
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
endif;








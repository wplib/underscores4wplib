<?php
/**
 * @package underscores4wplib
 *
 * @var WPLib_Post_Base $item
 */
if ( $item->number_of_comment_pages() > 1 ) :
?>
	<nav id="comment-nav-<?php echo $location; ?>" class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text">
			<?php esc_html_e( 'Comment navigation', 'underscores4wplib' ); ?>
		</h2>
		<div class="nav-links">
			<?php

			$item->the_previous_comments_link();
			$item->the_next_comments_link();

			?>
		</div>
	</nav>
<?php
endif;


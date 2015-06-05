<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package underscores4wplib
 *
 *
 */
$item = WPLib::theme()->item();

if ( $item->user_can_see_comments() ) :


	echo '<div id="comments" class="comments-area">';

	if ( $item->has_comments() ) :

		echo '<h2 class="comments-title">';

			$message = esc_html( _nx(
				'One thought on &ldquo;%2$s&rdquo;',   // Single
				'%1$s thoughts on &ldquo;%2$s&rdquo;', // Plural
				$item->number_of_comments(),         // # comments
				'comments title',                      // Context
				'underscores4wplib'                    // Domain
			));
			printf( $message, $item->get_number_of_comments_html(), "<span>{$item->title}</span>" );

		echo '</h2>';

		$item->the_template( 'post-comment-links', 'location=above' );

		echo '<ol class="comment-list">';

			$item->the_comment_list_html( 'style=ol&short_ping=1' );

		echo '</ol>';

		$item->the_template( 'post-comment-links', 'location=below' );

	endif;

	if ( $item->comments_unavailable() ) :

		echo '<p class="no-comments">';
		esc_html_e( 'Comments are closed.', 'underscores4wplib' );
		echo '</p>';

	endif;

	$item->the_comment_form_html();

	echo '</div>';

endif;

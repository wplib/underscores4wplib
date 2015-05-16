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
$entity = WPLib::theme()->entity();

if ( $entity->user_can_see_comments() ) :


	echo '<div id="comments" class="comments-area">';

	if ( $entity->has_comments() ) :

		echo '<h2 class="comments-title">';

			$message = esc_html( _nx(
				'One thought on &ldquo;%2$s&rdquo;',   // Single
				'%1$s thoughts on &ldquo;%2$s&rdquo;', // Plural
				$entity->number_of_comments(),         // # comments
				'comments title',                      // Context
				'underscores4wplib'                    // Domain
			));
			printf( $message, $entity->get_number_of_comments_html(), "<span>{$entity->title}</span>" );

		echo '</h2>';

		$entity->the_template( 'post-comment-links', 'location=above' );

		echo '<ol class="comment-list">';

			$entity->the_comment_list_html( 'style=ol&short_ping=1' );

		echo '</ol>';

		$entity->the_template( 'post-comment-links', 'location=below' );

	endif;

	if ( $entity->comments_unavailable() ) :

		echo '<p class="no-comments">';
		esc_html_e( 'Comments are closed.', 'underscores4wplib' );
		echo '</p>';

	endif;

	$entity->the_comment_form_html();

	echo '</div>';

endif;

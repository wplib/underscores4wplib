<?php
/**
 * @package underscores4wplib
 *
 * @var WPLib_Post $entity
 */
$theme = Underscores::instance();

if ( $entity->is_blog_post() ) :

	if ( $theme->has_categories() ) {

		$entity->the_category_list_links_html();

	}

	$entity->the_post_tag_list_links_html();

endif;

if ( $theme->user_can_see_comments( $entity ) ):

	?>
	<span class="comments-link">

		<?php $theme->the_comments_popup_link(); ?>

	</span>
	<?php

endif;

$entity->the_edit_link();

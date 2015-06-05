<?php
/**
 * @package underscores4wplib
 *
 * @var WPLib_Post $item
 */
$theme = WPLib::theme();

if ( $item->is_blog_post() ) :

	if ( $theme->has_categories() ) {

		$item->the_category_list_links_html();

	}

	$item->the_post_tag_list_links_html();

endif;

if ( $item->user_can_see_comments() ):

	?>
	<span class="comments-link">

		<?php $theme->the_comments_popup_link(); ?>

	</span>
	<?php

endif;

$item->the_edit_link();

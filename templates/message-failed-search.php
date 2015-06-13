<?php
/**
 * The template part for when no posts are found during a search.
 *
 * @package underscores4wplib
 *
 * @var Underscores_Theme $theme
 */
?>
<p>
<?php

	esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'underscores4wplib' );
?>
</p>
<?php

	$theme->the_search_form_html();

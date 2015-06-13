<?php
/**
 * The template part for when no posts are found in a post item list.
 *
 * @package underscores4wplib
 *
 * @var Underscores_Theme $theme
 */
?>
<p>
<?php

	esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'underscores4wplib' );

?>
</p>
<?php

	$theme->the_search_form_html();


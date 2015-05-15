<?php
/**
 * The template for displaying the Most Used Categories Widget.
 *
 * @package underscores4wplib
 *
 * @var Underscores $theme
 */
?>
<div class="widget widget_categories">
	<h2 class="widget-title">
	<?php
		esc_html_e( 'Most Used Categories', 'wplib' );
	?>
	</h2>
	<ul>
	<?php
		$theme->the_categories_html( array(
		'orderby'    => 'count',
		'order'      => 'DESC',
		'show_count' => 1,
		'title_li'   => '',
		'number'     => 10,
		));
	?>
	</ul>
</div><!-- .widget -->

<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package underscores4wplib
 *
 * @var Underscores_Theme $theme
 */

if ( $theme->is_sidebar_active( 'sidebar-1' ) ) :
	?>
	<div id="secondary" class="widget-area" role="complementary">

		<?php $theme->the_widget_area_html( 'sidebar-1' ); ?>

	</div>
	<?php
endif;

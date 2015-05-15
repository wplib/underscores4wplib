<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package underscores4wplib
 *
 * @var Underscores $theme
 */

if ( $theme->is_sidebar_active( 'sidebar-1' ) ) :
	?>
	<div id="secondary" class="widget-area" role="complementary">

		<?php $this->the_widget_area_html( 'sidebar-1' ); ?>

	</div>
	<?php
endif;

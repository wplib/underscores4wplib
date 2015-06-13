<?php
/**
 * @package underscores4wplib
 *
 * @var WPLib_Post $item
 */
?>
<time class="entry-date published <?php $item->the_not( 'is_modified', 'updated' ); ?>"
	  datetime="<?php $item->the_iso8601_date(); ?>"><?php $item->the_datetime(); ?></time><?php

if ( $item->is_modified() ) :

	?><time class="updated" datetime="<?php $item->the_iso8601_date(); ?>"><?php $item->the_datetime(); ?></time><?php

endif;


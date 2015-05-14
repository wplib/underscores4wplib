<?php
/**
 * @var WPLib_Post $entity
 */
?>
<time class="entry-date published <?php $entity->the_not( 'is_modified', 'updated' ); ?>"
	  datetime="<?php $entity->the_iso8601_date(); ?>"><?php $entity->the_datetime(); ?></time><?php

if ( $entity->is_modified() ) :

	?><time class="updated" datetime="<?php $entity->the_iso8601_date(); ?>"><?php $entity->the_datetime(); ?></time><?php

endif;


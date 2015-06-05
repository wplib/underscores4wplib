<?php
/**
 * @package underscores4wplib
 *
 * @var WPLib_Post $item
 */
?>
<article id="post-<?php $item->the_ID(); ?>" class="<?php $item->the_css_classes_attr(); ?>">

	<header class="entry-header">

		<?php $item->the_title_html(); ?>

		<div class="entry-meta">

			<?php $item->the_template( 'post-posted-on' ) ?>

		</div>

	</header>

	<div class="entry-content">
	<?php

		$item->the_content_html();

		$item->the_multipage_links_html();

	?>
	</div>

	<footer class="entry-footer">

		<?php $item->the_template( 'post-footer' ); ?>

	</footer>


</article>

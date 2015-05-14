<?php
/**
 * @package underscores4wplib
 *
 * @var WPLib_Post $entity
 */
?>
<article id="post-<?php $entity->the_ID(); ?>" class="<?php $entity->the_css_classes_attr(); ?>">

	<header class="entry-header">

		<?php $entity->the_title_html(); ?>

		<div class="entry-meta">

			<?php $entity->the_template( 'posted-on' ) ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php

		$entity->the_content_html();

		$entity->the_multipage_links_html();

	?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php $entity->the_template( 'post-footer' ); ?>

	</footer><!-- .entry-footer -->


</article><!-- #post-## -->

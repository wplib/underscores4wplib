<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package underscores4wplib
 *
 * @var WPLib_Post $entity
 */
?>

<article id="post-<?php $entity->the_ID(); ?>" class="<?php $entity->the_css_classes_attr(); ?>">

	<header class="entry-header">

		<h1 class="entry-title"><?php $entity->the_title_html(); ?></h1>

	</header>

	<div class="entry-content">
	<?php

		$entity->the_content_html();

		$entity->the_multipage_links_html();

	?>
	</div>

	<footer class="entry-footer">

		<?php $entity->the_edit_link(); ?>

	</footer>
</article>


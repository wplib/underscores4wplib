<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package underscores4wplib
 *
 * @var WPLib_Post $item
 */
?>

<article id="post-<?php $item->the_ID(); ?>" class="<?php $item->the_css_classes_attr(); ?>">

	<header class="entry-header">

		<h1 class="entry-title"><?php $item->the_title_html(); ?></h1>

	</header>

	<div class="entry-content">
	<?php

		$item->the_content_html();

		$item->the_multipage_links_html();

	?>
	</div>

	<footer class="entry-footer">

		<?php $item->the_edit_link(); ?>

	</footer>
</article>


<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores4wplib
 *
 * @var WPLib_Post $item
 */
?>

<article id="post-<?php $item->the_ID(); ?>" class="<?php $item->the_css_classes_attr(); ?>">

	<header class="entry-header">
		<h1 class="entry-title"><? $item->the_title_link( 'rel=bookmark' ); ?></h1>
		<?php
			if ( $item->is_blog_post() ) :
			?>
				<div class="entry-meta">
					<?php $item->the_template( 'post-posted-on' ); ?>
				</div>
			<?php
			endif;
		?>
	</header>

	<div class="entry-summary">

		<?php $item->the_excerpt_html(); ?>

	</div>

	<footer class="entry-footer">

		<?php $item->the_template( 'post-footer' ); ?>

	</footer>
</article>

<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores4wplib
 *
 * @var WPLib_Post $entity
 */
?>

<article id="post-<?php $entity->the_ID(); ?>" class="<?php $entity->the_css_classes_attr(); ?>">

	<header class="entry-header">
		<h1 class="entry-title"><? $entity->the_title_link( 'rel=bookmark' ); ?></h1>
		<?php
			if ( $entity->is_blog_post() ) :
			?>
				<div class="entry-meta">
					<?php $entity->the_template( 'post-posted-on' ); ?>
				</div>
			<?php
			endif;
		?>
	</header>

	<div class="entry-summary">

		<?php $entity->the_excerpt_html(); ?>

	</div>

	<footer class="entry-footer">

		<?php $entity->the_template( 'post-footer' ); ?>

	</footer>
</article>

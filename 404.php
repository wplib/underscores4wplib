<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package underscores4wplib
 *
 * @var Underscores $theme
 */

$theme->the_header_html(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">
					<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wplib' ); ?>
				</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>
					<?php
					esc_html_e( 'It looks like nothing was found at this location.' .
					            'Maybe try one of the links below or a search?', 'wplib' );
					?>
				</p>
				<?php

					$theme->the_search_form();

					$theme->the_widget( 'WP_Widget_Recent_Posts' );

					if ( 1 < $theme->category_count() ) :

						$theme->the_template( 'most-used-categories' );

					endif;

					/* translators: %1$s: smiley */
					$theme->the_widget( 'WP_Widget_Archives', array(

						'instance'      => 'dropdown=1',
						'after_title'   => '</h2><p>' . sprintf(
							esc_html__( 'Try looking in the monthly archives. %1$s', 'wplib' ),
							$theme->get_converted_smilies( ':)' )
						) . '</p>',

	                ));

					$theme->the_widget( 'WP_Widget_Tag_Cloud' );

				?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
$theme->the_sidebar_html();
$theme->the_footer_html();


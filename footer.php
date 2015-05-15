<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package underscores4wplib
 *
 * @var Underscores $theme
 */
?>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		 <?php

			$theme->the_template( 'footer-powered-by-wp' );

			echo '<span class="sep"> | </span>';

			$theme->the_template( 'footer-designed-by' );

		  ?>
		</div>
	</footer>
</div>
<?php
$theme->the_wp_footer_html()
?>
</body>
</html>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goscho
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer__inner">
			<div class="site-info">
				<h4>Konzert-Standort: Muristrasse 93, 3006 Bern</h4>
				<!-- <a href="<?php /* echo esc_url( __( 'https://wordpress.org/', 'goscho' ) ); */ ?>"> -->
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					/*printf( esc_html__( 'Proudly powered by %s', 'goscho' ), 'WordPress' );*/
					?>
				<!-- </a> -->
				<!-- <span class="sep"> | </span> -->
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					/* printf( esc_html__( 'Theme: %1$s by %2$s.', 'goscho' ), 'goscho', '<a href="https://kilianso.com">Kilian So</a>' );*/
					?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

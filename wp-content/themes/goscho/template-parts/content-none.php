<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Goscho
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Keine Events zurzeit.', 'goscho' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() ) :
		?>
			<p><?php esc_html_e( 'Im Moment finden keine Events im Goscho statt.', 'goscho' ); ?></p>
		<?php
		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Nichts gefunden. Bitte versuchen Sie es noch einmal mit anderen Suchbegriffen.', 'goscho' ); ?></p>
			<?php
			get_search_form();
		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

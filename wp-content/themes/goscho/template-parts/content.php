<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Goscho
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				goscho_posted_on();
				goscho_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php goscho_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'goscho' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'goscho' ),
			'after'  => '</div>',
		) );
		?>

		<h4>Anmeldung</h4>
		<form action="">
			<input type="number" name="input_1" placeholder="Anzahl Personen" required>
			<input type="text" name="inout_2_3" placeholder="Vorname" required>
			<input type="text" name="input_2_6" placeholder="Nachname" required>
			<input type="text" name="input_3" placeholder="Email" required>
			<!-- Not visible but needs to be submitted -->
			<input type="text" name="input_4" placeholder="Event Name" value="<?php the_title() ?>">
			<input type="text" name="input_7" placeholder="Event ID" value="<?php the_ID() ?>">
			<input type="text" name="honeypot" placeholder="Not you Spam-Bot">
			<button type="submit">Reservieren</button>
		</form>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php goscho_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

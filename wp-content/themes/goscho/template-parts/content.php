<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Goscho
 */

	$date = DateTime::createFromFormat('Ymd', get_post_meta(get_the_ID(), 'event_datum', true));
	$tueroeffnung = DateTime::createFromFormat('H:i:s', get_post_meta(get_the_ID(), 'tueroeffnung', true));
	$konzertbeginn = DateTime::createFromFormat('H:i:s', get_post_meta(get_the_ID(), 'konzertbeginn', true));
	$youtube = get_post_meta(get_the_ID(), 'youtube', true);
	$website = get_post_meta(get_the_ID(), 'website', true);
?>

<article id="event-<?php the_ID(); ?>" <?php post_class('full-width'); ?>>
	<div class="event__details">
		<h2 class="event__date"><?php echo $date->format('d.m.Y'); ?></h2>
		<h1 class="event__titel"><?php the_title(); ?></h1>
		<p class="event__description">
			<?php echo get_post_meta(get_the_ID(), 'kurzbeschrieb', true) ?>
		</p>
		<p class="event__info">
			<strong>Türöffnung: <?php echo $tueroeffnung->format('H:i'); ?></strong><br>
			<strong>Konzertbeginn: <?php echo $konzertbeginn->format('H:i'); ?></strong><br>
			<strong>Richtpreis: <?php echo get_post_meta(get_the_ID(), 'richtpreis', true) ?>.-</strong><br>
		</p>
		<div class="button__group">
			<?php
			if (!empty($youtube)) {
			?>
				<a class="button" href="<?php echo $youtube?>" target="_blank">
					Youtube
				</a>
			<?php
			}
			?>
						<?php
			if (!empty($website)) {
			?>
				<a class="button" href="<?php echo $website?>" target="_blank">
					Website
				</a>
			<?php
			}
			?>
		</div>
		<?php			
			/*
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
					<?php
						
						goscho_posted_on();
						goscho_posted_by();
					?>
			<?php endif; ?>
			*/
		?>
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

		/*wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'goscho' ),
			'after'  => '</div>',
		) );*/
		?>
	</div><!-- .entry-header -->

	<div class="event__image__counter">
		<div class="event__image">
			<?php goscho_post_thumbnail(); ?>
			<p class="counter">
				<?php echo get_post_meta(get_the_ID(), 'plaetze_verfuegbar', true); ?>
				 von 
				<?php echo get_post_meta(get_the_ID(), 'plaetze_anzahl', true); ?>
				Plätze frei
			</p>
		</div>
	</div>

	<div class="event__registration">
		<h2>Anmeldung</h2>
		<form action="">
			<input type="number" name="input_1" placeholder="Anzahl Personen" autocomplete="off" required>
			<input type="text" name="inout_2_3" placeholder="Vorname" autocomplete="off" required>
			<input type="text" name="input_2_6" placeholder="Nachname" autocomplete="off" required>
			<input type="text" name="input_3" placeholder="Email" autocomplete="off" required>
			<!-- Not visible but needs to be submitted -->
			<input type="text" name="input_4" placeholder="Event Name" value="<?php the_title() ?>" hidden>
			<input type="text" name="input_7" placeholder="Event ID" value="<?php the_ID() ?>" hidden>
			<input type="text" name="post_id" placeholder="Post ID" value="<?php the_ID() ?>" hidden>
			<input type="text" name="input_8" placeholder="Not you Spam-Bot" hidden>
		</form>
		<a class="submit button">Reservieren</a>
	</div>

	<?php /* goscho_entry_footer(); */?>
</article><!-- #post-<?php the_ID(); ?> -->

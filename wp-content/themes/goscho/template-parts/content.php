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
	$availSeats = get_post_meta(get_the_ID(),'plaetze_verfuegbar', true);
?>

<article id="event-<?php the_ID(); ?>" <?php post_class('full-width'); ?>>
	<div class="event__inner">
		<div class="event__details">
			<?php get_the_content() ?>
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
			?>
		</div><!-- .entry-header -->
	
		<div class="event__image__counter">
			<div class="event__image">
				<?php the_post_thumbnail(); ?>
				<div class="counter">
					<div class="counter__inner">
						<span class="counter--verfuegbar"><?php echo get_post_meta(get_the_ID(), 'plaetze_verfuegbar', true); ?></span>
						<span> von </span>
						<span class="counter--total"><?php echo get_post_meta(get_the_ID(), 'plaetze_anzahl', true); ?></span>
						<span>Plätze frei</span>
					</div>
				</div>
			</div>
		</div>

		<div class="event__registration">
			<h2>Anmeldung</h2>
			<?php 
				if ($availSeats > 0) {
			?>
				<form action="">
					<input type="number" name="input_1" min="1" max="<?php echo $availSeats ?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" placeholder="Anzahl Personen" autocomplete="off" required>
					<input type="text" name="input_2.3" placeholder="Vorname" autocomplete="off" required>
					<input type="text" name="input_2.6" placeholder="Nachname" autocomplete="off" required>
					<input type="text" name="input_3" placeholder="Email" autocomplete="off" required>
					<!-- Not visible but needs to be submitted -->
					<input type="text" name="input_4" placeholder="Event Name" value="<?php the_title() ?>" hidden>
					<input type="text" name="input_7" placeholder="Event ID" value="<?php the_ID() ?>" hidden>
					<input type="text" name="input_8" placeholder="Not you Spam-Bot" hidden>
				</form>
				<span class="success">Reservation abgeschlossen. Bitte überprüfen Sie ihre E-Mails.</span>
				<a href="#" class="submit button">Reservieren</a>
			<?php
				}else{
			?>
				<span class="soldout">Ausverkauft! Eventuell gibt es noch ein paar Plätze an der Abendkasse.</span>
			<?php
				}
			?>
		</div>
	
		<?php /* goscho_entry_footer(); */?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

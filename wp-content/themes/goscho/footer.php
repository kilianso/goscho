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
			<div class="footer__newsletter">
				<h2>Melden Sie sich für den Newsletter an.</h2>
				<p>Erhalten Sie regelmässige News vom Goscho.</p>
				<p>
				<form action="https://fannyernst.us3.list-manage.com/subscribe/post" method="POST">
					<input type="hidden" name="u" value="6fcee3efcb2771c9aba3f2e3a">
					<input type="hidden" name="id" value="cff8842242">

                	<input type="text" name="MERGE1" id="MERGE1" size="25" placeholder="Vorname" value="" required>					
					<input type="text" name="MERGE2" id="MERGE2" size="25" placeholder="Nachname" value="" required>
					<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="E-mail" value="" required>

					<input type="hidden" name="ht" value="12f8697a454e992e213560ffedac8cac89aa0c1c:MTU2OTU2ODU0OS44NzUx">
					<input type="hidden" name="mc_signupsource" value="hosted">
					<input type="submit" class="submit button" name="submit" value="Abonnieren">
				</form>
				</p>
			</div>
			<div class="footer__location">
				<h2>Wo finden die Konzerte statt?</h2>
				<p>
					<strong>
						Muristrasse 93<br>
						3006 Bern
					</strong>
				</p>
				<p>
					Türöffnung 30 Minuten vor Konzertbeginn
				</p>
				<p>
				<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.1334945742688!2d7.468995951831092!3d46.93941534171666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e377b0e42dc5f%3A0x1a5f1e78b501bdc8!2sGoscho!5e0!3m2!1sde!2sch!4v1569567965674!5m2!1sde!2sch' width='600' height='450' frameborder='0' style='border:0;' allowfullscreen=''></iframe></div>
				</p>
			</div>
			<div class="footer__contact">
				<h2>Kontakt</h2>
				<p>
					Claude Bowald<br>
					Muristrasse 92<br>
					3006 Bern<br>
					c.bowald@bluewin.ch
				</p>
				<p>
					<a href="https://www.facebook.com/GoschoKulturplatz" target="_blank">
						<svg width="36" height="36" xmlns="http://www.w3.org/2000/svg"><path d="M36 18.11C36 8.108 27.941 0 18 0S0 8.108 0 18.11C0 27.15 6.582 34.641 15.188 36V23.345h-4.57V18.11h4.57v-3.99c0-4.539 2.687-7.046 6.798-7.046 1.97 0 4.03.354 4.03.354v4.457h-2.27c-2.236 0-2.933 1.396-2.933 2.828v3.397h4.992l-.798 5.235h-4.195V36C29.419 34.641 36 27.15 36 18.11" fill="#FFFFFE" fill-rule="evenodd"/></svg>
					</a>
				</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

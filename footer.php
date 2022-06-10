<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

?>

</main>

<footer class="site-footer">
	<div class="site-footer__inner l-container ">
		<!-- TOP -->
		<div class="site-footer__top">
			<!-- NEWSLETTER -->
			<div class="newsletter">
				<?php echo do_shortcode( '[forminator_form id="41"]' )?>
			</div>
			<!-- CONTACT -->
			<div class="contact-info">
				<p>02921 00001</p>
				<p><a href="mailto:rebel@rebel-lion.agency">rebel@rebel-lion.agency</a></p>
			</div>
			<!-- ADDRESS -->
			<div class="address">
				<p>The Maltings, East Tyndall Street, </br> Cardiff, CF24 5EA</p>
			</div>
		</div><!-- top -->
		<!-- CENTER -->
		<div class="site-footer__center">
			<!-- SOCIAL -->
			<div class="social">
				<p><a href="#">@wearerebel_lion</a></p>
				<ul>
					<li><a href="#"><?php get_template_part( 'svg-template/svg', 'rebel-lion-facebook' ) ?></a></li>
					<li><a href="#"><?php get_template_part( 'svg-template/svg', 'rebel-lion-instagram' ) ?></a></li>
					<li><a href="#"><?php get_template_part( 'svg-template/svg', 'rebel-lion-twitter' ) ?></a></li>
					<li><a href="#"><?php get_template_part( 'svg-template/svg', 'rebel-lion-tiktok' ) ?></a></li>
					<li><a href="#"><?php get_template_part( 'svg-template/svg', 'rebel-lion-linkedin' ) ?></a></li>
				</ul>
			</div>
			<!-- The Drum -->
			<div class="drum">
				<a href="#"><?php get_template_part( 'svg-template/svg', 'the-drum' ) ?></a>
			</div>	
			<div class="nav-footer">
				<?php get_template_part( 'partials/navigation/footer' ); ?>
			</div>


		</div><!-- center -->
		<!-- BOTTOM -->
		<div class="site-footer__bottom">
			<div class="legal">
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms & Conditions</a></li>
				</ul>
			</div>

			<div class="copyright">
				<p><?php echo  do_shortcode( "[copyright]" ) ?></p>
			</div>
		</div><!-- bottom -->
	</div>
</footer><!-- #colophon -->

<div class="follow" id="follow">
	<div class="follow-hover" id="followHover"></div>
</div>
<?php wp_footer(); ?>

</body>
</html>

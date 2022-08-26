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
	
				<p><a href="mailto:rebel@rebel-lion.agency">rebel@rebel-lion.agency</a></p>
			</div>
			<!-- ADDRESS -->
			<div class="address address-grid" >
				<div class="single-address">
					<p style="margin-top:8px"><strong>Cardiff</strong></p>
					<p>The Maltings, </br> East Tyndall Street, </br> Cardiff, CF24 5EA</p>
					<p><a href="tel:02921 00 00 01">02921 00 00 01</a> </p>
				</div>
				<div class="single-address">
					<p style="margin-top:8px"><strong>London</strong></p>
					<p>WeWork, </br>
					131 Finsbury Pavement </br>
					London EC2A 1NT</p>
					<p><a href="tel:02030 12 00 01">02030 12 00 01</a> </p>
				</div>
			</div>
		</div><!-- top -->
		<!-- CENTER -->
		<div class="site-footer__center">
			<!-- SOCIAL -->
			<div class="social">
				<p><a href="#">@wearerebel_lion</a></p>
				<ul>
					<li><a target="_blank" href="https://www.facebook.com/rebeladagency/"><?php get_template_part( 'svg-template/svg', 'rebel-lion-facebook' ) ?></a></li>
					<li><a target="_blank" href="https://www.instagram.com/wearerebel_lion"><?php get_template_part( 'svg-template/svg', 'rebel-lion-instagram' ) ?></a></li>
					<li><a target="_blank" href="https://twitter.com/wearerebel_lion"><?php get_template_part( 'svg-template/svg', 'rebel-lion-twitter' ) ?></a></li>
					<li><a target="_blank" href="https://www.tiktok.com/@wearerebel_lion"><?php get_template_part( 'svg-template/svg', 'rebel-lion-tiktok' ) ?></a></li>
					<li><a target="_blank" href="https://www.linkedin.com/company/rebel-lion-advertising"><?php get_template_part( 'svg-template/svg', 'rebel-lion-linkedin' ) ?></a></li>
					<li><a target="_blank" href="https://www.youtube.com/channel/UCx-dmET1aAxSX-4Ro2GUyig"><?php get_template_part( 'svg-template/svg', 'youtube' ) ?></a></li>
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
					<li><a href="<?php echo  site_url( '/privacy-policy' ) ?>">Privacy Policy</a></li>
					<li><a href="<?php echo  site_url( '/terms-conditions' ) ?>">Terms & Conditions</a></li>
					<li><a href="<?php echo  site_url( '/cookie-policy' ) ?>">Cookie Policy</a></li>
				</ul>
			</div>

			<div class="copyright">
				<p><?php echo  do_shortcode( "[copyright]" ) ?></p>
			</div>
		</div><!-- bottom -->
	</div>
</footer><!-- #colophon -->

</div>
</div> <!-- smootherWrapper -->

<div class="follow" id="follow">
	<div class="follow-hover" id="followHover"></div>
</div>
<?php wp_footer(); ?>

</body>
</html>

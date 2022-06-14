<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/


if ( has_post_thumbnail() ) : ?>
	<section class="p-page-hero" data-scroll-section>
		<div class="bg-image lazyload" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id() , false ); ?>" >
				<div class="l-container--small text-container">
					<h1 class="stroke-text" data-scroll data-scroll-speed=3 ><?php echo get_the_title() ?></h1>
					<div class="u-flex">
						<div data-scroll data-scroll-class="in-viewport" class="hero-showcase">
			
							<div>In today’s world,</div>
							<div> you need a </div>
							<div><span  data-content="different angle" aria-hidden="true">different angle.</span></div>
						
						</div>
						<div data-scroll data-scroll-speed=1 class="hero-more">
							<p>A new approach to building</p>
							<p>your business and reaching</p>
							<p>your audience.</p>
						</div>
					</div>

					</div>
		</div>
	</section>

<?php else : ?>
	<section class="p-page-hero" data-scroll-section>
		
		<div class="l-container--small">
			<h1 class="stroke-text" ><?php echo get_the_title() ?></h1>
			<div class="hero-showcase">

				<div>In today’s world,</div>
				<div> you need a </div>
				<div><span  data-content="text-hover" aria-hidden="true">different angle.</span></div>

			</div>
		</div>

		<div class="hero-more">
			<p>A new approach to building</p>
			<p>your business and reaching</p>
			<p>your audience.</p>
		</div>

	</section>

<?php endif; ?>
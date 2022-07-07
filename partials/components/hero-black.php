<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/


 $postPageId = get_queried_object(  )->ID; 
 ?>

<section class="p-page-hero" style="background-color:#000000;" data-scroll-section>
		<div class="bg-color">

			<div class="l-container--small">
				<div class="text-container">
					<h1 class="stroke-text" ><?php echo get_the_title($postPageId ) ?></h1>

					<?php if(get_field('hero_text',  $postPageId)) : ?>
					<div data-s2r="single" data-s2r-type="block-fade-up" class="hero-text">
						<?php echo get_field('hero_text',  $postPageId) ?>
					</div>
					<?php endif; ?>

				</div>

			</div>
			

  </div>
</section>
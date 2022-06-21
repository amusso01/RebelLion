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

<section class="p-home-hero" data-scroll-section>

	<div class="bg-image lazyload" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id() , false ); ?>" >

			<div class="l-container--small">
				<div class="text-container">


					<div data-scroll data-scroll-speed=1 class="home-hero-text">
						<p>Talk? <span class="bold">It’s cheap.</span></p>
						<p><span class="orange-overlay"></span>But walking the walk?</p>
						<p><span class="bold">That’s what we’re about.</span></p>
					</div>


				</div>

			</div>
			
  </div>

</section>
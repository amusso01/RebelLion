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


					<div class="home-hero-text">
						<p><span class="overflow"> Talk? <span class="bold">It’s cheap.</span> </span></p>
						<p><span class="overflow">But <span style="position:relative; display:inline-block"><span class="orange-overlay"></span> walking the walk?</span></span></p>
						<p><span class="overflow"><span class="bold">That’s what we’re about.</span></span></p>
					</div>


				</div>

			</div>
			
  </div>

</section>
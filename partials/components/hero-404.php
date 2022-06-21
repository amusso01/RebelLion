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
					<p class="stroke-text" >404</p>


					<div data-scroll data-scroll-speed=1 class="hero-text">
            <h1 data-s2r-el><?php _e( 'Page Not Found', 'bymattlee' ); ?></h1>
					</div>

          <div class="message">
            <p data-s2r-el><?php _e( 'Sorry, but the page you were trying to view does not exist.', 'bymattlee' ); ?></p>
            <p data-s2r-el><a href="<?php echo home_url(); ?>" class="o-button"><?php _e( 'Go Home', 'bymattlee' ); ?></a></p>
          </div>


				</div>

			</div>
			

  </div>
</section>
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

<section class="p-home-hero" >

	<div class="bg-image" style="background-color:#000000; height:100vh;">

			<div class="l-container--small">
				<div class="text-container">


					<!-- <div class="home-hero-text">
						<p><span class="overflow"> 	Welcome, 	 we are <span class="bold">Rebel Lion Advertising</span> </span></p>
						<p><span class="overflow"> a full-service new-era <span style="position:relative; display:inline-block"><span class="orange-overlay"></span> advertising agency,</span></span></p>
						<p><span class="overflow">designed to do things <span class="bold">differently. </span></span></p>
					</div> -->
					<div class="home-hero-text">
						<?php echo get_field('hero_text') ?>
					</div>


				</div>

			</div>
			
  </div>

</section>
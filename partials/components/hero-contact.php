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


        <div data-scroll data-scroll-class="in-viewport" class="hero-showcase">
    
          <div>If you’re looking for a different angle</div>
          <div>and a new approach to your media</div>
          <div>planning & buying, <span  data-content="this is your place." aria-hidden="true">this is your place.</span></div>
        
        </div>


      </div>

    </div>
    

  </div>
</section>


   
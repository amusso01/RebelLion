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
    

        <p>If you’re ready for real results, and a new approach to fuelling your brand’s growth, driving sales and becoming more memorable than ever before… We are the agency for you.
        </p>
        
        </div>


      </div>

    </div>
    

  </div>
</section>


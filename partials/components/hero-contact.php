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
    
        <?php if(get_field('hero_text',  $postPageId)) : ?>
        <p>
        <?php echo get_field('hero_text',  $postPageId) ?>
        </p>
        <?php endif; ?>
        
        </div>


      </div>

    </div>
    

  </div>
</section>


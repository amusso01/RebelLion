<?php 
$postPageId = get_queried_object(  )->ID; 

?>

<section class="p-page-hero" style="background-color:#000000;" data-scroll-section>
  <div class="bg-color">

    <div class="l-container--small">
      <div class="text-container">
        <h1 class="stroke-text" >NEWS</h1>

        <?php if(get_field('hero_text')) : ?>
        <div data-scroll data-scroll-speed=1 class="hero-text">
          <?php echo get_field('hero_text') ?>
        </div>
        <?php endif; ?>

      </div>

    </div>
    

  </div>
</section>
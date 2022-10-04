<?php 
$postPageId = get_queried_object(  )->ID; 
$heroText = get_field('hero_text', 'options');
$heroTitle= get_field('hero_title', 'options');
?>

<section class="p-page-hero" style="background-color:#000000;" data-scroll-section>
  <div class="bg-color">

    <div class="l-container--small">
      <div class="text-container">
        <h1 class="stroke-text" >       <?php echo $heroTitle ?></h1>


        <div data-scroll data-scroll-speed=1 class="hero-text">
        <?php echo $heroText ?>
        </div>


      </div>

    </div>
    

  </div>
</section>
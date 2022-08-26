<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/


 $postPageId = get_queried_object(  )->ID; 

 $heroText = get_field('hero') ;

if ( has_post_thumbnail($postPageId) ) : ?>

<section class="p-page-hero" data-scroll-text-start >
  <div class="bg-image lazyload" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id() , false ); ?>" >
    <div class="l-container--small text-container">
        <h1 class="stroke-text"  ><?php echo get_the_title() ?></h1>

          <div class="hero-showcase" data-s2r="single" data-s2r-type="block-fade-up">
    
            <div class="hero-fade js-fade" > <p class="hero-stagger"><?php echo $heroText['hero_top_text']  ?></p>  </div>
          
          </div>
          <div data-s2r="single" data-s2r-type="block-fade-up" data-s2r-delay="0.3"  class="hero-more">
            <p><?php echo $heroText['hero_bottom_text']  ?></p>
          </div>
        </div>


  </div>
</section>

<?php endif; ?>
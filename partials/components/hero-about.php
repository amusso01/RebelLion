<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/


 $postPageId = get_queried_object(  )->ID; 

if ( has_post_thumbnail($postPageId) ) : ?>

<section class="p-page-hero" data-scroll-text-start >
  <div class="bg-image lazyload" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id() , false ); ?>" >
    <div class="l-container--small text-container">
        <h1 class="stroke-text"  ><?php echo get_the_title() ?></h1>
        <div class="u-flex">
          <div class="hero-showcase">
    
            <div class="hero-fade js-fade" > <p class="hero-stagger">In today’s world,</p>  </div>
            <div class="hero-fade js-fade" > <p class="hero-stagger">you need a </p>  </div>
            <div class="hero-fade js-fade" > <p class="hero-stagger hero-paint-orange">different angle. <span class="line"></span></p> </div>
          
          </div>
          <div data-scroll data-scroll-speed=1 class="hero-more">
            <p>A new approach to building</p>
            <p>your business and reaching</p>
            <p>your audience.</p>
          </div>
        </div>

    </div>
  </div>
</section>

<?php endif; ?>
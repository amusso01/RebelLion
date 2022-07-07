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

          <div class="hero-showcase" data-s2r="single" data-s2r-type="block-fade-up">
    
            <div class="hero-fade js-fade" > <p class="hero-stagger">In today’s world, you need a new era angle with your communication.</p>  </div>
          
          </div>
          <div data-s2r="single" data-s2r-type="block-fade-up" data-s2r-delay="0.3"  class="hero-more">
            <p>A new approach to selling products, and services, and building your authority within your marketplace.</p>
          </div>
        </div>


  </div>
</section>

<?php endif; ?>
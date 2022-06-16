<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

$postPageId = get_queried_object(  )->ID; 

 $heroImage = get_field('hero_image');
 $company = get_field('company_name');
$tags = wp_get_post_tags($postPageId);

if ($heroImage ) : ?>
	<section class="p-single-hero" data-scroll-section>
		<div class="bg-image lazyload" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( $heroImage , false ); ?>" >
			<div class="l-container--small text-container">
					<h1 data-scroll data-scroll-speed=3 ><?php echo get_the_title() ?></h1>

			</div>
		</div>
    <div class="infoBanner">
      <div class="l-container--small infoBanner__flex">
        <div class="info">
          <p class="h5">COMPANY</p>
          <p><?php echo $company ?></p>
        </div>
        <div class="info">
          <p class="h5">CATEGORY</p>
          <p>
            <?php $last_key = end(array_keys($tags)) ?>
            <?php foreach($tags as $index => $tag) : ?>
    
              <?php if($index == $last_key ) : ?>
                <span><?php echo $tag->name?></span>
              <?php else : ?>
                <span><?php echo $tag->name ?>, </span>
              <?php endif; ?>
    
            <?php endforeach ?>
          </p>
        </div>
        <div class="info">
          <p class="h5">DATE</p>
          <p>   <time class="u-font-semibold u-text-13 u-tracking-wide" datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M j, Y' ); ?></time></p>
        </div>
      </div>
    </div>
	</section>



<?php endif; ?>
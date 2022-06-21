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
	<section class="p-single-hero p-news-hero" data-scroll-section>
		<div class="bg-image lazyload" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( $heroImage , false ); ?>" >
			<div class="l-container--small text-container">
					<h1 data-scroll data-scroll-speed=3 ><?php echo get_the_title() ?></h1>
          <p>Posted <time  datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'd.m.Y' ); ?></time></p>
			</div>
		</div>
	</section>



<?php endif; ?>
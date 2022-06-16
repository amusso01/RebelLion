<?php 
$args = array(

  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1,

);

$the_query = new WP_Query( $args );

?>



<section data-scroll-section  class="p-single-navigation">
  <div class="glide">
    <div class="l-container--small">
      <h2>More works</h2>
    </div>
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">

        <?php 
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <li class="glide__slide" >

            <article class=" o-news-card" data-url="<?php echo  get_the_permalink() ?>">

            <?php if ( has_post_thumbnail() ) : ?>
              <figure class="u-mb-25" >
                <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="u-w-full lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>">
              </figure>
            <?php endif; ?>


            <header>
              
              <?php if ( get_the_title() ) : ?>
                <h3><?php the_title(); ?></h3>
              <?php endif; ?>

            </header>

            </article>

          </li>

          <?php
        endwhile;
      endif;

      // Reset Post Data
      wp_reset_postdata();
      ?>


      </ul>
    </div>
  </div>
</section>
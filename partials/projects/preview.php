

<article class=" o-news-card">

  <?php if ( has_post_thumbnail() ) : ?>
    <figure class="u-mb-25">
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="u-w-full lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>">
      </a>
    </figure>
  <?php endif; ?>


  <header>
    <div class="u-flex " >
      <?php if ( get_the_category_list() ) : ?>
        <div><?php printf( __( '%s - ' , 'bymattlee' ), get_the_category_list( ', ' ) ); ?></div>
      <?php endif; ?>

      <div class=" u-bg-blue u-px-10 u-py-3 u-text-white">
        <time class="u-font-semibold u-text-13 u-tracking-wide" datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M j, Y' ); ?></time>
      </div>
    </div>
    <?php if ( get_the_title() ) : ?>
      <h3 class="u-text-17 u-tracking-wide"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <?php endif; ?>
  </header>

</article>
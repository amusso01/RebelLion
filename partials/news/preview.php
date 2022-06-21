

<article class=" o-news-card">

  <?php if ( has_post_thumbnail() ) : ?>
    <figure>
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="u-w-full lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>">
      </a>
      <p class="date" >Posted  <time  datetime="<?php the_time( 'Y-m-j' ); ?>"> <?php the_time( ' d.m.Y' ); ?></time></p>
    </figure>
  <?php endif; ?>


  <header>
    <?php if ( get_the_title() ) : ?>
      <h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <?php endif; ?>

    <div class="excerpt">
      <p><?php echo get_the_excerpt() ?></p>
    </div>
  </header>

</article>
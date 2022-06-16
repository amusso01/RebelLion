<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

get_header();
?>



<div data-router-wrapper>
  <div class="" data-router-view="index">

    <main class="p-index_main" role="main" >


       <!-- PAGE HERO -->
       <?php get_template_part( 'partials/page/hero' ); ?>
       
      <div>

        <?php if ( have_posts() ) : ?>

          <section class="l-container--small" data-scroll-section>

            <div class="p-index-grid">
              <?php while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'partials/projects/preview' ); ?>
                  
              <?php endwhile; ?>
            </div>

          </section>

          <?php get_template_part( 'partials/global/pagination-archive' ); ?>

        <?php else : ?>

          <?php get_template_part( 'partials/global/not_found' ); ?>

        <?php endif; ?>

      </div>

    </main>


  </div>
</div>


<?php
get_footer();

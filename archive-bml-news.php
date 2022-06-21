<?php
/**
 * The index file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>

<div data-router-wrapper>
  <div class="" data-router-view="index">

    <main class="p-index_main p-index-news" role="main" >


       <!-- PAGE HERO -->
       <?php get_template_part( 'partials/components/hero-news' ); ?>
       
      <div>

        <?php if ( have_posts() ) : ?>

          <section class="l-container--small" data-scroll-section>

            <div class="p-index-grid">
              <?php while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'partials/news/preview' ); ?>
                  
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

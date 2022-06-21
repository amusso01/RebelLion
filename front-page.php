<?php
/**
 * The template for displaying frontpage by default
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>

<div data-router-wrapper>
  <div class="" data-router-view="home"  data-scroll-container>

  <?php get_template_part( 'partials/components/hero-home' ); ?>

    <main class="p-home__main" role="main">



        <?php get_template_part( 'partials/page/default' ); ?>



    </main>

  </div>
</div>

<?php get_footer(); ?>

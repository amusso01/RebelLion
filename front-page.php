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
  <div class="" data-router-view="page">

    <main class="p-home__main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'partials/page/default' ); ?>

      <?php endwhile; ?>

    </main>

  </div>
</div>

<?php get_footer(); ?>

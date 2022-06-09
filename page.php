<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

get_header();
?>

<div data-router-wrapper>
  <div class="" data-router-view="page">

    <main class="p-page__main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'partials/page/default' ); ?>

      <?php endwhile; ?>

    </main>

  </div>
</div>


<?php
get_footer();

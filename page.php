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
  <div class="" data-scroll-container data-router-view="page">

    <!-- PAGE HERO -->
    <?php get_template_part( 'partials/page/hero' ); ?>


    <!-- PAGE ABOUT -->
    <?php if(is_page( 'about' ) || is_page(18)) : ?>

      <?php get_template_part( 'partials/page/about' ) ?>

    <?php elseif(is_page() || is_page())  : ?>

    <?php endif; ?>


  </div>
</div>


<?php
get_footer();

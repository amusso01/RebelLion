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


    <!-- PAGE ABOUT -->
    <?php if(is_page( 'about' ) || is_page(18)) : ?>
      <div  data-router-view="about"  data-scroll-container>
        <?php get_template_part( 'partials/components/hero-about' ); ?>
        <?php get_template_part( 'partials/page/about' ) ?>
      </div>

    <!-- PAGE REBELS -->
    <?php elseif(is_page('rebels') || is_page(20))  : ?>
      <div  data-router-view="rebels"  data-scroll-container>
      <?php get_template_part( 'partials/components/hero-black' ); ?>
      <?php get_template_part( 'partials/page/rebels' ) ?>
      </div>

    <!-- PAGE SERVICES -->
    <?php elseif(is_page('services') || is_page(22))  : ?>
      <div  data-router-view="services" data-scroll-container> 
      <?php get_template_part( 'partials/components/hero-black' ); ?>
      <?php get_template_part( 'partials/page/services' ) ?>
      </div>

    <!-- PAGE CAREERS -->
    <?php elseif(is_page('careers') || is_page(186))  : ?>
      <div  data-router-view="services" data-scroll-container> 
      <?php get_template_part( 'partials/components/hero-black' ); ?>
      <?php get_template_part( 'partials/page/careers' ) ?>
      </div>

    <!-- PAGE CONTACT -->
    <?php elseif(is_page('contact') || is_page(26))  : ?>
      <div  data-router-view="contact" data-scroll-container> 
      <?php get_template_part( 'partials/components/hero-contact' ); ?>
      <?php get_template_part( 'partials/page/contact' ) ?>
      </div>


    <?php else : ?>
      <div  data-router-view="plain"  >

        <?php get_template_part( 'partials/components/hero-black' ); ?>

        <section class="editor l-container--small">
          <?php the_content() ?>
        </section>

        </div>


    <?php endif; ?>


</div>


<?php
get_footer();

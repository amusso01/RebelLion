<?php
/**
* Template Name: Plain Text page
*
* @package WordPress
*/

get_header();
?>

<div data-router-wrapper>
  <div  data-router-view="plain"  >

  <?php get_template_part( 'partials/components/hero-black' ); ?>

  <section class="editor l-container--small">
    <?php the_content() ?>
  </section>

  </div>

</div>

<?php
get_footer();

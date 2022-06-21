<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package foundry
 */

get_header(); ?>


<div data-router-wrapper>
  
    <main class="p-404_main" role="main" data-router-view="404">

    <?php get_template_part( 'partials/components/hero-404' ); ?>

    </main>

</div>

<?php get_footer(); ?>
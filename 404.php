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

      <header>
        <h1 class="u-h2" data-s2r-el><?php _e( 'Page Not Found', 'bymattlee' ); ?></h1>
      </header>
      <div class="u-rich-text u-mt-20 md:u-mt-40">
        <p data-s2r-el><?php _e( 'Sorry, but the page you were trying to view does not exist.', 'bymattlee' ); ?></p>
        <p data-s2r-el><a href="<?php echo home_url(); ?>" class="o-button"><?php _e( 'Go Home', 'bymattlee' ); ?></a></p>
      </div>
    </main>

</div>

<?php get_footer(); ?>
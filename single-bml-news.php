<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package foundry
 */

get_header();
?>

<div data-router-wrapper>
  <div class="" data-router-view="single" data-scroll-container>

    <main class="p-single_main p-news-main" role="main" >

			<!-- PAGE HERO -->
			<?php get_template_part( 'partials/news/single-hero' ); ?>

			<!-- PAGE CONTENT -->
		  <section data-scroll-section  class="p-single-news-layout l-container--small">
				
				<?php the_content() ?>

			</section>
							


			<!-- PAGE POST NAVIGATION -->
			<?php get_template_part( 'partials/components/carousel-navigation' ); ?>
 
		 </main>
 
 
	 </div>
</div>

<?php
get_footer();

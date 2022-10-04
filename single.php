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
  <div class="" data-router-view="single">

    <main class="p-single_main" role="main" data-scroll-container >

			<!-- PAGE HERO -->
			<?php get_template_part( 'partials/projects/single-hero' ); ?>

			<section class="editor l-container--small" style="padding-top:90px">
				<?php the_content() ?>
			</section>

			<!-- PAGE CONTENT -->
			<?php get_template_part( 'partials/projects/preview-single' ); ?>
							


			<!-- PAGE POST NAVIGATION -->
			<?php get_template_part( 'partials/components/carousel-navigation' ); ?>
 
		 </main>
 
 
	 </div>
</div>

<?php
get_footer();

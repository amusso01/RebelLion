<?php
/**
 * The template for displaying all single jobs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package foundry
 */

$postPageId = get_queried_object(  )->ID; 

get_header();
?>



<div data-router-wrapper>
  <div class="" data-router-view="single">

    <main class="p-single_main p-jobs-main" role="main" >

			<!-- PAGE HERO -->
			<?php get_template_part( 'partials/jobs/single-hero' ); ?>

			<!-- PAGE CONTENT -->
		  <section data-scroll-section  class="p-single-jobs-layout ">
				

			<div class="l-container--narrow">
				<?php the_content() ?>

				<a href="mailto:rebel@rebel-lion.agency?subject=JOB Application: <?php echo get_the_title() ?>" class="apply">Apply now</a>
			</div>

			</section>
							
 
		 </main>
 
 
	 </div>
</div>

<?php
get_footer();

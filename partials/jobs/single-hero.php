<?php
/**
 * Page Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

	$postPageId = get_queried_object(  )->ID; 


 $dep = get_field('department');

?>

<section class="p-single-hero p-jobs-hero" data-scroll-section>

	<div class="l-container--small text-container">
			<a href="<?php echo site_url('careers') ?>" class="back"><i><?php get_template_part( 'svg-template/svg', 'arrow_left' ) ?></i> BACK</a>
			<div class="title">
				<h1><?php echo get_the_title() ?></h1>
				<p><?php echo $dep ?></p>
			</div>

			<a href="mailto:rebel@rebel-lion.agency?subject=JOB Application: <?php echo get_the_title() ?>" class="apply">Apply now</a>
	</div>

</section>




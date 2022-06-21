<?php

  $args = array(
    'post_type' => 'bml-jobs',
    'posts_per_page' => -1
  );

  $the_query = new WP_Query( $args );
?>


<section class="p-careers-section" >

  <div class=" l-container--small">

    <h2>Job opportunities</h2>
    <div class="c-jobs-grid">
  
      <?php if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
       <a href="<?php echo get_the_permalink() ?>">
          <div class="o-job-card">
            <h4><?php echo get_the_title() ?></h4>
            <p><?php echo get_field('department' ) ?></p>
          </div>
        </a>
  
      <?php endwhile;
      endif;
      
      // Reset Post Data
      wp_reset_postdata();
      
      ?>
  
    </div>

  </div>



</section>




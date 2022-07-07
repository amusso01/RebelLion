<?php 

$layouts = get_field('section');

?>

<?php if($layouts) : ?>
  <?php foreach($layouts as $layout) :

    $title = $layout['title'];
    $leftColumn = $layout['left_text_column'];
    $rightColumn = $layout['right_text_column'];
    
    $images = $layout['images']

    ?>

    <section data-scroll-section  class="p-single-layout">

      <div class="text-part l-container--small">
        <div class="p-single-title">
          <h2><?php echo $title ?></h2>
        </div>
    
        <div class="p-single-text__grid">
    
          <?php if($leftColumn) :?>
          <div class="column">
            <p><?php echo $leftColumn ?></p>
          </div>
          <?php endif; ?>
    
          <?php if($rightColumn) :?>
          <div class="column">
            <p><?php echo $rightColumn ?></p>
          </div>
          <?php endif; ?>
    
        </div>
      </div>

      <?php foreach($images as $image) : ?>

        <div class="images-part">
          <div class="image-grid">
          <?php if($image['acf_fc_layout'] == 'two_image' ) : ?>
            
          
              <figure class="half"><img  class="bg-image lazyload" data-sizes="auto" data-srcset="<?php echo bml_the_image_srcset( $image['left_image'] ); ?> " alt="<?php echo get_the_title() ?> image"></figure>
              <figure class="half"><img  class="bg-image lazyload" data-sizes="auto" data-srcset="<?php echo bml_the_image_srcset( $image['right_image'] ); ?> " alt="<?php echo get_the_title() ?> image"></figure>
        

          <?php else : ?>

            <figure class="full"><img  class="bg-image lazyload" data-sizes="auto" data-srcset="<?php echo bml_the_image_srcset( $image['image'] ); ?> " alt="<?php echo get_the_title() ?> image"></figure>

          <?php endif; ?>
          </div>
        </div>

      <?php endforeach; ?>

    </section>

  <?php endforeach; ?>
<?php endif; ?>





<?php

  $args = array(
    'post_type' => 'bml-jobs',
    'posts_per_page' => -1
  );

  $the_query = new WP_Query( $args );
?>


<section class="p-careers-section" >

  <div class=" l-container--small">

    <h2  data-s2r="single" data-s2r-type="block-fade-up">Become a Rebel</h2>
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




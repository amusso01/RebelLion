

<?php get_template_part( 'partials/components/scrolling-text' ) ?>



<?php 

$firstGroup = get_field('first_section');
$secondGroup = get_field('second_section');

?>

<section data-scroll-section>

  <div class="p-about-grid">
    <div class="left-top">
      <p class="light"><?php echo $firstGroup['light_text_left'] ?></p>
      <p class="bold"><?php echo $firstGroup['bold_text_left'] ?></p>
    </div>

    <div class="right-top">
      <figure>
        <img class="lazyload"  data-sizes="auto" data-srcset="<?php bml_the_image_srcset($firstGroup['image_right']) ?>"  alt="about us image">
      </figure>
    </div>


    <div class="left-bottom">
      <figure>
        <img class="lazyload"  data-sizes="auto" data-srcset="<?php bml_the_image_srcset($firstGroup['image_left']) ?>"  alt="about us image">
      </figure>
    </div>
    <div class="right-bottom">
      <p class="light"><?php echo $firstGroup['light_text_right'] ?></p>
    </div>
  </div>

</section>


<section class="p-about-team l-container--small" data-scroll-section >

  <p class="big-text"><?php echo $secondGroup['big_text'] ?></p>

  <a href="<?php echo $secondGroup['button']['url'] ?>" class="link-line"><?php echo $secondGroup['button']['title'] ?></a>

</section>





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
      <div class="lottie-stripe"></div>
      <figure>
        <img class="lazyload"  data-sizes="auto" data-srcset="<?php bml_the_image_srcset($firstGroup['image_right']) ?>"  alt="about us image">
      </figure>
      <div class="lottie-blob">
        <svg xmlns="http://www.w3.org/2000/svg" width="275.908" height="315.625" viewBox="0 0 275.908 315.625">
         <path id="Path_463" data-name="Path 463" d="M275.908,204.7a110.988,110.988,0,0,1-1.5,19.1,56.305,56.305,0,0,1-11.8,25.9,112.671,112.671,0,0,1-15,15.1c-13.5,11.4-28.7,20.3-44.6,27.9a236.343,236.343,0,0,1-68.7,20.3,247.823,247.823,0,0,1-27.2,2.6c-10.7.2-21.3-.8-31.5-4a75.321,75.321,0,0,1-8.9-3.6,36.773,36.773,0,0,1-16.3-16.1,149.637,149.637,0,0,1-9.6-21.2,13.355,13.355,0,0,0-.7-1.8c-5.4-10.9-8.5-22.6-11.5-34.3-4.2-16.2-9.7-32-15-47.8-4.1-12.2-8-24.5-10.6-37.1a138.707,138.707,0,0,1-3-25.7,72.925,72.925,0,0,1,2.8-21.3c5-17.5,13.5-33.1,26.5-46a70.306,70.306,0,0,1,17.9-13.2c3.3-1.7,6.7-3.3,10.1-4.9,12-5.6,24-11,35.9-16.7a290.542,290.542,0,0,1,52.6-19.2,88.56,88.56,0,0,1,21.8-2.7,48.22,48.22,0,0,1,28.2,8.7,120.035,120.035,0,0,1,32.4,32.7,189.923,189.923,0,0,1,17.3,33.9,468.449,468.449,0,0,1,24.5,84.4c2.1,10.8,3.9,21.7,5,32.7C275.408,196.5,275.608,200.6,275.908,204.7Z" fill="#e98076" opacity="0.5"/>
        </svg>
      </div>
      <div class="lottie-triangle"></div>
    </div>


    <div class="left-bottom">
      <div class="lottie-wave"></div>
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



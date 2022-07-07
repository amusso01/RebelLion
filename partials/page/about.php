


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

    <div class="right-top"  data-s2r="single" data-s2r-type="block-fade-up">
      <!-- <div class="lottie-stripe"></div> -->
      <figure>
        <img class="lazyload"  data-sizes="auto" data-srcset="<?php bml_the_image_srcset($firstGroup['image_right']) ?>"  alt="about us image">
      </figure>
    </div>


    <div class="left-bottom"  data-s2r="single" data-s2r-type="block-fade-up">
      <div class="lottie-wave">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 100 108.3" style="enable-background:new 0 0 100 108.3;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#F29100;}
          .st1{fill:#1D1D1B;}
        </style>
        <g>
          <path d="M100,57c-15.4-1.5-22.3,7.9-24.1,18.1C74.5,83.2,79.2,88.4,80,92c1.8,1,2.5,0.6,3.4,3c2.5-1.5,4.7-1.6,5.8-4.4
            c2.5-6.5,0.1-16.9,1.4-21.1c0-0.1,0.8-5,7.3-6.1c-1.9-0.9-4.3-0.9-5.9-0.7C94,59.4,95.6,57.8,100,57z"/>
          <path class="st0" d="M84.5,69.8c0.7-3,2.1-5.6,5.1-7.3c-2.8,0.3-4.7,0.5-7.4,3c0.1-4.7,2.1-9.3,6.4-10.4
            c-15.1,1.6-19.6,15.6-17,25.7c3,11.7,14.1,14.2,9.8,18.5c-1.9,2-6.1,3.2-10.4,2.9v0c-5.5-0.4-11.2-3.5-12.8-10.8
            c-3.3-15.5,7.8-38,9.8-52.3C69.2,31.1,69.7,3.6,40,0.3C38.3,0.1,36.4,0,34.5,0C22.6-0.1,9.7,8.1,0.9,20.7l0,0
            C0.1,21.9,0,23.3,0,24.8c0,4.5,3.6,8.1,8.1,8.1c2.1,0,4.8-1.7,5.8-2.5c0.2-0.1,0.3-0.2,0.3-0.3c0.5-0.5,13.5-10.8,21.9-11.3
            c0.2,0,0.5,0,0.7,0c8.5-0.1,17.9,5.1,19.5,15.9C59,52,43.9,71,47.4,89.6c0.1,0.7,0.3,1.3,0.5,1.9c2.8,9.6,12.2,17.2,22.2,16.8
            c10.7-0.5,21-8.1,18.7-21.4C88.2,83.4,83.2,75.1,84.5,69.8z"/>
          <path class="st1" d="M83.7,92c0,0,1.6-6.1-3.5-14.7c0,0-4.7-7.3-1-13.9c0,0-10.3,9.8,1.4,24.6C80.6,88,81.8,89.1,83.7,92z"/>
        </g>
        </svg>
      </div>
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

  <div class="big-text"><?php echo $secondGroup['big_text'] ?></div>

  <a href="<?php echo $secondGroup['button']['url'] ?>" class="link-line"><?php echo $secondGroup['button']['title'] ?></a>

</section>



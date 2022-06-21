<?php 

$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');


?>



<section class='p-contact-section' data-scroll-section>

  <div class="full-bg-section__white"></div>

  <div class="overflow-text">
    WRITE TO US
    WRITE TO US
    WRITE TO US
    WRITE TO US
  </div>

  <div class="p-contact-grid l-container--small">
    <div class="form">
      <h2>Short on time? <br> Leave us a message <br> and we’ll call you back.</h2>

      <?php echo do_shortcode( '[forminator_form id="139"]' ) ?>
    </div>

    <div class="info">
      <div class="single-info">
        <p>PHONE</p>
        <p><?php echo $phone ?></p>
      </div>
      <div class="single-info">
        <p>EMAIL</p>
        <p><?php echo $email ?></p>
      </div>
      <div class="single-info">
        <p>ADDRESS</p>
        <p><?php echo $address ?></p>
      </div>

    </div>
  </div>

</section>




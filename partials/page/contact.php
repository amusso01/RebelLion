<?php 

$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');


?>



<section class='p-contact-section' data-scroll-section>

  <div class="full-bg-section__white"></div>

  <div class="p-contact-grid l-container--small">
    <div class="form">
      <h2 data-s2r="single" data-s2r-type="block-fade-up">Short on time? <br> Leave us a message <br> and we’ll call you back.</h2>

      <?php echo do_shortcode( '[forminator_form id="139"]' ) ?>
    </div>

    <div class="info">
      <!-- <div class="single-info">
        <p>PHONE</p>
        <p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
      </div> -->
      <div class="single-info">
        <p>EMAIL</p>
        <p><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
      </div>
      <div class="single-info">
        <p style="font-weight:bold;" >ADDRESS</p>
        <div class="address-grid">
          <div class="single-address">
            <strong>Cardiff</strong>
            <p><?php echo $address['cardiff'] ?></p>
            <p><a href="tel:<?php echo $address['cardiff_phone'] ?>"><?php echo $address['cardiff_phone'] ?></a> </p>
          </div>
          <div class="single-address">
            <strong>London</strong>
            <p><?php echo $address['london'] ?></p>
            <p><a href="tel:<?php echo $address['london_phone'] ?>"><?php echo $address['london_phone'] ?></a> </p>
          </div>
        </div>
  
      </div>

    </div>
  </div>

</section>




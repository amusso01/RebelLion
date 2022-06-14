<?php 

$teams = get_field('team_members');



?>


<section class="p-rebels-section l-container--small" data-scroll-section>

  <p class="bold">
    <span> How do we do this?</span>
    <span class="orange"> By reaching highly</span> 
    <span class="orange"> engaged audiences.</span>
  </p>

  <div class="p-rebels-grid">

    <?php foreach($teams as $member) : ?>

      <div class="o-card-team">
        <figure><img  class="lazyload"  data-sizes="auto" data-srcset="<?php bml_the_image_srcset($member['member']['picture']) ?>" alt="<?php echo $member['member']['name'] ?>"></figure>

        <h4><?php echo $member['member']['name'] ?></h4>
        <p class="role"><?php echo $member['member']['role'] ?></p>
        <p class="bio">
          <?php echo $member['member']['bio'] ?>
          <br>
          <a class="link-line" href="<?php echo $member['member']['linkedin'] ?>">See on Linkedin</a>
        </p>
      </div>
    

    <?php endforeach; ?>
    


    <div class="bg-text">
      DREAM <br>
      TEAM
    </div>
  </div>

</section>





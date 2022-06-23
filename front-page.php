<?php
/**
 * The template for displaying frontpage by default
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>

<div data-router-wrapper>
  <div data-router-view="home" data-scroll-home-start>

  <?php get_template_part( 'partials/components/hero-home' ); ?>

    <main class="p-home__main" role="main"> 


      <section class="top">
        <div class="l-container--small">

          <div class="top-home-grid">
            <div class="top-home-grid__text">
              
              <div class="text-top">
                <p> <span class="overflow"> We are a <span class="bold">full-service</span> </span></p>
                <p><span class="overflow"><span class="bold">advertising agency</span> designed</span></p>
                <p><span class="overflow">to do things differently.</span></p>
              </div>

              <div class="text-bottom">
                <p>Because what happens to</p>
                <p>things when they're overused?</p>
              </div>


            </div>

            <div class="figure js-image-intro">
            <figure class="">
              <img data-srcset="<?php bml_the_image_srcset(get_field('top_image'))  ?>" data-sizes="auto" class="lazyload " alt="Rebel Lion Agency image" title="<?php echo get_the_title( get_field('top_image') ); ?>">
            </figure>
            </div>
          </div>

          <div class="top-home-svg">
            <div class="lottie-swirl"></div>
            <div class="lottie-blob"></div>
            <div class="lottie-triangle"></div>
            <div class="top-home-svg__text">
              <p>They crumble</p>
              <p>and break,</p>
              <p>
                they become <br> 
                less effective.
              </p>
            </div>
          </div>

        </div>
      </section>


      <section class="bottom">

        <div class="bottom-home__grid">
          
          <figure class="" >
            <img data-srcset="<?php bml_the_image_srcset(get_field('bottom_image')) ?>" data-sizes="auto" class="lazyload js-image-bottom" alt="Rebel Lion Agency image" title="<?php echo get_the_title( get_field('bottom_image') ); ?>">
            <p class="text-scrolling-home">WE AVOID TAKING THE WELL-TRODDEN PATH WE AVOID TAKING THE WELL-TRODDEN PATH</p>
          </figure>
  
          <div class="bottom-home-grid__text">
  
            <div class="text-bottom">
              <p>So, we avoif taking</p>
              <p>the well-trodden path,</p>
              <p>and <span class="bold">we don't regurgitate</span></p>
              <p><span class="bold">the same old same old,</span></p>
              <p>because those days</p>
              <p>are gone.</p>
            </div>
  
          </div>
          
        </div>


        <div class="l-container--small home-text-last">
          <p>We find new, agile ways</p>
          <p>that are fit purpose and get quicker,</p>
          <p><span class="bold" style="position:relative; z-index:2; display:inline-block"> <span class="orange-overlay orange-overlay-last" ></span>longer-lasting result</span> for our clients.</p>
        </div>

      </section>


    </main>

    <div data-scroll-home-end></div>

  </div>
</div>

<?php get_footer(); ?>

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
  <div class="" data-router-view="home"  data-scroll-container>

  <?php get_template_part( 'partials/components/hero-home' ); ?>

    <main class="p-home__main" role="main"> 


      <section class="top">
        <div class="l-container--small">

          <div class="top-home-grid">
            <div class="top-home-grid__text">
              
              <div class="text-top">
                <p>We are a <span class="bold">full-service</span></p>
                <p><span class="bold">advertising agency</span> designed</p>
                <p>to do things differently.</p>
              </div>

              <div class="text-bottom">
                <p>Because what happens to</p>
                <p>things when they're overused?</p>
              </div>


            </div>

            <div class="figure">
            <figure>
              <img data-srcset="<?php bml_the_image_srcset(get_field('top_image'))  ?>" data-sizes="auto" class="lazyload" alt="Rebel Lion Agency image" title="<?php echo get_the_title( get_field('top_image') ); ?>">
            </figure>
            </div>
          </div>

          <div class="top-home-svg">
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
          
          <figure>
            <img data-srcset="<?php bml_the_image_srcset(get_field('bottom_image')) ?>" data-sizes="auto" class="lazyload" alt="Rebel Lion Agency image" title="<?php echo get_the_title( get_field('bottom_image') ); ?>">
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
          <p><span class="bold"> <span class="orange-overlay"></span>longer-lasting result</span> for our clients.</p>
        </div>

      </section>


    </main>

  </div>
</div>

<?php get_footer(); ?>

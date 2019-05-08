<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

 get_header(); ?>

  <main class="overflow-auto" id="content" role="main">

    <section id="introduction">

      <div class="featured-panel responsive-lg">

        <div class="card bg-white">
          <div class="gradient-overlay-y-black">
            <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/01.jpg" alt="Card image">
          </div>

          <div class="card-img-overlay d-flex">
            <div class="align-self-end">
              <div class="medium text-white text-center my-lg-3">
                <h1 class="card-title display-4 mb-2 text-shadow">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                <a href="#" class="btn btn-lg btn-primary">Our Mission</a>
              </div>
            </div>
          </div>

        </div>
        <!-- .card -->

      </div>
      <!-- .featured-panel -->

    </section>
    <!-- #introduction -->

    <section class="bg-light pattern-border-top-bottom py-6">

      <div class="container">

        <div class="medium mb-4">

            <div class="rounded-lg overflow-hidden mb-4">
            
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0hyNVlYVTNo" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>
                </div>

            </div>
            <!-- .rounded-lg -->
        </div>
        <!-- .narrow -->

        <div class="medium">

            <div class="row matrix-gutter">
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure consequuntur perspiciatis ab? Saepe incidunt doloribus eligendi quas sequi odit.
                    </p>
                </div>
                <!-- .col -->
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae neque quasi omnis dolores optio.
                    </p>
                </div>
                <!-- .col -->
            
            </div>
            <!-- .row -->
        
        </div>
        <!-- .medium -->


      </div>
      <!-- .container -->

    </section>

    <!-- #introduction -->

    <section class="py-5 py-xl-7">

      <h2 class="sr-only">News and Videos from CCF</h2>

      <section class="container mb-5" id="latest-news">

        <header class="text-center mb-4">
          <h3 class="display-4 mb-0">Latest News</h3>
          <a class="blended-link fs-md" href="#">All News</a>
        </header>

        <div class="row matrix-border">

          <?php

          global $post;
          
          $args = array( 'category_name' => 'conservation', 'posts_per_page' => 3, 'orderby' => 'date' );
          $postslist = get_posts( $args );
          
          foreach ( $postslist as $post ) :
          setup_postdata( $post );
          
          $the_date = get_the_date();
          
          ?>

          <div class="col-lg-4 mb-5 mb-lg-0">
          
              <a class="featured-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              
                  <div>

                      <span><?php echo $the_date; ?></span>

                      <?php if( has_post_thumbnail() ):
                          $featured_image_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
                      ?>
                                      
                      <img class="w-100" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">

                      <?php else : ?>
                      <img class="w-100" src="https://via.placeholder.com/1000x563" alt="Placeholder">


                      
                      <?php endif; /* featured_image */ ?>

                  </div>

                  <p class="h5"><?php the_title(); ?></p>

              </a>

          </div>
          <!-- .col -->

          <?php endforeach; wp_reset_postdata(); ?>

        </div>
        <!-- .row -->

      </section>
      <!-- #latest-news -->

      <section class="container-fluid wide" id="events">

        <header class="text-center mb-4">
            <h3 class="display-4 mb-0">Upcoming Events</h3>
            <a class="blended-link fs-md" href="#">All Events</a>
        </header>

        <div class="row matrix-border">

          <div class="col-md-6 d-md-flex mb-3 mb-md-0 col-xl-4 offset-xl-2">
            <div class="card bg-light">
              <div class="card-header bg-info text-white text-center font-weight-bold py-2">
                September 29th, 2018
              </div>
              <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/events/02.jpg" alt="Placeholder">
              <div class="card-body">
                <h4 class="card-title mb-2">Discover Namibia</h4>
                <p class="card-text fs-md">Join us for wine & cheese while taking a virtual tour of Namibia with professional
                  photographer and travel consultant Vanessa Dewson.</p>
              </div>
              <div class="card-footer pt-0">
                <a class="btn btn-primary btn-block" href="#">Event Details</a>
              </div>
            </div>
          </div>
          <!-- .col -->

          <div class="col-md-6 d-md-flex col-xl-4">
            <div class="card bg-light">
              <div class="card-header bg-info text-white text-center font-weight-bold py-2">
                October 26th, 2018
              </div>
              <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/events/01.jpg" alt="Placeholder">
              <div class="card-body">
                <h4 class="card-title mb-2">Dr. Laurie Marker Returns to Ottawa, Canada</h4>
                <p class="card-text fs-md">We are pleased to announce that Dr. Laurie Marker, founder and executive director of
                  Cheetah Conservation Fund (CCF),
                  will be coming back to Canada this fall.</p>
              </div>
              <div class="card-footer pt-0">
                <a class="btn btn-primary btn-block" href="#">Event Details</a>
              </div>
            </div>
          </div>
          <!-- .col -->


        </div>
        <!-- .matrix-border -->

      </section>
      <!-- #videos -->


    </section>





















    <section class="my-6 d-none">
      
      <div class="container my-5" id="latest-news">

        <header class="row align-items-end justify-content-between mb-3">
          <div class="col-md-auto">
            <h2 class="display-4">Latest News</h2>
          </div>
          <!-- .col -->
          <div class="col-md-auto">
            <a class="link text-body" href="#">All News</a>
          </div>
          <!-- .col -->
        </header>
        <!-- .row -->

        <?php get_template_part('template-parts/featured-news'); ?>

      </div>
      <!-- #latest-news -->

      <?php get_template_part('template-parts/featured-video-group'); ?>

    </section>

  </main>
  <!-- #content -->

  <?php get_footer(); ?>
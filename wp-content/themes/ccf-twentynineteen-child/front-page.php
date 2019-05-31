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
          <div class="gradient-overlay-x-black">
            <!-- <img class="card-img" src="https://via.placeholder.com/800x400" alt="Placeholder"> -->
            <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/01.jpg" alt="Card image">
          </div>

          <div class="card-img-overlay d-flex">
            <div class="align-self-center">

              <div class="container text-white">

                <div class="narrow-max-width">
                  <h1 class="display-3 mb-2  text-shadow">Devoted to Saving Cheetahs in the Wild</h1>
                  <a href="#" class="btn btn-lg btn-primary">About Us</a>
                </div>

              </div>
              <!-- .comtainer -->

            </div>
            <!-- .align-self-center -->
          </div>

        </div>
        <!-- .card -->

      </div>
      <!-- .featured-panel -->

    </section>
    <!-- #introduction -->

    <section class="bg-light py-6 d-none">

      <div class="container">

        <div class="row">

          <div class="col-lg mb-3 mb-lg-0">
            <h2 class="h1">Lorem ipsum dolor sit amet consectetur elit</h2>
            <a class="btn btn-lg btn-primary mt-2 d-none d-lg-inline-block" href="#" aria-hidden="true"
              title="Button Link">Button Link</a>
          </div>

          <div class="col-lg">

            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore voluptas quod magni saepe. Expedita ab
              vitae quo, dolore modi nesciunt deserunt voluptatibus? Quidem ducimus est non quisquam exercitationem.
            </p>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error minima id quibusdam molestiae, et nisi
              nostrum exercitationem consectetur perferendis earum.
            </p>

            <a href="#" class="btn btn-lg btn-primary mt-2 d-lg-none" title="Button Link">Button Link</a>
          </div>
          <!-- .col -->

        </div>
        <!-- .row -->

      </div>
      <!-- .container -->

    </section>

    <section class="bg-light pattern-border-top-bottom py-6 d-none">

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

    <section class="py-5 py-xl-7">

      <h2 class="sr-only">News and Events</h2>

      <section class="container mb-5" id="latest-news">

        <header class="text-center mb-3">
            <h3 class="display-4 mb-0">Latest News</h3>
            <a class="link text-body fs-md" href="<?php echo get_site_url(); ?>/news">All News</a>
        </header>

        <div class="row matrix-gutter">

          <?php

          global $post;
          
          $args = array( 'posts_per_page' => 3, 'orderby' => 'date' );
          $postslist = get_posts($args);
          
          foreach ($postslist as $post) :
          setup_postdata($post);
          
          $the_date = get_the_date();
          
          ?>

          <div class="col-lg-4 mb-5 mb-lg-0">
          
              <a class="featured-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              
                  <div>

                      <span><?php echo $the_date; ?></span>

                      <?php if (has_post_thumbnail()):
                          $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
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

  <?php
      $args = array(
          'post_type' => 'events',
          'posts_per_page' => '3',
          'order' => 'ASC',
          'meta_key' => 'start_date',
          'meta_type' => 'DATETIME',
          'orderby' => 'meta_value',
      );
      
      $events_header = false;
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        
      $date = new DateTime(get_field('start_date'));
      $today = DateTime::createFromFormat("U", time());
      
      if ($date > $today) :
        $show_events = true;
        $featured_image_id = get_post_thumbnail_id($post->ID);
        $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
        $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
      if ($events_header == false) :
      ?>

      <section class="container" id="events">

          <header class="text-center mb-3">
              <h3 class="display-4 mb-0">Upcoming Events</h3>
              <a class="link text-body fs-md" href="<?php echo get_site_url(); ?>/events">All Events</a>
          </header>
          
          <div class="row matrix-gutter justify-content-center">

      <?php endif; /* $events_header */ ?>

              <div class="col-md-4">

                <div class="card border h-100">

                  <?php if ($featured_image) : ?>
                  <img class="card-img-top" src="<?php echo $featured_image[0]; ?>"
                    alt="<?php echo $featured_image_alt; ?>">
                  <?php else : ?>
                  <img class="card-img" src="https://via.placeholder.com/1000x563" alt="Placeholder">
                  <?php endif; ?>

                  <div class="card-body">

                    <p class="has-icon f-sans-serif fs-md mb-1">
                      <span class="fas fa-map-marker-alt"></span>
                      <span class="title"><?php the_field('location') ?></span>
                    </p>

                    <h2 class="h5"><?php the_title(); ?></h2>

                    <p class="f-sans-serif fs-md">

                      <strong class="d-block"><?php the_field('start_date') ?></strong>

                      <?php if ($time) : ?>
                      <span class="text-muted"><?php echo $time; ?></span>
                      <?php endif; ?>
                    </p>
                  </div>
                  <!-- .card-body -->

                  <div class="card-footer py-2">
                    <a href="<?php the_permalink(); ?>" class="btn btn-block btn-primary stretched-link">
                      Event Details
                    </a>
                  </div>
                  <!-- .card-footer -->

                </div>
                <!-- .card -->

              </div>
              <!-- .col -->

          <?php
          endif;
          $events_header = true;
          
      endwhile;
      if ($show_events) : ?>
            </div>
        </section>
    <?php endif ?>


  </main>
  <!-- #content -->
  
  <?php get_template_part('template-parts/donate-panel'); ?>
  
  <?php get_footer(); ?>
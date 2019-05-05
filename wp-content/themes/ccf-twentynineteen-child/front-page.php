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

      <?php

      $primary_feature = get_field('primary_feature'); 
      $image = $primary_feature['image'];
      $headline = $primary_feature['headline'];
      $text = $primary_feature['text'];
      $link = $primary_feature['link'];
      
      if( $primary_feature ): ?>
      
      <div class="featured-panel responsive-lg">

        <div class="card bg-white">

          <div class="gradient-overlay-y-black">
            
            <?php if( $image ): ?>
              <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php else : ?>
              <img class="card-img" src="https://via.placeholder.com/1500x750" alt="Placeholder">
            <?php endif; ?>

          </div>
          <!-- .gradient-overlay-y-black -->

            <div class="card-img-overlay d-flex">
                <div class="align-self-end">
                    <div class="text-white">
                        <h1><?php echo $headline; ?></h1>
                        <p class="fs-lg mb-2"><?php echo $text; ?></p>
                        <a class="link text-primary" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
                    </div>
                </div>
                <!-- .align-self-center -->
            </div>

          </div>
          <!-- .card -->

        </div>
        <!-- .featured-panel -->

      <?php endif; /* Primary Feature */ ?>

      <div class="row no-gutters">

        <div class="col-xl-8 d-none d-sm-block">

          <?php

          $secondary_feature = get_field('secondary_feature'); 
          $image = $secondary_feature['image'];
          $headline = $secondary_feature['headline'];
          $text = $secondary_feature['text'];
          $link = $secondary_feature['link'];

          if( $secondary_feature ): ?>

          <div class="featured-panel responsive-lg">

            <div class="card bg-white">

              <div class="gradient-overlay-y-black">

                <?php if ($image) : ?>
                  <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image_alt; ?>">
                <?php else : ?>
                  <img class="card-img" src="https://via.placeholder.com/1000x500" alt="Placeholder">
                <?php endif; ?>

              </div>

              <div class="card-img-overlay d-flex">

                <div class="align-self-end">
                  
                  <div class="text-white">

                    <?php if( $headline): ?>
                    <h1>
                      <?php echo $headline; ?>
                    </h1>
                    <?php endif; ?>

                    <?php if( $text): ?>
                    <p class="fs-lg mb-2">
                      <?php echo $text; ?>
                    </p>
                    <?php endif; ?>

                    <?php if( $link): ?>
                    <a class="link text-primary" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>

                  </div>
                  <!-- .text-white -->

                </div>
                <!-- .align-self-center -->
              </div>

            </div>
            <!-- .card -->

          </div>
          <!-- .featured-panel -->

        </div>
        <!-- .col-* -->

        <div class="col-xl-4">

          <div class="row no-gutters">

            <div class="featured-block d-sm-none">

              <div class="card">

                <div class="gradient-overlay-y-black">

                  <?php if( $image ): ?>
                    <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                  <?php else : ?>
                    <img class="card-img" src="https://via.placeholder.com/1000x500" alt="Placeholder">
                  <?php endif; ?>

                </div>
                <!-- .gradient-overlay-y-black -->

                <div class="card-img-overlay d-flex">
                  <div class="align-self-end">

                    <?php if( $link): ?>
                    <a class="btn btn-block btn-primary" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>

                  </div>
                </div>

              </div>
              <!-- .card -->

            </div>
            <!-- .col-* -->

            <?php endif; /* Secondary Feature */ ?>

            <?php if( have_rows('tertiary_features') ) : while( have_rows('tertiary_features') ): the_row();     

            $image = get_sub_field('image');
            $link = get_sub_field('link');

            ?>

            <div class="featured-block col-md-6 col-xl-12">
            
              <div class="card">

                <?php if( $image ): ?>
                  <div class="gradient-overlay-y-black">
                    <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                  </div>
                <?php else : ?>
                  <div class="gradient-overlay-y-black">
                    <img class="card-img" src="https://via.placeholder.com/500x250" alt="Placeholder">
                  </div>
                <?php endif; ?>

                <div class="card-img-overlay d-flex">
                  <div class="align-self-end">
                    <?php if( $link ): ?>
                      <a class="btn btn-block btn-primary stretched-link" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>
                  </div>
                </div>

              </div>
              <!-- .card -->

            </div>
            <!-- .col-* -->

            <?php endwhile; endif; /* Tertiary feature */ ?>

          </div>
          <!-- .row -->

        </div>
        <!-- .col-* -->

      </div>
      <!-- .row -->

    </section>
    <!-- #introduction -->

    <section class="my-6">
      
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
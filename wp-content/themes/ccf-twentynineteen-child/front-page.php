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
            <div class="align-self-end w-100">
              <div class="medium text-white text-center py-4">
                <h1 class="card-title display-4 mb-3 text-shadow">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
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

        <h2 class="sr-only">Cheetah Conservation Fund Canada Overview</h2>

        <div class="row mb-5">
          <div class="col-md-8 offset-md-2">
            <div class="embed-responsive embed-responsive-16by9 shadow border">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0hyNVlYVTNo" frameborder="0" allowTransparency="true"
                allowfullscreen="true"></iframe>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md mb-3 mb-md-0">
            <p>We fundraise for a highly innovative wildlife conservation organization in Namibia, Cheetah Conservation Fund,
              whose primary goal is to save cheetahs from extinction. We hold fundraising events and educate Canadians. We
              are a registered charity run by Canadian volunteers – we direct 98% of all funds to charitable programming
              in Namibia.</p>
          </div>
          <div class="col-md">
            <p>Since 2013, we have provided close to $310,000; and our impact has been in the support of school outreach, education
              sessions with Future Farmers of Africa, the support of the livestock guarding dogs, and the care of cheetahs.
              Our goal is to save cheetahs in the wild and help ensure that local communities can prosper in harmony with
              wildlife and protect their shared ecosystems.</p>
          </div>
        </div>
        <!-- .row -->

      </div>
      <!-- .container -->

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
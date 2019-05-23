<?php

get_header(); ?>

<main id="content" role="main">

  <div class="bg-dark banner-with-background oculus">

    <div class="container-fluid">
      <div class="narrow">
        <h1 class="display-4 text-white text-center">
        <?php printf( __( 'Search Results for: %s', 'shape' ), '<span class="d-block"><em>' . get_search_query() . '</em></span>' ); ?>
        </h1>
      </div>
    </div>
    <!-- .container -->

  </div>
  <!-- .banner-with-background -->

  <div class="container-fluid overflow-auto">

    <div class="narrow my-5">

    <?php if (have_posts()) : ?>

      <ul class="my-4">
      
        <?php while (have_posts()) : the_post(); ?>
      
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    
        <?php endwhile; ?>
      
      </ul>

      <?php else : ?>

        <p>No results</p>

      <?php endif; ?>

      <div class="pagination justify-content-center my-4">

          <?php echo custom_pagination(); ?>
          
      </div>
      <!-- .pagination -->

      </div>
      <!-- .my-5 -->


    </div>
    <!-- .container-fluid -->

    <section class="featured-panel responsive-lg">

      <div class="card bg-dark">
        <img class="card-img opacity-30" src="<?php echo get_template_directory_uri(); ?>/images/donate.jpg" alt="Placeholder">
        <div class="card-img-overlay d-flex px-0">

          <div class="container align-self-center">

            <div class="narrow py-4">

              <h5 class="card-title h1 text-white text-center text-shadow">
                Join the race to
                <a class="text-primary" href="#">#SaveTheCheetah</a>
              </h5>

              <div class="row matrix-border shadow-lg">

                <div class="col-md-6">
                  <a class="btn btn-lg btn-block btn-primary" href="/donate" title="Donate">Donate</a>
                </div>
                <!-- .col -->

                <div class="col-md-6">
                  <a class="btn btn-lg btn-block btn-primary" href="#" title="Sponsor a Cheetah">Sponsor a Cheetah</a>
                </div>
                <!-- .col -->

              </div>
              <!-- .matrix-border -->

            </div>

          </div>
          <!-- .container -->
        </div>
      </div>

    </section>

</main>
<!-- #content -->

<?php get_footer(); ?>
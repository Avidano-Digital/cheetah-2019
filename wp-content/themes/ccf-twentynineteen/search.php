<?php

get_header(); ?>

<main id="content" role="main">

    <div class="container-fluid bg-info cheetah-spots py-3">

      <div class="narrow">

        <ul class="extensible-list horizontal fs-md text-white text-shadow">
          <li>
            <a class="text-white" href="#">
              Search Results
            </a>
          </li>
        </ul>

      </div>
      <!-- .narrow -->

    </div>
    <!-- .container-fluid -->

    <article class="container-fluid wide blog py-6" id="primary-content">

        <header class="narrow mb-5">

            <h1 class="display-4 mb-3"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    
        </header>      

    </article>
    <!-- #primary-content -->

    <?php 

        if ( have_posts() ) :
    ?>
            <ul>
    <?php          
                while ( have_posts() ) : the_post();

    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
    <?php
                endwhile;
    ?>
                </ul>
    <?php

        else :

      ?>

        No results.

    <?php 

        endif; 

    ?>

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
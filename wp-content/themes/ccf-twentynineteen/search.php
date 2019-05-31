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

        <ul class="list-group list-group-flush mb-3">

            <?php while (have_posts()) : the_post(); ?>

                <li class="list-group-item">
                    <a class="text-body" href="<?php the_permalink(); ?>">
                        <p class="f-sans-serif fs-md mb-0"><?php echo get_the_date(); ?></p>
                        <strong class="h5">
                            <?php the_title(); ?>
                        </strong>                                                                 
                    </a>
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

    <?php get_template_part('template-parts/donate-panel'); ?>

</main>
<!-- #content -->

<?php get_footer(); ?>
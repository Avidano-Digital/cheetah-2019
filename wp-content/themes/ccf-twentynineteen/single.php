<?php

/*
Template Name: News
*/

get_header(); ?>

<main id="content" role="main">

    <div class="container-fluid bg-info cheetah-spots py-3">

      <div class="narrow">

        <ul class="extensible-list horizontal fs-md text-white text-shadow">
          <li>
            <a class="text-white" href="news-ccf-blog.html">
              News
            </a>
          </li>
          <li><span class="fa fa-caret-right" role="img"></span></li>
          <li>
            <a class="text-primary font-weight-bold" href="news-ccf-blog.html">
              CCF Blog
            </a>
          </li>
        </ul>

      </div>
      <!-- .narrow -->

    </div>
    <!-- .container-fluid -->

    <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

    <article class="container-fluid wide blog py-6" id="primary-content">

        <header class="narrow mb-5">

            <?php $postcat = get_the_category( $post->ID ); ?>
            <?php foreach ($postcat as $cat): if ($cat->parent != 0 ): ?>

            <p class="mb-0"><a class="no-link-style text-body" href="#"><em><?php echo $cat->name; ?></em></a></p>

            <?php endif; endforeach; ?> 

            <h1 class="display-4 mb-3"><?php the_title(); ?></h1>
            
            <ul class="extensible-list horizontal">

                <li>

                  <?php $post_object = get_field('author');

                  if( $post_object ): 
                    $post = $post_object;
                    setup_postdata( $post ); 
                    $avatar = get_field('avatar');
                    $avatar_size = '96px';
                    $avatar_placeholder = 'http://cheetah-2019/wp-content/uploads/2019/01/avatar-default.jpg';	
                  ?>

                  <div class="rounded-circle" style="overflow:hidden;">
                    <?php if ( $avatar ) : ?>
                    <img src="<?php echo $avatar['url']; ?>" width="<?php echo $avatar_size; ?>" alt="<?php echo $avatar['alt']; ?>">
                    
                    <?php else: ?>
                    <img src="<?php echo $avatar_placeholder; ?>" width="<?php echo $avatar_size; ?>" alt="">
                    <?php endif; ?>
                  </div>
                                      
                  <?php wp_reset_postdata(); endif; ?>

                </li>
            
                <li class="fs-md">

                  <?php $post_object = get_field('author');

                  if( $post_object ): 
                    $post = $post_object;
                    setup_postdata( $post ); 
                    $article_author = get_the_title();
                  ?>

                  <strong class="d-block">by&nbsp;<?php echo $article_author; ?></strong>

                  <?php wp_reset_postdata(); endif; ?>

                  <span class="text-muted"><?php the_date(); ?></span> 
                </li>
                
            </ul>
    
        </header>

        <?php if( has_post_thumbnail() ):
            $featured_image_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
            $featured_image_caption = get_the_post_thumbnail_caption( get_the_ID() );
        ?>

        <div class="medium mb-5">

          <figure class="figure my-0">
            <img class="figure-img" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>" />
            <?php if( $featured_image_caption ): ?>
            <figcaption class="figure-caption"><?php echo $featured_image_caption ?></figcaption>
            <?php endif; ?>
          </figure>

        </div>
        <!-- .medium -->

        <?php else: ?>

        <div class="medium mb-5">

          <figure class="figure my-0">
            <img class="figure-img" src="https://via.placeholder.com/1000x563" alt="Placeholder">
            <?php if( $featured_image_caption ): ?>
            <figcaption class="figure-caption"><?php echo $featured_image_caption ?></figcaption>
            <?php endif; ?>
          </figure>

        </div>
        <!-- .medium -->

        <?php endif; /* has_post_thumbnail */ ?>

        <?php get_template_part('template-parts/flexible-content-article'); ?>

        <?php get_template_part('template-parts/article-footer'); ?>

    </article>
    <!-- #primary-content -->

    <?php endwhile; endif; /* have_posts */ ?>

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
                  <a class="btn btn-lg btn-block btn-primary" href="#" title="Donate">Donate</a>
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
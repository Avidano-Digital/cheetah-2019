<?php

get_header(); ?>

<main id="content">

    <div class="bg-dark banner-with-background banner-news">

        <div class="container-fluid">
            <div class="narrow text-white text-center text-shadow">
                <h1 class="display-3 text-white mb-2">
                    Cheetah News
                </h1>
            </div>
            <!-- .narrow -->
        </div>
        <!-- .container -->

    </div>
    <!-- .banner-with-background -->

    <div class="container py-6">

            <?php if ( have_posts() ) : ?>

            <div class="row matrix-gutter posts">

                <?php while ( have_posts() ) : the_post(); ?>              
                
                    <div class="col-lg-4 mb-3">
                        
                        <a class="featured-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        
                            <div>

                                <span><?php echo get_the_date(); ?></span>

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

                <?php endwhile; /* have_posts */ ?>

            </div>
            <!-- .posts -->

        <?php endif; /* have_posts */ ?>

        <div class="pagination justify-content-center">

            <?php echo custom_pagination(); ?>
            
        </div>

    </div>

</main>
<!-- #content -->

<?php get_footer(); ?>
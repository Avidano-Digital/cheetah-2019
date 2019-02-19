<?php

/*
Template Name: Category
*/

get_header(); ?>

<main id="content">

    <section class="featured-panel responsive-md">

        <div class="card bg-dark">
            <img class="card-img opacity-30 show-on-mobile" src="<?php echo get_template_directory_uri(); ?>/images/ccf-blog.jpg" alt="Placeholder">
            <div class="card-img-overlay d-flex">
                <div class="container-fluid align-self-center">

                    <div class="narrow text-white text-center text-shadow">
                        <h1 class="display-3 text-white mb-3">
                            Cheetah News
                        </h1>

                        <ul class="extensible-list horizontal justify-content-center responsive-md fs-lg" id="news-menu">
                            <?php listParentCategoriesMenu(); ?>
                        </ul>
                    </div>
                    <!-- .narrow -->
                
                </div>
                <!-- .align-self-end -->

            </div>
        </div>

    </section>
    <!-- .featured-panel -->

    <div class="container-fluid posts-filter bg-info cheetah-spots py-3">

        <div class="narrow">

            <div class="row matrix-gutter">

                <div class="col-md">
                    <?php showPrimaryFilters(); ?>
                </div>
                <!-- .col -->

                <div class="col-md">
                    <?php showAuthorFilters(); ?>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .narrow -->

    </div>
    <!-- .posts-filter -->

    <div class="container py-7">

            <div class="row no-gutters mb-5 bg-light featured">

                <div class="col">

                    <img class="card-img" src="https://via.placeholder.com/1000x500" alt="Placeholder">

                </div>
                <!-- .col -->
                
                <div class="col d-flex">
                <div class="align-items-center">
                <h2>This is a featured post</h2>
                </div>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->


            <?php if ( have_posts() ) : ?>

            <div class="row matrix-border posts">

                <?php while ( have_posts() ) : the_post();
                
                $categories = get_the_category();
                $category_first = $categories[0]->cat_name;
                
                ?>

                <div class="col-lg-4 mb-3">
                    
                    <a class="featured-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    
                        <div>

                            <span><?php the_date(); ?></span>

                            <?php if( has_post_thumbnail() ):
                                $featured_image_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
                            ?>
                                            
                            <img class="w-100" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">
                            
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

        <div class="pagination">

            <?php echo paginate_links(); ?>

        </div>

    </div>

</main>
<!-- #content -->

<?php get_footer(); ?>
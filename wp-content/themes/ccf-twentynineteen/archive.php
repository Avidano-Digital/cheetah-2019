<?php

/*
Template Name: Archive
*/

get_header(); ?>

<main id="content">

    <section class="featured-panel responsive-md">

        <div class="card bg-dark">

            <img class="card-img opacity-30 show-on-mobile" src="<?php echo get_template_directory_uri(); ?>/images/ccf-blog.jpg" alt="Placeholder">
            
            <div class="card-img-overlay d-flex">

                <div class="container-fluid align-self-center">

                    <div class="narrow text-white text-center text-shadow">
                        <h1 class="display-3 text-white mb-2">
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
            <!-- .card-img-overlay -->

        </div>
        <!-- .card -->

    </section>
    <!-- .featured-panel -->

    <div class="container-fluid posts-filter bg-info cheetah-spots py-3">

        <div class="narrow">

            <div class="row matrix-gutter">

                <div class="col-sm">
                    <div class="btn-toggle">
                        <button class="btn btn-block btn-primary" data-toggle="collapse" data-target="#all-topics"
                            aria-expanded="false" aria-controls="all-topics">
                            <span class="Topics">Topics</span>
                        </button>
                    </div>
                </div>
                <!-- .col -->
                
                <div class="col-sm">
                    <div class="btn-toggle">
                        <button class="btn btn-block btn-primary" data-toggle="collapse" data-target="#all-authors"
                            aria-expanded="false" aria-controls="all-authors">
                            <span class="Authors">Authors</span>
                        </button>
                    </div>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

            <div class="row matrix-gutter d-none">

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

    <div class="container-fluid collapse bg-light" id="all-topics">

        <nav class="narrow py-3" role="navigation">

            <?php showPrimaryFilters(); ?>

        </nav>

    </div>
    <!-- .container-fluid -->

    <div class="container-fluid collapse bg-light" id="all-authors">

        <nav class="narrow py-3" role="navigation">

            <?php showAuthorFilters(); ?>

        </nav>

    </div>
    <!-- .container-fluid -->

    <?php 

        $page_heading = '';

        if (get_query_var('author_name')) :
            $page_heading = get_user_by('slug', get_query_var('author_name'))->display_name;
        elseif (get_query_var('category_name') && get_query_var('category_name') != 'ccf-blog'):
            $page_heading = get_category_by_slug(get_query_var('category_name'))->cat_name;
        endif;

        if ($page_heading) :

    ?>


    <h1><?php echo $page_heading; ?></h1>

    <?php endif; ?>

    <div class="container py-6">

            <?php if ( have_posts() ) : ?>

            <div class="row matrix-border posts">

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
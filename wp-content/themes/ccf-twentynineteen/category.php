<?php

/*
Template Name: Category
*/

get_header(); ?>

<main id="content">

    <section class="featured-panel responsive-md">

        <div class="card bg-dark">
            <img class="card-img opacity-40 show-on-mobile" src="<?php echo get_template_directory_uri(); ?>/images/ccf-blog.jpg" alt="Placeholder">
            <div class="card-img-overlay d-flex">
                <div class="container-fluid align-self-center">
                    <div class="narrow text-white text-center text-shadow">
                        <h1 class="display-3 text-white mb-3">
                            Cheetah News
                        </h1>
                        <ul class="extensible-list horizontal justify-content-center responsive-md" id="news-menu">
                            <?php listParentCategoriesMenu(); ?>
                        </ul>
                    </div>
                    <!-- .narrow -->
                </div>
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

    <div class="container-fluid py-7">

        <div class="wide px-lg-2">

            <div class="row">

                <div class="col-xl-9">

                    <?php if ( have_posts() ) : ?>

                    <div class="posts">

                        <?php while ( have_posts() ) : the_post();
                        
                        $categories = get_the_category();
                        $category_first = $categories[0]->cat_name;
                        
                        ?>

                        <div class="row align-items-center mb-3">

                            <?php if( has_post_thumbnail() ):
                                $featured_image_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
                            ?>

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
                                        <img class="w-100" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">
                                    </a>
                            </div>
                            <!-- .col -->

                            <?php endif; ?>

                            <div class="col-lg-6">
                                <p class="f-sans-serif fs-md fs-muted mb-0">
                                    <span><em><?php echo $category_first; ?></em></span>
                                </p>
                                <h2 class="h4"><?php the_title(); ?></h2>                        
                                <p class="mb-0"><?php ccfExcerpt(); ?></p>
                                <a class="link fs-md text-body" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Full Article</a>
                            </div>
                            <!-- .col -->

                        </div>

                        <?php endwhile; /* have_posts */ ?>

                    </div>
                    <!-- .posts -->

                    <?php endif; /* have_posts */ ?>

                    <?php echo paginate_links(); ?>

                </div>
                <!-- .col -->
                
                <div class="col-xl-3">

                    <div class="row matrix-gutter">

                        <div class="col-md-6 col-xl-12"> 

                            <div class="row matrix-border mb-2">

                                <div class="col-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/cta-sign-up.jpg" alt="Placeholder">
                                </div>

                                <div class="col-12">
                                    <a class="btn btn-block btn-primary" href="#" title="CCF Newsletters">CCF Newsletters</a>
                                </div>

                            </div>
                            <!-- .matrix-border -->

                            <div class="row matrix-border mb-2">

                                <div class="col-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/cta-huffpost.jpg" alt="Placeholder">
                                </div>

                                <div class="col-12">
                                    <a class="btn btn-block btn-primary" href="#" title="Dr. Marker's Blog">Dr. Marker on HuffPost</a>
                                </div>

                            </div>
                            <!-- .matrix-border -->











                            <a class="d-none" href="#" target="_blank">
                                <div class="card bg-dark">
                                    <img class="card-img opacity-40" src="<?php echo get_template_directory_uri(); ?>/images/cta-sign-up.jpg" alt="Placeholder">
                                    <div class="card-img-overlay d-flex">
                                        <div class="align-self-end w-100">
                                            <div class="text-white text-center">
                                                <p class="f-sans-serif fs-md text-shadow">
                                                    Receive regular updates on the progress, challenges, and successes of CCF through our emails and newsletter mailings.
                                                </p>
                                                <span class="btn btn-primary">Sign Up</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- .card -->
                            </a>
                        </div>
                        <!-- .col -->


                    </div>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->


        </div>
        <!--. wide -->






</main>
<!-- #content -->

<?php get_footer(); ?>
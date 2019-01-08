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
                <div class="container align-self-center">
                    <div class="narrow text-white text-center text-shadow">
                        <h1 class="display-3 text-white mb-3">
                            Cheetah News
                        </h1>
                        <ul class="extensible-list horizontal justify-content-center responsive-md" id="news-menu">
                            <li>
                                <a class="active"href="#1">CCF Blog</a>
                            </li>
                            <li>
                                <a href="#1">Press Releases</a>
                            </li>
                            <li>
                                <a href="#1">Press Kits</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .narrow -->
                </div>
            </div>
        </div>

    </section>
    <!-- .featured-panel -->

    <div class="container-fluid py-7">

        <div class="wide px-lg-2">

            <div class="row">

                <div class="col-xl-9">

                    <div class="posts-filter bg-light py-2 mb-4">

                        <div class="narrow">

                            <div class="row matrix-gutter">

                                <div class="col-md">
                                    <select class="form-control" id="borough" required>
                                        <option value="">Filter by Topic</option>
                                        <option value="Camera Traps">Camera Traps</option>
                                        <option value="Cheetahs in the News">Cheetahs in the News</option>
                                        <option value="Conservation">Conservation</option>
                                        <option value="Education">Education</option>
                                        <option value="Life at CCF">Life at CCF</option>
                                        <option value="Science &amp; Research">Science &amp; Research</option>
                                        <option value="Success Stories">Success Stories</option>
                                        <option value="Life at CCF">Life at CCF</option>
                                        <option value="Visitor Stories">Visitor Stories</option>
                                    </select>
                                </div>
                                <!-- .col -->

                                <div class="col-md">
                                    <select class="form-control" id="borough" required>
                                        <option value="">Filter by Author</option>
                                        <option value="Bronx">Bronx</option>
                                        <option value="Brooklyn">Brooklyn</option>
                                        <option value="Manhattan">Manhattan</option>
                                        <option value="Staten Island">Staten Island</option>
                                        <option value="Queens">Queens</option>
                                    </select>
                                </div>
                                <!-- .col -->

                            </div>
                            <!-- .row -->

                        </div>
                        <!-- .narrow -->

                    </div>
                    <!-- .posts-filter -->

                    <?php if ( have_posts() ) : ?>

                    <div class="posts">

                        <?php while ( have_posts() ) : the_post();
                        
                        $categories = get_the_category();
                        $category_first = $categories[0]->cat_name;
                        
                        ?>

                        <div class="row align-items-center mb-3">

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <?php $featured_image = get_field('featured_image'); if( $featured_image ): ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
                                        <img class="w-100" src="<?php echo $featured_image['image']; ?>" alt="<?php the_title(); ?>">
                                    </a>
                                <?php endif; /* featured_image */ ?>
                            </div>
                            <!-- .col -->

                            <div class="col-lg-6">
                                <p class="f-sans-serif fs-md fs-muted mb-0">
                                    <span><em><?php echo $category_first; ?></em></span>
                                </p>
                                <h2 class="h4"><?php the_title(); ?></h2>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex porro nostrum suscipit eaque nisi...</p>
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
                            <a href="#" target="_blank">
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

                        <div class="col-md-6 col-xl-12">
                            <a href="#" target="_blank">
                                <div class="card bg-dark">
                                    <img class="card-img opacity-40" src="<?php echo get_template_directory_uri(); ?>/images/cta-huffpost.jpg" alt="Placeholder">
                                    <div class="card-img-overlay d-flex">
                                        <div class="align-self-end w-100">
                                            <div class="text-white text-center">
                                                <p class="f-sans-serif fs-md text-shadow">
                                                    Dr. Laurie Marker is a contributing author to the news and opinion website Huffpost.
                                                </p>
                                                <span class="btn btn-primary">Dr. Marker's Blog</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- .card -->
                            </a>
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
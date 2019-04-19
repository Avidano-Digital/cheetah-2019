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

            <ul class="extensible-list fs-md">
                <li>
                    <a class="text-body" href="#" title="Conservation">Conservation</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="For Kids">For Kids</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Intern Story">Intern Story</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="International Collaboration">International Collaboration</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Life at CCF">Life at CCF</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Livestock Guarding Dogs">Livestock Guarding Dogs</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Outreach">Outreach</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Resident Cheetahs">Resident Cheetahs</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Science and Research">Science and Research</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Success Stories">Success Stories</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Visitor Story">Visitor Story</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Volunteer Story">Volunteer Story</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Working Guest Story">Working Guest Story</a>
                </li>
            </ul>
        </nav>

    </div>
    <!-- .container-fluid -->

    <div class="container-fluid collapse bg-light" id="all-authors">

        <nav class="narrow py-3" role="navigation">

            <ul class="extensible-list fs-md">
                <li>
                    <a class="text-body" href="#" title="A. Schmidt-Küntzel">A. Schmidt-Küntzel</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Anne Schmidt-Küntzel">Anne Schmidt-Küntzel</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Bill Young">Bill Young</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Brandy Morenko Campbell">Brandy Morenko Campbell</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Bruce Brewer">Bruce Brewer</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Dr. Gabrielle Flacke">Dr. Gabrielle Flacke</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Dr. Laurie Marker">Dr. Laurie Marker</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Flavia Placidus">Flavia Placidus</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Jenny Bartlett">Jenny Bartlett</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Kate Vannelli">Kate Vannelli</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Katrin Hils">Katrin Hils</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Lee Tyree">Lee Tyree</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Lora Allen">Lora Allen</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Marisa Katnic">Marisa Katnic</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Misty Tyree">Misty Tyree</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Nadja le Roux">Nadja le Roux</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Paige Seitz">Paige Seitz</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Ryan Marcel">Ryan Marcel</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Selma Kaulinge">Selma Kaulinge</a>
                </li>
                <li>
                    <a class="text-body" href="#" title="Sophie Edwards">Sophie Edwards</a>
                </li>
            </ul>
        </nav>

    </div>
    <!-- .container-fluid -->




    <div class="container py-6">

        <div class="row mb-5 bg-light d-none">

            <div class="col-md">

                <div class="offset-gutter-x">
                    <img class="card-img" src="https://via.placeholder.com/1000x563" alt="Placeholder">
                </div>
                <!-- .offset-gutter-x -->

            </div>
            <!-- .col -->

            <div class="col-md d-md-flex">

                <div class="align-self-center text-center py-4">
                    <p class="fs-md mb-0"><em>Conservation</em> </p>
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                    <span class="link text-secondary">Read More</span>
                </div>

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

        <hr class="mb-5 d-none">


            <?php if ( have_posts() ) : ?>

            <div class="row matrix-border posts">

                <?php while ( have_posts() ) : the_post();
                
                $categories = get_the_category();
                $category_first = $categories[0]->cat_name;
                
                ?>

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

        <div class="pagination">

            <?php echo paginate_links(); ?>

        </div>

    </div>

</main>
<!-- #content -->

<?php get_footer(); ?>
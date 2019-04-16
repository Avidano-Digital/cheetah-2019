<?php

/*
Template Name: CCF Kids
*/

get_header();

$grandparent_title = get_the_title(intval(get_post($post->post_parent)->post_parent));
$parent_title = get_the_title($post->post_parent);

?>

<main class="for-kids" id="content">

    <section class="bg-info cheetah-spots">

        <div class="container-fluid overflow-hidden">

            <div class="narrow text-center text-white my-5">

                <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo-large.svg" alt="Placeholder">

                <p class="text-shadow">
                    Welcome to Cheetah Conservation Fund’s Kids page—the purrfect place to start your cheetah studies! From cool cheetah facts to how kids like YOU are helping
                    CCF save the cheetah in the wild.
                </p>

            </div>
            <!-- .narrow -->

        </div>
        <!-- .container-fluid -->

        <div class="container" id="kids-tabs">

            <nav class="nav nav-pills flex-column flex-md-row" role="tablist">
                <a class="nav-item nav-link flex-even" href="/kids/cheetah-facts" aria-selected="false" role="tab">
                    Cheetah Facts
                </a>

                <a class="nav-item nav-link flex-even active" href="/kids/ccf-kids" aria-selected="true" role="tab">
                    CCF Kids
                </a>
            </nav>

        </div>

    </section>

    <?php get_template_part('template-parts/related-reading'); ?>

    <div class="wide overflow-hidden">

        <div class="my-6" id="primary-content">

            <div class="container my-5">

                <h2 class="f-cheetah-tracks display-3 mb-3 text-tertiary text-center">Helping cheetah stories</h2>

                <div class="row matrix-border">

                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <a class="featured-article" href="#" title="Lorem Ipsum Dolor Simet">
                            <div>
                                <span>January 21, 2019</span>
                                <img class="w-100" src="https://via.placeholder.com/1000x563"
                                    alt="Lorem Ipsum Dolor Simet">
                            </div>
                            <p class="h5">Bucks for B2</p>
                        </a>

                    </div>
                    <!-- .col -->

                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <a class="featured-article" href="#" title="Lorem Ipsum Dolor Simet">
                            <div>
                                <span>January 21, 2019</span>
                                <img class="w-100" src="https://via.placeholder.com/1000x563"
                                    alt="Lorem Ipsum Dolor Simet">
                            </div>
                            <p class="h5">Lorem Ipsum Dolor Simet</p>
                        </a>

                    </div>
                    <!-- .col -->

                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <a class="featured-article" href="#" title="Lorem Ipsum Dolor Simet">
                            <div>
                                <span>January 21, 2019</span>
                                <img class="w-100" src="https://via.placeholder.com/1000x563"
                                    alt="Lorem Ipsum Dolor Simet">
                            </div>
                            <p class="h5">Lorem Ipsum Dolor Simet</p>
                        </a>

                    </div>
                    <!-- .col -->

                </div>
                <!-- .row -->

            </div>
            <!-- .container -->

            <div class="container-fluid wide my-5 bg-light py-5">

                <h2 class="f-cheetah-tracks display-3 mb-2 text-tertiary text-center">Artists of the Month</h2>
                <ul class="extensible-list horizontal justify-content-center">
                    <li>
                        <a class="no-btn-style text-tertiary" href="#1" title="Previous">
                            <span class="fas fa-angle-double-left" title="Previous" role="img"></span>
                        </a>
                    </li>
                    <li>
                        <strong class="text-tertiary">May</strong>
                    </li>
                    <li>
                        <a class="no-btn-style text-tertiary" href="#1" title="Next">
                            <span class="fas fa-angle-double-right" title="Previous" role="img"></span>
                        </a>
                    </li>

                </ul>

                <div class="figure-block medium my-3">

                    <figure class="figure my-0">

                        <div class="figure-img shadow-lg">

                            <a class="enlarge" class="stretched-link" href="<?php echo get_template_directory_uri(); ?>/images/kids/art/featured-artist.jpg" title="A caption for the image."
                                data-toggle="lightbox" data-footer="A caption for the image.">
                                <span>
                                    <span class="fas fa-expand"></span>
                                </span>
                            </a>

                            <img src="<?php echo get_template_directory_uri(); ?>/images/kids/art/featured-artist.jpg" alt="Placeholder">

                        </div>
                        <!-- .figure-img -->

                        <figcaption class="figure-caption mt-1 text-center">A caption for the image.</figcaption>

                    </figure>

                </div>
                <!-- .figure-block -->

                <div class="narrow gallery-thumbnails my-5">

                <div class="artist-bio my-3 text-center">
                <h3 class="text-tertiary">
                    Name or Group
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ullam unde modi laudantium molestiae atque sunt expedita.</p>
                
                </div>
                <!-- .artist-bio -->

                    <div class="row matrix-gutter">

                        <div class="col-sm-6">

                            <div class="position-relative">

                                <a class="enlarge" class="stretched-link" href="https://placehold.it/1200x800.jpg"
                                    title="A caption for the image." data-toggle="lightbox"
                                    data-gallery="example-gallery" data-footer="A caption for the image.">
                                    <span>
                                        <span class="fas fa-expand"></span>
                                    </span>
                                </a>

                                <img src="https://placehold.it/1200x800.jpg" alt="A caption for the image.">
                            </div>

                        </div>
                        <!-- .col -->

                        <div class="col-sm-6">

                            <div class="position-relative">

                                <a class="enlarge" class="stretched-link" href="https://placehold.it/1200x800.jpg"
                                    title="A caption for the image." data-toggle="lightbox"
                                    data-gallery="example-gallery" data-footer="A caption for the image.">
                                    <span>
                                        <span class="fas fa-expand"></span>
                                    </span>
                                </a>

                                <img src="https://placehold.it/1200x800.jpg" alt="A caption for the image.">
                            </div>

                        </div>
                        <!-- .col -->

                        <div class="col-sm-6">

                            <div class="position-relative">

                                <a class="enlarge" class="stretched-link" href="https://placehold.it/1200x800.jpg"
                                    title="A caption for the image." data-toggle="lightbox"
                                    data-gallery="example-gallery" data-footer="A caption for the image.">
                                    <span>
                                        <span class="fas fa-expand"></span>
                                    </span>
                                </a>

                                <img src="https://placehold.it/1200x800.jpg" alt="A caption for the image.">
                            </div>

                        </div>
                        <!-- .col -->

                        <div class="col-sm-6">

                            <div class="position-relative">

                                <a class="enlarge" class="stretched-link" href="https://placehold.it/1200x800.jpg"
                                    title="A caption for the image." data-toggle="lightbox"
                                    data-gallery="example-gallery" data-footer="A caption for the image.">
                                    <span>
                                        <span class="fas fa-expand"></span>
                                    </span>
                                </a>

                                <img src="https://placehold.it/1200x800.jpg" alt="A caption for the image.">
                            </div>

                        </div>
                        <!-- .col -->

                        <div class="col-sm-6">

                            <div class="position-relative">

                                <a class="enlarge" class="stretched-link" href="https://placehold.it/1200x800.jpg"
                                    title="A caption for the image." data-toggle="lightbox"
                                    data-gallery="example-gallery" data-footer="A caption for the image.">
                                    <span>
                                        <span class="fas fa-expand"></span>
                                    </span>
                                </a>

                                <img src="https://placehold.it/1200x800.jpg" alt="A caption for the image.">
                            </div>

                        </div>
                        <!-- .col -->

                        <div class="col-sm-6">

                            <div class="position-relative">

                                <a class="enlarge" class="stretched-link" href="https://placehold.it/1200x800.jpg"
                                    title="A caption for the image." data-toggle="lightbox"
                                    data-gallery="example-gallery" data-footer="A caption for the image.">
                                    <span>
                                        <span class="fas fa-expand"></span>
                                    </span>
                                </a>

                                <img src="https://placehold.it/1200x800.jpg" alt="A caption for the image.">
                            </div>

                        </div>
                        <!-- .col -->

                    </div>
                    <!-- .row -->

                </div>
                <!-- .gallery-thumbnails -->


            
            </div>

        
            <?php get_template_part('template-parts/article-footer'); ?>
        
        </div>
        <!-- #primary-content -->
    
    </div>
    <!-- .container-fluid -->

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();

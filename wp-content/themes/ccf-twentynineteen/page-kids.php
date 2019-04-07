<?php

/*
Template Name: Kids
*/

get_header();

$grandparent_title = get_the_title(intval(get_post($post->post_parent)->post_parent));
$parent_title = get_the_title($post->post_parent);

?>

<main class="for-kids" id="content">

    <section class="container-fluid overflow-hidden bg-info cheetah-spots">

        <div class="narrow text-center text-white my-4">

            <img class="my-3" src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo-large.svg" alt="Placeholder">

        </div>
        <!-- container -->

        <div class="medium">

            <div class="nav nav-pills responsive-md" id="kids-tabs" role="tablist">

                <a class="nav-item nav-link flex-fill active" id="tab-btn-01-a" href="#tab-01-a" data-toggle="pill" aria-controls="tab-01-a" aria-selected="true" role="tab">
                    Learn
                </a>

                <a class="nav-item nav-link flex-fill" id="tab-btn-01-b" href="#tab-01-b" data-toggle="pill" aria-controls="tab-01-b" aria-selected="false" role="tab">
                    Help
                </a>

            </div>

        </div>

    </section>

    <section class="featured-panel responsive-lg my-5">

        <div class="card bg-white bg-info">

            <div class="px-2">
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/cheetahs-playing.svg" alt="Card image">
            </div>

            <div class="card-img-overlay">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 offset-lg-6 text-center">

                            <ul class="extensible-list horizontal justify-content-center funky d-none">
                                <li class="tilt-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/01.jpg"
                                        alt="Placeholder">
                                </li>
                                <li class="tilt-right">
                                    <img class="hard-shadow-info"
                                        src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/02.jpg"
                                        alt="Placeholder">
                                </li>
                            </ul>
                            <div class="narrow">
                                <h2 class="card-title f-cheetah-tracks display-3 mb-1 text-tertiary">A lot of kids</h2>
                                <p>A mother cheetah usually cares for anywhere from 2 to 8 cubs per
                                    litter, but cubs are often the target of other predators and many do not survive
                                    past the first year.</p>
                            </div>

                            <div class="overflow-hidden my-2 d-none">
                                <img class="hard-shadow-info"
                                    src="<?php echo get_template_directory_uri(); ?>/images/kids/01.jpg"
                                    alt="Placeholder">
                            </div>
                        </div>
                        <!-- .col -->
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="featured-panel responsive-lg">

        <div class="card bg-light">
            <div class="overlay-gradient-y-white d-none d-lg-block">
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/almost-like-flying.jpg" alt="Card image">
            </div>

            <div class="card-img-overlay d-flex">

                <div class="container align-self-center my-4">

                    <div class="narrow rounded-lg overflow-hidden mb-4">

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>
                        </div>

                    </div>

                    <div class=" medium text-center">
                        <h2 class="card-title display-3 mb-2 f-cheetah-tracks text-tertiary">Almost like Flying</h2>
                        <p>When cheetahs are running full speed, their stride (length between steps) is 6-7 meters (21 feet). Their feet only touch the ground twice during each stride.</p>
                    </div>
                        
                </div>
                <!-- .container -->

            </div>

        </div>
        <!-- .card -->

    </section>

    <section class="featured-panel responsive-lg my-5">

        <div class="card bg-white bg-info">

            <div class="px-2 bg-danger">
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/tess-cheetahs-running.svg" alt="Card image">
            </div>

            <div class="card-img-overlay d-flex">

                <div class="container align-self-end">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="">
                                <h2 class="card-title f-cheetah-tracks display-2 mb-1 text-info">Not just a funny haircut</h2>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();

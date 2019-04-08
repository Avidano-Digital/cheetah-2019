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

            <p class="text-shadow">
                Welcome to Cheetah Conservation Fund’s Kids page—the purrfect place to start your cheetah studies! From cool cheetah facts to how kids like YOU are helping
                CCF save the cheetah in the wild.
            </p>

        </div>
        <!-- .narrow -->

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

    <section class="container-fluid wide overflow-hidden p-0">

        <div class="featured-panel borderX responsive-lg my-5">

            <div class="card bg-white">

                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/cheetahs-playing.svg" alt="Card image">

                <div class="card-img-overlay">

                    <div class="row">

                        <div class="col-lg-6 offset-lg-6">

                            <div class="narrow text-center my-3">

                                <h2 class="card-title f-cheetah-tracks display-3 mb-2 text-tertiary">A lot of kids</h2>
                            
                                <p>
                                    A mother cheetah usually cares for anywhere from 2 to 8 cubs per
                                    litter, but cubs are often the target of other predators and many do not survive
                                    past the first year.
                                </p>

                            </div>

                            <ul class="extensible-list horizontal justify-content-center funky my-3">
                                <li class="tilt-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/01.jpg"
                                        alt="Placeholder" style="height:150px;">
                                </li>
                                <li class="tilt-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/02.jpg"
                                        alt="Placeholder" style="height:125px;">
                                </li>
                            </ul>

                        </div>
                        <!-- .col -->

                    </div>
                    <!-- .row -->

                </div>
                <!-- .card-img-overlay -->

            </div>
            <!-- .card -->

        </div>

        <div class="featured-panel responsive-lg my-5">

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

                        <div class="narrow text-center">
                            <h2 class="card-title display-3 mb-2 f-cheetah-tracks text-tertiary">Almost like Flying</h2>
                            <p>When cheetahs are running full speed, their stride (length between steps) is 6-7 meters (21 feet). Their feet only touch the ground twice during each stride.</p>
                        </div>
                            
                    </div>
                    <!-- .container -->

                </div>

            </div>
            <!-- .card -->

        </div>

        <div class="featured-panel wide borderX responsive-lg my-5">

            <div class="card bg-white">
            
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/cheetahs-running.svg" alt="Card image">

                <div class="card-img-overlay d-flex">

                    <div class="align-self-end">

                        <div class="narrow">

                            <ul class="extensible-list horizontal justify-content-center funky my-3">
                                <li class="tilt-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/01.jpg"
                                        alt="Placeholder" style="height:150px;">
                                </li>
                                <li class="tilt-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/02.jpg"
                                        alt="Placeholder" style="height:125px;">
                                </li>
                            </ul>
                            
                            <h2 class="card-title f-cheetah-tracks display-3 mb-1 text-tertiary text-center">Not just a funny haircut</h2>
                        
                        </div>

                    </div>
                    <!-- .align-self-end -->

                </div>

            </div>

            <div class="medium">
            
            
                <div class="row matrix-gutter">

                    <div class="col">

                        <p>
                            Cheetah cubs have long tall hair that runs from their neck all the way down to the base of
                            their tail, called the mantle.
                        </p>

                    </div>
                    <!-- .col -->
                    <div class="col">
                        <p>
                            The mantle makes a cheetah cub look like a honey badger and makes them blend into tall grass, which helps
                            keep them safe from threats like lions and hyenas.
                        </p>
                    </div>
                    <!-- .col -->

                </div>
                <!-- .row -->

            </div>
            <!-- .medium -->

        </div>

    </section>
    <!-- .container-fluid -->


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();

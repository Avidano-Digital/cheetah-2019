<?php

/*
Template Name: Cheetah Facts
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
                <a class="nav-item nav-link flex-even active" href="/kids/cheetah-facts" aria-selected="true" role="tab">
                    Cheetah Facts
                </a>

                <a class="nav-item nav-link flex-even" href="/kids/ccf-kids" aria-selected="false" role="tab">
                    CCF Kids
                </a>
            </nav>

        </div>

    </section>

    <?php get_template_part('template-parts/related-reading'); ?>

    <div class="wide overflow-hidden">

        <div class="my-6" id="primary-content">

            <div class="container my-5">

                <div class="medium rounded-lg overflow-hidden my-4">

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>
                    </div>

                </div>
                <!-- .narrow -->

                <div class="narrow">
                    <p>
                        Unlike other “big cats”, a classification that includes: lions, tigers, leopards, jaguars and cougars)
                        cheetahs don’t roar. They growl when facing danger, and they vocalize with sounds more equivalent to a
                        high-pitched chirp or bubble.
                    </p>
                    <p>
                        Cheetahs bark when communicating with each other. The cheetah is also
                        unique among big cats in that it can also purr while both inhaling and exhaling.
                    </p>
                </div>
                <!-- .narrow -->

            </div>
            <!-- .container -->

            <div class="featured-panel responsive-lg my-6">

                <div class="card px-2">

                    <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/cheetahs-playing.png" alt="Card image">

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
                    <div class="gradient-overlay-y-white d-none d-lg-block">
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

            <div class="container my-5">

                <div class="row align-items-center bg-light my-3">

                    <div class="col-lg-6">
                        <div class="mx-n2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/kids-cheetah-facts-tail-like-rudder.jpg" alt="Card image">
                        </div>
                    </div>
                    <!-- .col -->

                    <div class="col-lg-6">

                        <div class="narrow my-3">
                            <h2 class="card-title display-3 mb-2 f-cheetah-tracks text-tertiary text-center">
                                Tail like a rudder
                            </h2>
                            <p>
                                The cheetah has a long, muscular tail that has a flat shape. The tail almost functions
                                like a rudder on a boat because they use it to help control their steering and keep
                                their balance when running very fast.
                            </p>
                        </div>

                    </div>
                    <!-- .col -->

                </div>
                <!-- .row -->

                <div class="row align-items-center bg-light my-3">

                    <div class="col-lg-6">
                        <div class="mx-n2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/kids-cheetah-facts-cleat-feet.jpg" alt="Card image">
                        </div>
                    </div>
                    <!-- .col -->

                    <div class="col-lg-6">

                        <div class="narrow my-3">
                            <h2 class="card-title display-3 mb-2 f-cheetah-tracks text-tertiary text-center">
                                Special cleat feet
                            </h2>
                            <p>
                                The cheetah has “semi non-retractable” claws (almost like dog claws) that work like
                                the cleats on a football shoe to give the cheetah a lot of traction when running.
                                The pads of most cats’ paws are soft, but the cheetah’s pads are hard kind of like
                                the rubber on a tire. This also helps them grip the ground when they are running so
                                fast.
                            </p>
                        </div>

                    </div>
                    <!-- .col -->


                </div>
                <!-- .row -->

                <div class="row align-items-center bg-light my-3">

                    <div class="col-lg-6">
                        <div class="mx-n2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/kids-cheetah-facts-tear-marks.jpg" alt="Card image">
                        </div>
                    </div>
                    <!-- .col -->

                    <div class="col-lg-6">

                        <div class="narrow my-3">
                            <h2 class="card-title display-3 mb-2 f-cheetah-tracks text-tertiary text-center">
                                Tear marks
                            </h2>
                            <p>
                                Like football players, cheetahs have built in sun glare protection around their
                                eyes. The cheetah’s “tear marks” run from the inside corners of their eyes down to
                                the outside edges of their mouth. These marks help reflect the glare of the sun when
                                they are hunting during the day. They work just like the black marks that football
                                players put under their eyes during the games. These marks also work like the sights
                                on a rifle, to help the cheetah “aim” and stay focused on their prey when they are
                                hunting.
                            </p>
                        </div>

                    </div>
                    <!-- .col -->

                </div>
                <!-- .row -->

                <div class="row align-items-center bg-light my-3">

                    <div class="col-lg-6">
                        <div class="mx-n2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/kids-cheetah-facts-spotted-skin.jpg" alt="Card image">
                        </div>
                    </div>
                    <!-- .col -->

                    <div class="col-lg-6">

                        <div class="narrow my-3">
                            <h2 class="card-title display-3 mb-2 f-cheetah-tracks text-tertiary text-center">
                                Spotted skin
                            </h2>
                            <p>
                                The cheetah’s fur is covered in solid black spots, and so is their skin! The black
                                fur actually grows out of the black spots on their skin.
                            </p>
                        </div>

                    </div>
                    <!-- .col -->

                </div>
                <!-- .row -->
            
            </div>

            <div class="featured-panel responsive-lg my-6">

                <div class="card px-2">
                
                    <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/cheetahs-running.png" alt="Card image">

                    <div class="card-img-overlay d-flex">

                        <div class="align-self-end">

                            <div class="narrow text-center">

                                <img class="rounded-circle my-2" src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/kids-cheetah-facts-funny-haircut.jpg" alt="Placeholder" style="height:200px;">
                                
                                <h2 class="card-title f-cheetah-tracks display-3 mb-1 text-tertiary">Not just a funny haircut</h2>
                            
                            </div>

                        </div>
                        <!-- .align-self-end -->

                    </div>

                </div>
                <!-- .card -->

                <div class="container my-3">
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
                <!-- .container -->

            </div>

            <div class="container my-5">

                <div class="row matrix-gutter">

                    <div class="col-lg-6">

                        <div class="card bg-light">
                            <div class="gradient-overlay-y-white">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/kids-cheetah-facts-unique-among-cats.jpg" alt="Card image">
                            </div>
                            
                            <div class="card-img-overlay d-flex">
                                <div class="container align-self-end">
                                    <div class="narrow text-center my-3">
                                        <h2 class="card-title display-3 mb-2 f-cheetah-tracks text-tertiary">
                                            Unique among cats
                                        </h2>
                                        <p>
                                            The cheetah has a long, muscular tail that has a flat shape. The tail almost functions
                                            like a rudder on a boat because they use it to help control their steering and keep
                                            their balance when running very fast.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- .col -->

                    <div class="col-lg-6">

                        <div class="card bg-light">
                            <div class="gradient-overlay-y-white">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/kids/figure/kids-cheetah-facts-favorite-food.jpg" alt="Card image">
                            </div>
                            <div class="card-img-overlay d-flex">
                                <div class="container align-self-end">
                                    <div class="narrow text-center my-3">
                                        <h2 class="card-title display-3 mb-2 f-cheetah-tracks text-tertiary">
                                            A cheetah’s favorite food
                                        </h2>
                                        <p>
                                            Cheetahs are carnivores, and feed mostly on smaller antelope like springbok,
                                            steenbok, Thomson’s gazelle, and duiker. They usually chase down their prey and
                                            then bite its throat, killing it by cutting off its air supply (suffocation).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- .col -->

                
                </div>
            
            </div>

            <div class="featured-panel responsive-lg" dir="ltr">

                <div class="card bg-white">

                    <div class="gradient-overlay-y-white">
                        <img class="card-img" src="https://via.placeholder.com/1500x1000" alt="Card image">
                    </div>

                    <div class="card-img-overlay d-flex px-0">

                        <div class="container align-self-center">

                            <div class="narrow text-center my-5">

                                <h2 class="f-cheetah-tracks display-3 mb-1 text-tertiary">Africa's most endangered cat</h2>

                                <p>
                                    There are fewer than 8,000 cheetahs left in the wild, making the cheetah Africa’s most endangered big cat.
                                </p>

                            </div>
                            <!-- .narrow -->


                        </div>
                        <!-- .container -->

                    </div>
                    <!-- .container -->

                </div>
                <!-- .card -->

            </div>
            <!-- .featured-panel -->

            <div class="container my-5">

                <div class="narrow">
                    <div class="row matrix-border">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-lg btn-block btn-primary">
                                Become a CCF Kid!
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-lg btn-block btn-primary">
                                More Educational Resources
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            <!-- .container -->
        
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

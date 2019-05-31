<?php

/*
Template Name: About Us
*/

get_header();

?>

<main id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="featured-panel responsive-md">

        <?php
        $featured_image_id = get_post_thumbnail_id($post->ID);
        $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
        $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
        ?>

        <div class="card bg-dark">
        
            <?php if ($featured_image): ?>
            <img class="card-img opacity-40 show-on-mobile" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
            <?php else : ?>
            <img class="card-img opacity-40 show-on-mobile" src="http://via.placeholder.com/1500x500.jpg" alt="Placeholder">
            <?php endif; ?>

            <div class="card-img-overlay d-flex">
                <div class="container align-self-center">
                    <div class="narrow text-white text-center text-shadow my-3">
                    <h1 class="display-2">
                        <?php the_title(); ?>
                    </h1>
                    <p class="fs-lg text-primary f-sans-serif mb-0"><strong>CCF United States</strong> </p>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis beatae soluta sed tempore dolorum.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="overflow-hidden bg-light">

        <div class="container my-5">

            <h2 class="display-4 text-center my-4">Who We Are</h2>

            <div class="medium">

            <div class="row matrix-gutter text-center my-4">

                <div class="col-md-4">
                
                    <img class="rounded-circle mb-1" src="https://via.placeholder.com/200x200" alt="Placeholder">
                    <p class="f-sans-serif mb-0"><strong>Full Name</strong></p>
                    <p class="f-sans-serif mb-0">Professional Title</p>
                
                </div>
                <!-- .col -->


                <div class="col-md-4">
                
                    <img class="rounded-circle mb-1" src="https://via.placeholder.com/200x200" alt="Placeholder">
                    <p class="f-sans-serif mb-0"><strong>Full Name</strong></p>
                    <p class="f-sans-serif mb-0">Professional Title</p>
                
                </div>
                <!-- .col -->

                <div class="col-md-4">
                
                    <img class="rounded-circle mb-1" src="https://via.placeholder.com/200x200" alt="Placeholder">
                    <p class="f-sans-serif mb-0"><strong>Full Name</strong></p>
                    <p class="f-sans-serif mb-0">Professional Title</p>
                
                </div>
                <!-- .col -->


                <div class="col-md-4">
                
                    <img class="rounded-circle mb-1" src="https://via.placeholder.com/200x200" alt="Placeholder">
                    <p class="f-sans-serif mb-0"><strong>Full Name</strong></p>
                    <p class="f-sans-serif mb-0">Professional Title</p>
                
                </div>
                <!-- .col -->

                <div class="col-md-4">
                
                    <img class="rounded-circle mb-1" src="https://via.placeholder.com/200x200" alt="Placeholder">
                    <p class="f-sans-serif mb-0"><strong>Full Name</strong></p>
                    <p class="f-sans-serif mb-0">Professional Title</p>
                
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

            </div>
            <!-- .medium -->

        </div>
        <!-- #primary-content -->

    </section>
    <!-- .container-fluid -->

    <section class="py-6">

            <div class="container">

                <div class="row">

                    <div class="col-lg mb-3 mb-lg-0">
                        <h2 class="h1">Lorem ipsum dolor sit amet consectetur elit</h2>
                    </div>

                    <div class="col-lg">

                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore voluptas quod magni saepe. Expedita ab vitae quo, dolore modi nesciunt deserunt voluptatibus? Quidem ducimus est non quisquam exercitationem.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error minima id quibusdam molestiae, et nisi nostrum exercitationem consectetur perferendis earum.
                        </p>

                    </div>
                    <!-- .col -->

                </div>
                <!-- .row -->

            </div>
            <!-- .container -->
        
        </section>

    <?php endwhile; endif; /* have_posts */ ?>

    <?php get_template_part('template-parts/donate-panel'); ?>

</main>
<!-- #content -->

<?php get_footer();

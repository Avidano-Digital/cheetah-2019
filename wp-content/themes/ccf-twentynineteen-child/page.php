<?php

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
                    <div class="narrow text-white text-center">
                    <h1 class="display-2">
                        <?php the_title(); ?>
                    </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="overflow-hidden bg-light">

        <div class="container my-5">

            <h2 class="display-4 text-center my-4">Who We Are</h2>

            <div class="row matrix-gutter text-white text-center">

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- #primary-content -->

    </section>
    <!-- .container-fluid -->


    <section class="overflow-hidden">

        <div class="container my-5">

            <h2 class="display-4 text-center my-4">Our Mission</h2>

            <div class="row matrix-gutter text-white text-center">

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-4">
                    <div class="bg-dark text-white p-4">
                        <p>Column</p>
                    </div>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- #primary-content -->

    </section>
    <!-- .container-fluid -->


    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();

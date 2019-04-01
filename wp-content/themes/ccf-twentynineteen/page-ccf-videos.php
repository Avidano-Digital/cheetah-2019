<?php

/*
Template Name: CCF Videos
*/

get_header(); ?>

<main id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="banner">

        <div class="card bg-white">

            <div class="overlay-gradient-y-black">
        
<?php 
                $featured_image_id = get_post_thumbnail_id($post->ID);
                $featured_image = wp_get_attachment_image_src($featured_image_id,'full', false, '');
                $featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);
?>
 	
            <?php if( $featured_image ): ?>
                <img class="card-img" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
            <?php else : ?>
                <img class="card-img" src="http://via.placeholder.com/1500x500.jpg" alt="Placeholder">
            <?php endif; ?>

            </div>

            <div class="card-img-overlay d-flex">
                <div class="container-fluid align-self-end opacity-70">
                    <h1 class="text-right text-secondary">
                        <em>Learn</em>
                    </h1>
                </div>
                <!-- .align-self-center -->
            </div>
        </div>

    </section>
    <!-- .banner -->

    <article class="container-fluid">

        <div class="row">

            <?php get_template_part('template-parts/sidebar-learn'); ?>

            <div class="col-xl-9 py-6">

                <header class="medium mb-4">
                    <h1 class="display-4 text-center">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="text-block narrow mb-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore debitis provident natus, unde fugit
                        voluptatibus quia.
                    </p>
                </div>

                <div class="medium mb-6">

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0"
                            allowTransparency="true" allowfullscreen="true"></iframe>
                    </div>

                </div>
                <!-- .medium -->

                <div class="offset-gutter-x">

                    <div class="row matrix-border offset-gutter-x">

                        <div class="col-lg-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI"
                                    frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="col-lg-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI"
                                    frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="col-lg-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI"
                                    frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="col-lg-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI"
                                    frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="col-lg-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI"
                                    frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="col-lg-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI"
                                    frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                            </div>
                        </div>
                        <!-- .col -->

                    </div>
                    <!-- .row -->

                </div>
                <!-- .offset-gutter-x -->

                <?php get_template_part('template-parts/article-footer'); ?>










            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer(); ?>
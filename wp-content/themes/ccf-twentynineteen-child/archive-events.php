<?php

get_header();

?>

<main id="content">

    <section class="banner">

        <div class="card bg-white">

            <div class="gradient-overlay-y-black">

                <?php
                $featured_image_id = get_post_thumbnail_id($post->ID);
                $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
                $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                ?>

                <?php if ($featured_image): ?>
                <img class="card-img"
                    src="<?php echo $featured_image[0]; ?>"
                    alt="<?php echo $featured_image_alt; ?>">
                <?php else : ?>
                <img class="card-img" src="http://via.placeholder.com/1500x500.jpg" alt="Placeholder">
                <?php endif; ?>

            </div>

            <div class="card-img-overlay d-flex">
                <div class="container-fluid align-self-end opacity-70">
                    <h1 class="text-right text-secondary">
                        <em>Events</em>
                    </h1>
                </div>
                <!-- .align-self-center -->
            </div>
        </div>

    </section>
    <!-- .banner -->

    <article class="container-fluid">

        <div class="row">

            <div class="col-xl-9 overflow-hidden">

                <article class="my-6" id="primary-content">

                    <header class="medium my-3">
                        <h1 class="display-4 text-center">
                            Upcoming Events
                        </h1>
                    </header>

                    <div class="text-block narrow mb-5">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div class="text-block medium my-4 events">

                                <h2 class="mb-3"><?php echo $group; ?></h2>

                                <div class="row matrix-gutter">

                                    <?php 

                                    $date = new DateTime(get_field('start_date'));
                                    $year = $date->format("Y");
                                    $month = $date->format("F");
                                    
                                    $featured_image_id = get_post_thumbnail_id($post->ID);
                                    $featured_image = wp_get_attachment_image_src($featured_image_id,'full', false, '');
                                    $featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);

                                    ?>

                                    <div class="col-md-6">

                                        <div class="card border h-100">
                                            
                                            <?php if ($featured_image) : ?>
                                                <img class="card-img-top" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
                                            <?php else : ?>
                                                <img class="card-img" src="https://via.placeholder.com/1000x563" alt="Placeholder">
                                            <?php endif; ?>

                                            <div class="card-body">

                                                <p class="has-icon f-sans-serif fs-md mb-1">
                                                    <span class="fas fa-map-marker-alt"></span>    
                                                    <span class="title"><?php the_field('location') ?></span>    
                                                </p>
                                                
                                                <h2 class="h5"><?php the_title(); ?></h2>
                                                
                                                <p class="f-sans-serif fs-md">

                                                    <strong class="d-block"><?php the_field('start_date') ?></strong>

                                                    <?php if ($time) : ?>
                                                    <span class="text-muted"><?php echo $time; ?></span>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                            <!-- .card-body -->

                                            <div class="card-footer py-2">
                                                <a href="<?php the_permalink(); ?>"
                                                    class="btn btn-block btn-primary stretched-link">
                                                    Event Details
                                                </a>
                                            </div>
                                            <!-- .card-footer -->
                                        </div>
                                        <!-- .card -->

                                    </div>
                                    <!-- .col -->

                                </div>
                                <!-- .row -->

                            </div>
                            <!-- .text-block -->

                        <?php endwhile; endif; ?>

                    </div>
                    <!-- .narrow -->

                    <?php get_template_part('template-parts/article-footer'); ?>
            
                </article>
                <!-- #primary-content -->

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

</main>
<!-- #content -->

<?php get_footer(); ?>
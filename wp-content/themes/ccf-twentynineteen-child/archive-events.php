<?php

get_header();

?>

<?php

$image = get_field('banner_image', get_option('page_for_posts'));

if ($image): ?>

    <style>
     .banner-with-background.featured-image::before{
        background-image: url(<?php echo $image['url']; ?>);
        opacity : .4;
     }
     </style>

<?php endif; ?>

<main id="content">

    <div class="bg-dark banner-with-background featured-image">

        <div class="container">

            <div class="text-white text-shadow">
                <h1 class="display-3 text-white">
                    Events
                </h1>
            </div>
            <!-- .narrow -->
        
        </div>
        <!-- .container -->

    </div>
    <!-- .banner-with-background -->

    <div class="container">
        <div class="row">

            <div class="col-lg-9 overflow-hidden" id="primary-content">

                <div class="my-5">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="row matrix-gutter">

                            <?php

                            $date = new DateTime(get_field('start_date'));
                            $year = $date->format("Y");
                            $month = $date->format("F");
                            
                            $featured_image_id = get_post_thumbnail_id($post->ID);
                            $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
                            $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);

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

                    <?php endwhile; endif; wp_reset_postdata(); ?>

                </div>
                <!-- .medium -->

            </div>
            <!-- .col -->
            
            <div class="col-lg-3 mt-5 border-lg-left mt-lg-0">

                <div class="sticky-top py-lg-5">

                    <div class=" p-2">

                        <ul class="extensible-list fs-md">
                            <li>
                                <strong>HELLO:</strong>
                            </li>
                        </ul>
                    
                    </div>
                    <!-- .bg-light -->

                </div>
                <!-- .bg-light -->

            </div>
            <!-- .col -->
            
        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->
</main>
<!-- #content -->

<?php get_footer(); ?>
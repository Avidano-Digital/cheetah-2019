<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php
    $featured_image_id = get_post_thumbnail_id($post->ID);
    $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
    $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
    ?>

    <style>

     .banner-with-background.featured-image::before{
        background-image: url(<?php echo $featured_image[0]; ?>);
        opacity : .4;
     }

     </style>


    <main id="content">

        <div class="bg-dark banner-with-background featured-image">

            <div class="container">

                <div class="text-white text-shadow">
                    <h1 class="display-3 text-white">
                        <?php the_title(); ?>
                    </h1>
                </div>
                <!-- .narrow -->
            
            </div>
            <!-- .container -->

        </div>
        <!-- .banner-with-background -->

        <div class="container">

            <div class="row">

                <div class="col-lg-3 mt-5 border-lg-left mt-lg-0 order-lg-last">

                    hello world!
                
                </div>
                <!-- .col -->

                <div class="col-lg-9 overflow-hidden" id="primary-content">


                </div>
                <!-- .col -->
                
            </div>
            <!-- .row -->
        
        </div>
        <!-- .container -->

    </main>
    <!-- #content -->

<?php endwhile; endif; /* have_posts */ ?>

<?php get_footer(); ?>

<?php

/*
Template Name: News Archive
*/

get_header();

?>

<?php

$featured_image_id = get_post_thumbnail_id($post->ID);
$featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
$featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);

echo '<style>' . 
     '.banner-with-background.featured-image::before{' .
     'background-image: url(' . $featured_image[0] .');' .
     '</style>'
?>

<main id="content">

    <div class="bg-dark banner-with-background featured-image">

        <div class="container">

            <div class="text-white text-shadow">
                <h1 class="display-3 text-white">
                    News
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

                <div class="sticky-top py-lg-5">

                    <div class=" p-2">
                        <ul class="extensible-list fs-md">
                        <li><strong>Topics:</strong></li>
                            
                            <?php

                            $categories = get_categories();
                            foreach ($categories as $category): ?>

                            <li><a class="text-muted" href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a></li>
                            
                            <?php endforeach; ?>

                        </ul>
                    
                    </div>
                    <!-- .bg-light -->

                </div>
                <!-- .bg-light -->

            </div>
            <!-- .col -->

            <div class="col-lg-9 overflow-hidden" id="primary-content">

                <div class="my-5">

                    <?php

                    global $post;
                    
                    $postslist = get_posts();
                    
                    foreach ( $postslist as $post ) :
                    setup_postdata( $post );
                    
                    $the_date = get_the_date();
                    
                    ?>

                    <div class="row align-items-center my-3">

                        <div class="col-lg-6">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img class="w-100" src="https://via.placeholder.com/1000x563" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <!-- .col-6 -->

                        <div class="col-lg-6">
                            <p class="text-muted f-sans-serif mb-0 fs-md"><?php echo $the_date; ?></p>
                            <h5 class="mb-0"><?php the_title(); ?></h5>
                            <a class="link text-secondary stretched-link fs-md" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                        <!-- .col-6 -->
                    
                    </div>
                    <!-- .row -->

                    <?php endforeach; wp_reset_postdata(); ?>

                </div>
                <!-- .medium -->

            </div>
            <!-- .col -->
            
        </div>
        <!-- .row -->
    
    </div>
    <!-- .container -->

</main>
<!-- #content -->

<?php get_footer(); ?>
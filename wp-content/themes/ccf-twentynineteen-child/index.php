<?php

get_header();

?>

<?php

$image = get_field('news_header_image', 'option');

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
                    <?php echo (is_home() ? single_post_title() : the_archive_title()); ?>
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
                
                    $term_name = get_queried_object()->name;
                    $args = array( 'category_name' => $term_name);
                    
                    $postslist = get_posts( $args );
                    
                    foreach ($postslist as $post) :
                    setup_postdata($post);
                    
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
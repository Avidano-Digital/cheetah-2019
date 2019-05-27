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

                <div class="sticky-top py-lg-5">

                    <div class=" p-2">

                        <ul class="extensible-list fs-md">
                            <li>
                                <strong>Topics:</strong>
                            </li>
                            <li>
                                <a href="#" title="Link">Link</a>
                            </li>
                            <li>
                                <a href="#" title="Link">Link</a>
                            </li>
                            <li>
                                <a href="#" title="Link">Link</a>
                            </li>
                            <li>
                                <a href="#" title="Link">Link</a>
                            </li>
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
                            <img class="w-100" src="https://via.placeholder.com/1000x563" alt="Placeholder">
                        </div>
                        <!-- .col-6 -->

                        <div class="col-lg-6">
                            <p class="fs-md text-muted"><?php echo $the_date; ?></p>
                            <h5><?php the_title(); ?></h5>
                        </div>
                        <!-- .col-6 -->
                    
                    </div>
                    <!-- .row -->

                    <?php endforeach; wp_reset_postdata(); ?>

                    <div class="row matrix-gutter d-none">

                    <?php

                    global $post;
                    
                    $postslist = get_posts();
                    
                    foreach ( $postslist as $post ) :
                    setup_postdata( $post );
                    
                    $the_date = get_the_date();
                    
                    ?>

                    <div class="col-lg-6 mb-3 mb-lg-0">
                    
                        <a class="featured-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        
                            <div>

                                <span><?php echo $the_date; ?></span>

                                <?php if( has_post_thumbnail() ):
                                    $featured_image_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
                                ?>
                                                
                                <img class="w-100" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">
                                
                                <?php else : ?>
                                
                                <img class="w-100" src="https://via.placeholder.com/1000x563" alt="Placeholder">
                                
                                <?php endif; /* featured_image */ ?>

                            </div>

                            <p class="h5"><?php the_title(); ?></p>

                        </a>

                    </div>
                    <!-- .col -->

                    <?php endforeach; wp_reset_postdata(); ?>

                </div>
                <!-- .row -->

                </div>
                <!-- .medium -->

            </div>
            <!-- .col -->
            
        </div>
        <!-- .row -->
    
    
    </div>

    <div class="container py-5 d-none">
    
        <div class="row matrix-gutter">

            <?php

            global $post;
            
            $postslist = get_posts();
            
            foreach ( $postslist as $post ) :
            setup_postdata( $post );
            
            $the_date = get_the_date();
            
            ?>

            <div class="col-lg-4 mb-3 mb-lg-0">
            
                <a class="featured-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                
                    <div>

                        <span><?php echo $the_date; ?></span>

                        <?php if( has_post_thumbnail() ):
                            $featured_image_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
                        ?>
                                        
                        <img class="w-100" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">
                        
                        <?php else : ?>
                        
                        <img class="w-100" src="https://via.placeholder.com/1000x563" alt="Placeholder">
                        
                        <?php endif; /* featured_image */ ?>

                    </div>

                    <p class="h5"><?php the_title(); ?></p>

                </a>

            </div>
            <!-- .col -->

            <?php endforeach; wp_reset_postdata(); ?>

        </div>
        <!-- .row -->
        
    </div>
    <!-- .container -->

</main>
<!-- #content -->

<?php get_footer(); ?>
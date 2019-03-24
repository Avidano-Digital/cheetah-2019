<div class="row matrix-border">

    <?php

    global $post;
    
    $args = array( 'category_name' => 'ccf-blog', 'posts_per_page' => 3, 'orderby' => 'date' );
    $postslist = get_posts( $args );
    
    foreach ( $postslist as $post ) :
    setup_postdata( $post );
    
    $the_date = get_the_date();
    
    ?>

    <div class="col-lg-4 mb-5 mb-lg-0">
    
        <a class="featured-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        
            <div>

                <span><?php echo $the_date; ?></span>

                <?php if( has_post_thumbnail() ):
                    $featured_image_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
                ?>
                                
                <img class="w-100" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">
                
                <?php endif; /* featured_image */ ?>

            </div>

            <p class="h5"><?php the_title(); ?></p>

        </a>

    </div>
    <!-- .col -->

    <?php endforeach; wp_reset_postdata(); ?>

</div>
<!-- .row -->

<div class="row matrix-border">

    <?php

    global $post;
    
    $args = array( 'category' => 'news', 'posts_per_page' => 3, 'orderby' => 'date' );
    $postslist = get_posts( $args );
    
    foreach ( $postslist as $post ) :
    setup_postdata( $post ); ?>

    <div class="col-md-4 mb-5">
    
        <a class="featured-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        
            <div>

                <span><?php the_date(); ?></span>

                <?php $featured_image = get_field('featured_image');

                if( $featured_image ): ?>
                
                <img class="w-100" src="<?php echo $featured_image['image']; ?>" alt="<?php the_title(); ?>">
                
                <?php endif; /* featured_image */ ?>

            </div>

            <h5><?php the_title(); ?></h5>

        </a>

    </div>
    <!-- .col -->

    <?php
    endforeach; 
    wp_reset_postdata();
    ?>

    <?php if ( is_category( 'ccf-blog' ) ) : ?>

    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->
    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->
    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->
    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->
    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->
    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->
    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->
    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->
    <div class="col-md-4 mb-5">
        <a class="featured-article" href="#">
            <div>
                <span>November 12, 2018</span>
                <img class="w-100" src="https://via.placeholder.com/900x525" alt="Placeholder">
            </div>
            <h5>Lorem ipsum dolor sit amet consectetur</h5>
        </a>
    </div>
    <!-- .col -->

    <?php endif; ?>

</div>
<!-- .row -->

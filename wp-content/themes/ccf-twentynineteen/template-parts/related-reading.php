<?php
            $relatedTag = get_the_title();
            $args = array( 
                'posts_per_page' => 3,
                'post_type' => 'Post',
                'tag' => $relatedTag
            );

            $relatedPosts = new WP_Query( $args );

            if ( $relatedPosts->have_posts() ):
?>
                <hr class="mx-n2">

                <div class="container-fluid">

                    <div class="narrow py-6">

                        <p class="h5 mb-3">Related Reading</p>

                        <ul class="list-group list-group-flush">

<?php
                            while ( $relatedPosts->have_posts() ) : $relatedPosts->the_post();

                                $featured_image_id = get_post_thumbnail_id();
                                $featured_image = wp_get_attachment_image_src($featured_image_id,'thumbnail', false, '');
                                $featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);
?>

                                <li class="list-group-item">

                                    <div class="row align-items-center">

                                        <div class="col">
                                            <p class="f-sans-serif fs-md mb-0"><?php echo get_the_date(); ?></p>
                                            <a href="<?php the_permalink(); ?>">
                                                <strong>
                                                    <?php the_title(); ?>
                                                </strong>
                                            </a>
                                        </div>
                                        <!-- .col -->

                                        <div class="col-auto">
                                            <img src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>" style="max-width:150px;">
                                        </div>
                                        <!-- .col -->

                                    </div>
                                    <!-- .row -->

                                </li>
<?php
                            endwhile;
?>   

                        </ul>


                    </div>
                    <!-- .narrow -->

                </div>
                <!-- .container-fluid -->
<?php
            endif;
?>                
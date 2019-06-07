
<section>

    <?php

    $partnership_groups = get_field('partnership_groups');
    
    $post_objects = $partnership_groups;

    if ($post_objects):
    
    foreach($post_objects as $post) :
    setup_postdata( $post ); 
    $description = get_field('description');

    ?>

    <div class="medium">
    
        <h2>the_title()</h2>
        
        <div class="row matrix-gutter my-3">

            <div class="col-md-4">
                <div class="bg-dark text-white text-center p-4">
                    <p>Column</p>
                </div>
            </div>
            <!-- .col -->

            <div class="col-md-4">
                <div class="bg-dark text-white text-center p-4">
                    <p>Column</p>
                </div>
            </div>
            <!-- .col -->

            <div class="col-md-4">
                <div class="bg-dark text-white text-center p-4">
                    <p>Column</p>
                </div>
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->
    
    </div>

     <?php endforeach; endif; wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

</section>
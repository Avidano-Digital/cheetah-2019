<?php

/*
Template Name: Donate
*/

get_header();

?>

<main id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="featured-panel responsive-md">

            <div class="card bg-info">

                <?php
                $featured_image_id = get_post_thumbnail_id($post->ID);
                $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
                $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                ?>

                <?php if ($featured_image): ?>
                <img class="card-img opacity-50 show-on-mobile" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
                <?php else : ?>
                <img class="card-img opacity-50 show-on-mobile" src="http://via.placeholder.com/1500x500.jpg" alt="Placeholder">
                <?php endif; ?>
                
                <div class="card-img-overlay d-flex">

                    <div class="container-fluid align-self-center">

                        <div class="narrow text-white text-center text-shadow">
                            <h1>
                                <span class="d-block text-primary fs-lg">Donate to CCF</span>
                                <span class="display-3 text-white">Join the race to save the cheetah</span>
                            </h1>
                        </div>
                        <!-- .narrow -->
                    
                    </div>
                    <!-- .align-self-end -->

                </div>
                <!-- .card-img-overlay -->

            </div>
            <!-- .card -->

    </section>
    <!-- .featured-panel -->


    <div class="container-fluid">


    <div class="medium my-4">
    
        <div class="nav nav-pills bg-light device-md" role="tablist">

            <a class="nav-item nav-link flex-fill active" id="tab-btn-01-a" href="#tab-01-a"
                data-toggle="pill" aria-controls="tab-01-a" aria-selected="true" role="tab">
                Tab One
            </a>

            <a class="nav-item nav-link flex-fill" id="tab-btn-01-b" href="#tab-01-b"
                data-toggle="pill" aria-controls="tab-01-b" aria-selected="false" role="tab">
                Tab Two
            </a>

            <a class="nav-item nav-link flex-fill" id="tab-btn-01-c" href="#tab-01-c"
                data-toggle="pill" aria-controls="tab-01-c" aria-selected="false" role="tab">
                Tab Three
            </a>

        </div>

    </div>

    <div class="narrow my-4">
    
        <div id="bbox-root"></div>

    </div>



    </div>
    <!-- .container-fluid -->



    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<!-- Heather, you can replace the <script> tag for Donate below -->

<script type="text/javascript">
    window.bboxInit = function () {
        bbox.showForm('ce3cb3d7-d112-40a1-bf4e-c9dd10a518f2');
    };
    (function () {
        var e = document.createElement('script'); e.async = true;
        e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
        document.getElementsByTagName('head')[0].appendChild(e);
    } ());
</script>

<?php get_footer();

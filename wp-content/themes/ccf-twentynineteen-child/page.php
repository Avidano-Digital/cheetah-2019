<?php

get_header();

?>

<main id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="banner">

        <div class="card bg-white">

            <div class="gradient-overlay-y-black">

                <?php
                $featured_image_id = get_post_thumbnail_id($post->ID);
                $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
                $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                ?>

                <?php if ($featured_image): ?>
                <img class="card-img"
                    src="<?php echo $featured_image[0]; ?>"
                    alt="<?php echo $featured_image_alt; ?>">
                <?php else : ?>
                <img class="card-img" src="http://via.placeholder.com/1500x500.jpg" alt="Placeholder">
                <?php endif; ?>

            </div>

            <div class="card-img-overlay d-flex">
                <div class="container-fluid align-self-end opacity-70">
                    <h1 class="text-right text-secondary">
                        <em><?php echo $parent_title; ?></em>
                    </h1>
                </div>
                <!-- .align-self-center -->
            </div>
        </div>

    </section>
    <!-- .banner -->

    <div class="container-fluid">

        <div class="row">

            <div class="col-xl-9 overflow-hidden">

                <article class="my-6" id="primary-content">

                    <header class="medium my-3">
                        <h1 class="display-4 text-center">
                            <?php the_title(); ?>
                        </h1>
                    </header>

                    <?php
                    
                    get_template_part('template-parts/flexible-content-article');

                    get_template_part('template-parts/article-footer');

                    ?>

                </article>
                <!-- #primary-content -->

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();

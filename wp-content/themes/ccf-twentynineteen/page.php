<?php

get_header();

$grandparent_title = get_the_title(intval(get_post($post->post_parent)->post_parent));
$parent_title = get_the_title($post->post_parent);

?>

<main id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="banner">

        <div class="card bg-white">

            <div class="overlay-gradient-y-black">

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

            <?php

                if ($parent_title == "Who We Are" || $grandparent_title == "Who We Are"):
                    get_template_part('template-parts/sidebar-who-we-are');
                elseif ($parent_title == "What We Do" || $grandparent_title == "What We Do"):
                    get_template_part('template-parts/sidebar-what-we-do');
                elseif ($parent_title == "Get Involved" || $grandparent_title == "Get Involved"):
                    get_template_part('template-parts/sidebar-get-involved');
                elseif ($parent_title == "Learn" || $grandparent_title == "Learn"):
                    get_template_part('template-parts/sidebar-learn');
                endif;
            
            ?>

            <div class="col-xl-9 overflow-hidden">

                <article class="my-6" id="primary-content">

                    <header class="medium my-3">
                        <h1 class="display-4 text-center">
                            <?php the_title(); ?>
                        </h1>
                    </header>

                    <?php
                    
                    get_template_part('template-parts/flexible-content-article');

                    if (is_page('ccf-global')):

                    get_template_part('template-parts/ccf-global');
                    
                    endif;

                    if (is_page('dr-laurie-marker')):
                    
                    get_template_part('template-parts/dr-laurie-awards-and-activities');

                    endif;

                    $partnership_group = get_field('partnership_group');
                    
                    $post_object = $partnership_group;

                    if ($post_object):

                        // override $post
                        $post = $post_object;
                        setup_postdata($post);

                        $description = get_field('description');

                    ?>

                    <div class="narrow mb-5">

                        <h3>
                            <?php the_title(); ?>
                        </h3>

                        <p>
                            <?php echo $description; ?>
                        </p>

                        <?php if (have_rows('partners')): ?>

                        <div class="my-3">

                            <?php while (have_rows('partners')): the_row();

                                // vars
                                $name = get_sub_field('name');
                                $link = get_sub_field('link');

                                ?>

                            <dl class="row justify-content-between border-top py-2 mb-0 fs-md">

                                <dt class="col-md">
                                    <?php echo $name; ?>
                                </dt>

                                <dd class="col-md-auto">
                                    <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                                </dd>

                            </dl>

                            <?php endwhile; ?>

                        </div>
                        <!-- .my-4 -->

                        <?php endif; ?>

                    </div>
                    <!-- .narrow -->

                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                    <?php endif;

                    get_template_part('template-parts/article-footer');
                    get_template_part('template-parts/related-reading');
                    wp_reset_postdata();

                    ?>

                </article>
                <!-- #primary-content -->

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </div>

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();

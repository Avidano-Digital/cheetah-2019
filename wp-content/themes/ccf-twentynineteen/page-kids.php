<?php

/*
Template Name: Kids
*/

get_header();

$grandparent_title = get_the_title(intval(get_post($post->post_parent)->post_parent));
$parent_title = get_the_title($post->post_parent);

?>

<main id="content">

    <section class="container-fluid overflow-hidden bg-info cheetah-spots">

        <div class="narrow text-center text-white my-5">

            <img class="my-3" src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo-large.svg" alt="Placeholder">

            <p class="fs-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt beatae accusamus doloremque.</p>

        </div>
        <!-- container -->

        <div class="medium">

            <div class="nav nav-pills responsive-md" id="kids-tabs" role="tablist">

                <a class="nav-item nav-link flex-fill active" id="tab-btn-01-a" href="#tab-01-a" data-toggle="pill" aria-controls="tab-01-a" aria-selected="true" role="tab">
                    Learn
                </a>

                <a class="nav-item nav-link flex-fill" id="tab-btn-01-b" href="#tab-01-b" data-toggle="pill" aria-controls="tab-01-b" aria-selected="false" role="tab">
                    Help
                </a>

            </div>

        </div>

        <div class="kid-tabs d-none">

            <ul class="extensible-list horizontal justify-content-between text-center responsive-md">
                <li>
                    <a class="btn-learn active" href="#">Learn</a>
                </li>
                <li>
                    <a class="btn-help" href="#">Help</a>
                </li>
            </ul>

        </div>
    </section>

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
                    // wp_reset_postdata();

                    ?>

                </article>
                <!-- #primary-content -->

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();

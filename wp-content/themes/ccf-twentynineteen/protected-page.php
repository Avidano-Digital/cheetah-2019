<?php

/*
Template Name: Protected Page
*/

get_header();

$grandparent_title = get_the_title(intval(get_post($post->post_parent)->post_parent));
$parent_title = get_the_title($post->post_parent);

?>

<main id="content" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

                    if (post_password_required($post)) :

                        echo get_the_password_form();

                    else :

                        // Protected content goes here

                        get_template_part('template-parts/flexible-content-article');

                    endif;

                    get_template_part('template-parts/article-footer');
                    get_template_part('template-parts/related-reading');

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

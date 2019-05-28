<?php

/*
Template Name: General
*/

get_header();

?>

<main id="content" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="bg-info cheetah-spots">

        <div class="container py-4">

            <div class="narrow text-white my-5">

                <h1 class="display-4 text-primary text-shadow"><?php the_title(); ?></h1>

            </div>
            <!-- .narrow -->

        </div>
        <!-- .container-fluid -->

    </div>
    <!-- .container -->

    <div class="container-fluid overflow-auto">

        <div class="my-5">

            <div class="narrow">
                <?php the_content(); ?>
            </div>
            <!-- .narrow -->

        </div>
        <!-- .my-5 -->

    </div>
    <!-- .container-fluid -->

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer(); ?>
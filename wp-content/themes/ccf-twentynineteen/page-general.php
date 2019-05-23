<?php

/*
Template Name: General
*/

get_header();

?>

<main id="content" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="bg-dark banner-with-background oculus">

        <div class="container-fluid">
            <div class="narrow">
                <h1 class="display-4 text-white"><?php the_title(); ?></h1>
            </div>
        </div>
        <!-- .container -->

    </div>
    <!-- .banner-with-background -->

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
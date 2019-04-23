<?php

/*
Template Name: Donate
*/

get_header();

?>

<main id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="container-fluid">

        <header class="medium my-3">
            <h1 class="display-4 text-center">
                <?php the_title(); ?>
            </h1>
        </header>
        
    </div>
    <!-- .container-fluid -->

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();

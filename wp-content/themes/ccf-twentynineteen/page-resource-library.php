<?php

/*
Template Name: About Us
*/

get_header(); ?>

<main id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="banner">

        <div class="card bg-white">

            <div class="overlay-gradient-y-black">
        
            <?php 
                $featured_image_id = get_post_thumbnail_id($post->ID);
                $featured_image = wp_get_attachment_image_src($featured_image_id,'full', false, '');
                $featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);
             ?>
 	
            <?php if( $featured_image ): ?>
                <img class="card-img" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
            <?php else : ?>
                <img class="card-img" src="http://via.placeholder.com/1500x500.jpg" alt="Placeholder">
            <?php endif; ?>

            </div>

            <div class="card-img-overlay d-flex">
                <div class="container-fluid align-self-end opacity-70">
                    <h1 class="text-right text-secondary">
                        <em>Learn</em>
                    </h1>
                </div>
                <!-- .align-self-center -->
            </div>
        </div>

    </section>
    <!-- .banner -->

    <article class="container-fluid">

        <div class="row">

            <div class="col-xl-3 bg-dark px-xl-4">

                <div class="sticky-top py-xl-5">

                    <div class="btn-toggle d-xl-none offset-gutter-x">

                        <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                            <span class="title">Learn</span>
                        </a>

                    </div>

                    <nav class="collapse d-xl-block mb-xl-5" id="aside-nav">
                        <ul class="extensible-list text-white py-4 py-xl-0">
                            <li class="page_item current_page_item">
                                <a href="/about-us/learn/resource-library/">Resource Library</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'about-cheetahs' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">About Cheetahs</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'human-wildlife-conflict' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">Human Wildlife Conflict</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'illegal-pet-trade' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">Illegal Pet Trade</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'habitat-loss' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">Habitat Loss</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'ccf-videos' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">CCF Videos</a>
                            </li>
                        </ul>

                    </nav>

                    <?php get_template_part('template-parts/aside-donate'); ?>

                </div>
            </div>
            <!-- .col -->

            <div class="col-xl-9 pt-7">

                <header class="narrow">
                    <h1 class="display-3 text-center mb-3"><?php the_title(); ?></h1>
                </header>

                <div class="text-block narrow mb-5">
                    <p>CCF’s research provides scientific support for its education and conservation activities. Our research focuses
                        on a number of aspects of the cheetah’s life cycle, biology and genetics. We also research ecology,
                        human/wildlife conflict, agriculture, and biomass energy.</p>
                </div>



                                
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer(); ?>
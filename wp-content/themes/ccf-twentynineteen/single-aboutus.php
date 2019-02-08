<?php

/*
Template Name: About Us
*/

get_header(); ?>

<?php

    $current = $post->ID;
    $parent = $post->post_parent;
    
    $grandparent_get = get_post($parent);
    $grandparent = $grandparent_get->post_parent;
    $siblings = wp_list_pages('title_li=&child_of=' . $parent . '&echo=0&post_type=about');

    $parent_title = get_the_title($parent);
?>

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
                        <em><?php echo $parent_title; ?></em>
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
                            <span class="title"><?php echo $parent_title; ?></span>
                        </a>

                    </div>

                    <nav class="collapse d-xl-block mb-xl-5" id="aside-nav">

                        <?php if ( $parent_title == "Who We Are" ) : ?>

                        <ul class="extensible-list text-white py-4 py-xl-0">
                            <li class="page_item <?php if ( is_single( 'mission-and-vision' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="/about-us/who-we-are/mission-and-vision/">Mission and Vision</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'dr-laurie-marker' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="/about-us/who-we-are/dr-laurie-marker/">Dr. Laurie Marker</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'our-centre' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="/about-us/who-we-are/our-centre/">Our Centre</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'staff-and-board' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">Staff and Board</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'ccf-global' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="/about-us/who-we-are/ccf-global/">CCF Global</a>
                            </li>
                        </ul>
                        
                        <?php elseif ( $parent_title == "What We Do" ) : ?>

                        <ul class="extensible-list text-white py-4 py-xl-0">
                            <li class="page_item <?php if ( is_single( 'research' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="/about-us/what-we-do/research/">Research</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'education' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="/about-us/what-we-do/education/">Education</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'conservation' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="/about-us/what-we-do/conservation/">Conservation</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'international-cheetah-day' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="/about-us/what-we-do/international-cheetah-day/">International Cheetah Day</a>
                            </li>
                        </ul>

                        <?php elseif ( $parent_title == "Learn" ) : ?>

                        <ul class="extensible-list text-white py-4 py-xl-0">
                            <li class="page_item <?php if ( is_single( 'resource-library' ) ) : ?>current_page_item<?php endif; ?>">
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

                        <?php else : ?>

                        <ul class="extensible-list text-white py-4 py-xl-0 d-none">
                            <?php echo $siblings; ?>
                        </ul>

                        <?php endif; ?>

                    </nav>

                    <?php get_template_part('template-parts/aside-donate'); ?>

                </div>
            </div>
            <!-- .col -->

            <div class="col-xl-9 pt-7">

                <header class="narrow">
                    <h1 class="display-3 text-center mb-3"><?php the_title(); ?></h1>
                </header>
                
                <?php get_template_part('template-parts/flexible-content-article'); ?>
                
                <?php if ( is_single( 'ccf-global' ) ) : ?>

                    <?php get_template_part('template-parts/content-ccf-global'); ?>
                
                <?php endif; ?>

                <?php if ( is_single( 'dr-laurie-marker' ) ) : ?>
                
                    <?php get_template_part('template-parts/dr-laurie-awards-and-activities'); ?>

                <?php endif; ?>

                <?php if ( is_single( 'resource-library' ) ) : ?>

                <div class="offset-gutter-x mb-5">

                    <div class="row matrix-border">

                        <div class="col-sm-6 col-lg-4 col-xxl-2">
                            <a class="btn btn-primary btn-lg btn-block d-flex h-100 py-2 line-height-sm" href="#">
                                <div class="w-100 align-self-center">
                                    <img class="mb-1" src="<?php echo get_template_directory_uri(); ?>/images/icon-resource-library-scientific-papers.svg' ?>" alt="Placeholder">
                                    <span class="d-block" style="line-height:1.25;">Scientific Papers</span>                      
                                </div>
                            </a>      
                        </div>
                        <!-- .col -->

                        <div class="col-sm-6 col-lg-4 col-xxl-2">
                            <a class="btn btn-primary btn-lg btn-block d-flex h-100 py-2 line-height-sm" href="#">
                                <div class="w-100 align-self-center">
                                    <img class="mb-1" src="<?php echo get_template_directory_uri(); ?>/images/icon-resource-library-fact-sheets.svg' ?>" alt="Placeholder">
                                    <span class="d-block" style="line-height:1.25;">Fact Sheets</span>                      
                                </div>
                            </a>      
                        </div>
                        <!-- .col -->

                        <div class="col-sm-6 col-lg-4 col-xxl-2">
                            <a class="btn btn-primary btn-lg btn-block d-flex h-100 py-2 line-height-sm" href="#">
                                <div class="w-100 align-self-center">
                                    <img class="mb-1" src="<?php echo get_template_directory_uri(); ?>/images/icon-resource-library-lectures.svg' ?>" alt="Placeholder">
                                    <span class="d-block" style="line-height:1.25;">Lectures and Presentations</span>                      
                                </div>
                            </a>      
                        </div>
                        <!-- .col -->

                        <div class="col-sm-6 col-lg-4 col-xxl-2">
                            <a class="btn btn-primary btn-lg btn-block d-flex h-100 py-2 line-height-sm" href="#">
                                <div class="w-100 align-self-center">
                                    <img class="mb-1" src="<?php echo get_template_directory_uri(); ?>/images/icon-resource-library-progress-reports.svg' ?>" alt="Placeholder">
                                    <span class="d-block" style="line-height:1.25;">Progress Reports</span>                      
                                </div>
                            </a>      
                        </div>
                        <!-- .col -->

                        <div class="col-sm-6 col-lg-4 col-xxl-2">
                            <a class="btn btn-primary btn-lg btn-block d-flex h-100 py-2 line-height-sm" href="#">
                                <div class="w-100 align-self-center">
                                    <img class="mb-1" src="<?php echo get_template_directory_uri(); ?>/images/icon-resource-library-international-studbooks.svg' ?>" alt="Placeholder">
                                    <span class="d-block" style="line-height:1.25;">International Studbooks</span>                      
                                </div>
                            </a>      
                        </div>
                        <!-- .col -->

                        <div class="col-sm-6 col-lg-4 col-xxl-2">
                            <a class="btn btn-primary btn-lg btn-block d-flex h-100 py-2 line-height-sm" href="#">
                                <div class="w-100 align-self-center">
                                    <img class="mb-1" src="<?php echo get_template_directory_uri(); ?>/images/icon-resource-library-cheetah-strides.svg' ?>" alt="Placeholder">
                                    <span class="d-block" style="line-height:1.25;">Cheetah Strides &amp; Newsletters</span>                      
                                </div>
                            </a>      
                        </div>
                        <!-- .col -->

                    </div>
                    <!-- .row -->

                </div>
                <!-- .offset-gutter-x -->

                <div class="narrow">
                
                    <h2>Latest Documents</h2> 

                </div>
                                
                <?php endif; ?>

                <?php $partnership_group = get_field('partnership_group');
                
                $post_object = $partnership_group; 

                if( $post_object ): 

                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 

                    $description = get_field('description');

                    ?>

                    <div class="narrow mb-6">

                        <h3><?php the_title(); ?></h3>

                        <p><?php echo $description; ?></p>

                        <?php if( have_rows('partners') ): ?>

                        <div class="my-3">

                            <?php while( have_rows('partners') ): the_row(); 

                            // vars
                            $name = get_sub_field('name');
                            $link = get_sub_field('link');

                            ?>

                            <dl class="row no-gutters justify-content-between border-top py-2 mb-0 fs-md">

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
                    
                <?php endif; ?>

                </section>
                <!-- end article -->

                <?php get_template_part('template-parts/article-footer'); ?>

                <div class="pattern-border-top pt-8 pb-7 offset-gutter-x" id="related-news">
                
                    <div class="narrow">

                        <p class="fs-rg f-sans-serif font-weight-light">Related Articles</p>

                        <div class="row no-gutters py-2 border-top">

                            <div class="col-4-auto order-last">
                                <img src="https://via.placeholder.com/125x125" alt="">
                            </div>
                            <!-- .col -->

                            <div class="col d-flex order-first">
                                <div class="align-self-center">
                                    <p class="fs-md mb-0">Date</p>
                                    <h5>Post Headline</h5>
                                </div>
                            </div>
                            <!-- .col -->

                        </div>
                        <!-- .row -->

                        <div class="row no-gutters py-2 border-top">

                            <div class="col-4-auto order-last">
                                <img src="https://via.placeholder.com/125x125" alt="">
                            </div>
                            <!-- .col -->

                            <div class="col d-flex order-first">
                                <div class="align-self-center">
                                    <p class="fs-md mb-0">Date</p>
                                    <h5>Post Headline</h5>
                                </div>
                            </div>
                            <!-- .col -->

                        </div>
                        <!-- .row -->

                        <div class="row no-gutters py-2 border-top">

                            <div class="col-4-auto order-last">
                                <img src="https://via.placeholder.com/125x125" alt="">
                            </div>
                            <!-- .col -->

                            <div class="col d-flex order-first">
                                <div class="align-self-center">
                                    <p class="fs-md mb-0">Date</p>
                                    <h5>Post Headline</h5>
                                </div>
                            </div>
                            <!-- .col -->

                        </div>
                        <!-- .row -->






                    </div>

                </div>
                <!-- #related-news -->



            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer(); ?>
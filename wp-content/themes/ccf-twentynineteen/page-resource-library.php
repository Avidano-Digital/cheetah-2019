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
                <!-- .sticky-top -->

            </div>
            <!-- .col -->

            <div class="col-xl-9 py-7">

                <header class="medium">
                    <h1 class="display-3 text-center mb-3"><?php the_title(); ?></h1>
                </header>

                <div class="text-block narrow mb-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore debitis provident natus, unde fugit
                        voluptatibus quia molestias odit deleniti, maxime tempora quod magni sit praesentium ipsam neque
                        consequatur voluptates.
                    </p>
                </div>

                <div class="medium">

                    <div class="accordion-group offset-gutter-x mt-6 border-bottom" role="tablist" id="acc-resource-library">

                        <div class="card">

                            <a class="card-header h4 collapse collapsed" id="acc-button-scientific-papers" data-toggle="collapse" href="#acc-panel-scientific-papers"
                                role="tab" aria-expanded="true" aria-controls="acc-panel-scientific-papers">
                                <span class="title" role="heading" aria-level="2">Scientific Papers</span>
                            </a>

                            <div class="collapse show" id="acc-panel-scientific-papers" role="tabpanel" aria-labelledby="acc-button-scientific-papers" data-parent="#acc-resource-library">

                                <div class="card-body bg-light py-7">

                                    <div class="narrow">

                                        <img class="mb-5 rounded d-none" src="https://via.placeholder.com/800x400" alt="Placeholder">
                                        <img class="mb-5 rounded" src="<?php echo get_template_directory_uri(); ?>/images/resource-library-scientific-papers.jpg" alt="Placeholder">

                                        <p class="mb-5">
                                            Some of the publications listed below are available online for information and research purposes. We ask that you
                                            observe copyright information. Visit our What We Do section for more information on CCF's programs.
                                        </p>

                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                        </ul>

                                        <a class="link text-secondary" href="#" class="link">
                                            See All
                                        </a>

                                    </div>
                                    <!-- .narrow -->

                                </div>

                            </div>
                            <!-- .collapse -->

                        </div>
                        <!-- .card -->

                        <div class="card">

                            <a class="card-header h4 collapse collapsed" id="acc-button-fact-sheets" data-toggle="collapse" href="#acc-panel-fact-sheets"
                                role="tab" aria-expanded="false" aria-controls="acc-panel-fact-sheets">
                                <span class="title" role="heading" aria-level="2">Fact Sheets</span>
                            </a>

                            <div class="collapse" id="acc-panel-fact-sheets" role="tabpanel" aria-labelledby="acc-fact-sheets" data-parent="#acc-resource-library">

                            <div class="card-body bg-light py-7">

                                <div class="narrow">

                                    <img class="mb-5 rounded" src="<?php echo get_template_directory_uri(); ?>/images/resource-library-fact-sheets.jpg" alt="Placeholder">

                                    <p class="mb-5">
                                        Cheetah Conservation Fund Fact sheets are a collection of two-page information sheets on the cheetah and different aspects of CCF and the work we do.
                                    </p>

                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item">
                                            <a class="text-body" href="#">
                                                <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                <strong>
                                                    Combined Fact Sheets
                                                </strong>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="text-body" href="#">
                                                <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                <strong>
                                                    Cheetahs: Big Cats Built For Speed
                                                </strong>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="text-body" href="#">
                                                <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                <strong>
                                                    CCF Research
                                                </strong>
                                            </a>
                                        </li>
                                    </ul>

                                    <a class="link text-secondary" href="#" class="link">
                                        See All
                                    </a>

                                </div>
                                <!-- .narrow -->

                            </div>
                            <!-- .card-body -->

                            </div>
                            <!-- .collapse -->

                        </div>
                        <!-- .card -->

                        <div class="card">

                            <a class="card-header h4 collapse collapsed" id="acc-button-lectures-and-presentations" data-toggle="collapse" href="#acc-panel-lectures-and-presentations"
                                role="tab" aria-expanded="false" aria-controls="acc-panel-lectures-and-presentations">
                                <span class="title" role="heading" aria-level="2">Lectures and Presentations</span>
                            </a>

                            <div class="collapse" id="acc-panel-lectures-and-presentations" role="tabpanel" aria-labelledby="acc-button-lectures-and-presentations" data-parent="#acc-resource-library">

                                <div class="card-body bg-light py-7">

                                    <div class="narrow">
    
                                        <img class="mb-5 rounded" src="<?php echo get_template_directory_uri(); ?>/images/resource-library-lectures.jpg"
                                            alt="Placeholder">

                                        <p class="mb-5">
                                            Recorded talks by CCF around the world and throughout the United States. Audiences range from elementary school
                                            students to University Professors, from zoo attenders to international planning committees.
                                        </p>

                                        <ul class="list-group list-group-flush mb-3">

                                            <li class="list-group-item">

                                                <div class="row align-items-center">
                                                    <div class="col-md-6 mb-3 mb-md-0">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                                                        </div>
                                                    </div>
                                                    <!-- .col -->

                                                    <div class="col-md-6">
                                                        <a class="text-body" href="#">
                                                            <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                            <strong>
                                                                What if We Lost the Cheetah — TEDx Portland
                                                            </strong>
                                                        </a>
                                                    </div>
                                                    <!-- .col -->

                                                </div>
                                                <!-- .row -->

                                            </li>

                                            <li class="list-group-item">

                                                <div class="row align-items-center">
                                                    <div class="col-md-6 mb-3 mb-md-0">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                                                        </div>
                                                    </div>
                                                    <!-- .col -->

                                                    <div class="col-md-6">
                                                        <a class="text-body" href="#">
                                                            <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                            <strong>
                                                                What if We Lost the Cheetah — TEDx Portland
                                                            </strong>
                                                        </a>
                                                    </div>
                                                    <!-- .col -->

                                                </div>
                                                <!-- .row -->

                                            </li>
                                            
                                            <li class="list-group-item">

                                                <div class="row align-items-center">
                                                    <div class="col-md-6 mb-3 mb-md-0">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                                                        </div>
                                                    </div>
                                                    <!-- .col -->

                                                    <div class="col-md-6">
                                                        <a class="text-body" href="#">
                                                            <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                            <strong>
                                                                What if We Lost the Cheetah — TEDx Portland
                                                            </strong>
                                                        </a>
                                                    </div>
                                                    <!-- .col -->

                                                </div>
                                                <!-- .row -->

                                            </li>

                                        </ul>

                                        <a class="link text-secondary" href="#" class="link">
                                            See All
                                        </a>

                                    </div>
                                    <!-- .narrow -->

                                </div>
                                <!-- .card-body -->

                            </div>
                            <!-- .collapse -->

                        </div>
                        <!-- .card -->

                        <div class="card">

                            <a class="card-header h4 collapse collapsed" id="acc-button-cheetah-strides-and-newsletters" data-toggle="collapse" href="#acc-panel-cheetah-strides-and-newsletters"
                                role="tab" aria-expanded="false" aria-controls="acc-panel-cheetah-strides-and-newsletters">
                                <span class="title" role="heading" aria-level="2">Cheetah Strides and Newsletters</span>
                            </a>

                            <div class="collapse" id="acc-panel-cheetah-strides-and-newsletters" role="tabpanel" aria-labelledby="acc-button-cheetah-strides-and-newsletters" data-parent="#acc-resource-library">

                                <div class="card-body bg-light py-7">

                                    <div class="narrow">

                                        <img class="mb-5 rounded" src="https://via.placeholder.com/800x400" alt="Placeholder">

                                        <p class="mb-5">
                                            Some of the publications listed below are available online for information and research purposes. We ask that you
                                            observe copyright information. Visit our What We Do section for more information on CCF's programs.
                                        </p>

                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                        </ul>

                                        <a class="link text-secondary" href="#" class="link">
                                            See All
                                        </a>

                                    </div>
                                    <!-- .narrow -->

                                </div>

                            </div>
                            <!-- .collapse -->

                        </div>
                        <!-- .card -->

                        <div class="card">

                            <a class="card-header h4 collapse collapsed" id="acc-button-progress-reports" data-toggle="collapse"
                                href="#acc-panel-progress-reports" role="tab" aria-expanded="false" aria-controls="acc-panel-progress-reports">
                                <span class="title" role="heading" aria-level="2">Progress Reports</span>
                            </a>

                            <div class="collapse" id="acc-panel-progress-reports" role="tabpanel" aria-labelledby="acc-button-progress-reports"
                                data-parent="#acc-resource-library">

                                <div class="card-body bg-light py-7">

                                    <div class="narrow">

                                        <img class="mb-5 rounded" src="https://via.placeholder.com/800x400" alt="Placeholder">
                                        <img class="mb-5 rounded d-none" src="<?php echo get_template_directory_uri(); ?>/images/resource-library-progress-reports.jpg" alt="Placeholder">

                                        <p class="mb-5">
                                            Some of the publications listed below are available online for information and research purposes.
                                            We ask that you
                                            observe copyright information. Visit our What We Do section for more information on CCF's programs.
                                        </p>

                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their
                                                        nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their
                                                        nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their
                                                        nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                        </ul>

                                        <a class="link text-secondary" href="#" class="link">
                                            See All
                                        </a>

                                    </div>
                                    <!-- .narrow -->

                                </div>

                            </div>
                            <!-- .collapse -->

                        </div>
                        <!-- .card -->

                        <div class="card">

                            <a class="card-header h4 collapse collapsed" id="acc-button-international-studbooks" data-toggle="collapse"
                                href="#acc-panel-international-studbooks" role="tab" aria-expanded="false" aria-controls="acc-panel-international-studbooks">
                                <span class="title" role="heading" aria-level="2">International Studbooks</span>
                            </a>

                            <div class="collapse" id="acc-panel-international-studbooks" role="tabpanel" aria-labelledby="acc-button-international-studbooks"
                                data-parent="#acc-resource-library">

                                <div class="card-body bg-light py-7">

                                    <div class="narrow">

                                        <img class="mb-5 rounded " src="https://via.placeholder.com/800x400" alt="Placeholder">

                                        <p class="mb-5">
                                            Some of the publications listed below are available online for information and research purposes.
                                            We ask that you
                                            observe copyright information. Visit our What We Do section for more information on CCF's programs.
                                        </p>

                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their
                                                        nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their
                                                        nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="text-body" href="#">
                                                    <p class="f-sans-serif fs-md mb-0">June 29, 2018</p>
                                                    <strong>
                                                        The simultaneous moult of female hornbills is not triggered by the darkness of their
                                                        nest cavity
                                                    </strong>
                                                </a>
                                            </li>
                                        </ul>

                                        <a class="link text-secondary" href="#" class="link">
                                            See All
                                        </a>

                                    </div>
                                    <!-- .narrow -->

                                </div>

                            </div>
                            <!-- .collapse -->

                        </div>
                        <!-- .card -->

                    </div>
                    <!-- .accordion-group -->
                   
                </div>
                <!-- .medium -->

                <?php get_template_part('template-parts/article-footer'); ?>
                  
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer(); ?>
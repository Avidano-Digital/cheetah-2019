<?php

$url = $_SERVER["REQUEST_URI"];

$inside_news = strpos($url, 'news');

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php the_title(); ?> • Cheetah Conservation Fund</title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header id="global-header">

        <?php if (is_child_theme()) : ?>

        <div class="container-fluid bg-info py-1">

            <div class="row align-items-center justify-content-between fs-md">

                <div class="col-auto">
                    <p class="text-white f-sans-serif">CCF Affiliate</p>
                </div>
                <!-- .col -->

                <div class="col-auto">
                    <a class="text-primary font-weight-bold" href="/">Back to Cheetah.org</a>
                </div>
                <!-- .col -->
            
            </div>
            <!-- .row -->

        </div>
        <!-- .container-fluid -->

        <?php endif; ?>

        <div class="container-fluid shadow-sm z-index-900">
        
            <div class="row justify-content-between">

                <div class="col-md-auto py-2">

                    <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                        <a class="d-inline-block" href="/" title="<?php the_title(); ?>, home">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    
                </div>
                <!-- .col -->
                
                <!-- Mobile Only Buttons -->
                
                <div class="col-md-auto d-md-flex d-lg-none align-self-center border-top border-md-0">

                    <div class="row align-items-center justify-content-between py-2">

                        <div class="col-auto order-md-last">
                            <button class="navbar-toggler no-btn-style" type="button" data-toggle="collapse" data-target="#nav-primary"
                                aria-controls="nav-primary" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fas fa-bars fa-lg" role="img"></span>
                            </button>
                        </div>
                        <!-- .col -->

                        <div class="col-auto">
                            <ul class="extensible-list horizontal">
                                
                                <?php if (is_child_theme() === false) : ?>
                                
                                <li>
                                    <a href="/kids" title="For Kids">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
                                    </a>
                                </li>
                                
                                <?php endif; ?>
                                
                                <li>
                                    <a class="btn btn-primary" href="/donate" title="Donate">Donate</a>
                                </li>

                            </ul>
                        </div>
                        <!-- .col -->

                    </div>

                </div>
                <!-- .col -->

                <div class="col-lg-auto d-lg-flex">

                    <!-- Primary Navigation -->

                    <div class="collapse d-lg-flex flex-column align-self-stretch mx-n2 mx-lg-0 border-top border-lg-0" id="nav-primary">

                        <nav class="py-2">

                            <ul class="extensible-list horizontal justify-content-center justify-content-lg-end">

                                <?php if (is_child_theme() === false) : ?>

                                <li class="d-none d-lg-block">
                                    <a href="/kids" title="For Kids">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
                                    </a>
                                </li>

                                <?php endif; ?>
                                
                                <!-- Language --> 
                                <li style="width:160px" dir="ltr">
                                    <?php echo do_shortcode('[gtranslate]'); ?>
                                </li>

                                <!-- Search --> 
                                <li style="width:160px" dir="ltr">
                                    <?php get_search_form(); ?>
                                </li>
                                
                            </ul>

                        </nav>

                        <nav class="nav mt-auto justify-content-end" role="navigation">

                            <div class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="About Us">
                                    About Us
                                </a>

                                <div class="dropdown-menu" aria-labelledby="about-us">

                                    <div class="d-lg-flex">
                                    
                                        <ul class="extensible-list">
                                            <li class="leader">What We Do</li>
                                            <li><a href="#" title="Conservation">Conservation</a></li>
                                            <li><a href="#" title="Research">Research</a></li>
                                            <li><a href="#" title="Education">Education</a></li>
                                            <li><a href="#" title="International Cheetah Day">International Cheetah Day</a></li>
                                        </ul>

                                        <ul class="extensible-list">
                                            <li class="leader">Who We Are</li>
                                            <li><a href="#" title="Mission and Vision">Mission and Vision</a></li>
                                            <li><a href="#" title="Dr. Laurie Marker">Dr. Laurie Marker</a></li>
                                            <li><a href="#" title="Our Centre">Our Centre</a></li>
                                            <li><a href="#" title="Staff and Board">Staff and Board</a></li>
                                        </ul>

                                    </div>

                                </div>

                            </div>
                            <!-- .nav-item -->

                            <div class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="nav-item-02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Nav Item">
                                    Get Involved
                                </a>

                                <div class="dropdown-menu" aria-labelledby="nav-item-02">

                                    <ul class="extensible-list">
                                        <li><a href="#" title="Link">Link</a></li>
                                        <li><a href="#" title="Link">Link</a></li>
                                        <li><a href="#" title="Link">Link</a></li>
                                    </ul>

                                </div>

                            </div>
                            <!-- .nav-item -->

                            <div class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="nav-item-03" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" title="Nav Item">
                                    Nav Item
                                </a>

                                <div class="dropdown-menu" aria-labelledby="nav-item-03">

                                    <ul class="extensible-list">
                                        <li><a href="#" title="Link">Link</a></li>
                                        <li><a href="#" title="Link">Link</a></li>
                                        <li><a href="#" title="Link">Link</a></li>
                                    </ul>

                                </div>

                            </div>
                            <!-- .nav-item -->

                            <div class="nav-item d-none d-lg-block">
                                <a class="nav-link bg-primary" href="/donate" title="Nav Item">
                                    Donate
                                </a>
                            </div>

                        </nav>

                    </div>
                    <!-- .collapse -->
                    
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .container-fluid -->

    </header>
    <!-- #global-header -->
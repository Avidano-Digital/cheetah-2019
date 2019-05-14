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
        
            <div class="row align-items-center justify-content-between">

                <div class="col-md-auto py-2">

                    <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                        <a class="d-inline-block" href="/" title="<?php the_title(); ?>, home">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    
                </div>
                <!-- .col -->

                <div class="col d-xl-none py-2 border-top border-md-0">

                    <div class="row align-items-center justify-content-between justify-content-md-end">

                        <div class="col-auto order-md-last">
                        
                            <button class="btn no-btn-style fs-lg" 
                                type="button" 
                                data-toggle="collapse" 
                                data-target="#mobile-menu" 
                                aria-expanded="false"
                                aria-controls="mobile-menu">
                                    <span class="fas fa-bars"></span>
                                    <span class="sr-only">Main Navigation</span>
                            </button>

                        </div>
                        <!-- .col -->

                        <div class="col-auto">

                            <ul class="extensible-list horizontal">

                                <?php if ( is_child_theme() === false ) : ?>

                                <li>
                                    <a href="/kids" title="For Kids">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
                                    </a>
                                </li>
                            
                                <?php endif; ?>

                                <li>
                                    <a class="btn btn-primary donate" href="/donate" title="Donate">Donate</a>
                                </li>
                            
                            </ul>
                        
                        </div>
                        <!-- .col -->
                    
                    </div>
                    <!-- .row -->

                </div>
                <!-- .col -->

                <div class="col-xl-auto collapse d-noneX d-xl-flex flex-column align-self-stretch bg-danger"  id="mobile-menu">

                    <div class="py-2">
                        <nav id="secondary-navigation">
                            <?php include( 'include/secondary-navigation.php' ); ?>
                        </nav>
                    </div>

                    <div class="mt-auto">

                        <nav class="d-none" id="primary-navigation-desktopX">
                            <?php include( 'include/primary-navigation.php' ); ?>
                        </nav>

                        <nav id="primary-navigation-desktop">
                            <ul class="extensible-list horizontal justify-content-end responsive-xl">
                                <li>
                                    <a href="/about/what-we-do/conservation" title="About Us">About Us</a>
                                    <ul class="extensible-list sub">
                                        <li>
                                            <div class="row no-gutters mx-n2" style="width:480px;">
                                                <div class="col-6">
                                                    <ul class="extensible-list">
                                                        <li class="leader" title="What We Do">What We Do</li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/what-we-do/conservation/" title="Conservation">Conservation</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/what-we-do/research/" title="Research">Research</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/what-we-do/education/" title="Education">Education</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/what-we-do/international-cheetah-day/" title="International Cheetah Day">International Cheetah Day</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="extensible-list">
                                                        <li class="leader" title="Who We Are">Who We Are</li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/who-we-are/mission-and-vision/" title="Mission and Vision">Mission and Vision</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/who-we-are/dr-laurie-marker/" title="Dr. Laurie Marker">Dr. Laurie Marker</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/who-we-are/our-centre/" title="Our Centre">Our Centre</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/who-we-are/staff-and-board/" title="Staff and Board">Staff and Board</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cheetah.avidanodigital.com/about/who-we-are/ccf-global/" title="CCF Global">CCF Global</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/get-involved/ways-to-give/" title="Get Involved">Get Involved</a>
                                    <ul class="extensible-list sub">
                                        <li><a href="http://cheetah.avidanodigital.com/get-involved/ways-to-give/" title="Ways to Give">Ways to
                                                Give</a></li>
                                        <li><a href="http://cheetah.avidanodigital.com/get-involved/ccf-events/" title="CCF Events">CCF
                                                Events</a></li>
                                        <li><a href="http://cheetah.avidanodigital.com/get-involved/volunteer/"
                                                title="Volunteer In Namibia">Volunteer</a></li>
                                        <li><a href="http://cheetah.avidanodigital.com/get-involved/visit-ccf/" title="Visit CCF">Visit CCF</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/learn/resource-library" title="Learn">Learn</a>
                                    <ul class="extensible-list sub">
                                        <li><a href="http://cheetah.avidanodigital.com/learn/resource-library/"
                                                title="Resource Library">Resource Library</a></li>
                                        <li><a href="http://cheetah.avidanodigital.com/learn/about-cheetahs/" title="About Cheetahs">About
                                                Cheetahs</a></li>
                                        <li><a href="http://cheetah.avidanodigital.com/learn/human-wildlife-conflict/"
                                                title="Human Wildlife Conflict">Human Wildlife Conflict</a></li>
                                        <li><a href="http://cheetah.avidanodigital.com/learn/illegal-pet-trade/"
                                                title="Illegal Pet Trade">Illegal Pet Trade</a></li>
                                        <li><a href="http://cheetah.avidanodigital.com/learn/habitat-loss/" title="Habitat Loss">Habitat
                                                Loss</a></li>
                                        <li><a href="http://cheetah.avidanodigital.com/learn/ccf-videos/" title="CCF Videos">CCF Videos</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/ccf-blog" title="News">News</a>
                                    <ul class="extensible-list sub">
                                        <li><a href="/ccf-blog" title="CCF Blog">CCF Blog</a></li>
                                        <li><a href="/cheetah-strides" title="">Cheetah Strides</a></li>
                                        <li><a href="/press-releases" title="Press Releases">Press Releases</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="btn btn-primary donate" href="/donate" title="Donate">Donate</a>
                                </li>
                            </ul>
                        </nav>












                    </div>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .container-fluid -->

    </header>
    <!-- #global-header -->
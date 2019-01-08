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

        <div class="container-fluid shadow-sm z-index-900">
        
            <div class="row align-items-center justify-content-between">

                <div class="col-md-auto py-2">

                    <div class="d-flex justify-content-center justify-content-lg-start align-items-center">
                        <a class="d-inline-block" href="/" title="<?php the_title(); ?>, home">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    
                </div>
                <!-- .col -->

                <!-- separator -->
                <div class="col-12 border-top d-md-none"></div>

                <div class="col d-xl-none py-2">

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

                            <ul class="extensible-list horizontal no-reverse">
                                <li>
                                    <a href="#" title="For Kids">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-primary donate" href="#" title="Donate">Donate</a>
                                </li>
                            </ul>
                        
                        </div>
                        <!-- .col -->
                    
                    </div>
                    <!-- .row -->

                </div>
                <!-- .col -->

                <div class="col-md-auto d-none d-xl-flex flex-column align-self-stretch">

                    <div class="py-2">
                        <nav id="secondary-navigation">
                            <?php include( 'include/secondary-navigation.php' ); ?>
                        </nav>
                    </div>

                    <div class="mt-auto">
                        <nav id="primary-navigation-desktop">
                            <?php include( 'include/primary-navigation.php' ); ?>
                        </nav>
                    </div>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .container-fluid -->

        <div id="mobile-menu" class="collapse bg-white d-xl-none">
            <?php include( 'include/mobile-menu.php' ); ?>
        </div>

    </header>
    <!-- #global-header -->
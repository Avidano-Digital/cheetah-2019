<footer role="contentinfo">

    <?php if( have_rows('footer_features', 'option') ): ?>

    <div class="row no-gutters" id="touts">

        <?php while( have_rows('footer_features', 'option') ): the_row();
    
        $image = get_sub_field('image');
        $link = get_sub_field('link');

        ?>

        <div class="featured-block col-lg-4">

            <div class="card">

                <div class="gradient-overlay-y-black">

                    <?php if ( $image ) : ?>
                        <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php else : ?>
                        <img class="card-img" src="http://via.placeholder.com/500x250.jpg" alt="Placeholder">
                    <?php endif; ?>

                </div>

                <div class="card-img-overlay d-flex">
                    <div class="align-self-end">
                        <a class="btn btn-block btn-primary stretched-link" href="<?php echo $link['url']; ?>" title="Resource Library">
                            <?php echo $link['title']; ?></a>
                    </div>
                </div>

            </div>
            <!-- .card -->

        </div>

        <?php endwhile; ?>

    </div>
    <!-- #touts -->

    <?php endif; /* footer_features */ ?>

    <div class="py-5" id="global-links">

        <div class="container">

            <nav class="row">

                <?php starterMenu('Footer'); ?>

                <div class="col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="extensible-list">
                        <li>
                            <a href="#" title="For Kids">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

            </nav>
            <!-- .row -->

        </div>

    </div>

    <div class="bg-light py-5">

        <div class="container">

            <div class="row mb-4">

                <div class="col-lg-6 col-xl-4 mb-4 mb-xl-0">
                    <h5>Cheetah Conservation Fund</h5>
                    <p class="fs-md">Our Research and Education Centre is located in Otjiwarongo, Namibia. We encourage
                        visitors to see our facilities in person.</p>
                    <p class="fs-md"><a class="link text-body" href="#">Come Join Us!</a></p>
                </div>
                <!-- .col -->

                <div class="col-lg-6 col-xl-4 mb-4 mb-xl-0">

                    <h5>Where We Work</h5>
                    <p class="fs-md">CCF is an international non-profit organization with fundraising
                        operations located in: Australia, Canada, Italy, United Kingdom, and United States, working
                        in cooperation with staff and partners around the world.</p>
                    <p class="fs-md">
                        <a class="link text-body" href="about-us/who-we-are/ccf-global/">CCF Global</a>
                    </p>

                </div>
                <!-- .col -->

                <div class="col-lg-6 col-xl-4">

                    <h5>Support CCF</h5>

                    <p class="fs-md">
                        You can help save the cheetah from exinction. Support our science-based, results-driven conservation initiatives. Together, we can save the cheetah.
                    </p>

                    <ul class="extensible-list horizontal">
                        <li>
                            <a class="btn btn-sm btn-block btn-primary" href="/donate" title="Donate">Donate</a>
                        </li>
                        <li>
                            <a class="btn btn-sm btn-block btn-primary" href="#" title="Sponsor a Cheetah">Sponsor a Cheetah</a>
                        </li>
                    </ul>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

            <hr class="dark mb-2">

            <div class="row justify-content-between">

                <div class="col-lg-auto">

                    <ul class="extensible-list horizontal fs-lg">
                        <li>
                            <a class="no-btn-style text-body" href="#">
                                <span class="far fa-envelope-open"></span>
                                <span class="mx-1 font-weight-bold fs-md">CCF Newsletters</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- .col -->

                <div class="col-lg-auto mb-2 mb-lg-0">

                    <ul class="extensible-list horizontal fs-lg">
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fab fa-instagram"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fab fa-youtube"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-pinterest"></span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .container -->

    </div>
    <!-- .bg-light -->

    <div class="bg-dark py-2">

        <div class="container">

            <p class="fs-sm text-white">
                <span class="d-block d-sm-inline-block">© 2019 Cheetah Conservation Fund</span>
                <span class="d-none d-sm-inline-block mx-1">•</span>
                <a class="blended-link" href="#">Privacy Policy</a>
            </p>
        
        </div>
        <!-- .container -->
    
    </div>
    <!-- .bg-dark -->


</footer>

<?php wp_footer(); ?>

</body>

</html>
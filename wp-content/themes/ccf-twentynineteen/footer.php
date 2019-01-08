<footer>

    <?php if( have_rows('footer_features', 'option') ): ?>

    <section class="row no-gutters" id="touts">

        <?php while( have_rows('footer_features', 'option') ): the_row();
    
        $image = get_sub_field('image');
        $link = get_sub_field('link');

        ?>

        <div class="featured-block col-lg-4">

            <div class="card">

                <div class="overlay-gradient-y-black">

                    <?php if ( $image ) : ?>
                        <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php else : ?>
                        <img class="card-img" src="http://via.placeholder.com/500x250/000000/333333/.jpg" alt="Placeholder">
                    <?php endif; ?>

                </div>

                <div class="card-img-overlay d-flex p-md-3">
                    <div class="align-self-end">
                        <a class="btn btn-block btn-primary" href="<?php echo $link['url']; ?>" title="Resource Library">
                            <?php echo $link['title']; ?></a>
                    </div>
                </div>

            </div>
            <!-- .card -->

        </div>

        <?php endwhile; ?>

    </section>

    <?php endif; /* footer_features */ ?>

    <div class="container-fluid wide" id="all-links">

        <div class="wide px-lg-2 py-6">

            <nav class="row">

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="extensible-list">
                        <li>
                            <span class="font-weight-bold mb-2">What We Do</span>
                        </li>
                        <li>
                            <a href="/about-us/what-we-do/research/">Research</a>
                        </li>
                        <li>
                            <a href="/about-us/what-we-do/education/">Education</a>
                        </li>
                        <li>
                            <a href="/about-us/what-we-do/conservation/">Conservation</a>
                        </li>
                        <li>
                            <a href="#/about-us/what-we-do/international-cheetah-day/">International Cheetah Day</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="extensible-list">
                        <li>
                            <span class="font-weight-bold mb-2">Who We Are</span>
                        </li>
                        <li>
                            <a href="#">Mission and Vision</a>
                        </li>
                        <li>
                            <a href="/about-us/who-we-are/dr-laurie-marker/">Dr. Laurie Marker</a>
                        </li>
                        <li>
                            <a href="#">Our Centre</a>
                        </li>
                        <li>
                            <a href="#">Staff and Board</a>
                        </li>
                        <li>
                            <a href="/about-us/who-we-are/ccf-global/">CCF Global</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="extensible-list">
                        <li>
                            <span class="font-weight-bold mb-2">Get Involved</span>
                        </li>
                        <li>
                            <a href="#">Ways to Give</a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                        </li>
                        <li>
                            <a href="#">Volunteer Locally</a>
                        </li>
                        <li>
                            <a href="#">Volunteer in Namibia</a>
                        </li>
                        <li>
                            <a href="#">Visit CCF</a>
                        </li>
                        <li>
                            <a href="#">Share</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="extensible-list">
                        <li>
                            <span class="font-weight-bold mb-2">Learn</span>
                        </li>
                        <li>
                            <a href="/about-us/learn/resource-library/">Resource Library</a>
                        </li>
                        <li>
                            <a href="#">About Cheetahs</a>
                        </li>
                        <li>
                            <a href="#">Human Wildlife Conflict</a>
                        </li>
                        <li>
                            <a href="#">Illegal Pet Trade</a>
                        </li>
                        <li>
                            <a href="#">Habitat Loss</a>
                        </li>
                        <li>
                            <a href="#">CCF Videos</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="extensible-list">
                        <li>
                            <span class="font-weight-bold mb-2">News</span>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Press Releases</a>
                        </li>
                        <li>
                            <a href="#">Press Kit</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

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

    <div class="container-fluid bg-light">

        <div class="wide px-lg-2 py-6">

            <div class="row">

                <div class="col-sm-10 col-lg-6 col-xl-3 mb-4 mb-xl-0 mx-auto">
                    <h5>Cheetah Conservation Fund</h5>
                    <p class="fs-md">Our Research and Education Centre is located in Otjiwarongo, Namibia. We encourage
                        visitors to see our facilities in person.</p>
                    <p class="fs-md"><a class="link text-body" href="#">Come Join Us!</a></p>
                </div>
                <!-- .col -->

                <div class="col-sm-10 col-lg-6 col-xl-3 mb-4 mb-xl-0 mx-auto">

                    <h5>Where We Work</h5>
                    <p class="fs-md">CCF is an international non-profit organization with fundraising
                        operations located in: Australia, Canada, Italy, United Kingdom, and United States, working
                        in cooperation with staff and partners around the world.</p>
                    <p class="fs-md">
                        <a class="link text-body" href="about-us/who-we-are/ccf-global/">CCF Global</a>
                    </p>

                </div>
                <!-- .col -->

                <div class="col-sm-10 col-lg-6 col-xl-3 mb-4 mb-xl-0 mx-auto">

                    <h5>Keep Up With the Cheetahs</h5>
                    <p class="fs-md">Never miss an update.</p>

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

                    <h6>CCF Newsletters</h6>

                    <ul class="extensible-list horizontal fs-lg">
                        <li>
                            <a class="no-btn-style text-body" href="#">
                                <span class="far fa-envelope-open"></span>
                                <span class="mx-1 font-weight-bold fs-md">Sign Up</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- .col -->

                <div class="col-sm-10 col-lg-6 col-xl-3 mx-auto">
                    <h5>Support CCF</h5>
                    <p class="fs-md">You can help save the cheetah from exinction!</p>

                    <ul class="extensible-list horizontal">
                        <li>

                            <a class="btn btn-sm btn-block btn-primary" href="#" title="Donate">Donate</a>
                        </li>
                        <li>

                            <a class="btn btn-sm btn-block btn-primary" href="#" title="Sponsor a Cheetah">Sponsor a Cheetah</a>
                        </li>
                    </ul>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .wide -->

    </div>

    <div class="container-fluid bg-dark">
        <div class="wide py-2">
            <p class="fs-sm text-white">
                <span class="d-block d-sm-inline-block">© 2019 Cheetah Conservation Fund</span>
                <span class="d-none d-sm-inline-block mx-1">•</span>
                <a class="blended-link" href="#">Privacy Policy</a>
            </p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
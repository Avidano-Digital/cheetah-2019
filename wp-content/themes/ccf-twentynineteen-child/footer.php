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
                        <a class="btn btn-block btn-primary stretched-link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" title="Resource Library">
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

    <div class="bg-light py-5">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-xl-4 mb-4 mb-xl-0">
                    <h5 class="mb-0">Cheetah Conservation Fund</h5>
                    <div class="fs-md">
                        <p class="f-sans-serif text-muted"><strong>United States</strong></p>
                        <p class="fs-md">
                            <strong class="d-block">Address</strong>
                            200 Daingerfield Rd<br>
                            Suite 200<br>
                            Alexandria, VA 22314
                        </p>
                        <p class="fs-md"><a class="link text-body" href="#">Contact Us</a></p>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-lg-6 col-xl-4 mb-4 mb-xl-0 d-none">

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
                        CCF USA is a registered non-profit 501(c) 3. Donations are fully tax-deductible in the United States if given to a CCF USA office and/or deposited to a U.S. bank.
                    </p>

                    <ul class="extensible-list horizontal">
                        <li>
                            <a class="btn btn-primary" href="/donate" title="Donate to CCF United States">Donate</a>
                        </li>
                    </ul>

                </div>
                <!-- .col -->

                <div class="col-lg-6 col-xl-4">

                    <h5>Follow Us</h5>

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
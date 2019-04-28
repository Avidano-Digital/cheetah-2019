<?php

/*
Template Name: Donate
*/

get_header();

$donate_url = $_SERVER[REQUEST_URI];

if (strpos($donate_url, '/donate/sponsor') !== false) :
    $form = '6fb04bf9-dd82-4dff-ad14-ee935828dd70';
    $type = 'sponsor';
elseif (strpos($donate_url, '/donate/recurring') !== false) :
    $form = 'b9cdbd87-026a-4f39-b5f4-a3aed39adfab';
    $type = 'recurring';
else :
    $form = 'ce3cb3d7-d112-40a1-bf4e-c9dd10a518f2';
    $type = 'once';
endif;

?>

<main id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="bg-dark banner-with-background banner-donate">

            <div class="container-fluid">
                <div class="narrow text-white text-center text-shadow">
                    <h1>
                        <span class="d-block text-primary fs-lg text-uppercase">Donate to CCF</span>
                        <span class="display-4 text-white">Join us in the race to save the cheetah</span>
                    </h1>
                </div>
                <!-- .narrow -->
            </div>
            <!-- .container -->

        </div>
        <!-- .banner-with-background -->

    <div class="container-fluid">

        <div class="row wide">

            <div class="col-xl-3 bg-light order-last">

                <div class="my-3">

                    <div class="narrow fs-md">
                        
                        <p class="h5">Donate with confidence</p>
    
                        <p>Our programs have proven results. When you give to Cheetah Conservation Fund, you are supporting the best in scientific research, educational programming, and conservation.</p>

                        <p>To donate to CCF via one of our international affiliates please use the links below:</p>

                        <ul class="extensible-list">
                            <li><a href="https://cheetahconservationfund.ca/donate/" target="_blank">Canada</a></li>
                            <li><a href="http://cheetah.org.uk/donate" target="_blank">United Kingdom</a></li>
                            <li><a href="http://www.aga-artenschutz.de/spenden.html?fb_item_id_fix=909" target="_blank">Germany</a></li>
                            <li><a href="https://cheetah.org.au/" target="_blank">Australia</a></li>
                        </ul>
                    </div>

                </div>
                <!-- .sticky-top -->

                <hr>

                <div class="my-3 fs-md">

                    <p class="h5">Helpful Information</p>

                    <p>
                        If you are having difficulty completing your donation, please call <strong><span class="no-wrap">1-866-909-3399</span></strong>
                    </p>

                    <p>
                        CCF is a registered Trust in Namibia (Incorporated Association Not For Gain, with Registration
                        Number 21/20002/341).
                    </p>
                    <p>
                        CCF USA is a Registered Non Profit 501(c) 3: #31-1726923.
                    </p>


                </div>
                <!-- .my-5 -->


            </div>
            <!-- .col -->

            <div class="col-xl-9 overflow-hidden">

                <div class="my-5" id="primary-content">

                    <div class="narrow my-4">
                    
                        <div class="nav nav-pills bg-light device-md" id="donate-tabs" role="tablist">

                            <a class="nav-item nav-link flex-fill <?php echo ($type == 'once' ? 'active' : '') ?>" id="tab-btn-01-a" href="/donate/"
                            aria-controls="tab-01-a" aria-selected="<?php echo ($type == 'once' ? 'true' : 'false') ?>" role="tab">
                                Donate Once
                            </a>

                            <a class="nav-item nav-link flex-fill <?php echo ($type == 'recurring' ? 'active' : '') ?>" id="tab-btn-01-b" href="/donate/recurring/"
                            aria-controls="tab-01-b" aria-selected="<?php echo ($type == 'recurring' ? 'true' : 'false') ?>" role="tab">
                                Recurring Gift
                            </a>

                            <a class="nav-item nav-link flex-fill <?php echo ($type == 'sponsor' ? 'active' : '') ?>" id="tab-btn-01-c" href="/donate/sponsor/"
                            aria-controls="tab-01-c" aria-selected="<?php echo ($type == 'sponsor' ? 'true' : 'false') ?>" role="tab">
                                Sponsor
                            </a>

                        </div>
                        <!-- .nav -->

                    </div>

                    <div class="narrow my-4">
                    
                        <div id="bbox-root"></div>

                    </div>

                    <?php get_template_part('template-parts/article-footer'); ?>

                </div>
                <!-- #primary-content -->

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->


































    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<!-- Heather, you can replace the <script> tag for Donate below -->

<script type="text/javascript">
    window.bboxInit = function () {
        bbox.showForm('<?php echo $form; ?>');
    };
    (function () {
        var e = document.createElement('script'); e.async = true;
        e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
        document.getElementsByTagName('head')[0].appendChild(e);
    } ());
</script>

<?php get_footer();

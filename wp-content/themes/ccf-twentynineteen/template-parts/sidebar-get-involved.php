<div class="col-xl-3 bg-dark px-xl-4">

    <div class="sticky-top py-xl-5">

        <div class="btn-toggle d-xl-none offset-gutter-x">

            <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                <span class="title">Get Involved</span>
            </a>

        </div>

        <nav class="collapse d-xl-block mb-xl-5" id="aside-nav">

            <ul class="extensible-list text-white py-4 py-xl-0">
                <li class="page_item <?php if ( is_page( 'ways-to-give' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/get-involved/ways-to-give/" title="Ways to Give">Ways to Give</a>
                </li>
                <li class="page_item <?php if ( is_page( 'ccf-events' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/get-involved/ccf-events/">CCF Events</a>
                </li>
                <li class="page_item <?php if ( is_page( 'volunteer-locally' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/get-involved/volunteer-locally/">Volunteer Locally</a>
                </li>
                <li class="page_item <?php if ( is_page( 'volunteer-in-namibia' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/get-involved/volunteer-in-namibia/">Volunteer in Namibia</a>
                </li>
                <li class="page_item <?php if ( is_page( 'visit-ccf' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/get-involved/visit-ccf/">Visit CCF</a>
                </li>
                <li class="page_item <?php if ( is_page( 'social-media' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/get-involved/social-media/">Social Media</a>
                </li>
            </ul>

        </nav>

        <?php get_template_part('template-parts/aside-donate'); ?>

    </div>
    <!-- .sticky-top -->

</div>
<!-- .col -->
<div class="col-xl-3 bg-dark">

    <div class="sticky-top py-xl-5">

        <div class="btn-toggle d-xl-none offset-gutter-x">

            <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                <span class="title"><?php echo $parent_title; ?></span>
            </a>

        </div>

        <nav class="collapse d-xl-block mb-xl-5" id="aside-nav">

            <ul class="extensible-list text-white py-4 py-xl-0">
                <li class="page_item <?php if ( is_page( 'mission-and-vision' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/who-we-are/mission-and-vision/">Mission and Vision</a>
                </li>
                <li class="page_item <?php if ( is_page( 'dr-laurie-marker' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/who-we-are/dr-laurie-marker/">Dr. Laurie Marker</a>
                </li>
                <li class="page_item <?php if ( is_page( 'our-centre' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/who-we-are/our-centre/">Our Centre</a>
                </li>
                <li class="page_item <?php if ( is_page( 'staff-and-board' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="#">Staff and Board</a>
                </li>
                <li class="page_item <?php if ( is_page( 'ccf-global' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/who-we-are/ccf-global/">CCF Global</a>
                </li>
            </ul>

        </nav>

        <?php get_template_part('template-parts/aside-donate'); ?>

    </div>
</div>
<!-- .col -->
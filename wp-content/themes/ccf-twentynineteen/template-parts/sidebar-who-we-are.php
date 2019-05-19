<div class="col-xl-3 bg-dark">

    <div class="sticky-top py-xl-4">

        <div class="btn-toggle d-xl-none mx-n2">

            <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                <span class="title">Who We Are</span>
            </a>

        </div>

        <nav class="collapse d-xl-block mb-xl-4" id="aside-nav">

            <?php $parent_title = get_the_title($post->post_parent); ?>

            <ul class="extensible-list text-white py-3 py-xl-0">
                <li class="page_item <?php if ( is_page( 'mission-and-vision' ) || $parent_title == 'Mission and Vision' ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/who-we-are/mission-and-vision/">Mission and Vision</a>
                </li>
                <li class="page_item <?php if ( is_page( 'dr-laurie-marker' ) || $parent_title == 'Dr. Laurie Marker' ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/who-we-are/dr-laurie-marker/">Dr. Laurie Marker</a>
                </li>
                <li class="page_item <?php if ( is_page( 'our-centre' ) || $parent_title == 'Our Centre' ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/who-we-are/our-centre/">Our Centre</a>
                </li>
                <li class="page_item <?php if ( is_page( 'staff-and-board' ) || $parent_title == 'Staff and Board' ) : ?>current_page_item<?php endif; ?>">
                    <a href="#">Staff and Board</a>
                </li>
                <li class="page_item <?php if ( is_page( 'ccf-global' ) || $parent_title == 'CCF Global' ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/who-we-are/ccf-global/">CCF Global</a>
                </li>
            </ul>

        </nav>

        <?php get_template_part('template-parts/aside-donate'); ?>

    </div>
</div>
<!-- .col -->
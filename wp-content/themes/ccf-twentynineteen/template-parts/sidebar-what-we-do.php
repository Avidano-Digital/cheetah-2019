<div class="col-xl-3 bg-dark">

    <div class="sticky-top py-xl-5">

        <div class="btn-toggle d-xl-none offset-gutter-x">

            <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                <span class="title">What We Do</span>
            </a>

        </div>

        <nav class="collapse d-xl-block mb-xl-5" id="aside-nav">

            <ul class="extensible-list text-white py-4 py-xl-0">
                <li class="page_item <?php if ( is_page( 'conservation' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/what-we-do/conservation/">Conservation</a>
                </li>
                <li class="page_item <?php if ( is_page( 'research' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/what-we-do/research/">Research</a>
                </li>
                <li class="page_item <?php if ( is_page( 'education' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/what-we-do/education/">Education</a>
                </li>
                <li class="page_item <?php if ( is_page( 'international-cheetah-day' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/about-us/what-we-do/international-cheetah-day/">International Cheetah Day</a>
                </li>
            </ul>

        </nav>

        <?php get_template_part('template-parts/aside-donate'); ?>

    </div>
</div>
<!-- .col -->
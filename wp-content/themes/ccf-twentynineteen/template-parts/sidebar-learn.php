<div class="col-xl-3 bg-dark px-xl-4">

    <div class="sticky-top py-xl-5">

        <div class="btn-toggle d-xl-none offset-gutter-x">

            <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                <span class="title">Learn</span>
            </a>

        </div>

        <nav class="collapse d-xl-block mb-xl-5" id="aside-nav">
            <ul class="extensible-list text-white py-4 py-xl-0">
                <li class="page_item <?php if ( is_page( 'resource-library' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/learn/resource-library/">Resource Library</a>
                </li>
                <li class="page_item <?php if ( is_page( 'about-cheetahs' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/learn/about-cheetahs/">About Cheetahs</a>
                </li>
                <li class="page_item <?php if ( is_page( 'human-wildlife-conflict' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/learn/human-wildlife-conflict/">Human Wildlife Conflict</a>
                </li>
                <li class="page_item <?php if ( is_page( 'illegal-pet-trade' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/learn/illegal-pet-trade/">Illegal Pet Trade</a>
                </li>
                <li class="page_item <?php if ( is_page( 'habitat-loss' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/learn/habitat-loss/">Habitat Loss</a>
                </li>
                <li class="page_item <?php if ( is_page( 'ccf-videos' ) ) : ?>current_page_item<?php endif; ?>">
                    <a href="/learn/ccf-videos/">CCF Videos</a>
                </li>
            </ul>

        </nav>

        <?php get_template_part('template-parts/aside-donate'); ?>

    </div>
    <!-- .sticky-top -->

</div>
<!-- .col -->
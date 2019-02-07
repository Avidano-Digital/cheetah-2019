<div class="container-fluid bg-light py-3">

    <div class="row matrix-gutter">

        <div class="col-sm">
            <?php echo do_shortcode('[gtranslate]'); ?>
        </div>
        <!-- .col -->

        <div class="col-sm">            
            <?php get_template_part('template-parts/site-search'); ?>
        </div>
        <!-- .col -->

    </div>
    <!-- .row -->

</div>

<nav>

    <div class="accordion-group" id="mobile-menu-accordion" role="tablist">

        <?php starterMenu('Mobile'); ?>

    </div>
    <!-- .accordion-group -->

</nav>
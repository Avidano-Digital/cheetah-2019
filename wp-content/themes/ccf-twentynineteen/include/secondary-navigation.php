<ul class="extensible-list horizontal justify-content-end">

    <?php if (is_child_theme() === false) : ?>

    <li>
        <a href="/kids" title="For Kids">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
        </a>
    </li>

    <?php endif; ?>
    
    <!-- Language --> 
    <li style="width:160px" dir="ltr">
        <?php echo do_shortcode('[gtranslate]'); ?>
    </li>

    <!-- Search --> 
    <li style="width:160px" dir="ltr">
        <?php get_template_part('template-parts/site-search'); ?>
    </li>
    
</ul>
<?php

    ////////////////////////////////////////
    // Remove Parent Theme Features
    ////////////////////////////////////////

    // Parent Post Types

    function remove_actions_parent_theme() {
        remove_action( 'init', 'create_parent_post_types' );
        remove_action( 'init', 'tax_init' );
    };

    add_action('after_setup_theme', 'remove_actions_parent_theme');

    // Theme Templates

    function remove_parent_page_template($page_templates){

        unset($page_templates['page-ccf-events.php']);
        unset($page_templates['page-ccf-kids.php']);
        unset($page_templates['page-cheetah-facts.php']);
        unset($page_templates['page-resource-library.php']);
        unset($page_templates['page-ccf-videos.php']);
        unset($page_templates['page-donate.php']);

        return $page_templates;
    }

    add_filter('theme_page_templates', 'remove_parent_page_template');

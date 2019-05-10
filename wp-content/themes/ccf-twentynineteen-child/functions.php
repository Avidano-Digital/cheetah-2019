<?php

    ////////////////////////////////////////
    // Remove Parent Theme Features
    ////////////////////////////////////////

    // Custom Post Types

    function remove_actions_parent_theme() {
        remove_action( 'init', 'create_post_types' );
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

    ////////////////////////////////////////
    // Custom Post Types
    ////////////////////////////////////////

    function create_child_post_types() {

        register_post_type(
            'Events',
            array(
                'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event')
            ),
            'supports' => array( 'title', 'thumbnail' ),
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-calendar'
            )
        );
    }

    add_action('init', 'create_child_post_types');
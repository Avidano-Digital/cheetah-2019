<?php

function remove_actions_parent_theme() {
    remove_action( 'init', 'create_post_types' );
};

add_action('after_setup_theme', 'remove_actions_parent_theme');
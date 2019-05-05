<?php

function remove_actions_parent_theme() {
    remove_action( 'init', __NAMESPACE__ . '\create_post_types' );

};

add_action('init', 'remove_actions_parent_theme');
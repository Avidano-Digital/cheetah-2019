<?php

    add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_support' );
    
    function theme_support(){

        global $color_palette;

        ////////////////////////////////////////
        // Image Preferences
        ////////////////////////////////////////

        add_theme_support( 'post-thumbnails' );

        update_option( 'thumbnail_size_w', 250 );
        update_option( 'thumbnail_size_h', 250 );
        update_option( 'thumbnail_crop', true );

        update_option( 'medium_size_w', 0 );
        update_option( 'medium_size_h', 0 );

        update_option( 'medium_large_size_w', 0 );
        update_option( 'medium_large_size_h', 0 );

        update_option( 'large_size_w', 0 );
        update_option( 'large_size_h', 0 );
        
        // Custom Archive Titles

        add_filter( 'get_the_archive_title', function ($title) {

            if ( is_category() ) {
        
                    $title = single_cat_title( '', false );
        
                } elseif ( is_tag() ) {
        
                    $title = single_tag_title( '', false );
        
                } elseif ( is_author() ) {
        
                    $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        
                }
        
            return $title;
        
        });

    } // theme_support

    ////////////////////////////////////////
    // Custom Post Types
    ////////////////////////////////////////

    add_action( 'init', __NAMESPACE__ . '\create_post_types' );

    function create_post_types() {

        register_post_type( 'About Us',
            array(
                'labels' => array(
                'name' => __( 'About Us' ),
                'singular_name' => __( 'About Us' )
            ),

            'public' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes' ),
            'show_in_rest' => true,
            'rewrite' => array( 'slug' => 'about-us'),
            'menu_icon' => get_template_directory_uri() . '/images/wp-icon-about.png',
            )
        );
        
        register_post_type( 'Videos',
            array(
                'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'Video' )
            ),

            'public' => true,
            'rewrite' => array( 'slug' => 'videos'),
            'menu_icon' => 'dashicons-video-alt3'
            )
        );
    }

    add_action( 'init', __NAMESPACE__ . '\customize_post_object' );

    function customize_post_object() {

        $get_post_type = get_post_type_object('post');
        
        $labels = $get_post_type->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add News';
        $labels->add_new_item = 'Add News';
        $labels->edit_item = 'Edit Post';
        $labels->new_item = 'News';
        $labels->view_item = 'View Post';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No News found';
        $labels->not_found_in_trash = 'No News found in Trash';
        $labels->all_items = 'All News';
        $labels->menu_name = 'News';
        $labels->name_admin_bar = 'News';
        $labels->menu_position = '10';
    }

    ////////////////////////////////////////
    // Remove Dashboard Menu Items
    ////////////////////////////////////////
    
    add_action( 'admin_menu', __NAMESPACE__ . '\remove_menus' );

    function remove_menus(){
        remove_menu_page( 'edit-comments.php' );
    }

    ////////////////////////////////////////
    // Custom Logo
    ////////////////////////////////////////

    add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_prefix_setup' );

    function theme_prefix_setup() {
        add_theme_support( 'custom-logo' );
    }

    add_action( 'login_head', __NAMESPACE__ . '\wpdev_filter_login_head', 100 );
    
    function wpdev_filter_login_head() {
 
        if ( has_custom_logo() ) :
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $height = '100px';
            $width = '185px';
        ?>

        <style type="text/css">
            .login h1 a {
                background-image: url( <?php echo esc_url( $image[0] ); ?> );
                -webkit-background-size: <?php echo $image[0] ?>px;
                background-size: contain;
                height: <?php echo $height ?>;
                width: <?php echo $width ?>;
            }
        </style>
        
        <?php endif;
    }
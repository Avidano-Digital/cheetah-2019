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

        // Add Menu Support

        register_nav_menus(
            array(
                'Desktop' => esc_html__( 'Desktop', 'cheetah.org' ),
                'Mobile' => esc_html__( 'Mobile', 'cheetah.org' ),
                'Footer' => esc_html__( 'Footer', 'cheetah.org' )
            )
        );

    } // theme_support

    ////////////////////////////////////////
    // Custom Post Types
    ////////////////////////////////////////

    add_action( 'init', __NAMESPACE__ . '\create_post_types' );

    function create_post_types() {
        
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

        register_post_type( 'Resource Library',
            array(
                'labels' => array(
                'name' => __( 'Resource Library' ),
                'singular_name' => __( 'Resource Library' )
            ),

            'public' => true,
            'capability_type' => 'post', 
            'rewrite' => array( 'slug' => 'resource-library', 'with_front'=> false ), 
            'menu_icon' => 'dashicons-book',
            )
        );

        register_post_type( 'Infographics',
            array(
                'labels' => array(
                'name' => __( 'Infographics' ),
                'singular_name' => __( 'Infographic' )
            ),

            'public' => true,
            'rewrite' => array( 'slug' => 'infographics'),
            'menu_icon' => 'dashicons-info'
            )
        );

        register_post_type( 'Partnerships',
            array(
                'labels' => array(
                'name' => __( 'Partnerships' ),
                'singular_name' => __( 'Partnerships' )
            ),

            'public' => true,
            'rewrite' => array( 'slug' => 'partnerships'),
            'menu_icon' => 'dashicons-groups'
            )
        );

        register_post_type( 'Events',
            array(
                'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'supports' => array( 'title', 'thumbnail' ),
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-calendar'
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
    // Custom Taxonomies
    ////////////////////////////////////////

    function tax_init() {

        register_taxonomy(
            'resource-category',
            'resourcelibrary',
            array(
              'labels' => array(
              'name' => __( 'Resource Categories' ),
              'singular_name' => __( 'Resource Category' ),
              'add_new_item' => 'Add New Resource Category',
              'new_item_name' => 'New Category Name',
              'edit_item' => 'Edit Resource Category',
              'view_item' => 'View Resource Category',
              'update_item' => 'Update Resource Category'
            ),
            'has_archive' => true,
            'hierarchical' => true,
            'show_in_nav_menus' => true,
            'public' => true
          )
        );
    }
    add_action( 'init', 'tax_init' );

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

    ////////////////////////////////////////
    // News Article Filtering
    ////////////////////////////////////////

    function showPrimaryFilters() {

        $current_category = get_category(get_query_var('cat'));
        $current_category_name = $current_category->name;

        if ($current_category_name == 'CCF Blog') {

            $current_category_id = $current_category->cat_ID;
            $topics = get_categories(array( 'parent' => $current_category_id ));

            echo '<select class="form-control news-filter" id="topics" required><option>All Topics</option>';

            foreach ($topics as $topic) :
                echo '<option data-category-id="'.$topic->cat_ID.'" value="'.$topic->cat_name.'">'.$topic->cat_name.'</option>';
            endforeach;

            echo '</select>';

        }

        if ($current_category_name != 'CCF Blog') {
            $current_category_id = $current_category->cat_ID;
            $news_posts = get_posts(
                array(
                    'category'=>$current_category_id,
                    'orderby'=>'date'
                )
            );
            $years = [];
            foreach ($news_posts as $news_post) {
                $date = substr($news_post->post_date, 0, 4);
                if (!in_array($date,$years)) {
                    array_push($years,$date);                
                }
            }

            echo '<select class="form-control news-filter" id="years" data-category-id="'.$current_category_id.'" required><option>Filter by Year</option>';

            foreach ($years as $year) {
                echo '<option data-category-id="'.$current_category_id.'" data-year="'.$year.'" value="'.$year.'">'.$year.'</option>';
            }

            echo '</select>';            
        }

    }

    function showAuthorFilters() {

        $wp_user_query = new WP_User_Query(array('has_published_posts' => array('post')));
        $authors = $wp_user_query->get_results();

        echo '<select class="form-control news-filter" id="authors" required><option>All Authors</option>';

        foreach ($authors as $author) :
            echo '<option data-author-id="'.$author->ID.'" value="'.$author->display_name.'">'.$author->display_name.'</option>';
        endforeach;

        echo '</select>';

    }

    ////////////////////////////////////////
    // News Section Secondary Nav
    ////////////////////////////////////////

    function listParentCategoriesMenu() {
        $categories = get_terms('category', array('parent' => 0));
        $current_category = get_category(get_query_var('cat'));
        $current_category_id = $current_category->cat_ID;
        foreach ($categories as $category) {
            $active = '';
            if ($current_category_id == $category->term_id) {
                $active = 'active';
            }
            echo '<li><a class="'. $active .'" href="/'. $category->slug .'">'. $category->name . '</a></li>';
        }                
    }

    ////////////////////////////////////////
    // Events Country Filtering
    ////////////////////////////////////////

    function showCountryFilters() {

        $args = array( 'post_type' => 'events', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        $countries = [];

        while ( $loop->have_posts() ) : $loop->the_post();
            $country = get_field('country');
            if ($country && !in_array($country, $countries)) :
                array_push($countries, $country);                            
            endif;
        endwhile;

        echo '<select class="form-control events-filter" id="countries" required><option>Show Events by Country</option>';

        foreach ($countries as $country) :
            echo '<option data-country-id="'.$country.'" value="'.$country.'">'.$country.'</option>';
        endforeach;

        echo '</select>';

    }
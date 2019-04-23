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

        // Wrap the inserted image html with <figure> 

        function html5_insert_image($html, $id, $caption, $title, $align, $url, $size, $alt ) {

          $src  = wp_get_attachment_image_src( $id, $size, false );
          $html5  = '<figure class="' . $align . '"><div><img src="' . $src[0] . '" alt="' . $alt . '" />' . ($caption ? ' <figcaption class="figure-caption">' . $caption . '</figcaption> ' : '') . '</div></figure>';
          return $html5;

        }
        
        add_filter('image_send_to_editor', 'html5_insert_image', 10, 9);


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

        register_post_type( 'Partnerships',
            array(
                'labels' => array(
                'name' => __( 'Partnerships' ),
                'singular_name' => __( 'Partnership' )
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

        register_post_type(
            'CCF Authors',
            array(
                'labels' => array(
                'name' => __('CCF Authors'),
                'singular_name' => __('Author')
            ),

            'public' => true,
            'menu_icon' => 'dashicons-admin-users'
            )
        );

        register_post_type(
            'CCF Cheetahs',
            array(
                'labels' => array(
                'name' => __('CCF Cheetahs'),
                'singular_name' => __('Cheetah')
            ),

            'public' => true,
            'menu_icon' => get_template_directory_uri() . '/images/wp-icon-ccf-cheetahs.png'
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

        register_taxonomy(
            'cheetah-category',
            'ccfcheetahs',
            array(
              'labels' => array(
              'name' => __( 'Cheetah Categories' ),
              'singular_name' => __( 'Cheetah Category' ),
              'add_new_item' => 'Add New Cheetah Category',
              'new_item_name' => 'New Category Name',
              'edit_item' => 'Edit Cheetah Category',
              'view_item' => 'View Cheetah Category',
              'update_item' => 'Update Cheetah Category'
            ),
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
    // Make pagination work with the desired permalink structure
    ////////////////////////////////////////

    function remove_page_from_query_string($query_string)
    { 
        if ($query_string['name'] == 'page' && isset($query_string['page'])) {
            unset($query_string['name']);
            $query_string['paged'] = $query_string['page'];
        }      
        return $query_string;
    }
    
    add_filter('request', 'remove_page_from_query_string');

    ////////////////////////////////////////
    // Redirects
    ////////////////////////////////////////

    function redirect_page() {

        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') :
            $protocol = 'https://';
        else :
            $protocol = 'http://';
        endif;
        
        $currenturl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $currenturl_relative = wp_make_link_relative($currenturl);
        $currenturl_relative = substr($currenturl_relative, 0, -1);

        switch ($currenturl_relative) {
        
            case '/kids':
                $urlto = home_url('/kids/cheetah-facts');
                break;
            
            default:
                return;
        
        }
        
        if ($currenturl != $urlto) exit( wp_redirect( $urlto ) );

    }
    add_action( 'template_redirect', 'redirect_page' );

    ////////////////////////////////////////
    // Cheetahs Loop Shortcode
    ////////////////////////////////////////

    function cheetahs( $atts ){

        ob_start();

        $a = shortcode_atts( array(
          'category' => 'resident',
        ), $atts );

        $args = array( 
            'post_type' => 'ccfcheetahs', 
            'posts_per_page' => 99,
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'cheetah-category',
                    'field'    => 'slug',
                    'terms'    => strtolower($a['category']),
                ),
            ),
        );
        
        $cheetahs = new WP_Query( $args );

        ?>

        <div class="thumbnail-links-block my-5">

            <div class="medium">
        
                <div class="row matrix-gutter">

                    <?php while ( $cheetahs->have_posts() ) : $cheetahs->the_post(); 
                    $image = get_field('image');
                    global $post;
                    ?>

                    <div class="col-sm-6 col-lg-4">
                        <?php if( $image ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                        <?php else : ?>
                            <img src="https://placehold.it/600x400.jpg" alt="Placeholder">
                        <?php endif; ?>
                        <a class="btn btn-block btn-lg btn-info stretched-link" href="#cheetah-<?php echo $post->post_name; ?>" data-toggle="modal" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </div>
                    <!-- .col -->

                    <div class="modal fade" id="cheetah-<?php echo $post->post_name; ?>" tabindex="-1" role="dialog" aria-labelledby="cheetah-<?php echo $post->post_name; ?>-title" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">

                            <div class="modal-content">

                                <div class="modal-header border-bottom-0">
                                    <div class="row no-gutters w-100 align-items-center">
                                        <div class="col">
                                            <h1 class="modal-title h4 mb-0" id="cheetah-<?php echo $post->post_name; ?>-title"><?php the_title(); ?></h1>
                                        </div>
                                        <div class="col-auto">
                                            <button class="no-btn-style" type="button" data-dismiss="modal" aria-label="Close">
                                                <span class="fas fa-times"></span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- .modal-header -->

                                <div class="modal-body p-0">

                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    
                                    <div class="px-2 py-4 fs-md">
                                        <?php the_field('bio'); ?>
                                    </div>
                                    <!-- .p-2 -->
                                    
                                </div>
                                <!-- .modal-body -->

                                <div class="modal-footer">

                                    <div class="row matrix-gutter align-items-center">
                                        <div class="col-auto">
                                            <button class="no-btn-style btn-prev" type="button">
                                                <span class="fas fa-arrow-left" title="Previous" role="img"></span>
                                            </button>
                                        </div>
                                        <!-- .col -->
                                        <div class="col">
                                            <a href="#1" class="btn btn-block btn-primary">Sponsor</a>
                                        </div>
                                        <!-- .col -->
                                        <div class="col-auto">
                                            <button class="no-btn-style btn-next" type="button">
                                                <span class="fas fa-arrow-right" title="Next" role="img"></span>
                                            </button>
                                        </div>
                                        <!-- .col -->
                                    </div>
                                    <!-- .row -->
                                    
                                </div>
                                <!-- .modal-footer -->

                            </div>
                            <!-- .modal-content -->

                        </div>
                        <!-- .modal-dialog -->

                    </div>
                    <!-- .modal -->
                    
                    <?php endwhile; wp_reset_postdata(); ?>
                
                </div>
                <!-- .row -->
            
            </div>
            <!-- .medium -->
        </div>
        
        <?php return ob_get_clean();
    }

    add_shortcode( 'cheetahs', 'cheetahs' );


// Numbered Pagination

if (!function_exists('custom_pagination')) {

    function custom_pagination(){

        $prev_arrow = is_rtl() ? '→' : '←';
        $next_arrow = is_rtl() ? '←' : '→';
        
        global $wp_query;
        $total = $wp_query->max_num_pages;
        
        $big = 999999999; // need an unlikely integer
        
        if ($total > 1) {

            if (!$current_page = get_query_var('paged')) {
                $current_page = 1;
            }
            
            if (get_option('permalink_structure')) {
                $format = 'page/%#%/';
            } else {
                $format = '&paged=%#%';
            }
            echo paginate_links(array(
                'base'			=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'		=> $format,
                'current'		=> max(1, get_query_var('paged')),
                'total' 		=> $total,
                'mid_size'		=> 3,
                'type' 			=> 'plain',
                'prev_text'		=> $prev_arrow,
                'next_text'		=> $next_arrow,
             ));
        }
    }
}

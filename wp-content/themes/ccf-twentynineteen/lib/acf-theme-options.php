<?php

    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(
            array(
                'page_title' 	=> 'Theme Options',
                'menu_title'	=> 'Theme Options',
                'menu_slug' 	=> 'theme-options',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            )
        );
        
    }

    function change_news_author( $post_id ) {
       
        if ( empty($_POST['acf']) ) :
            return;
        endif;
        
        // get term id from $post_id
        $stored_author = wp_get_post_terms($post_id, 'news-author');

        if (get_post_type() == 'post') :

            $stored_author_id = $stored_author[0]->term_id;
            
            // get submitted value from acf form
            $posted_author = $_POST['acf']['field_5cd5d3f9cf88b'];
            
            // get term_id for the submitted value       
            $term_id = get_term_by( 'id', $posted_author, 'news-author' );
            
            // if stored value is not equal to posted value, then update terms
            if ($stored_author_id != $posted_author) :
                wp_set_object_terms( $post_id, $term_id->term_id, 'news-author' );
            endif;

        endif;
    }
    add_action('acf/save_post', 'change_news_author', 20);

    function change_sp_author( $post_id ) {
       
        if ( empty($_POST['acf']) ) :
            return;
        endif;
        
        // get term id from $post_id
        $stored_authors = wp_get_post_terms($post_id, 'scientific-paper-author');
        $resource_category = wp_get_post_terms($post_id, 'resource-category');

        if ($resource_category[0]->name == 'Scientific Papers') :

          // var_dump($stored_authors);

          wp_delete_object_term_relationships( $post_id, 'scientific-paper-author' );

            // foreach ($stored_authors as $stored_author) :

                $stored_author_id = $stored_author->term_id;
                
                // get submitted value from acf form
                $posted_authors = $_POST['acf']['field_5c94d9a961648'];

                // var_dump($posted_authors);

                if ($posted_authors) :

                    foreach ($posted_authors as $posted_author) :
                    
                        // get term_id for the submitted value       
                        $term_id = get_term_by( 'id', $posted_author, 'scientific-paper-author' );

                        var_dump($term_id);
                        
                        // if stored value is not equal to posted value, then update terms
                        if ($stored_author_id != $posted_author) :
                            // var_dump($posted_author);
                            wp_set_object_terms( $post_id, (int) $term_id->term_taxonomy_id, 'scientific-paper-author', true );
                        endif;

                    endforeach;

                endif;

            // endforeach;

        endif;
    }
    add_action('acf/save_post', 'change_sp_author', 20);
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

    function acf_load_scientific_paper_author_choices( $field ) {
        
        $field['choices'] = array();

        if( have_rows('authors', 'option') ) {
            while( have_rows('authors', 'option') ) {
                the_row();
                $author = get_sub_field('author');
                $field['choices'][ $author ] = $author;
            }            
        }
        return $field;
    }

    add_filter('acf/load_field/name=scientific_paper_authors', 'acf_load_scientific_paper_author_choices');
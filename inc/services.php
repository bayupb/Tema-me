<?php

add_theme_support( 'post-thumbnails' );
add_action( 'init', 'services_post_type');

function services_post_type(){
    register_post_type('services',
        array(
            'labels'     => 
                array(
                    'name'      => __('Services' , THEME_NAME),
                    'singular_name'  => __('Services', THEME_NAME),
                ),
                'public'                => true,
                'publicly_queryable'    => true,
                'show_ui'               => true,
                'show_in_admin_bar'     => true,
                'show_in_menu'          => true,
                'has_archive'           => true,
                'rewrite'               => array('slug' => 'services'),
                'hierarchical'          => false,
                'has_archive'           => true,
                'query_var'             => true,
                'capability_type'       => 'page',
                'show_in_rest'          => true,
                'supports'              => array(
                    'title', 
                    'thumbnail'
                )
            )
        );
}


add_action( 'pre_get_posts', 'add_single_page_services' );

// Alter the main query
function add_single_page_services( $query ) {
    if ( is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'services' ) );
    }
    return $query;
}
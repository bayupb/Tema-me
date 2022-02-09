<?php

add_theme_support( 'post-thumbnails' );

function clients_post_type(){
    register_post_type('clients', array(
        'labels'     => array(
            'name'      => __('Clients' , THEME_NAME),
            'singular_name'  => __('Clients', THEME_NAME),
        ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'clients'),
            'hierarchical'      => false,
            'capability_type'   => 'page',
            'supports'          => array( 'title', 'thumbnail', 'excerpt' )
    ));
}

add_action( 'init', 'clients_post_type' );
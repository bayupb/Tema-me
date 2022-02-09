<?php

add_theme_support( 'post-thumbnails' );

function work_post_type(){
    register_post_type('work', array(
        'labels'     => array(
            'name'      => __('Work' , THEME_NAME),
            'singular_name'  => __('Work', THEME_NAME)
        ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'work'),
            'hierarchical'      => false,
            'capability_type'   => 'page',
            'supports'          => array(
                'title', 'thumbnail'
            )
    ));
}

add_action( 'init', 'work_post_type' );
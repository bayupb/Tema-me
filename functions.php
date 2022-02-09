<?php

define("THEME_NAME", 'temame');

if(!function_exists('temame_setup')):
    function temame_setup(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'automatic-feed-links' );
     
        register_nav_menus(
            array(
                'primary'       => __('Primary' , THEME_NAME),
                'mobile-menu'   => __('Mobile' , THEME_NAME)
            )
        );
    }
endif;

add_action('after_setup_theme', 'temame_setup');

function temame_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );


 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'temame_custom_logo_setup' );

if(!function_exists('temame_scripts')):
    function temame_scripts(){
        wp_enqueue_style( 'temame-style', get_template_directory_uri() . './dist/main.css');
        wp_enqueue_script( 'app' , get_stylesheet_directory_uri() . './inc/js/alpine.js' );
    }
endif;

add_action( 'wp_enqueue_scripts' , 'temame_scripts' );

require get_template_directory(). '/inc/heading.php';
require get_template_directory(). '/inc/services.php';
require get_template_directory(). '/inc/work.php';
require get_template_directory(). '/inc/clients.php';
require get_template_directory(). '/inc/custom-color-heading.php';
require get_template_directory(). '/inc/footer-text.php';
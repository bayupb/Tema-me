<?php 

/**
 * 
 *  custom text footer
 */

 add_action('customize_register', 'temame_footer_register_theme_customizer');

 function temame_footer_register_theme_customizer($wp_customize){
     $wp_customize->add_section('temame_edit_footer',array(
         'capability'       => 'edit_theme_options',
         'priority'         => 1000,
         'title'            => __('Footer Text', 'Temame')
     ));

     $wp_customize->add_setting('temame_footer_text',array(
         'capability'       => 'edit_theme_options',
         'default'          => 'Footer Text In Here | Temame',
         'transport'        => 'refresh',
         'sanitize_callback'=> 'sanitize_text_field'
     ));

     $wp_customize->add_control('temame_footer_text', array(
         'type'             => 'text',
         'section'          => 'temame_edit_footer',
         'settings'         => 'temame_footer_text',
         'label'            => __('Footer Text', 'Temame'),
         'description'      => __('Add Any Text Footer In Here | Your Site'),
     ));

     // Text Font Footer
    $wp_customize->add_setting('temame_select_footer_text',array(
        'capability'    => 'edit_theme_options',
        'default'       => 'text-base',
        'transport'     => 'refresh',
        'sanitize_callback'=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_select_footer_text',array(
        'type'          => 'select',
        'section'       => 'temame_edit_footer',
        'settings'      => 'temame_select_footer_text',
        'label'         => __('Description Text Size', 'Temame'),
        'description'   => __('Choice your font size', 'Temame'),
        'choices'       => array(
            'text-xl'   => __('Default', 'Temame'),
            'text-base'   => __('Text Base', 'Temame'),
            'text-sm'   => __('Text Sm', 'Temame'),
        )
    ));

    // Font Bold Footer
    $wp_customize->add_setting('temame_select_footer_font',array(
        'capability'    => 'edit_theme_options',
        'default'       => 'font-normal',
        'transport'     => 'refresh',
        'sanitize_callback'=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_select_footer_font',array(
        'type'          => 'select',
        'section'       => 'temame_edit_footer',
        'settings'      => 'temame_select_footer_font',
        'label'         => __('Description Font', 'Temame'),
        'description'   => __('Choise your Font', 'Temame'),
        'choices'       => array(
            'font-normal'   => __('Default', 'Temame'),
            'font-light'   => __('Font Light', 'Temame'),
            'font-extralight'   => __('Font Extra Light', 'Temame'),
        )
    ));
 }
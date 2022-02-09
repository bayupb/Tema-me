<?php 

/**
 * 
 *  custom colors Heading
 */

 add_action('customize_register', 'temame_custom_colors_heading');

 function temame_custom_colors_heading($wp_customize){
     $wp_customize->add_section('temame_edit_custom_colors_heading',array(
         'capability'       => 'edit_theme_options',
         'priority'         => 3,
         'title'            => __('Colors Heading', 'Temame')
     ));

    // Font Bold Footer
    $wp_customize->add_setting('temame_select_custom_colors_heading',array(
        'capability'    => 'edit_theme_options',
        'default'       => 'bg-gray-900',
        'transport'     => 'refresh',
        'sanitize_callback'=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_select_custom_colors_heading',array(
        'type'          => 'select',
        'section'       => 'temame_edit_custom_colors_heading',
        'settings'      => 'temame_select_custom_colors_heading',
        'label'         => __('Custom Colors Heading', 'Temame'),
        'description'   => __('Choise your Font', 'Temame'),
        'choices'       => array(
            'bg-gray-900'   => __('Default', 'Temame'),
            'bg-black'   => __('Background Black', 'Temame'),
        )
    ));
 }
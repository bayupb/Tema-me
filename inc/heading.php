<?php

/**
 * custom heading text
*/

add_action( 'customize_register' , 'temame_heading_register_theme_customizer' );

function temame_heading_register_theme_customizer($wp_customize){
    $wp_customize->add_section('temame_edit_heading', array(
        'capability'    => 'edit_theme_options',
        'priority'      => 2,
        'title'         => __('Meta Box Heading', 'Temame')
    ));

    // Heading Text
    $wp_customize->add_setting('temame_heading_text',array(
        'capability'        => 'edit_theme_options',
        'default'           => 'Design Theme Heading',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_heading_text', array(
        'type'          => 'text',
        'section'       => 'temame_edit_heading',
        'settings'      => 'temame_heading_text',
        'label'         => __('Heading Text 1', 'Temame'),
        'description'   => __('Tambahkan Heading Text Disini', 'Temame')
    ));

    // Text Font Heading
    $wp_customize->add_setting('temame_select_heading_text',array(
        'capability'    => 'edit_theme_options',
        'default'       => 'text-5xl',
        'transport'     => 'refresh',
        'sanitize_callback'=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_select_heading_text',array(
        'type'          => 'select',
        'section'       => 'temame_edit_heading',
        'settings'      => 'temame_select_heading_text',
        'label'         => __('Heading Text Size', 'Temame'),
        'description'   => __('Pilih Text Font Size', 'Temame'),
        'choices'       => array(
            'default'   => __('Default', 'Temame'),
            'text-4xl'   => __('Text 4xl', 'Temame'),
            'text-3xl'   => __('Text 3xl', 'Temame'),
            'text-2xl'   => __('Text 2xl', 'Temame'),
        )
    ));

    // Font Bold Heading
    $wp_customize->add_setting('temame_select_heading_font',array(
        'capability'    => 'edit_theme_options',
        'default'       => 'font-bold',
        'transport'     => 'refresh',
        'sanitize_callback'=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_select_heading_font',array(
        'type'          => 'select',
        'section'       => 'temame_edit_heading',
        'settings'      => 'temame_select_heading_font',
        'label'         => __('Heading Font', 'Temame'),
        'description'   => __('Pilih Font', 'Temame'),
        'choices'       => array(
            'font-bold'   => __('Default', 'Temame'),
            'font-semibold'   => __('Font SemiBold', 'Temame'),
            'font-medium'   => __('Font Medium', 'Temame'),
        )
    ));

    // Deskripsi Text
    $wp_customize->add_setting('temame_description_text',array(
        'capability'        => 'edit_theme_options',
        'default'           => 'Design Theme Heading',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_description_text', array(
        'type'          => 'text',
        'section'       => 'temame_edit_heading',
        'settings'      => 'temame_description_text',
        'label'         => __('Description Text 1', 'Temame'),
        'description'   => __('Tambahkan Description Text Disini', 'Temame')
    ));

    // Text Font Description
    $wp_customize->add_setting('temame_select_description_text',array(
        'capability'    => 'edit_theme_options',
        'default'       => 'text-xl',
        'transport'     => 'refresh',
        'sanitize_callback'=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_select_description_text',array(
        'type'          => 'select',
        'section'       => 'temame_edit_heading',
        'settings'      => 'temame_select_description_text',
        'label'         => __('Description Text Size', 'Temame'),
        'description'   => __('Choice your font size', 'Temame'),
        'choices'       => array(
            'text-xl'   => __('Default', 'Temame'),
            'text-base'   => __('Text Base', 'Temame'),
            'text-sm'   => __('Text Sm', 'Temame'),
        )
    ));

    // Font Bold Description
    $wp_customize->add_setting('temame_select_description_font',array(
        'capability'    => 'edit_theme_options',
        'default'       => 'font-normal',
        'transport'     => 'refresh',
        'sanitize_callback'=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_select_description_font',array(
        'type'          => 'select',
        'section'       => 'temame_edit_heading',
        'settings'      => 'temame_select_description_font',
        'label'         => __('Description Font', 'Temame'),
        'description'   => __('Choise your Font', 'Temame'),
        'choices'       => array(
            'font-normal'   => __('Default', 'Temame'),
            'font-light'   => __('Font Light', 'Temame'),
            'font-extralight'   => __('Font Extra Light', 'Temame'),
        )
    ));

    // Number Text
    $wp_customize->add_setting('temame_number_text',array(
        'capability'        => 'edit_theme_options',
        'default'           => 'Design Theme Heading',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('temame_number_text', array(
        'type'          => 'text',
        'section'       => 'temame_edit_heading',
        'settings'      => 'temame_number_text',
        'label'         => __('Number Phone 1', 'Temame'),
        'description'   => __('Tambahkan Number Phone Text Disini', 'Temame')
    ));
}
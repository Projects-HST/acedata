<?php

/*
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
*         THEME CUSTOMIZER
* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
*/

function blackgold_customize_register( $wp_customize ) {
    // Add Post Message Transport to existing
    // WordPress settings
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
    $wp_customize->get_control( 
        $wp_customize->get_setting( 'background_color' )->id
    )->priority = '99';
    
    // Setting the Header Text 
    $wp_customize->add_setting( 'header_title', array(
        'default' => __( 'Sam Powell', 'black-gold' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'header_title', array(
        'type' => 'text',
        'label' => __( 'Set the Header Text', 'black-gold' ),
        'priority' => 10,
        'section' => 'title_tagline',
    ) );

    // Setting the Header Text Shadow Color 
    $wp_customize->add_setting( 'header_title_shadow_color', array(
        'default' => '#151e1f',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_title_shadow_color', array( 
        'label' => __( 'Header Text Shadow Color', 'black-gold' ),
        'priority' => 10,
        'section' => 'colors',
    ) ) );

    // Setting the Site Title Color 
    $wp_customize->add_setting( 'site_title_color', array(
        'default' => '#c9bab0',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_color', array( 
        'label' => __( 'Site Title Color', 'black-gold' ),
        'priority' => 1,
        'section' => 'colors',
    ) ) );

    // Setting the Header Box Color 
    $wp_customize->add_setting( 'header_box_color', array(
        'default' => '#151e1f',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_box_color', array( 
        'label' => __( 'Header Box Color', 'black-gold' ),
        'priority' => 9,
        'section' => 'colors',
    ) ) );

    // Toggling the Header Box
    $wp_customize->add_setting( 'header_box_visible', array(
        'default' => 'true',
        'sanitize_callback' => 'blackgold_sanitize_option',
    ) );

    $wp_customize->add_control( 'header_box_visible', array(
        'type' => 'checkbox',
        'label' => __( 'Display Header Box', 'black-gold' ),
        'priority' => 11,
        'section' => 'header_image',
    ) );

    // Toggle between a Left Sidebar and Right Sidebar
    $wp_customize->add_setting( 'home_sidebar_position', array(
        'default' => 0,
        'sanitize_callback' => 'blackgold_sanitize_select'
    ) );

    $wp_customize->add_control( 'home_sidebar_position', array(
        'type' => 'select',
        'choices' => array( 
            __( 'Left', 'black-gold' ),
            __( 'Right', 'black-gold' ),
        ),
        'label' => __( 'Position of Home Sidebar', 'black-gold' ),
        'priority' => 11,
        'section' => 'sidebar_layout',
    ) );

    $wp_customize->add_section( 'sidebar_layout', array(
        'title' => __( 'Home Sidebar Layout', 'black-gold' ),
        'description' => __( 'Controls the positioning of the main sidebar', 'black-gold' ),
        'priority'=> 101,
        'capability' => 'edit_theme_options',
    ) );
}

?>
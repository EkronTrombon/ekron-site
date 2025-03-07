<?php
function ekron_customize_register($wp_customize)
{
    $wp_customize->add_panel('mytheme_settings_panel', array(
        'title' => __('Theme Settings', 'mytheme'),
        'priority' => 10,
    ));
    $wp_customize->add_section('mytheme_header_section', array(
        'title' => __('Global Settings', 'mytheme'),
        'priority' => 20,
        'panel' => 'mytheme_settings_panel', // Optional: Add to a panel
    ));
    $wp_customize->add_setting('header_text', array(
        'default' => __('Welcome!', 'mytheme'),
        'transport' => 'refresh', // or 'postMessage' for live preview
    ));
    $wp_customize->add_control('header_text', array(
        'label' => __('Header Text', 'mytheme'),
        'section' => 'mytheme_header_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('header_background_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background_color', array(
        'label' => __('Header Background Color', 'mytheme'),
        'section' => 'mytheme_header_section',
    )));
    $wp_customize->add_setting('show_header_search', array(
        'default' => true,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('show_header_search', array(
        'label' => __('Show Search in Header', 'mytheme'),
        'section' => 'mytheme_header_section',
        'type' => 'checkbox',
    ));
    $wp_customize->add_setting('header_image', array(
        'default' => '',
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
        'label' => __('Header Image', 'mytheme'),
        'section' => 'mytheme_header_section',
    )));
}
add_action('customize_register', 'ekron_customize_register');

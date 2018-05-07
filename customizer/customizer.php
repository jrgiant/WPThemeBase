<?php
if (!function_exists('aata_customize_register')): //allow for easy child theme override
    function aata_customize_register($wp_customize)
{
        //Create Header Section
        $wp_customize->add_section('Header', array(
            'title' => __('Header', 'allaboutthemangles'),
            'priority' => 130,
        ) //./array
        ); //./ Add Section

        //Create Header Section

        //Create Header Top Bar Section
        $wp_customize->add_setting('show_top_bar', array(
            "default" => 'show',
            'sanitize_callback' => 'allaboutthemangles_sanitize_show_top_bar',
            'transport' => 'postMessage',

        ));
        $wp_customize->add_control('show_top_bar', array(
            'label' => __("Top Bar", "allaboutthemangles"),
            'section' => 'Header',
            'type' => 'radio',
            'description' => 'Use the top bar to bring attention to your business',
            'choices' => array(
                'show' => __('Display the top bar', "allaboutthemangles"),
                'hide' => __('Hide the top bar', "allaboutthemangles"),
            ),
            'active_callback' => 'allaboutthemangles_is_active',
        ));
        //TODO: add Top bar right
        //TODO: add Top bar Left

        //TODO: add main image 
        //TODO: Add video support

        //TODO: Add Text Support
        
        
    }
endif;
add_action('customize_register', 'aata_customize_register');
/**
 * Sanatize the show top bar option
 * @param string $input Show Top Bar
 */
function allaboutthemangles_sanitize_show_top_bar($input)
{
    $valid = array(
        'show' => __('Display the top bar', "allaboutthemangles"),
        'hide' => __('Hide the top bar', "allaboutthemangles"),
    );

    if (array_key_exists($input, $valid)) {
        return $input;
    }

    return '';

}
/**
 * Return whether All about them angles will work on this page
 */
function allaboutthemangles_is_active()
{
    return true;
}

/**
 * Add JS handlers
 */
function allaboutthemangles_customize_preview_js()
{
    wp_enqueue_script('allaboutthemangles-customize-preview', get_theme_file_uri('/customizer/customizer-preview.js'), array('customize-preview', 'aata_core_scripts'), '0.1.1', true);
}
add_action('customize_preview_init', 'allaboutthemangles_customize_preview_js');

/**
 * Load dynamic logic for the customizer controls area.
 */
// function allaboutthemangles_panels_js()
// {
//     wp_enqueue_script('allaboutthemangles-customize-controls', get_theme_file_uri('/customizer/customize-controls.js'), array(), '0.1.0', true);
// }
// add_action('customize_controls_enqueue_scripts', 'allaboutthemangles_panels_js');

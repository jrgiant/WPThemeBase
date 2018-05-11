<?php
if (!function_exists('aata_customize_register')): //allow for easy child theme override
    /**
     * Add customizer support for top bar, primary image, etc.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */

    function aata_customize_register($wp_customize)
{

        /**
         * Custome Header Section
         */
        $wp_customize->add_section('Header', array(
            'title' => __('Header', 'allaboutthemangles'),
            'priority' => 130,
        ) //./array
        ); //./ Add Section

        /**
         * Top Bar
         */
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
        /**
         * Top bar - right
         */
        $wp_customize->add_setting('top_bar_left', array(
            "default" => 'Enter informaiton about your business',
            'sanitize_callback' => 'allaboutthemangles_sanitize_html',
            'transport' => 'refresh',

        ));
        $wp_customize->add_control('top_bar_left', array(
            'label' => __("Top Bar Right", "allaboutthemangles"),
            'section' => 'Header',
            'type' => 'text',
            'description' => 'Enter informaiton about your business. HTML accepted',
            'active_callback' => 'allaboutthemangles_is_active',
        ));
        $wp_customize->selective_refresh->add_partial('top_bar_right', array(
            'selector'            => '.top-bar div.left',
			'render_callback'     => 'allaboutthemangles_topbar',
			'container_inclusive' => true,
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
function allaboutthemangles_sanitize_html($input){
    return wp_kses_post( $input );
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
function allaboutthemangles_panels_js()
{
    wp_enqueue_script('allaboutthemangles-customizer-controls', get_theme_file_uri('/customizer/customizer-controls.js'), array(), '0.1.2', true);
}
add_action('customize_controls_enqueue_scripts', 'allaboutthemangles_panels_js');

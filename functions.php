<?php
if (!function_exists('aata_style')){
    function aata_style(){
        wp_enqueue_style( 'aata_core_styles', get_stylesheet_uri(), array(), '0.0.8', 'screen' );
    }
}
add_action( 'wp_enqueue_scripts', 'aata_style');

if (!function_exists('aata_scripts')) {
    function aata_scripts()
    {
        wp_enqueue_script('aata_core_scripts', trailingslashit(get_template_directory_uri())."assets/js/allaboutthemangles.js" , array(), '0.0.3', false);
    }
}
add_action('wp_enqueue_scripts', 'aata_scripts');

require get_parent_theme_file_path( 'customizer/customizer.php' );
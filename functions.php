<?php
if (!function_exists('aata_style')){
    function aata_style(){
        wp_enqueue_style( 'core', get_stylesheet_uri(), array(), '0.0.2', 'screen' );
    }
}
add_action( 'wp_enqueue_scripts', 'aata_style');

require get_parent_theme_file_path( 'customizer/customizer.php' );
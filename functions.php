<?php
if (!function_exists('allaboutthemangles_style')){
    function allaboutthemangles_style(){
        wp_enqueue_style( 'core', get_stylesheet_uri(), array(), '0.0.1', 'screen' );
    }
}
add_action( 'wp_enqueue_scripts', 'allaboutthemangles_style');
<?php
if (!function_exists(aata_customize_register)): //allow for easy child theme override
function aata_customize_register($wp_customize){
    
}
endif;
add_action( 'customize_register', 'aata_customize_register');
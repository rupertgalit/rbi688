<?php
/**
 * Add a Sub Nav Toggle to the Expanded Menu and Mobile Menu.
 *
 * @param stdClass $args An array of arguments.
 * @param string   $item Menu item.
 * @param int      $depth Depth of the current menu item.
 *
 * @return stdClass $args An object of wp_nav_menu() arguments.
 */
function construction_light_add_sub_toggles_to_main_menu( $args, $item, $depth ) {

    $args->after  = '';
        if( isset($args->show_toggles) && $args->show_toggles){
            // Add a toggle to items with children.
            if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {

                $toggle_target_string = '.menu-modal .menu-item-' . $item->ID . ' > .sub-menu';
                // Add the sub menu toggle.
                $args->after .= '<button class="toggle sub-menu-toggle" data-toggle-target="' . $toggle_target_string . '" data-toggle-type="slidetoggle" aria-expanded="false"><i class="fas fa-angle-down"></i></button>';
            }
        }

    return $args;
}
add_filter( 'nav_menu_item_args', 'construction_light_add_sub_toggles_to_main_menu', 10, 3 );


/**
 * enqueue script and style
 */
if( !function_exists('construction_light_menu_navigation_script')){

    function construction_light_menu_navigation_script(){

        wp_enqueue_script( 'sparkletheme-navigation', get_template_directory_uri() . '/inc/mobile-menu/navigation.js', array(),  true );
        wp_enqueue_style( 'sparklethemes-mobile-menu', get_template_directory_uri() . '/inc/mobile-menu/mobile-menu.css', false, true );
    }
    add_action( 'wp_enqueue_scripts', 'construction_light_menu_navigation_script' );
}

/**
 * mobile menu toggle button
 *
 * @return void
 */
function construction_light_mobile_menu_toggle_button(){
    
    $html = '<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".header-mobile-menu"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                <span class="toggle-inner">
                    <span class="toggle-icon"><i class="fas fa-bars"></i></span>
                    <span class="toggle-text">'.esc_html__( 'Menu', 'construction-light' ).'</span>
                </span>
            </button>';
    echo force_balance_tags($html);
}
add_action('construction_light_menu_toggle', 'construction_light_mobile_menu_toggle_button', 10);


if( !function_exists('construction_light_mobile_menu_register')){

    function construction_light_mobile_menu_register(){
        
        get_template_part('inc/mobile-menu/mobile-menu');
    }
    add_action('wp_footer', 'construction_light_mobile_menu_register');
}
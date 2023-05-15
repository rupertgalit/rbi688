<?php
/**
 * Describe child theme functions
 *
 * @package Construction Light
 * @subpackage Construction Bell
 * 
 */

 if ( ! function_exists( 'constructionbell_setup' ) ) :

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on construction Bell, use a find and replace
     * to change 'constructionbell' to the name of your theme in all the template files.
    */
    load_theme_textdomain( 'constructionbell', get_template_directory() . '/languages' );

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function constructionbell_setup() {
        
        $constructionbell_theme_info = wp_get_theme();
        $GLOBALS['constructionbell_version'] = $constructionbell_theme_info->get( 'Version' );
    }
endif;
add_action( 'after_setup_theme', 'constructionbell_setup' );


/**
 * Enqueue child theme styles and scripts
*/
function constructionbell_scripts() {
    
    global $constructionbell_version;

    wp_dequeue_style( 'construction-light-style' );
    
    wp_enqueue_style( 'constructionbell-parent-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'style.css', array(), esc_attr( $constructionbell_version ) );
    
    wp_enqueue_style( 'constructionbell-style', get_stylesheet_uri(), esc_attr( $constructionbell_version ) );

    wp_add_inline_style('constructionbell-style', constructionbell_dymanic_styles());

    wp_enqueue_style( 'constructionbell-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
    
}
add_action( 'wp_enqueue_scripts', 'constructionbell_scripts', 20 );


if ( ! function_exists( 'constructionbell_child_options' ) ) {

    function constructionbell_child_options( $wp_customize ) {

        $wp_customize->remove_control('construction_light_topheader_left');
        $wp_customize->remove_control('construction_light_topheader_right');
        $wp_customize->remove_control('construction_light_topheader_right');
        $wp_customize->remove_control('construction_light_address');
        $wp_customize->remove_control('construction_light_header_layout');
        $wp_customize->remove_control('construction_light_top_header_enable');
        $wp_customize->remove_control('construction_light_quick_info_hide_mobile');
        $wp_customize->remove_control('construction_light_top_header_hide_mobile');
        $wp_customize->remove_section('construction_light_header');
        

        //rename section
        $wp_customize->get_section('construction_light_top_header')->title = __("Quick Info", 'construction-bell');

    }
}
add_action( 'customize_register' , 'constructionbell_child_options', 11 );


function constructionbell_css_strip_whitespace($css) {
    $replace = array(
        "#/\*.*?\*/#s" => "", // Strip C style comments.
        "#\s\s+#" => " ", // Strip excess whitespace.
    );
    $search = array_keys($replace);
    $css = preg_replace($search, $replace, $css);

    $replace = array(
        ": " => ":",
        "; " => ";",
        " {" => "{",
        " }" => "}",
        ", " => ",",
        "{ " => "{",
        ";}" => "}", // Strip optional semicolons.
        ",\n" => ",", // Don't wrap multiple selectors.
        "\n}" => "}", // Don't wrap closing braces.
        "} " => "}\n", // Put each rule on it's own line.
    );
    $search = array_keys($replace);
    $css = str_replace($search, $replace, $css);

    return trim($css);
}

/**
 * Dynamic Style
 */
function constructionbell_dymanic_styles() {
    
    $services_bg = get_theme_mod('construction_light_service_image');
    $primary_color = get_theme_mod('construction_light_primary_color', '#ffc107');
 
    $customcss = "
 
        #cl_services{background-image: url(" . esc_url($services_bg) . "); background-size: cover; background-repeat: no-repeat;}

    ";
    if( $primary_color ){
        $customcss .= "
        .home .nav-classic .header-middle-inner,
        .home .site-branding{
            background-color: $primary_color;
        }
        .features-slider-1.banner-slider.owl-carousel .owl-nav button.owl-next, .features-slider-1.banner-slider.owl-carousel .owl-nav button.owl-prev{
            border-color: $primary_color;
        }
        ";
    }

    return constructionbell_css_strip_whitespace($customcss);
}
<?php 
// Enqueue stylesheets
function autocard_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css' );
    wp_enqueue_style( 'autocard-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'autocard_enqueue_styles' );

//  allow theme support 
function autocard_theme_support() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'autocard_theme_support' );

// append site name to the title 
function custom_wp_title($title, $separator) {
    if (is_feed()) {
        return $title;
    }
    
    $title .= get_bloginfo('name');
    
    return $title;
}
add_filter('wp_title', 'custom_wp_title', 10, 2);

// Load scripts
function load_scripts() {
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');



// register nav menu 
function my_theme_setup() {
    register_nav_menus( array(
        'primary-menu' => 'Primary Menu',
    ) );
}

add_action( 'after_setup_theme', 'my_theme_setup' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

?>

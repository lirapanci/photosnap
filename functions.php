<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
function photosnap_styles() {

    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/dist/output.css', array(), filemtime(get_template_directory() .'/dist/output.css'), 'all');
    wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(),'all');
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array(), filemtime(get_template_directory() .'/js/app.js'), 'all');
}
add_action( 'wp_enqueue_scripts', 'photosnap_styles' );

function photosnap_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'photosnap_theme_support');

function photosnap_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));

}
add_action( 'init', 'photosnap_menu' );
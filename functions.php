<?php
function my_theme_enqueue_styles() {
<<<<<<< HEAD
    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty twentyseventeen theme.
=======

    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty twentyseventeen theme.

>>>>>>> full-width
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
<<<<<<< HEAD
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
=======
>>>>>>> full-width
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
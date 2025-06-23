<?php

/**
 * Theme Setup: Registers theme support for features like title tag, thumbnails, and navigation menus.
 */
function sujit_custom_theme_setup() {
    // Add support for the title tag, letting WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails (featured images) on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'sujit-custom-theme'),
            'footer_menu' => __('Footer Menu', 'sujit-custom-theme'),
        )
    );
}
add_action('after_setup_theme', 'sujit_custom_theme_setup');

/**
 * Register Widget Areas: Defines the sidebars for the theme.
 */
function sujit_custom_theme_sidebars() {
    // Main sidebar widget area
    register_sidebar(array(
        'name'          => esc_html__('Main Sidebar', 'sujit-custom-theme'),
        'id'            => 'sidebar-main',
    ));
    // Recent posts widget area
    register_sidebar(array(
        'name'          => esc_html__('Recent Posts Area', 'sujit-custom-theme'),
        'id'            => 'recent-posts',
    ));
}
add_action('widgets_init', 'sujit_custom_theme_sidebars');

/**
 * Enqueue Scripts and Styles: Loads all theme assets.
 */
function sujit_custom_theme_enqueue_assets() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap', array(), null);

    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2');

    // Enqueue the main stylesheet (style.css)
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));

    // Enqueue your custom JavaScript file.
    // IMPORTANT: This line will cause an error if the file '/assets/js/scripts.js' does not exist.
    wp_enqueue_script(
        'custom-scripts',
        get_template_directory_uri() . '/assets/js/scripts.js',
        array('jquery'), // Add 'jquery' as a dependency if your script uses it
        filemtime(get_template_directory() . '/assets/js/scripts.js'),
        true // Load the script in the footer for better performance
    );
}
add_action('wp_enqueue_scripts', 'sujit_custom_theme_enqueue_assets');

// Note: It is a best practice to not include the closing PHP tag ?>    
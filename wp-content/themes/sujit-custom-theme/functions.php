<?php
// 🖼️ Theme Setup
function newspik_theme_setup() {
    // Add support for title tag and featured images
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'newspik_theme_setup');

// 🎨 Enqueue CSS and JS Files
function newspik_enqueue_assets() {
    // Main stylesheet (inside assets/css/)
    wp_enqueue_style('newspik-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'newspik_enqueue_assets');

// 📋 Register Navigation Menus
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu'),
            'footer_menu' => __('Footer Menu'),
        )
    );
}
add_action('after_setup_theme', 'mytheme_register_menus');

?>
<?php function theme_slug_enqueue_styles() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles' ); ?>
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

<?php
// This is an example. If you already have a functions.php, just add the function below.

/**
 * Enqueue scripts and styles.
 */
function my_custom_theme_scripts() {
    // Enqueue your main stylesheet
    wp_enqueue_style( 'my-custom-theme-style', get_stylesheet_uri() );

    // Enqueue your new custom JavaScript file
    wp_enqueue_script(
        'my-custom-theme-custom-scripts', // A unique name for the script
        get_template_directory_uri() . '/assets/js/custom-scripts.js', // Path to the file
        array(), // Dependencies (like jQuery, if needed)
        '1.0.0', // Version number
        true // Load in the footer (recommended for performance)
    );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_scripts' );

// Your other functions.php code can go here...
?>
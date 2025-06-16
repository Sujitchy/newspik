<?php
// 🖼️ Theme Setup
function newspik_theme_setup() {
    // Add support for title tag and featured images
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'newspik_theme_setup');

function my_custom_sidebars() {
    register_sidebar(array(
        'name' => "Sidebar Location",
        'id' => 'sidebar',
    ));

    register_sidebar(array(
        'name' => "Recent Posts",
        'id' => 'recent-posts',
    ));

    // register_sidebar(array(
    //     'name'=>"Inactive widgets",
    //     'id'=>'Inactive-widgets'
    // ))
}
add_action('widgets_init', 'my_custom_sidebars');


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

<?php

/**
 * Theme scripts र styles लाई enqueue गर्ने function.
 * WordPress ले यसलाई `wp_enqueue_scripts` action मार्फत चलाउँछ।
 */
function my_custom_theme_enqueue_assets() {

    // तपाईंको मुख्य CSS फाइल (style.css) लाई enqueue गर्ने
    wp_enqueue_style(
        'my-theme-main-style', // एउटा यूनिक नाम
        get_stylesheet_uri()   // style.css को path पत्ता लगाउँछ
    );

    // तपाईंको custom JavaScript फाइल (scripts.js) लाई enqueue गर्ने
    wp_enqueue_script(
        'my-theme-custom-script',                                           // १. स्क्रिप्टको लागि एउटा यूनिक नाम (handle)
        get_template_directory_uri() . '/assets/js/scripts.js',             // २. तपाईंको scripts.js फाइलको सही path
        array(),                                                            // ३. Dependencies (जस्तै jQuery को लागि array('jquery'))
        filemtime( get_template_directory() . '/assets/js/scripts.js' ),    // ४. Version number (filemtime ले cache को समस्या हटाउँछ)
        true                                                                // ५. `true` ले script लाई footer मा load गर्छ (राम्रो performance को लागि)
    );
// ===== ADD THESE LINES FOR GOOGLE FONT =====
    wp_enqueue_style(
        'my-theme-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap',
        array(),
        null
    );
}

// यो action hook ले WordPress लाई तपाईंको function चलाउन भन्छ
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue_assets' );

// ... तपाईंको functions.php को अन्य कोड ...


?>
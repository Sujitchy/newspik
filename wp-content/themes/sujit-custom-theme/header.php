<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); // It's crucial to add this for plugins and theme functions ?>
    <title>NEWSPIK</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<body <?php body_class(); ?>>

  <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?> Logo" class="header-logo">
                <p><?php  ?></p>
            </a>
            <div class="site-text-wrapper">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php echo do_shortcode('[ndu_today_date]');?>
            </div>
        </div>
<header class="site-header">
    <div class="header-container">
        <nav class="main-navigation">
            
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?> Logo" class="nav-logo">
            </a> 
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header_menu',
                'container'      => false,
                'menu_class'     => 'header-menu-list',
            ) );
            ?>
        </nav>
    </div>
</header>
<script src='http://yourwebsite.com/wp-content/themes/your-theme-folder/assets/js/scripts.js?ver=1718261821' id='my-theme-custom-script-js'></script>
</body>
</html>
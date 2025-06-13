

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <title>NEWSPIK</title>
</head>
<body>

<header>
    <div class="site-branding">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?> Logo" class="header-logo">
        </a>
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <p class="site-description">तपाईंको समाचारको नयाँ स्रोत</p>
    </div>

    <nav>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header_menu', // Corrected this from our first conversation
        ) );
        ?>
    </nav>
</header>

</body>
</html>

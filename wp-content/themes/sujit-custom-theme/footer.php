<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<body>

<footer>
    <div class="footer-menu">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_menu',
                'menu_class' => 'footer-menu-list'
            ));
        ?>
    </div>

    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. सबै अधिकार सुरक्षित।</p>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
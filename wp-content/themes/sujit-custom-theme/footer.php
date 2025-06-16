<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
</head>
<style>
    /*
 * Component: Footer Styles
 * Theme: Newspik
 */

/* ================================================
   Footer Section
   ================================================ */
footer {
    background-color: #1c2833;
    color: #bdc3c7;
    text-align: center;
    padding: 30px 20px;
    margin-top: auto; /* Pushes footer to the bottom of the page */
    font-size: 0.9em;
}

.footer-menu {
    margin-bottom: 15px;
}

ul.footer-menu-list {
    list-style: none;
    padding: 0;
}

ul.footer-menu-list li {
    display: inline-block;
    margin: 0 15px;
}

ul.footer-menu-list a {
    color: #ecf0f1;
    text-decoration: none;
    font-weight: bold;
}

ul.footer-menu-list a:hover {
    color: #e74c3c; /* Accent color on hover */
}

footer p {
    margin-top: 20px;
}
</style>
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
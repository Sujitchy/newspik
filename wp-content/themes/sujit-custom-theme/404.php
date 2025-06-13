<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @since 1.0
 */

get_header();
?>

    <main id="primary" class="site-main-404">
        <section class="error-404-content">

            <div class="error-icon">
                 <span class="icon-text">:(</span>
            </div>

            <h1 class="error-title">
                <?php esc_html_e( '४०४', 'my-custom-theme' ); ?>
            </h1>
            <h2 class="error-subtitle">
                <?php esc_html_e( 'पृष्ठ फेला परेन', 'my-custom-theme' ); ?>
            </h2>

            <p class="error-message">
                <?php esc_html_e( 'माफ गर्नुहोस्, तपाईंले खोज्नुभएको पृष्ठ फेला पार्न सकिएन। यो सारिएको, मेटाइएको वा कहिल्यै अस्तित्वमा नभएको हुन सक्छ।', 'my-custom-theme' ); ?>
            </p>
            <p class="error-suggestion">
                 <?php esc_html_e( 'तपाईं गृहपृष्ठमा फर्कन सक्नुहुन्छ वा हाम्रो साइटमा सामग्री फेला पार्न तल खोजी गर्न सक्नुहुन्छ।', 'my-custom-theme' ); ?>
            </p>

            <div class="error-actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button-primary-404">
                    <?php esc_html_e( 'गृहपृष्ठमा जानुहोस्', 'my-custom-theme' ); ?>
                </a>
            </div>

            <div class="error-search">
                <p><?php esc_html_e( 'वा केहि खोज्ने प्रयास गर्नुहोस्:', 'my-custom-theme'); ?></p>
                <?php get_search_form(); ?>
            </div>

        </section></main>
        <?php
get_footer(); ?>

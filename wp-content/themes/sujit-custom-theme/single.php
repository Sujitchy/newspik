<?php get_header(); ?>

<main>
    <article class="post-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post-meta">
                <span>प्रकाशित मिति: <?php echo get_the_date(); ?></span> |
                <span>लेखक: <?php the_author_posts_link(); ?></span> |
                <span>श्रेणी: <?php the_category(', '); ?></span>
            </div>

            <h1 class="entry-title"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); // Use a standard image size ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <div class="post-tags">
                <?php the_tags('<strong>ट्यागहरू:</strong> ', ', ', ''); ?>
            </div>

        <?php endwhile; else : ?>
            <p>माफ गर्नुहोस्, यो पोस्ट भेटिएन।</p>
        <?php endif; ?>
    </article>

    <aside class="sidebar">
        <h3>सम्बन्धित समाचार</h3>
        <div class="related-news-grid">
            <?php
            $related_args = array(
                'category__in'   => wp_get_post_categories(get_the_ID()),
                'posts_per_page' => 6,
                'post__not_in'   => array(get_the_ID()),
            );
            $related_query = new WP_Query($related_args);

            if ($related_query->have_posts()) :
                while ($related_query->have_posts()) : $related_query->the_post(); ?>
                    <div class="related-news-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                            <h4><?php the_title(); ?></h4>
                        </a>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </aside>
</main>

<?php get_footer(); ?>
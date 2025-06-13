<?php get_header(); ?>

<main>
    <article class="featured-article">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h4><a href="<?php the_permalink(); ?>">पुरा समाचार:</a></h4>
            <h1 style=" font-size: 50px; font-weight: bold;  line-height: 1.2;"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <img style="max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 20px;" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" />
            <?php endif; ?>

            <p style="color: #777; font-size: 0.9em;">
                प्रकाशित मिति: <?php echo get_the_date(); ?> |
                लेखक: <?php the_author(); ?> |
                श्रेणी: <?php the_category(', '); ?>
            </p>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <!-- Tags -->
            <p style="margin-top: 20px;">
                <strong>ट्यागहरू:</strong> <?php the_tags('', ', ', ''); ?>
            </p>

        <?php endwhile; else : ?>
            <p>माफ गर्नुहोस्, यो पोस्ट भेटिएन।</p>
        <?php endif; ?>
    </article>

   <aside class="sidebar">
    <h3>सम्बन्धित समाचार</h3>
    <div class="related-news-grid" style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 15px;
        margin-top: 20px; /* Add some top margin to separate from heading */
    ">
        <?php
        $related = new WP_Query(array(
            'category__in' => wp_get_post_categories(get_the_ID()),
            'posts_per_page' => 6, // 6 posts work well for a grid
            'post__not_in' => array(get_the_ID()),
            'post_type' => 'post', // Ensure it's posts
            'has_post_thumbnail' => true, // Only show posts with thumbnails
        ));

        if ($related->have_posts()) :
            while ($related->have_posts()) : $related->the_post(); ?>
                <div class="related-news-item" style="
                    background-color: #fff;
                    border-radius: 8px;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                    overflow: hidden;
                    text-align: center; /* Center the title */
                ">
                    <a href="<?php the_permalink(); ?>" style="
                        display: block;
                        text-decoration: none;
                        color: inherit;
                    ">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" style="
                                width: 100%;
                                height: auto;
                                display: block; /* Remove extra space below image */
                                border-radius: 8px 8px 0 0;
                            " />
                        <?php else : ?>
                            <img src="https://via.placeholder.com/150" alt="No Image" style="
                                width: 100%;
                                height: auto;
                                display: block;
                                border-radius: 8px 8px 0 0;
                                background-color: #f0f0f0; /* Placeholder background */
                            " />
                        <?php endif; ?>
                        <h4 style="
                            font-size: 1em;
                            margin: 10px;
                            color: #333; /* Darker color for title */
                            line-height: 1.3;
                        "><?php the_title(); ?></h4>
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

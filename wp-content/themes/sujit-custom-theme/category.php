<?php get_header(); ?>

<main>
    <section class="post-container">
        <h1 class="page-title"><?php single_cat_title(); ?></h1>

        <?php if (have_posts()) : ?>
            <ul class="news-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <li class="news-item">
                        <a href="<?php the_permalink(); ?>" class="news-item-link">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title_attribute(); ?>" class="news-item-image" />
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="Placeholder Image" class="news-item-image" />
                            <?php endif; ?>

                            <div class="news-item-overlay">
                                <div class="news-item-content">
                                    <h4 class="news-item-title"><?php the_title(); ?></h4>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>

            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('« पछाडि', 'sujit-custom-theme'),
                    'next_text' => __('अगाडि »', 'sujit-custom-theme'),
                ));
                ?>
            </div>
        <?php else : ?>
            <p>यस श्रेणीमा कुनै समाचार प्रकाशित गरिएको छैन।</p>
        <?php endif; ?>
    </section>

    <!-- <aside class="sidebar">
        <?php dynamic_sidebar('sidebar-main'); // Use the widget area for the sidebar ?>
    </aside> -->
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main>
    <section class="post-container">
        <h3>
            <?php single_cat_title(); ?> 
        </h3>
<?php if (have_posts()) : ?>
    <ul class="news-grid">
        <?php while (have_posts()) : the_post(); ?>
            <li class="news-item">
                <a href="<?php the_permalink(); ?>" class="news-item-link">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title_attribute(); ?>" class="news-item-image" />
                    <?php else : ?>
                        <?php // Optional: Add a placeholder image if a post doesn't have a thumbnail ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="Placeholder Image" class="news-item-image" />
                    <?php endif; ?>

                    <div class="news-item-overlay">
                        <div class="news-item-content">
                            <h4 class="news-item-title">
                                <?php the_title(); ?>
                            </h4>
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
            'prev_text' => __('« पछाडि'),
            'next_text' => __('अगाडि »'),
        ));
        ?>
    </div>

<?php else : ?>
    <p>यस श्रेणीमा कुनै समाचार प्रकाशित गरिएको छैन।</p>
<?php endif; ?>
    </section>

    <aside class="sidebar">
        <h3>लोकप्रिय</h3>
        <ul>
            <?php
            $popular = new WP_Query(array(
                'posts_per_page' => 5,
                'meta_key' => 'post_views_count', // तपाईंले custom view counter प्रयोग गरिरहनुभएको छ भने
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            ));
            if ($popular->have_posts()) :
                while ($popular->have_posts()) : $popular->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>
        </ul>
    </aside>

    
    
</main>

<?php get_footer(); ?>

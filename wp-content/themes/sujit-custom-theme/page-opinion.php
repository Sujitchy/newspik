<?php get_header(); ?>

<main>
    <section class="latest-news">
        <h3>
            <?php single_cat_title(); ?> अन्तर्गतका विचार र समाचारहरू
        </h3>

        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" style="max-width:100%; height:auto; margin:10px 0;" />
                        <?php endif; ?>

                        <p>
                            <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                            <a href="<?php the_permalink(); ?>">पूरा पढ्नुहोस्</a>
                        </p>
                    </li>
                <?php endwhile; ?>
            </ul>

            <!-- Pagination -->
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
            <p>यस श्रेणीमा कुनै विचार प्रकाशित गरिएको छैन।</p>
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

<?php
/*
Template Name: Opinion Template
*/
get_header();
?>

<main>
    <section class="latest-news">
        <h3><?php the_title(); ?></h3>

        <?php
        $args = array(
            'category_name' => 'opinion', // "opinion" नामको category को पोस्टहरू
            'posts_per_page' => 6
        );
        $opinion_query = new WP_Query($args);
        ?>

        <?php if ($opinion_query->have_posts()) : ?>
            <ul>
                <?php while ($opinion_query->have_posts()) : $opinion_query->the_post(); ?>
                    <li>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" style="max-width:100%; height:auto;" />
                        <?php endif; ?>

                        <p><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
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
                    'prev_text' => __('« पुरानो'),
                    'next_text' => __('नयाँ »'),
                ));
                ?>
            </div>

        <?php else : ?>
            <p>हाल कुनै पनि विचार लेखहरू उपलब्ध छैनन्।</p>
        <?php endif;
        wp_reset_postdata();
        ?>
    </section>

    <aside class="sidebar">
        <h3>लोकप्रिय विचारहरू</h3>
        <ul>
            <?php
            $popular_opinions = new WP_Query(array(
                'category_name' => 'opinion',
                'meta_key' => 'post_views_count', // यदि तपाईं view count प्रयोग गरिरहनु भएको छ भने
                'orderby' => 'meta_value_num',
                'posts_per_page' => 5
            ));
            if ($popular_opinions->have_posts()) :
                while ($popular_opinions->have_posts()) : $popular_opinions->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>
        </ul>
    </aside>
</main>

<?php get_footer(); ?>

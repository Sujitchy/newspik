<?php 
get_header();
the_post();
?>
<main>


    <section class="latest-news">
        <h3>पछिल्ला समाचारहरू</h3>
        <ul>
            <?php the_content();
            the_post_thumbnail(array(50,50));
             
            ?>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <li>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile;
            else :
                echo '<li>कुनै समाचार फेला परेन।</li>';
            endif;
            ?>
        </ul>
    </section>

    <aside class="sidebar">
        <h3>लोकप्रिय</h3>
        <ul>
        
        </ul>
    </aside>

    
      <aside class="sidebar">
        <h3>लोकप्रिय</h3>
        <ul>
        
        </ul>
    </aside>
</main>





<?php get_footer(); ?>
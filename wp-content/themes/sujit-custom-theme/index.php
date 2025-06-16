<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js">
</head>
<body>
    <?php get_header(); ?>

<main>
    <article class="featured-article">
         <h1 class="news-item-title">
                                  <a href=""><?php the_title(); ?></a>  
                                </h1>
                                 <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium_large'); // Use a slightly larger image size if available ?>" alt="<?php the_title_attribute(); ?>" class="news-item-image" />
                        <?php endif; ?> 
    </article>

    <!-- <article class="featured-article">
        <h1><a href="#">भारतीय अभिनेत्री तथा नृत्याङ्गना नोरा फतेहीको काठमाण्डौमा प्रस्तुति</a></h1>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFYqoKTu_o3Zns2yExbst2Co84Gpc2Q1RJbA&s" alt="मुख्य समाचारको तस्बिर" width="600">
        <p>भारतीय चलचित्र उद्योगकी चर्चित अभिनेत्री तथा नृत्याङ्गना नोरा फतेहीले काठमाण्डौमा एक भव्य सांगीतिक प्रस्तुति दिएकी छिन्। उनको प्रस्तुति हेर्न हजारौँ दर्शकहरूको उपस्थिति... <a href="#">पूरा पढ्नुहोस्</a></p>
    </article> -->
    <section class="latest-news">
    <h3>समाचारहरू</h3>

    <?php if (have_posts()) : ?>
        <ul class="news-grid">
            <?php while (have_posts()) : the_post(); ?>
                <li class="news-item">
                    <a href="<?php the_permalink(); ?>" class="news-item-link">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium_large'); // Use a slightly larger image size if available ?>" alt="<?php the_title_attribute(); ?>" class="news-item-image" />
                        <?php endif; ?>
                        <div class="news-item-excerpt">
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                </div>

                        <div class="news-item-overlay">
                            <div class="news-item-content">
                                <h4 class="news-item-title">
                                    <?php the_title(); ?>
                                </h4>
                                <!-- <div class="news-item-excerpt">
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>कुनै समाचार फेला परेन।</p>
    <?php endif; ?>
</section>


    <aside class="sidebar">
        <h3>समाचारहरु</h3>
    <?php dynamic_sidebar('sidebar'); ?>
        </aside>



<!----- Test----->
<div class="news-section">
    <div class="news-header">
        <h2 class="section-title">समाचार</h2>
        <a href="#" class="view-all">सबै»</a>
    </div>

    <div class="news-cards-container">
        <div class="news-card">
            <img src="https://img.freepik.com/free-vector/hand-drawn-diversity-concept-background_23-2148176053.jpg" alt="Prime Minister's meeting">
            <div class="card-content">
                <p class="timestamp">© २०८२ जेठ २५ १३:१०</p>
                <h3 class="headline">भूमिसम्बन्धि विधेयक चाँडै पारित हुन्छ : प्रधानमन्त्री</h3>
            </div>
        </div>

        <div class="news-card">
            <img src="https://img.freepik.com/free-vector/hand-drawn-diversity-concept-background_23-2148176053.jpg" alt="Road closure notice">
            <div class="card-content">
                <p class="timestamp">© २०८२ जेठ २३ १३:५५</p>
                <h3 class="headline">राप्ती–कपकोट सडक खण्ड आजदेखि १ दिनसम्म दैनिक ६ घण्टा बन्द</h3>
            </div>
        </div>
    </div>
</div>


<!-------test---->


</main>

<?php get_footer(); ?>

</body>
</html>
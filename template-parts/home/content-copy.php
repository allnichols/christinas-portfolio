<section class="copywriting-section">

    <div class="copywriting-description">
        <h1> <?php the_field('copy_writing_title'); ?> </h1>
        <p> <?php the_field('copy_description'); ?> </p>
    </div>
      <div class='copywriting-post-container'>
        
        <?php //object for copy writing posts
            $args = array(
                'posts_per_page' => '5',
                'nopaging' => true,
                'category_name' => 'published_work'
            );
            $custom_query = new WP_Query($args); //custom query call
        if ($custom_query->have_posts() ) : ?>
        <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                    <div class="copywriting-post">
                        <h3><?php the_title(); ?></h3>
                        <a href=" <?php the_permalink(); ?> ">Learn More</a>
                    </div>
                        
       <?php endwhile; else : ?>
            //not found
       <?php endif; ?>
       <?php wp_reset_postdata(); ?>

     

    </div>
    <img class="curve" src="<?php echo get_bloginfo( 'template_directory' ); ?>/svg/background.svg" alt="">
</section>
    


<?php
    get_header();
?>
<section class="above-the-fold">

<div class="above-the-fold-container">
    <div class="image-container" style="background-image: url(<?php the_field('main-image') ?>)">

    <div class="above-the-fold_text">
        <h1>Christina Q. Nichols</h1>
        <nav>
            <a href="#!">Copywriter -</a>
            <a href="#!">Photographer -</a>
            <a href="#!">Video Editor</a>
            <!-- <a href="#!"></a> -->
        </nav>
    </div>
    </div>

    

  </div>
</section>

<section class="copywriting-section">

    <div class="copywriting-description">
        <h1> <?php the_field('copy_writing_title'); ?> </h1>
        <p> <?php the_field('copy_description'); ?> </p>

        <?php //object for copy writing posts
            $args = array(
                'posts_per_page' => '5',
                'nopaging' => true,
                 'category_name' => 'published_work'
            );
            $custom_query = new WP_Query($args); //custom query call
        if ($custom_query->have_posts() ) : ?>
        <?php while ($custom_query->have_posts()) :
                        $custom_query->the_post();
                        the_title();
                        the_content();
        endwhile; else :
            //not found
        endif;
        wp_reset_postdata(); ?>



    </div>

</section>

<?php
get_footer();
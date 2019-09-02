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
    </div>

</section>

<?php
get_footer();
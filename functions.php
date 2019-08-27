<?php

// Adding css
function enqueue_my_custom_styles(){
    wp_enqueue_style('styles', get_template_directory_uri() . '/sass/css/styles.css', false);
}

add_action('wp_enqueue_scripts', 'enqueue_my_custom_styles');
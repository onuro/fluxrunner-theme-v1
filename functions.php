<?php
function mytheme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_enqueue_editor_styles() {
    // Enqueue the same stylesheet for the block editor
    add_editor_style('style.css');
}
add_action('admin_init', 'mytheme_enqueue_editor_styles');

function mytheme_enqueue_scripts() {
    // Enqueue the accordion script
    wp_enqueue_script('accordion-script', get_template_directory_uri() . '/assets/js/accordion.js', array(), null, true);

    // Enqueue the data update script
    wp_enqueue_script('data-update-script', get_template_directory_uri() . '/assets/js/data-update.js', array(), null, true);

    // Enqueue the data update script
    wp_enqueue_script('carousel-script', get_template_directory_uri() . '/assets/js/carousel.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
?>

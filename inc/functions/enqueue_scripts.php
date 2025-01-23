<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);

    // Registrace CSS souborů ve složce assets/css
    wp_enqueue_style('reset_styles', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('main_styles', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('header_styles', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('font_awesome_styles', get_template_directory_uri() . '/assets/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
<?php
// Přidání widgetové oblasti
function my_theme_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'my_theme'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'my_theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');
<?php
// Registrace navigačních menu pomocí MegaMenu
function my_theme_register_menus() {
    if (function_exists('megamenu_register_menus')) {
        megamenu_register_menus(array(
            'primary' => __('Primary Menu', 'my_theme'),
            'footer' => __('Footer Menu', 'my_theme'),
            'max_mega_menu_1' => __('Max Mega Menu 1', 'my_theme')
        ));
    }
}
add_action('init', 'my_theme_register_menus');
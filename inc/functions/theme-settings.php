<?php
// Přidání vlastního menu a podmenu do administrace
function my_theme_add_admin_menu() {
    add_menu_page(
        __('Nastavení šablony', 'my_theme'), // Název stránky
        __('Nastavení šablony', 'my_theme'), // Název menu
        'manage_options', // Schopnost
        'my_theme_settings', // Slug
        'my_theme_settings_page', // Callback funkce
        'dashicons-admin-generic', // Ikona
        60 // Pozice
    );

    add_submenu_page(
        'my_theme_settings', // Rodičovský slug
        __('Obecné nastavení', 'my_theme'), // Název stránky
        __('Obecné', 'my_theme'), // Název podmenu
        'manage_options', // Schopnost
        'my_theme_general_settings', // Slug
        'my_theme_general_settings_page' // Callback funkce
    );

    add_submenu_page(
        'my_theme_settings', // Rodičovský slug
        __('Nastavení barev', 'my_theme'), // Název stránky
        __('Barvy', 'my_theme'), // Název podmenu
        'manage_options', // Schopnost
        'my_theme_color_settings', // Slug
        'my_theme_color_settings_page' // Callback funkce
    );

    // Přidejte další podmenu podle potřeby
}
add_action('admin_menu', 'my_theme_add_admin_menu');

// Callback funkce pro hlavní stránku nastavení
function my_theme_settings_page() {
    include get_template_directory() . '/inc/functions/theme-settings-page.php';
}

// Callback funkce pro obecné nastavení
function my_theme_general_settings_page() {
    include get_template_directory() . '/inc/functions/theme-settings-page.php';
}

// Callback funkce pro nastavení barev
function my_theme_color_settings_page() {
    include get_template_directory() . '/inc/functions/theme-settings-page.php';
}

// Registrace nastavení
function my_theme_register_settings() {
    register_setting('my_theme_settings_group', 'my_theme_settings');
    register_setting('my_theme_general_settings_group', 'my_theme_general_settings');
    register_setting('my_theme_color_settings_group', 'my_theme_color_settings');

    add_settings_section('my_theme_settings_section', __('Obecné nastavení', 'my_theme'), null, 'my_theme_settings');
    add_settings_section('my_theme_general_settings_section', __('Obecné nastavení', 'my_theme'), null, 'my_theme_general_settings');
    add_settings_section('my_theme_color_settings_section', __('Nastavení barev', 'my_theme'), null, 'my_theme_color_settings');

    // Přidejte další nastavení podle potřeby
}
add_action('admin_init', 'my_theme_register_settings');
?>
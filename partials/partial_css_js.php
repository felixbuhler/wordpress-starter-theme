<?php

// ————————————————————————————————————————————————————————————————————————————————————————————————
//
// Custom Scripts & Styles
//
// ————————————————————————————————————————————————————————————————————————————————————————————————

add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts()
{
    // JS
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js');

    // CSS
    wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/style.css');
}

function theme_admin_style()
{
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin_style.css');
}

add_action('admin_enqueue_scripts', 'theme_admin_style');

function theme_login_style()
{
    wp_enqueue_style('login-styles', get_stylesheet_directory_uri() . '/css/admin_style.css');
}
add_action('login_enqueue_scripts', 'theme_login_style');

?>
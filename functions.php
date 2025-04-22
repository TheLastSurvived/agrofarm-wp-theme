<?php
// Включение поддержки WordPress
function your_theme_setup() {
    // Автоматический <title>
    add_theme_support('title-tag');
    
    // Миниатюры записей
    add_theme_support('post-thumbnails');
    
    // Регистрация меню
    register_nav_menus([
        'primary' => 'Основное меню',
    ]);
}
add_action('after_setup_theme', 'your_theme_setup');

// Подключение стилей и скриптов
function your_theme_scripts() {
    // Основной CSS
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Подключаем Font Awesome (если нужно)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

    
}
add_action('wp_enqueue_scripts', 'your_theme_scripts');


// Регистрируем область виджетов
function my_theme_widgets_init() {
    register_sidebar([
        'name'          => 'Моя область виджетов',
        'id'            => 'my-custom-widget-area',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'my_theme_widgets_init');


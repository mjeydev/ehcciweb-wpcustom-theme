<?php

function my_theme_scripts(){

    wp_enqueue_style(
        'main-css',
        get_template_directory_uri() . '/assets/css/style.css',
        array('google-fonts')
        
    );

    wp_enqueue_style(
        'header-style',
        get_template_directory_uri() . '/assets/css/header.css',
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/app.js',
        [],
        false,
        true
    );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap',
        array(),
        null
    );
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');


function mytheme_setup(){

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme')
    ));

    // Enable Custom Logo support
    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'mytheme_setup');
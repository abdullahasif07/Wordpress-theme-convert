<?php
function add_css() {
    wp_register_style('first', get_template_directory_uri() . '/assets/css/index.css', false, '1.1', 'all');
    wp_enqueue_style('first');

    wp_register_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css',
        array(),
        '5.3.1'
    );
    wp_enqueue_style('bootstrap-css');

    // Font Awesome CSS
    wp_register_style(
        'font-awesome-css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );
    wp_enqueue_style('font-awesome-css');

    // Google Fonts - DM Serif Display
    wp_register_style(
        'dm-serif-display',
        'https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap',
        array(),
        null
    );
    wp_enqueue_style('dm-serif-display');

    // Google Fonts - Handjet
    wp_register_style(
        'handjet-font',
        'https://fonts.googleapis.com/css2?family=Handjet&display=swap',
        array(),
        null
    );
    wp_enqueue_style('handjet-font');

    // Google Fonts - Kanit
    wp_register_style(
        'kanit-font',
        'https://fonts.googleapis.com/css2?family=Kanit&display=swap',
        array(),
        null
    );
    wp_enqueue_style('kanit-font');
}

function add_script() {
    wp_register_script('js-script', get_template_directory_uri() . '/jquery-3.6.4.min.js', array('jquery'), '3.6.4', true);
    wp_enqueue_script('js-script');

    wp_register_script('change', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), '3.6.4', true);
    wp_enqueue_script('change');

    wp_register_script('popup', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), '1.1', true);
    wp_enqueue_script('popup');

    wp_register_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.3.1',
        true
    );
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'add_css');
add_action('wp_enqueue_scripts', 'add_script');


<?php

add_action('wp_enqueue_scripts', 'mojesablona_css', 10);
function mojesablona_css()
{
    wp_enqueue_style(
        'mojesablona-style',
        get_stylesheet_directory_uri() . '/style.css'
    );
} // Konec povinného obsahu. Pod tento řádek můžete vkládat svůj kód.

add_theme_support('custom-logo');

function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'themename_custom_logo_setup');

add_theme_support( 'menus' ); // Podpora menu

add_theme_support('post-thumbnails');
the_post_thumbnail('150x150');

register_nav_menus(array(
    'primary' => __('Hlavní menu', 'themename'),
    'footer'  => __('Footer menu', 'themename'),
));
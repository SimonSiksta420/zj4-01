<?php

add_action('wp_enqueue_scripts', 'mojesablona_css', 10);
function mojesablona_css()
{
    wp_enqueue_style(
        'mojesablona-style',
        get_stylesheet_directory_uri() . '/style.css'
    );
} // Konec povinného obsahu. Pod tento řádek můžete vkládat svůj kód.
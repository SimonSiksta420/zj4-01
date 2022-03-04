<?php
add_action('wp_enqueue_scripts', 'enqueue_parents_css', 10);
function enqueue_parents_css()
{
    wp_enqueue_style(
        'parent-style',
        trailingslashit(get_template_directory_uri()) . 'style.css',
        array()
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css' ,
        array('parent-style')
    );
}
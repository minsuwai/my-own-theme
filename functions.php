<?php

function my_own_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_own_theme_setup');

function my_own_theme_scripts()
{
    wp_enqueue_style('my-own-theme-style', get_stylesheet_uri());
    wp_enqueue_script('my-own-theme-script', get_template_directory_uri() . '/main.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'my_own_theme_scripts');

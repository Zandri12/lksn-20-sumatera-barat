<?php

function theme_wp_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    
    add_theme_support('title-tag');

    
    add_theme_support('post-thumbnails');

    
    register_nav_menus(array(
        'primary_menu' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'theme_wp_setup');


function theme_wp_scripts()
{
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('cleandblog-style', get_template_directory_uri() . '/css/clean-blog.min.css');
    
   
    wp_enqueue_style(
        'fontawesome-style',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'
    );
    
    wp_enqueue_style(
        'font-lora-style',
        '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
    );

    wp_enqueue_style(
        'font-open-sans',
        '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    );

   
    wp_enqueue_style('customize-style', get_stylesheet_uri());
    
    wp_enqueue_script(
        'jquery-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true);
    wp_enqueue_script(
        'bootstrap-script',
        get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script(
        'cleanblog-script',
        get_template_directory_uri() . '/js/clean-blog.min.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'theme_wp_scripts');

/**
 * @param  
 
 */
function new_excerpt_more($more)
{
    return '....';
}

add_filter('excerpt_more', 'new_excerpt_more');


require get_template_directory() . '/bootstrap-walker.php';
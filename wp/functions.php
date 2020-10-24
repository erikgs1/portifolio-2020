<?php 

function load_scripts(){
    wp_enqueue_script('script', get_template_directory_uri() . '/dist/all.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.5.3', true );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '4.5.3', 'all' );
    
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/style.css', array(), 1.0, 'all');}
    

add_action('wp_enqueue_scripts', 'load_scripts');

function portfolio_config(){ 
    add_theme_support('post-thumbnails' ); 
} 
add_action('after_setup_theme', 'portfolio_config', 0);
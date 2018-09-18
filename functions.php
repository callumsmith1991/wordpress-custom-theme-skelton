<?php

include( get_stylesheet_directory() . '/includes/customizer.php' );

function site_assets() {
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/style.min.css' );
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/min-scripts/custom.min.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'foundation-js', get_stylesheet_directory_uri() . '/foundation/js/vendor/foundation.min.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'site_assets' );

function mat_widget_areas() {
    register_sidebar( array(
        'name' => 'Theme Sidebar',
        'id' => 'mat-sidebar',
        'description' => 'The main sidebar shown on the right in our awesome theme',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ));
}

add_action( 'widgets_init', 'mat_widget_areas' );

register_nav_menus( array(
	'header-menu' => 'Header Menu',
) );



function custom_theme_features()  {
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
	add_theme_support( 'automatic-feed-links' );
	load_theme_textdomain('my_theme', get_template_directory() . '/languages');
}

add_action( 'after_setup_theme', 'custom_theme_features' );

function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer Area left',
    'before_widget' => '<div class = "widget" id="footer-area-left">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer Area Middle',
    'before_widget' => '<div class = "widget" id="footer-area-middle">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer Area Right',
    'before_widget' => '<div class = "widget" id="footer-area-right">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);




?>

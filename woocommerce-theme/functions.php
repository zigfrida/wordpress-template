<?php

function load_stylesheets(){

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');

    wp_register_script('header_animation', get_template_directory_uri() . '/src/header_animation.js', 'jquery', 1, true);
    wp_enqueue_script('header_animation');

    if(is_page()){
        global $wp_query;
        $template_name = get_post_meta($wp_query->post->ID, '_wp_page_template', true);

        if($template_name == 'template-category.php') {
            wp_register_script('category', get_template_directory_uri() . '/src/category.js', 'jquery', 1, true);
            wp_enqueue_script('category');
        } else if(is_front_page()){
            wp_register_script('front-page', get_template_directory_uri() . '/src/front_page.js', 'jquery', 1, true);
            wp_enqueue_script('front-page');
        }
    }
}

add_action('wp_enqueue_scripts', 'load_javascript');


//Add SUPPORT
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Register menus
register_nav_menus( 
    array(
        'top-menu' => 'Top Menu'
    )
);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

//Add images sizes
// add_image_size( 'post_image', 1100, 550, false );

//Add a widget
register_sidebar( 
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
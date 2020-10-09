<?php

function load_stylesheets(){

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');

    wp_register_style( 'woocommerce-stylesheet', get_template_directory_uri() . '/woocommerce/woocommerce.css', '', 1, 'all' );
    wp_enqueue_style( 'woocommerce-stylesheet' );
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
    wp_register_script('custom', get_template_directory_uri() . '/app.js', array('jquery'), 1, true);
    wp_enqueue_script('custom');

    wp_register_script('header_animation', get_template_directory_uri() . '/src/js/header_animation.js', array('jquery'), 1, true);
    wp_enqueue_script('header_animation');

    if(is_page()){
        global $wp_query;
        $template_name = get_post_meta($wp_query->post->ID, '_wp_page_template', true);

        if($template_name == 'template-category.php') {
            wp_register_script('category', get_template_directory_uri() . '/src/js/category.js', 'jquery', 1, true);
            wp_enqueue_script('category');
        } else if(is_front_page()){
            wp_register_script('front-page', get_template_directory_uri() . '/src/js/front_page.js', 'jquery', 1, true);
            wp_enqueue_script('front-page');
        }else if(is_product()){
            // Single Product page?
        }
    }

    wp_register_script('woocommerce-script', get_template_directory_uri() . '/woocommerce/woocommerce.js', 'jquery', 1, true);
    wp_enqueue_script('woocommerce-script');
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


/**
 * WooCommerce Configuration
 * 
 */

 //Declaring WooCommerce Support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    //add_theme_support( 'wc-product-gallery-zoom' );   //Zoom when hoover
    add_theme_support( 'wc-product-gallery-lightbox' ); 
    //add_theme_support( 'wc-product-gallery-slider' );

    // Theme no longer use the WooCommerce stylesheet, giving a blank canvas.
    add_filter( 'woocommerce_enqueue_styles', '__return_false' );
    add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
    add_filter( 'gettext', 'custom_related_products_text', 20, 3 );
    add_filter( 'woocommerce_is_sold_individually','custom_remove_all_quantity_fields', 10, 2 );
    add_filter('genesis_post_meta', 'crunchify_post_meta');
    add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' ); 
    // Trim zeros in price decimals
    add_filter( 'woocommerce_price_trim_zeros', '__return_true' );
    //Change number of related products output
    add_filter( 'woocommerce_output_related_products_args', 'max_related_products_args', 20 );

}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function custom_related_products_text( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
      case 'Related products' :
        $translated_text = __( 'Similar', 'woocommerce' );
        break;
    }
    return $translated_text;
  }

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}

//Removing product quantity selection
function custom_remove_all_quantity_fields( $return, $product ) {
    return true;
}

// To change add to cart text on product archives(Collection) page
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Download', 'woocommerce' );
} 

/**
 * Change number of related products output
 */ 
function max_related_products_args( $args ) {
    $args['posts_per_page'] = 3; // 4 related products
    $args['columns'] = 2; // arranged in 2 columns
    return $args;
}



// add_filter('wp_handle_upload_prefilter', 'limit_wp_handle_upload_prefilter');
// function yoursite_wp_handle_upload_prefilter($file) {
//   // This bit is for the flash uploader
//   if ($file['type']=='application/octet-stream' && isset($file['tmp_name'])) {
//     $file_size = getimagesize($file['tmp_name']);
//     if (isset($file_size['error']) && $file_size['error']!=0) {
//       $file['error'] = "Unexpected Error: {$file_size['error']}";
//       return $file;
//     } else {
//       $file['type'] = $file_size['mime'];
//     }
//   }
//   if ($post_id = (isset($_REQUEST['post_id']) ? $_REQUEST['post_id'] : false)) {
//     if (count(get_posts("post_type=attachment&post_parent={$post_id}"))>3)
//       $file['error'] = "Sorry, you cannot upload more than four (4) image.";
//   }
//   return $file;
// }
<?php 
add_action('wp_enqueue_scripts' , 'dia_scripts');
function dia_scripts() {
    wp_enqueue_style('my-style', get_stylesheet_uri());
    wp_enqueue_style('animate',get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('swiper-style',get_template_directory_uri() . '/css/swiper-bundle.min.css');
   
    wp_enqueue_script( 'query_scripts' , get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), null, true);
    wp_enqueue_script( 'may_scripts' , get_template_directory_uri() . '/js/script.js', array(), null, true);
    wp_enqueue_script( 'wow' , get_template_directory_uri() . '/js/wow.js', array(), null, true);
    wp_enqueue_script( 'swiper' , get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
}

add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

if ( current_user_can( 'subscriber' ) ) {
    show_admin_bar( false );
}

?>
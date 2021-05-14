<?php
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
function sevgi_scripts() {
    // wp_enqueue_style( 'mono-style', get_stylesheet_uri(), array(), '_S_VERSION' );
    // wp_style_add_data( 'mono-style', 'rtl', 'replace' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.rtl.min.css');
    wp_enqueue_style( 'fontawsome', get_template_directory_uri().'/assets/css/all.min.css');
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
    wp_enqueue_style( 'style-sevgi', get_stylesheet_uri() );



    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', true );
    wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', '', '', true );
    wp_enqueue_script( 'owlcarousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'custome-js', get_template_directory_uri() . '/assets/js/custome.js', '', '', true );

    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    // 	wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'sevgi_scripts' );


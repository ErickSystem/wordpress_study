<?php

// requerendo o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

function load_scripts(){
    /*
         Utilizado para chamar as folhas de estilo 
    */
    wp_enqueue_script('bootstrap-js', 
                    get_template_directory_uri() . '/js/bootstrap.min.js', 
                    array('jquery'), 
                    '4.1.3',
                     true);
    wp_enqueue_style('template', 
                    get_template_directory_uri() . '/css/template.css', 
                    array(),
                    '1.0', 
                    'all');
    wp_enqueue_style('bootstrap-css', 
                    get_template_directory_uri() . '/css/bootstrap.min.css', 
                    array(),
                    '4.1.3', 
                    'all');
}
/*  
    A função abaixo é utilizado para chamar as
    funções do wordpress e o nosso próprio script
*/
add_action('wp_enqueue_scripts', 'load_scripts');

function wpcourse_config(){
    // Registrando nossos menus    
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Main'
        )
    );
    $args = array(
        'height' => 225,
        'width'  => 1920
    );
    add_theme_support( 'custom-header', $args);
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'post-formats', array( 'video', 'image' ));
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array( 'height' => 110, 'width' => 200 ) );

    // Habilitando suporte à tradução
    $textdomain = 'wpcurso';
    load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );
}

add_action( 'after_setup_theme', 'wpcourse_config', 0 );

add_action( 'widgets_init', 'wpcourse_sidebars' );
function wpcourse_sidebars(){
    register_sidebar(
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used on Home Page',
            'before_widget' => '<div class="widget-wapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'First Services Area',
            'before_widget' => '<div class="widget-wapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 2',
            'id' => 'services-2',
            'description' => 'Second Services Area',
            'before_widget' => '<div class="widget-wapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 3',
            'id' => 'services-3',
            'description' => 'Third Services Area',
            'before_widget' => '<div class="widget-wapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Social Icons',
            'id' => 'social-media',
            'description' => 'Place your media icons here',
            'before_widget' => '<div class="widget-wapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}

<?php

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

// Registrando nossos menus

register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Main'
    )
);
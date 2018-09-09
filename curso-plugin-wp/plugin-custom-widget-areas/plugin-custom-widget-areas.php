<?php
/*
Plugin Name: Plugin Custom Widget Areas
Plugin URI: https://github.com/jlferrete
Description: Este plugin servirá para ver como funcionan las custom widget areas
Version: 0.0.1
Author: JlFerrete
Author URI: https://github.com/jlferrete
License: GPL 2+
*/


//Crear la función que creará la nueva widget area

function jf_nueva_wa() {

    $opciones = array(

        'id' => 'jf_widget_area',
        'name' => 'Area JF',
        'description' => 'Esta es un área que acabo de crear',
    );
   
    register_sidebar($opciones);
};

//Cuando debe ejecutar la función

add_action('widgets_init','jf_nueva_wa');

//CUando 

function jf_mostrar_wa() {
    
}

add_action('wp_head', 'jf_mostrar_wa');
<?php
/*
Plugin Name: Plugin shortcodes con atributos
Plugin URI: https://github.com/jlferrete
Description: Este plugin servirá para ver como funcionan los shortcodes con atributos
Version: 0.0.1
Author: JlFerrete
Author URI: https://github.com/jlferrete
License: GPL 2+
*/

function jl_shortcode( $atributos ) {
   
    extract( shortcode_atts(
        array(
            'primero' => '',
            'segundo' => '',
        ), $atributos)
    
    );
    
    return ('Hola, ¿qué tal?. Soy '.$primero.' y trabajo de '.$segundo);

}

add_shortcode('jose','jl_shortcode');
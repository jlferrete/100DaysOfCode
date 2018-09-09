<?php
/*
Plugin Name: Plugin Shortcodes con cierres
Plugin URI: https://github.com/jlferrete
Description: Este plugin servirá para ver como funcionan los shortcodes con cierres
Version: 0.0.1
Author: JlFerrete
Author URI: https://github.com/jlferrete
License: GPL 2+
*/

function jl_shortcode( $atributos , $contenido = null ) {
   
    extract( shortcode_atts(
        array(
            'primero' => '',
            'segundo' => '',
        ), $atributos)
    
    );
    
    return ('<a href="#"><strong>'.$contenido.'</strong></a>');

}

add_shortcode('jose','jl_shortcode');
<?php
/*
Plugin Name: Plugin estilos CSS
Plugin URI: https://github.com/jlferrete
Description: Este plugin servirá para ver como funcionan los estilos
Version: 0.0.1
Author: JlFerrete
Author URI: https://github.com/jlferrete
License: GPL 2+
*/

function aviso() {
    if ( is_home() ){
        echo '<div class="mensaje">Esto es un texto</div>';
    }
}

add_action('wp_head', 'aviso');
add_action('wp_footer', 'aviso');

function jf_css() {

wp_register_style('jf_estilos', plugins_url('jf-estilos.css', __FILE__));
wp_enqueue_style('jf_estilos');

}

add_action('wp_enqueue_scripts','jf_css');
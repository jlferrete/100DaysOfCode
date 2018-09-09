<?php
/*
Plugin Name: Plugin-libros
Plugin URI: https://github.com/jlferrete
Description: Este plugin servirá para ver como funcionan los Custom Post Types
Version: 0.0.1
Author: JlFerrete
Author URI: https://jlferrete.com
License: GPL 2+
*/


function jf_crear_cpt_libro() {

    $etiquetas = array(
        'name'               => _x( 'Libros', 'nombre en general', 'mi-quinto-plugin' ),
		'singular_name'      => _x( 'Libro', 'nombre en singular', 'mi-quinto-plugin' ),
		'menu_name'          => _x( 'Libros', 'en el menu', 'mi-quinto-plugin' ),
		'name_admin_bar'     => _x( 'Libro', 'admin bar', 'mi-quinto-plugin' ),
		'add_new'            => _x( 'Añadir nuevo', 'libro', 'mi-quinto-plugin' ),
		'add_new_item'       => __( 'Añadir nuevo libro', 'mi-quinto-plugin' ),
		'new_item'           => __( 'Nuevo libro', 'mi-quinto-plugin' ),
		'edit_item'          => __( 'Editar libro', 'mi-quinto-plugin' ),
		'view_item'          => __( 'Ver libro', 'mi-quinto-plugin' ),
		'all_items'          => __( 'Todos los libros', 'mi-quinto-plugin' ),
		'search_items'       => __( 'Buscar libros', 'mi-quinto-plugin' ),
		'parent_item_colon'  => __( 'Libros padres:', 'mi-quinto-plugin' ),
		'not_found'          => __( 'No se han encontrado libros.', 'mi-quinto-plugin' ),
		'not_found_in_trash' => __( 'No hay libros en la papelera.', 'mi-quinto-plugin' )
    );
    
    $opciones = array(
        'public' => true,
        'label' => 'Libros',
        'labels' => $etiquetas,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book',
        'has_archive' => true,

    );

    register_post_type('libro', $opciones);

}

add_action('init', 'jf_crear_cpt_libro');



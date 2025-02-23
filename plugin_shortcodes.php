<?php
/*
Plugin Name: Shortcodes personalizados
Description: Añade varios shortcodes 
Version: 1.0
Author: Inma Ramirez
*/

//Evitar acceso directo al archivo
if(!defined('ABSPATH')){
    exit;
}

function shortcode_hola_mundo(){
    return "<p>Hola Mundo!</p>";
}
add_shortcode('hola_mundo', 'shortcode_hola_mundo');

function shortcode_saludo($atts) {
    // Se define el atributo 'nombre' con un valor por defecto 'invitado'
    // Esto significa que, si el usuario no especifica el parámetro 'nombre',
    // se utilizará el valor 'invitado'.
    $atts = shortcode_atts( array(
        'nombre' => 'invitado'
    ), $atts, 'saludo');

    // Se asume que el atributo 'nombre' viene incluido en $atts.
    // Si no se envía, $atts['nombre'] no existirá y causará errores.
    return '<h2>¡Hola, ' . esc_html($atts['nombre']) . '!</h2>';
}

add_shortcode('saludo', 'shortcode_saludo');
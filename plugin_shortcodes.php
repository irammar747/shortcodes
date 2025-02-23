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

function shortcode_fecha(){
    return date('d-m-Y');
}
add_shortcode('fecha', 'shortcode_fecha');

function shortcode_nombre_sitio(){
    return get_bloginfo('name');
}
add_shortcode('nombre_sitio', 'shortcode_nombre_sitio');

function shortcode_bienvenida(){
    return "¡Bienvenido a nuestro sitirro web!";
}
add_shortcode('biewernvenida', 'shortcode_bienvenida');
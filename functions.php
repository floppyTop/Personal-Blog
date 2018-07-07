<?php

// 
// Enqueue Shit
// 
function sc_enqueue_styles() {
	wp_enqueue_style('core', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('g_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700|Merriweather:300,400,700');
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array());
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'sc_enqueue_styles');

// 
// Remove query strings from static resources
// 
function remove_css_js_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'wp_enqueue_scripts', 'remove_css_js_ver', 10, 2 );
add_filter( 'style_loader_src', 'remove_css_js_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_css_js_ver', 10, 2 ); 

// 
// Theme Supports
// 

add_theme_support( 'title-tag' );

?>
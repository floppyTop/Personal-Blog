<?php

function sc_enqueue_styles() {
	wp_enqueue_style('core', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'sc_enqueue_styles');

?>
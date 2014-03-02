<?php

/**
 * Enqueue scripts and styles.
 */
function robido_scripts() {
	// Styles
	wp_enqueue_style('foundation', get_stylesheet_directory_uri() . '/css/foundation.min.css', array(), '5.1.4');

	// Scripts
	wp_enqueue_script('foundation', get_stylesheet_directory_uri() . '/js/foundation.min.js', array('jquery'), '5.1.4', true);
	wp_enqueue_script('robido', get_stylesheet_directory_uri() . '/js/robido.js', array('jquery', 'foundation'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'robido_scripts');
<?php
/**
 * Created by PhpStorm.
 * User: ragulin
 * Date: 27.09.2018
 * Time: 18:01
 */

//add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'func_enqueue_child_styles', 99);
function func_enqueue_child_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_dequeue_style('shapely-style');
	wp_enqueue_style( 'shapely-style',
		get_stylesheet_directory_uri() . '/style.css',
		array('parent-style')
	);
}
?>
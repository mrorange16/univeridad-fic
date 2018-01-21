<?php

function university_files() {
	//	El primer argumento es un nick
	//El null es la depéndencia del archivo y el microtime es para estar usando el archivo actualizado evitar caching
	// wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
	//Agrega al admin la opcion de crear un menu dinamico
	register_nav_menu('headerMenuLocation','Header Menu Location');

	register_nav_menu('footerLocationOne','Footer Menu 1 Location');
    register_nav_menu('footerLocationTwo','Footer Menu 2 Location');

	//añade el tag title em el head
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
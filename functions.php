<?php
@ini_set( ‘upload_max_size’ , ’64M’ );
@ini_set( ‘post_max_size’, ’64M’);
@ini_set( ‘max_execution_time’, ‘300’ );

function theme_styles() {
	// wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

	$wp_scripts->add_data('html5_shiv', 'condtional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'condtional', 'lt IE 9');

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}
wp_enqueue_script( 'index_js', get_template_directory_uri() . '/js/index.js', array('jquery'), '', true );

wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery','bootstrap_js'), '', true );

wp_enqueue_script( 'offcan_js', get_template_directory_uri() . '/js/offcan.js', array('jquery','bootstrap_js'), '', true );

add_action('wp_enqueue_scripts', 'index_js');
add_action('wp_enqueue_scripts', 'theme_js');
add_action('wp_enqueue_scripts', 'offcan_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

	register_nav_menus(
		array (
			'header-menu' => __( 'Header Menu' )
			)
		);
}
add_action('init','register_theme_menus');

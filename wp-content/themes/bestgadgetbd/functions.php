<?php

function wp_child_theme() {
	if ( ( esc_attr( get_option( "wp_child_theme_setting" ) ) != "Yes" ) ) {
		wp_enqueue_style( "parent-stylesheet", get_template_directory_uri() . "/style.css", [], time() );
	}

	wp_enqueue_style( "child-stylesheet", get_stylesheet_uri() );
	wp_enqueue_script( "child-scripts", get_stylesheet_directory_uri() . "/js/scripts.js", array( "jquery" ), time(), true );

	wp_dequeue_script( 'bootstrap' );
	wp_dequeue_style( 'bootstrap' );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick.theme.css' );
	wp_enqueue_style( 'slick-carousel', get_stylesheet_directory_uri() . '/css/slick.carousel.css' );


	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'slick-min', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'slick-carousel', get_stylesheet_directory_uri() . '/js/slick.carousel.js', array( 'jquery' ), time(), true );
	wp_enqueue_style( "theme-main", get_stylesheet_directory_uri() . "/css/theme-main.min.css", [], time() );


}

add_action( "wp_enqueue_scripts", "wp_child_theme", 0 );


function wp_child_theme_register_settings() {
	register_setting( "wp_child_theme_options_page", "wp_child_theme_setting", "wct_callback" );
	register_setting( "wp_child_theme_options_page", "wp_child_theme_setting_html", "wct_callback" );
	register_setting( "wp_child_theme_options_page", "wp_child_theme_setting_monitor", "wct_callback" );
}

add_action( "admin_init", "wp_child_theme_register_settings" );


function wp_child_theme_register_options_page() {
	add_options_page( "Child Theme Settings", "Child Theme", "manage_options", "wp_child_theme", "wp_child_theme_register_options_page_form" );
}

add_action( "admin_menu", "wp_child_theme_register_options_page" );


function custom_theme_menus() {
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'newspaper-x'), // This is your existing menu
		'secondary' => __('Secondary Menu', 'newspaper-x'), // Add a new menu location
		'footer' => __('Footer Menu', 'newspaper-x') // Add another new menu location
	));
}
add_action('init', 'custom_theme_menus');
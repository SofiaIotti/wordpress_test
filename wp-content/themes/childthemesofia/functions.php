<?php
add_action( 'wp_enqueue_scripts', 'child_theme_sofia_enqueue_styles' );

function child_theme_sofia_enqueue_styles() {
	wp_enqueue_style( 
		'child-theme-sofia-style',
		get_stylesheet_uri()
	);
	wp_enqueue_script( 'child-theme-sofia-js', get_stylesheet_directory_uri() . '/js/childtheme.js', array( 'jquery' ),'',true );
}
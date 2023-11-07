<?php 
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );
function mytheme_scripts(){
  //get_template_directory_uri() is work as theme path
  //include theme css
	wp_enqueue_style( 'style-name', get_stylesheet_uri());
  //include js and css
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
  //include js and css base on page condition
  if(is_page( ['home', 'about', 'contact'] ) ) {
		wp_enqueue_script( 'your-script', get_template_directory_uri() . '/js/your-script.js', array(), '1.0.0', true );
	}
}

<?php 
/**
*We can create custom post type using this function. we can create mutiple custome post type using this function. 
*In this example we have created one custome post type services.
**/
function create_posttype() {
  //custom posttype service code start
	register_post_type('services',
	array(
	  'labels' => array(
	   'name' => __( 'Services' ),
	   'singular_name' => __( 'Service' ),
	  ),
	'supports'=> array( 'title', 'editor', 'thumbnail'),
	'public' => true,
	'menu_icon'=>'dashicons-chart-pie',
	'has_archive' => false,
	'rewrite' => array('slug' => 'services'),
	));
  //code end
}
add_action( 'init', 'create_posttype' 

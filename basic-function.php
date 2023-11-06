<?php
if (!function_exists('mytheme_setup')):
	function mytheme_setup() {
    //for title tag and improve SEO and provides better user experience
		add_theme_support( 'title-tag' );
    //custom logo setup
		add_theme_support('custom-logo');
    //simple and handy tool that enables automatic generation of RSS feed links for your website
		add_theme_support('automatic-feed-links');
    //allows to associate an image with a post, page, or custom post type
		add_theme_support('post-thumbnails' );
    //that allows content creators to categorize their posts based on different content formats or types
		add_theme_support('post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ));
    //WordPress automatically ensures that embedded content, such as videos and iframes from platforms like YouTube or Vimeo, adapts to the screen size and layout of the website
		add_theme_support('responsive-embeds' );
    //HTML5 in WordPress, developers can build more semantically structured and accessible websites, incorporating elements like <header>, <footer>, <nav>, and <article> for better organization and clarity of content.
		add_theme_support('html5', array( 'style','script'));
    //is used to create and define navigation menus within a theme
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'mythememenu'),
			'secondary' => __( 'Secondary Menu', 'mythememenu'),
		));
	}
endif;
add_action( 'after_setup_theme', 'mytheme_setup' );
/* Register the widgets */
add_action( 'widgets_init', 'mytheme_widgets_init');
function mytheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'mytheme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'mytheme' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
/**css/js enqueue***/
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );
function mytheme_scripts(){
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}

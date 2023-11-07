<?php 
/* Register the widgets */
/*add this code in function file*/
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
/**Use this code for display widget***/
//sidebar-1 is id of widget
dynamic_sidebar('sidebar-1');

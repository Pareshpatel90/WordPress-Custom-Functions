<?php 
/**Registers navigation menu locations for a theme**/
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
mytheme_register_nav_menu( array(
  'primary'   => __( 'Primary Menu', 'mythememenu'),
  'footer' => __( 'Footer Menu', 'mythememenu'),
  'copyright' => __( 'Copyright Menu', 'mythememenu'),
));

/**Displays a navigation menu**/
wp_nav_menu( array(
  'menu' => 'primary', //Desired menu. Accepts a menu ID, slug, name, or object.
  'depth' => 2,
  'container' => '', //Whether to wrap the ul, and what to wrap it with Default 'div'.
  'container_class' => '', //Class that is applied to the container.
  'menu_class'=> 'navbar-nav m-auto' //CSS class to use for the ul element which forms the menu.
)
);

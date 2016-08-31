<?php

/* register main menu and footer*/
register_nav_menus( array (
		"main-menu" => "Main Menu",
		"footer-menu" => "Footer Menu"
	)
);

/* register post thumbnails */
add_theme_support( 'post-thumbnails' );

add_image_size( 'feature-thumb', 250, 250, true ); //250x250 square image
add_image_size( 'feature-image', 600, 99999, false);//for use when displaying full featured image on post; 600 pixels wide (and unlimited height)
add_image_size( 'feature-list', 600, 338, true);//for use on homepage list


/* register sidebar */

$sidebar = array(
  'name'        => 'Sidebar',
  'id'          => 'sidebar',
  'description' => 'Place widgets here.',
);
register_sidebar($sidebar);

?>
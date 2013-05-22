<?php

add_action( 'admin_menu', 'my_theme_init_custom_fields' );

function my_theme_init_custom_fields() {
    if( function_exists( 'x_add_metadata_field' ) && function_exists( 'x_add_metadata_group' ) ) {
    	x_add_metadata_group( 'Omniture Info', array( 'user', 'page' ) );
       
        x_add_metadata_field( '1', array( 'user', 'page'), array(
			'group' => 'Omniture Info', // the group name
			'description' => 'This is field #1. It\'s a simple text field.', // description for the field
			'label' => 'Text Field', // field label
			'display_column' => true // show this field in the column listings
			));
			
		 x_add_metadata_field( '2', array( 'user', 'page'), array(
			'group' => 'Omniture Info', // the group name
			'description' => 'This is field #1. It\'s a simple text field.', // description for the field
			'label' => 'Text Field 2', // field label
			'display_column' => true // show this field in the column listings
			));
			
		 x_add_metadata_field( '4', array( 'user', 'page'), array(
			'group' => 'Omniture Info', // the group name
			'description' => 'This is field #1. It\'s a simple text field.', // description for the field
			'label' => 'Text Field 3', // field label
			'display_column' => true // show this field in the column listings
			));
    }
}



if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

register_sidebar(array(
  'name' => 'SlideShow',
  'id' => 'right-sidebar',
  'description' => 'Slideshow Only',
  
));



register_sidebar(array(
		'name'=> 'underNav',
		'id' => 'underNav',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

//gets google hosted jquery
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    
 
add_action('wp_enqueue_scripts', 'my_scripts_method');


add_action( 'init', 'register_my_menus' );


//custom Menu areas
function register_my_menus() {
register_nav_menus(
array(
'menu-1' => __( 'Menu 1' ),
'menu-2' => __( 'Menu 2' )
)
);
}

//get certain image from post   getImage('1'); 
function getImage($num) {
global $more;
$more = 1;
$link = get_permalink();
$content = get_the_content();
$count = substr_count($content, '<img');
$start = 0;
for($i=1;$i<=$count;$i++) {
$imgBeg = strpos($content, '<img', $start);
$post = substr($content, $imgBeg);
$imgEnd = strpos($post, '>');
$postOutput = substr($post, 0, $imgEnd+1);
$postOutput = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '',$postOutput);;
$image[$i] = $postOutput;
$start=$imgEnd+1;
}
if(stristr($image[$num],'<img')) { echo '<a href="'.$link.'">'.$image[$num]."</a>"; }
$more = 0;
}

//Custom image sizes
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 900,150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'homepage-thumb', 304, 9999, true ); //(cropped)
}


?>
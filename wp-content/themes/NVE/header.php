<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body class="container-fluid">
<header class="row-fluid">

<div id="header_left" class="border span3">
    	<h1 id="title">
    		<a class="ir" href="<?php bloginfo('url'); ?>/">Native Village of Eyak</a>
    		<a href="<?php bloginfo('url'); ?>/"><img src='<?php echo get_bloginfo('template_url')?>/images/nve-logo.jpg'/></a>
    	</h1>
    	<h2><span><?php bloginfo('description'); ?></span></h2>
    </div>
    
<?php
if ( '' != get_the_post_thumbnail() && is_page() ) {
   echo the_post_thumbnail();
} else {?>

    
    <div id="header_right" class="border span12">
    	<?php do_action('slideshow_deploy', '732'); ?>
    </div>
    
    
    <div id="banner-left"></div>
    <div id="banner-right"></div>


<?php     
}
?>
</header>
<?php include('nav.php') ?>



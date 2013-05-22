<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<!-- "H5": The HTML-5 WordPress Template Theme -->
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		
		<?php wp_head(); ?>
		
		<script>
		
		
		
		</script>

		<script src="<?php bloginfo('template_directory'); ?>/javascript/h5.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/javascript/magicNav.js"></script>
	</head>
	<body <?php body_class(); ?>>

		<header>
			<div id="header_left" class="border">
				<h1 id="title">
					<a href="<?php bloginfo('url'); ?>/">Native Village of Eyak</a>
				</h1>
				<h2><span><?php bloginfo('description'); ?></span></h2>
			</div>
			<div id="header_right" class="border">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('SlideShow')) : ?>
					<!-- [ do default stuff if no widgets ] -->
				<?php endif; ?>
			</div>
			
			
			<div id="banner-left"></div>
			<div id="banner-right"></div>
			<h3 style="clear:both; height:20px;"></h3>
		</header>
		
		<nav style="background: black url(
		
		<?php
if ( has_post_thumbnail() ) {
	// the current post has a thumbnail
	
	 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
  	echo $large_image_url[0];
	
} else {
	// the current post lacks a thumbnail
}
?>
		) center center no-repeat;">
			
				<?php wp_nav_menu( array( 'menu_class' => 'group', 'theme_location' => 'menu-1'  ) ); ?>

			
			<?php //Home Page html widget
			if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('underNav')) : ?>
				<!-- [ do default stuff if no widgets ] -->
			<?php endif; ?>
			<?php
			if (is_page()){?>
			<div id="title_container">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			</div>
			<?php } ?>
			
		</nav>
	
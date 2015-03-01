<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
<div class="aside_background span4"></div>

	<aside class="span4 main_side_bar">
	
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	 
	 
	 
	 				
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
		
				<?php get_search_form(); ?>
			

		
				<h3><?php _e( 'Archives', 'starkers' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			

		
				<h3><?php _e( 'Meta', 'starkers' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<?php wp_loginout(); ?>
					<?php wp_meta(); ?>
				</ul>
			

		<?php endif; // end primary widget area ?>
		

        <?php
        	// A second sidebar for widgets, just because.
        	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
        
        			<ul>
        				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
        			</ul>
        
        <?php endif; ?>
            <div class="border side_bar_nav">
                <h4 class="title_bar">quick links:</h4>
	            <?php wp_nav_menu( array('theme_location' => 'side_menu' )); ?>
        	</div>
        	<div class="border side_bar_nav">
        	<h4 class="title_bar">Web Cam:</h4>

        	          <img src="http://66.223.160.62:9000/snapshot.cgi?user=admin&pwd=&count=0" id="reloader" onload="setTimeout('document.getElementById(\'reloader\').src=\'http://66.223.160.62:9000/snapshot.cgi?user=guest&amp;pwd=&amp;blah=\'+new Date().getMilliseconds()', 5000)" width="277">
        	</div>
	</aside>
	
<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<footer class="main_footer row-fluid">
	   <div class="footer_inner">

	   
        	<ul class="span4 first_list">
        	   <li>Connect:</li>
            	<li>PO box 1388</Li>
            	<li>110 Nicholoff Way Cordova, Alaska 99574</li>
            	<li>P (907) 424-7738</li>
            	<li>F (907) 424-7739</li>
            	
        	</ul>
        	    	<ul class="span4">
            	<li><a href="/">Home</a></Li>
            	<li><a href="/about/">About Us</a></Li>
            	<li><a href="/tribal-council/">Tribal Council</a></Li>
            	<li><a href="/category/news/">Current Events</a></Li>
        	</ul>
        	    	<ul class="span4">
            	<li><a href="/jobs/">Employment</a></Li>
            	<li><a href="/contact-us/">Staff</a></Li>
            	<li><a href="http://portal.microsoftonline.com">Staff Login</a></Li>
            	<li><a href="/ilanka-community-health-center/">Health Center</a></Li>
            	<li><a href="/ilanka-cultural-center/">Cultural Center</a></Li>
        	</ul>
    	<div>
	</footer>


    <script>
    $('#posts article').click(function(){
        var aTag = $(this).find('a').attr('href');
        window.location = aTag;
    });
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/nve-js.js"></script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>

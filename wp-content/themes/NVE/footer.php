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
            	<li><a href="#">Home</a></Li>
            	<li><a href="#">About Us</a></Li>
            	<li><a href="#">Tribal Council</a></Li>
            	<li><a href="#">Current Events</a></Li>
            	<li><a href="#">CEyak Echo</a></Li>
        	</ul>
        	    	<ul class="span4">
            	<li><a href="#">Employment</a></Li>
            	<li><a href="#">Staff</a></Li>
            	<li><a href="#">Staff Login</a></Li>
            	<li><a href="#">Health Center</a></Li>
            	<li><a href="#">Cultural Center</a></Li>
            	<li><a href="#">Photos</a></Li>
        	</ul>
    	<div>
	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
    <script>
    $('#posts article').click(function(){
        var aTag = $(this).find('a').attr('href');
        window.location = aTag;
    });
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script>
    var leftHeight=$('.left_column').height();
    var rightHeight=$('.main_side_bar').height();
    if(leftHeight>rightHeight){
        $('.main_side_bar').addClass('longer');
    }
    console.log(leftHeight);
</script>

</body>
</html>

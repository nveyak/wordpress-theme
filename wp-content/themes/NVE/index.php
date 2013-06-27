<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>

<div class="caption page-wrapper row-fluid">
    <div class="span1 social_icons">
        <a href="https://www.facebook.com/NativeVillageofEyak"><img src='<?php echo get_bloginfo('template_url')?>/images/facebook.png' width='15'/></a>
    </br>
       <a href="#"> <img src='<?php echo get_bloginfo('template_url')?>/images/twitter.png' width='29'/></a>
    </div>
    <div class="double-divider span11">
    			“The Native Village of Eyak Traditional Council is a tribal government that promotes <span class="fo_red">self-determination</span> to Native Village of Eyak tribal members."
    </div>
</div>
<div class="page-wrapper row-fluid">

    <section class="left_column group span8">
        <div class="row-fluid">
            <div class="left_column group span8">
                <h4 class="label_color">Native Village of Eyak Community</h4>
                <h5>NVE's services and programs include:</h5>
                <ul class="bulleted_list">
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting </li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting </li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting </li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting </li>
                    <li>EmplLorem Ipsum is simply dummy text of the printing and typesetting oyment</li>
                </ul>
            </div>
            <div class="left_column group span4">
                <div class="border textwidget">
                    <h4>In the community</h4>
                    <ul>
                        <li><a href="#">Link to stuff</a></li>
                        <li><a href="#">Link to stuff</a></li>
                        <li><a href="#">Link to stuff</a></li>
                        <li><a href="#">Link to stuff</a></li>
                    </ul>
                </div>
                 <div class="border textwidget">
                    <h4>In the community</h4>
                    <ul>
                        <li><a href="#">Link to stuff</a></li>
                        <li><a href="#">Link to stuff</a></li>
                        <li><a href="#">Link to stuff</a></li>
                        <li><a href="#">Link to stuff</a></li>
                    </ul>
                </div>


            </div>
        </div>
			<h4 class="label_color">NEWS:
    			<a style="float:right;" href="/category/news/">More stories ></a>
			</h4>
			
			<section id="posts" class="group full_width_background">
			
			
			<?php 
			$countposts = 0;
			while (have_posts()) : the_post(); ?>
			<?php if ( in_category('2') || in_category('4') || in_category('5')) { } //gets post from
			else if ($countposts == 0){
    			$countposts++;
			?>
			
			<article id="post-<?php the_ID(); ?>" class="news no_border">
			 <?php echo the_post_thumbnail( array(100,100) ); ?>
			 
				<header>
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h3>
					<p>Posted on <?php the_time('F jS, Y'); ?></p>
				</header>
				<section>
					<?php 
					the_excerpt();
					?>
				</section>

			</article>
			
			

			<?php }else {?>
    			
    			<article id="post-<?php the_ID(); ?>" class="news span3">
    			     <p class="date_stamp"><?php the_time('F jS'); ?></p>
					<h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h5>
					
				
			</article>
    			
    			
    			
    			
			<?php } 
			
			endwhile; ?>


			
			</section>
			<div class="row-fluid " style="margin-top:40px;">
			<div class="span6">
			    <h4 class="title_bar">Upcoming Events:</h4>
			    <a href="#">Full Calendar</a>
                <?php echo do_shortcode('[ai1ec view="agenda"]'); ?>
			</div>
			<div class="span6">
			    <h4 class="title_bar">Promo area:</h4>
    			<img src="http://nveyak.com/fliers/sobriety/2013themecontest.jpg"/>
			</div>
			</div>
		</section>

<?php get_sidebar(); ?>


</div><!-- end of page-wapper -->
<script>
    var leftHeight=$('.left_column').height();
    var rightHeight=$('.main_side_bar').height();
    if(leftHeight>rightHeight){
        $('.main_side_bar').addClass('longer');
    }
    console.log(leftHeight);
</script>
<?php get_footer(); ?>
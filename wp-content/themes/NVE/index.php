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
    			“The Native Village of Eyak Traditional Council is a tribal government that promotes self-determination to Native Village of Eyak tribal members."
    </div>
</div>
<div class="page-wrapper row-fluid">

    <section class="left_column group span8">
        <div class="row-fluid">
            <div class="left_column group span8">
                <h4 class="label_color">Native Village of Eyak Community</h4>
                <h5>NVE's services and programs include:</h5>
                <ul class="bulleted_list">
                    <li>Ilanka Community Health Center</li>
                    <li>Behavioral Health is staffed </li>
                    <li>Elder Care</li>
                    <li>Victim Advocacy</li>
                    <li>Housing Rehabilitation</li>
                    <li>Higher Education and Vocational scholarships</li>
                    <li>Fisheries Research</li>
                    <li>Environmental Mitigation</li>
                    <li>Access Development</li>
                    <li>Ilanka Cultural Center and Museum </li>
                    <li>Indian Child Welfare Act</li>
                    <li>Cultural Training</li>
                    <li>Youth Council</li>
                    <li>Youth Cultural Camp</li>

                </ul>
            </div>
            <div class="left_column group span4">
                <div class="border textwidget">
                    <h4>Tribal Members</h4>
                    <ul>
                        <li>Become an enrolled member</li>
                        <li>Get my CIB</li>
                        <li>Get my Birth Certificate</li>
                        <li>Apply for a halibut subsistence card</li>
                        <li>Give NVE my email address</li>

                    </ul>
                </div>
                 <div class="border textwidget">
                    <h4>Employment</h4>
                    <ul>
                        <li>Current openings</li>
                        <li>Employment applications</li>
                        <li>How to apply for a position</li>

                    </ul>
                </div>
                 <div class="border textwidget">
                    <h4>Visitors</h4>
                    <ul>
                        <li><a href="">NVE projects</a></li>
                        <li><a href="">Shepard Pt (dvd)</a></li>
                        <li><a href="">Sobriety (dvd)</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">How to purchase items from the giftshop</a></li>

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
<?php get_footer(); ?>
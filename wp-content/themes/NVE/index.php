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
			<h4 class="label_color">NEWS:
    			<a style="float:right;" href="/category/news/">More stories ></a>
			</h4>
			
			<section id="posts" class="group">
			
			
			<?php 
			$countposts = 0;
			while (have_posts()) : the_post(); ?>
			<?php if ( in_category('2') || in_category('4') || in_category('5')) { } //gets post from
			else if ($countposts == 0){
    			$countposts++;
			?>
			
			<article id="post-<?php the_ID(); ?>" class="news">
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
    			
    			<article id="post-<?php the_ID(); ?>" class="news">
    			     <p><?php the_time('F jS, Y'); ?></p>
					<h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h5>
					
				
			</article>
    			
    			
    			
    			
			<?php } 
			
			endwhile; ?>


			
			</section>
			<h4 class="title_bar">Upcoming Events:</h4>
			<?php echo do_shortcode('[ai1ec view="agenda"]'); ?>
			
		</section>

<?php get_sidebar(); ?>


</div><!-- end of page-wapper -->

<?php get_footer(); ?>
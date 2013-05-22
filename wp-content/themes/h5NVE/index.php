<?php get_header(); ?>

		<section class="group">
			<aside>
				<div class="border side_box"><?php get_search_form(); ?></div>
				<div class="border side_box">
				<?php dynamic_sidebar();  ?>
					
				
				</div>
			</aside>
			
			<div class="caption">
			<div class="divider"></div>
			“The native Village of eyak is here to do all great things and help with <span class="fo_red">any thing</span> inthe world”
			<div class="divider"></div>
			</div>
			<h3 class="fo_red">Headlines:</h3>
			<section id="posts">
			
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php if ( in_category('8') ) { } //gets post from
			else{?>
			
			<article id="post-<?php the_ID(); ?>" class="news">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
				</header>
				<section>
					<?php 
					the_excerpt();
					?>
				</section>
				<footer>
					<p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted in <?php the_category(', '); ?> &bull; <?php edit_post_link('Edit', '', ' &bull; '); ?> <?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
				</footer>
			</article>

			<?php } endwhile; ?>


			<?php else : ?>
			<?php endif; ?>
			
			
			
			</section>
			<article class="photo border">
			
				<?php //gets the photo of most recent post from news
				$args = array( 'numberposts' => 1, 'category' => 7, 'order'=> 'ASC', 'orderby' => 'title' );
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post); 
				$mainPhoto = do_shortcode('[gallery size="homepage-thumb" ]');
					echo $mainPhoto;
				
				
				endforeach; ?>
			</article>
			<div style="width:300px; height:200px;"  class="border">
			</div>
			<section id="utility_box" class="border">
			<?php if ( function_exists('c3m_wpcodaslider') ) {  
               c3m_wpcodaslider('myslider', '9', '3', 'dynamicArrows:false','dynamicTabsAlign:left');} ?>
             
			</section>
		</section>
		
               
               
		



<?php get_footer(); ?>
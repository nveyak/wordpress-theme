<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section>
			<article id="post-<?php the_ID(); ?>">
				<section class="group">
					<aside>
						<div class="border side_box">				
							<?php dynamic_sidebar();  ?>
						</div>
					</aside>
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>fdsfdsf
					
				</section>
				<footer>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</footer>
			</article>
		</section>

	<?php endwhile; else: ?>

		<section>
			<article>
				<p>Sorry, no posts matched your criteria.</p>
				
			</article>
		</section>

	<?php endif; ?>



<?php get_footer(); ?>
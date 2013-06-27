<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
    <div class="page-wrapper row-fluid">
    <section class="group span8">
    
	<?php get_template_part( 'loop', 'single' ); ?>
	</section>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
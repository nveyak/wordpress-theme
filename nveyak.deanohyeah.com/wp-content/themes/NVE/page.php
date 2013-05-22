<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<div class="page-wrapper row-fluid">
    <section class="group span8">

	   <?php get_template_part( 'loop', 'page' ); ?>
	</section>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

<div class="page-wrapper row-fluid">
    <section class="group span8 left_column">
		<?php woocommerce_content(); ?>
	</section>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>

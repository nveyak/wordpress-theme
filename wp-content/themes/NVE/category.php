<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<div class="page-wrapper row-fluid">
    <section class="group span8">

				<h1><?php
					printf( __( 'Category Archives: %s', 'starkers' ), '' . single_cat_title( '', false ) . '' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				get_template_part( 'loop', 'category' );
				?>

</section>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
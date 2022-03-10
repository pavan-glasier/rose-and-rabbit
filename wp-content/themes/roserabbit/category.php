<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */

get_header(); ?>

<section class="blog-page-header">
    <div  class="container">
        <div class="row">
	        <div class="col-xl-6 mx-auto text-center">
	            <div class="section-title">
	            	<h4><?php
					/* translators: %s: Category title. */
					printf( __( 'Category Archives: %s', 'roserabbit' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h4>
	            </div>
	        </div>
        </div>
    </div>
</section>


		<?php if ( have_posts() ) : ?>
<section class="blog-listing gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-12 m-15px-tb">
                <div class="row">
                   
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post(); ?>

				<?php get_template_part( 'blogs/blog-list');?>
				
			<?php endwhile;
			//roserabbit_content_nav( 'nav-below' );
			?>
                </div>
            </div>
        </div>
    </div>
</section>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php
				the_post();
			?>

			<?php
				/*
				 * Since we called the_post() above, we need
				 * to rewind the loop back to the beginning.
				 * That way we can run the loop properly, in full.
				 */
				rewind_posts();
			?>
<section class="blog-page-header">
    <div  class="container">
        <div class="row">
	        <div class="col-xl-6 mx-auto text-center">
	            <div class="section-title">
	            	<h4><?php
					/* translators: Author display name. */
					printf( __( 'Author : %s', 'roserabbit' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
					?></h4>
	            </div>
	        </div>
        </div>
    </div>
</section>



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

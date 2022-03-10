<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
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
	            	<h4>All Blogs</h4>
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

			<?php
			if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
				?>
<section class="blog-listing gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-12 m-15px-tb">
                <div class="row text-center">
                	<div class="col-12">
                		<h1 class="entry-title"><?php _e( 'No posts to display', 'roserabbit' ); ?></h1>
                	</div>
                   
                   	<div class="col-12">
						<div class="entry-content">
							<p>
							<?php
							/* translators: %s: Post editor URL. */
							printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'roserabbit' ), admin_url( 'post-new.php' ) );
							?>
							</p>
						</div><!-- .entry-content -->
					</div>
                </div>
            </div>
        </div>
    </div>
</section>
				<?php
			else :
				// Show the default message to everyone else.
				?>
<section class="blog-listing gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-12 m-15px-tb">
                <div class="row text-center">
                	<div class="col-12">
                		<h1 class="entry-title"><?php _e( 'Nothing Found', 'roserabbit' ); ?></h1>
                	</div>
                	<div class="col-12">
						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'roserabbit' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</div>
                </div>
            </div>
        </div>
    </div>
</section>
		<?php endif; // End current_user_can() check. ?>
		<?php endif; // End have_posts() check. ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

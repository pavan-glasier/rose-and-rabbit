<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */

get_header(); ?>
<style>
section.search-section {
    padding: 70px 0;
}
.search-section .section-title{
    box-shadow: 0px 0px 10px -5px #aaa;
    padding: 20px 15px;
    border-radius: 10px;
    margin: 10px;
    color: #f2a09d;
}

</style>
<section class="blog-page-header">
    <div class="container">
        <div class="row">
        <div class="col-xl-6 mx-auto text-center">
            <div class="section-title">
                <h4><?php
				/* translators: %s: Search query. */
				printf( __( 'Search Results for: %s', 'roserabbit' ), '<span>' . get_search_query() . '</span>' );
				?></h4>
            </div>
        </div>
        </div>
    </div>
</section>
		<?php if ( have_posts() ) : ?>
<section class="search-section">
    <div class="container">
        <div class="row">
        
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				?>
				<div class="col-3 text-center">
					<a href="<?php the_permalink();?>"> 
					<div class="section-title">
		                <h4><?php the_title();?></h4> 
		            </div>
		            </a>
				</div>
			<?php endwhile; ?>

		</div>
    </div>
</section>
		<?php else : ?>
<section class="blog-page-header">
    <div  class="container">
        <div class="row">
	        <div class="col-xl-6 mx-auto text-center">
	            <div class="section-title">
	            	<h4><?php _e( 'Nothing Found', 'roserabbit' ); ?></h4>
	            </div>
	            <div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'roserabbit' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
	        </div>
        </div>
    </div>
</section>
		<?php endif; ?>

<?php get_footer(); ?>

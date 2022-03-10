<?php
/**
 * The template for displaying 404 pages (Not Found)
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
	            	<h4><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'roserabbit' ); ?></h4>
	            </div>
	            <div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'roserabbit' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
	        </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Rose Rabbit already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
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
	            	<h4>
	            		<?php
						if ( is_day() ) {
							/* translators: %s: Date. */
							printf( __( 'Daily Archives: %s', 'roserabbit' ), '<span>' . get_the_date() . '</span>' );
						} elseif ( is_month() ) {
							/* translators: %s: Date. */
							printf( __( 'Monthly Archives: %s', 'roserabbit' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'roserabbit' ) ) . '</span>' );
						} elseif ( is_year() ) {
							/* translators: %s: Date. */
							printf( __( 'Yearly Archives: %s', 'roserabbit' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'roserabbit' ) ) . '</span>' );
						} else {
							_e( 'Archives', 'roserabbit' );
						}
						?>
	            	</h4>
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

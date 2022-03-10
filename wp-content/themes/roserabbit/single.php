<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; // End of the loop. ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

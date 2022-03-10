<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */
?>
			
<section class="container mt-100 mb-100">
    <div class="title">
       <h1><?php the_title(); ?></h1>
       <a class="text-right" href="<?php echo home_url();?>"><h4>BACK TO HOME</h4> </a>
       <?php the_content(); ?>
    </div>
 </section>

	
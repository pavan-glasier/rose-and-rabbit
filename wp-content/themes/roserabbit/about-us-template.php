<?php 

/**
* Template Name: About Us
*
*/

get_header();
?>


<section class="about-bg">
    <div  class="container">
        <div class="row p-l-4">
            <div class="col-md-6">
                <div class="top-section">
                    <h1 class="text-one">
                        <span class="simple-font"><?php the_title();?></span>
                    </h1>
                </div>
                <p><?php echo get_the_content();?></p>
            </div>
            <div class="col-md-6">
                <?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" >
                <?php }
                else { ?>
                    <img src="<?=site_url();?>/wp-content/uploads/woocommerce-placeholder.png" >
                <?php }
                ?>
                
            </div>
        </div>
    </div>
</section>

<?php  

get_footer();

?>
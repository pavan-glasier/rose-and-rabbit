<div class="col-sm-4">
    <div class="blog-grid">
        <div class="blog-img">
            <div class="date"><?php echo get_the_date( 'd M, Y', $post->ID ); ?></div>
            <a href="<?php the_permalink();?>">
                <?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" >
                <?php }
                else { ?>
                    <img src="<?=site_url();?>/wp-content/uploads/woocommerce-placeholder.png" >
                <?php }
                ?>
            </a>
        </div>
        <div class="blog-info">
            <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
            <div class="btn-bar">
                <a href="<?php the_permalink();?>" class="px-btn-arrow">
                    <span>Read More</span>
                    <i class="arrow"></i>
                </a>
            </div>
        </div>
    </div>
</div>
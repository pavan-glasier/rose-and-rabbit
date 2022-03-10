<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */
?>
<section class="blog-page-header">
    <div  class="container">
        <div class="row">
        <div class="col-xl-6 mx-auto text-center">
            <div class="section-title">
                <h4><?php the_title(); ?></h4>
            </div>
        </div>
        </div>
    </div>
</section>


<section class="blog-listing gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 m-15px-tb">
                <div class="row">
                    <article class="article">
                        <div class="article-img">
                            <?php 
			                if ( has_post_thumbnail() ) { ?>
			                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" >
			                <?php }
			                else { ?>
			                    <img src="<?=site_url();?>/wp-content/uploads/woocommerce-placeholder.png" >
			                <?php }
			                ?>
                        </div>
                        <div class="article-title">
                            <h2><?php the_title(); ?></h2>
                            <div class="media">
                                <div class="media-body">
                                    <label><?php the_author();?></label>
                                    <span><?php echo get_the_date( 'd M, Y', $post->ID ); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                        	<?php echo get_the_content(); ?>
                        </div>
                    </article>
                
                </div>
            </div>
            
            <div class="col-lg-4 m-15px-tb blog-aside">
                <div class="widget widget-latest-post">
                    <div class="widget-title">
                        <h3>Latest Post</h3>
                    </div>
                    <div class="widget-body">
                        <?php  $latest = new WP_Query( array( 'post_type' => 'post' ,'order' => 'DESC', 'posts_per_page' => 3 ) );
                		while($latest->have_posts()) : $latest->the_post();?>
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                    	
                                        <a class="name" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                                        <?php the_author();?>
                                        </a>
                                        <a class="date" href="#date">
                                            <?php echo get_the_date( 'd M, Y', $post->ID ); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="<?php the_permalink();?>">
                                        <?php 
						                if ( has_post_thumbnail() ) { ?>
						                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="<?php echo get_the_title();?>" />
						                <?php }
						                else { ?>
						                    <img src="<?=site_url();?>/wp-content/uploads/woocommerce-placeholder.png" alt="<?php echo get_the_title();?>" />
						                <?php }
						                ?>
                                    </a>
                                </div>
                            </div>
                         <?php endwhile; ?>
                    </div>
                </div>
                <!-- End Latest Post -->

                <!-- widget Tags -->
                <div class="widget widget-tags">
                    <div class="widget-title">
                        <h3>Tags</h3>
                    </div>
                    <div class="widget-body">
                        <div class="nav tag-cloud">
                            <?php
			                $posttags = get_tags();
		                    if ($posttags) {
		                        foreach($posttags as $tag) { ?>
		                            <a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) );?>"><?php echo $tag->name; ?></a>
		                        <?php }
		                    }
			                ?>
                                
                        </div>
                    </div>
                </div>
                <!-- End widget Tags -->
            </div>
                
        </div>
    </div>
</section>

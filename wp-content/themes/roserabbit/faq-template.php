<?php 

/**
* Template Name: FAQ's Page
*
*/

get_header(); ?>

<section class="container mt-100 mb-100">
    <div class="title">
        <h1>FAQ</h1>
        <a class="text-right" href="<?php echo home_url();?>"><h4>BACK TO HOME</h4></a>
        <div id="accordion" class="accordion mt-5">
        <?php
            $args = array(
             'post_type' => 'faq',
             'order' => 'ASC',
            );
            $tm_query = new WP_Query($args); 
            ?>
            <?php if ($tm_query->have_posts()) :  ?>
            <?php 
            $a=1;
            $b=1;
            while ($tm_query->have_posts()) : $tm_query->the_post();  ?>
            <div class="card">
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a++;?>">
                    <h5 class="card-title">
                        <?php the_title();?>
                    </h5>
                </div>
                <div id="collapse<?php echo $b++;?>" class="card-body collapse" data-parent="#accordion" >
                    <?php the_content();?>
                </div>
            </div>
             <?php endwhile; ?>
            <?php wp_reset_postdata();  ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
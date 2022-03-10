<?php 

/**
* Template Name: Home Page
*
*/

get_header();
?>


<?php if( have_rows('sections') ): ?>
    
<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'section_1' ) :?>
<?php

$section_1_image = get_sub_field('image');
$section_1_title = get_sub_field('title');
$section_1_description = get_sub_field('description');
$section_1_link_button = get_sub_field('link_button');
	$link_url = $section_1_link_button['url'];
$link_title = $section_1_link_button['title'];
$link_target = $section_1_link_button['target'] ? $section_1_link_button['target'] : '_self';
?>
<!-- Section One -->
<section class="hero">
	<div class="container">
	    <div class="hero__img">
	        <div class="hero__img__wrapper height-fix">
	        	<img src="<?php echo $section_1_image;?>" alt="image"/>
	        </div>
	    </div>
	    <div class="hero__info text-center">
	        <h1 class="h1-heading dark-1"><?php echo $section_1_title;?></h1>
	        <p class="paragraph big light-1"><?php echo $section_1_description;?></p>

	        <a href="<?php echo $link_url;?>" class="button" target="<?php echo $link_target;?>">
	        	<?php echo $link_title;?>
	    	</a>
	    </div>
	</div>
</section>
   <?php endif ?>
<?php endwhile; ?>


   <?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'product' ) :?>

<?php
$select_product = get_sub_field('select_product');
$params = array(
 'p' => $select_product,
 'post_type' => 'product'
);
$wc_query = new WP_Query($params); 
?>
<?php if ($wc_query->have_posts()) :  ?>
<?php while ($wc_query->have_posts()) : $wc_query->the_post();  ?>

<?php 
$product = wc_get_product( $select_product );
// echo $product->get_price();
//echo $product->get_regular_price();
//echo $product->get_sale_price();
//echo do_shortcode('[add_to_cart id="'.$post->ID.'"]');
// echo "<pre>";
// print_r($product);
// echo "</pre>";

?> 
<?php
$wplogoutURL = urlencode(get_the_permalink());
$wplogoutTitle = urlencode(get_the_title());
$wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));

?>
<!-- Section Two -->
<section class="detail ">
    <div class="bg-illus">
        <div class="container">
            <div class="detail__wrapper">
            <div class="left__side ">
                <div class="detail__bg__wrapper">
               <?php
                do_action( 'woocommerce_before_single_product_summary' );
                ?>
                </div>
            </div>
            <div class="right__side">
                <div class="detail__info">
                <h2 class="h2-heading"><?php the_title(); ?></h2>
                <h3>
                    <?php if ( $product->get_sale_price() ): ?>
                    <span class="regular-price">
                        <?php echo get_woocommerce_currency_symbol(); ?> 
                        <?php echo $product->get_regular_price(); ?>
                    </span>
                    <?php endif ?>
                    <?php echo get_woocommerce_currency_symbol(); ?>
                    <?php echo $product->get_price(); ?>
                </h3>
                
                <div id="accordion">
                <div class="card" id="card-2">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0 hidden" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <span>What Do You Get?</span>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse customCollapse" aria-labelledby="headingTwo"
                        data-parent="#accordion">
                        <div class="">
                        <p class="paragraph">
                        <?php 
                        echo the_field('what_do_you_get');
                         ?>
                        </p>
                        </div>
                    </div>
                    </div>
                    <div class="card" id="card-1">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0 hidden" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne">
                        <span>Ingrediants</span>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse customCollapse" aria-labelledby="headingOne"
                        data-parent="#accordion">
                        <div class="">
                        <p class="paragraph">
                        <?php 
                        echo the_field('ingrediants');
                         ?>
                        </p>
                        </div>
                    </div>
                    </div>
                    
                </div>
                
                <form class="cart" action="<?=site_url();?>/product/creamy-facial-wash/" method="post" enctype="multipart/form-data">
                        <div class="quantity">
                    <h4>Quantity </h4>
                    <div class="quantity-counter">
                        <input type="number" name="quantity" value="<?php echo ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 );?>" min="<?php echo apply_filters( 'woocommerce_quantity_input_min', 1, $product );?>" max="<?php echo apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product );?>" id="counter"/>
                        <button class="up-button">+</button>
                        <button class="down-button">-</button>
                    
                    </div>

                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                </div>
                    </form>
                    
                <div class="product__bottom">
                    <h6>Free Shipping in India</h6>
                    <ul class="social">
                    <li>Share: </li>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $wplogoutURL; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                    <li><a href="https://twitter.com/intent/tweet?text=<?php echo $wplogoutTitle;?>&amp;url=<?php echo $wplogoutURL;?>&amp;via=wplogout" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/shareArticle?url=<?php echo $wplogoutURL; ?>&amp;title=<?php echo $wplogoutTitle; ?>&amp;mini=true" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $wplogoutURL; ?>&amp;media=<?php echo $wplogoutImage;?>&amp;description=<?php echo $wplogoutTitle; ?>" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php wp_reset_postdata();  ?>
<?php else: ?>
<p><?php _e( 'No Product' );  ?></p>
<?php endif; ?>
   <?php endif ?>
<?php endwhile; ?>







   <?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'what_does_it_do' ) :?>
   <?php

   $main_heading = get_sub_field('main_heading');
   $sub_heading = get_sub_field('sub_heading');
   ?>
<!-- Section Three -->
<section class="inside">
    <div class="inside-illu">
        <div class="inside__wrapper">
            <div class="inside__bg">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/image_2021_04_01T11_05_31_101Z.png" alt="image"></img>
            </div>
            <div class="container">
            <div class="inside__info text-center">
                <h2 class="h2-heading"><?php echo $main_heading;?></h2>
                <p class="paragraph big white"><?php echo $sub_heading;?></p>
            </div>
            <div class="inside__boxes">

                <?php

                if( have_rows('boxes') ):
                    while( have_rows('boxes') ) : the_row();
                        $box_image = get_sub_field('box_image');
                        $box_title = get_sub_field('box_title');
                        $box_description = get_sub_field('description'); ?>

                    <div class="inside__boxes--wrapper">
                    <!-- {/* <a href="#"> */} -->
                        <div class="inside__boxes-single inside__boxes-single--1">
                        <div class="first-side">
                            <div class="first-side-img">
                            	<img src="<?php echo $box_image;?>" alt="<?php echo $box_title;?>"/>
                            </div>
                            <hr/>
                            <h3 class="h3-heading white"><?php echo $box_title;?></h3>
                        </div>
                        <div class="second-side">
                            <p class="paragraph white">
                            <?php echo $box_description;?>
                            </p>
                        </div>
                        </div>
                    <!-- {/* </a> */} -->
                    </div>
                    <?php endwhile;
                else :
                    // Do something...
                endif; ?>

                    
                </div>
            </div>
        </div>
    </div>
</section>
   <?php endif ?>
<?php endwhile; ?>



   <?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'be_confident' ) :?>
   <?php

   $be_main_heading = get_sub_field('main_heading');
   $be_background_image = get_sub_field('background_image');
   $be_descriptions = get_sub_field('descriptions');
   ?>
<!-- Section Four -->
<div class="service__single">
    <div class="service__single-image service__single-image-1" 
    <?php if(!empty($be_background_image)) echo "style='background: url(".$be_background_image.")'"; ?>></div>
    <div class="service__single-info">
    <div class="service__single-info-wrapper service__single-info-wrapper-2">
        <h2 class="h2-heading"><?php echo $be_main_heading;?></h2>
        <p class="main-paragraph main-paragraph-light2"><?php echo $be_descriptions;?></p>
    </div>
    </div>
</div>
   <?php endif ?>
<?php endwhile; ?>



   <?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'quality_promise' ) :?>
   <?php

   $quality_main_heading = get_sub_field('main_heading');
   $quality_background_image = get_sub_field('background_image');
   $quality_descriptions = get_sub_field('descriptions');
   ?>
<div class="service__single">
    <div class="service__single-image service__single-image-2" 
    <?php if(!empty($quality_background_image)) echo "style='background: url(".$quality_background_image.")'"; ?>></div>
    <div class="service__single-info service__single-info-2 light-bg-color">
    <div class="service__single-info-wrapper service__single-info-wrapper-1">
        <div class="promise__info">
        <h2 class="h2-heading"><?php echo $quality_main_heading;?></h2>
        
        <?php if( have_rows('points') ): ?>
            <ul>
            <?php while( have_rows('points') ) : the_row();
                $point = get_sub_field('point'); ?>
                <li><?php echo $point;?></li>
            <?php endwhile; ?>
            </ul>
            <?php else :
                    // Do something...
                endif; ?>
        
        </div>
    </div>
    </div>
</div>
   <?php endif ?>
<?php endwhile; ?>




<!-- Section Five -->
<section class="clientle">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/pH_Balanced.svg" alt="image"/>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/Product_of_india.svg" alt="image"/>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/Cruelty_Free.svg" alt="image"/>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/For_all_skin.svg" alt="image"/>
            </div>
        </div>
    </div>
</section>


   <?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'testimonial' ) :?>
   <?php
   $testi_heading = get_sub_field('testi_heading');
   $testimonal = get_sub_field('testimonal');
   ?>
<!-- Section Six -->
<section class="cta">
   <div class="testi-bg" >
      <div class="demo" >
         <h2 class="h2-heading mb-5 mt-5 text-center" ><?php echo $testi_heading; ?></h2>
         <div class="container mt-5 pt-5" >
            <div class="row" >
               <div class="col-md-12 " >
                <div id="owl-demo" class="owl-carousel owl-theme">
                <?php
                    $args = array(
                     'post_type' => 'testimonial',
                     'order' => 'ASC',
                     'tax_query' => array(
                            array (
                                'taxonomy' => 'testi_category',
                                'field' => 'id',
                                'terms' => $testimonal,
                            )
                        ),
                    );
                    $tm_query = new WP_Query($args); 
                    ?>
                    <?php if ($tm_query->have_posts()) :  ?>
                    <?php while ($tm_query->have_posts()) : $tm_query->the_post();  ?>

                    <div class=" testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="description">
                            <?php echo get_the_content();?>
                            </div>
                        </div>
                        <h3 class="title"><?php the_title();?></h3>
                        <span class="post">
                            <?php 
                            $termss = get_the_terms( $post->ID, 'testi_category' );
                            if ( !empty( $termss ) ){
                                // get the first term
                                $term = array_shift( $termss );
                                echo $term->name;
                            }
                            ?>
                         </span>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata();  ?>
                    <?php endif; ?>
                </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
   <?php endif ?>
<?php endwhile; ?>


   <?php while ( have_rows('sections') ) : the_row();?>
   <?php if( get_row_layout() == 'blogs' ) :?>
   <?php

   $blog_heading = get_sub_field('blog_heading');
   $blog = get_sub_field('blog');
   $view_blog = get_sub_field('view_blog');
   ?>
<!-- Section Seven -->

<section class="follow-insta bloSection" >
   <div class="insta-feed" >
      <div class="container" >
         <h2 class="h2-heading mb-5 mt-5 text-center" ><?php echo $blog_heading;?></h2>
         
    <?php 
        $posts = get_posts(array(
            'posts_per_page'    => -1,
            'post_type'         => 'post',
            'category__in'      => $blog
        ));
        if( $posts ): ?> 
            <div class="row" >
            <?php foreach( $posts as $post ): 
                setup_postdata( $post );
                ?>
                
                <div class="col-lg-4" >
                   <div class="blog-grid" >
                      <div class="blog-img" >
                         <div class="date"><?php echo get_the_date( 'd M', $post->ID ); ?></div>
                         <a href="<?php the_permalink();?>" >
                            <?php 
                            if ( has_post_thumbnail() ) { ?>
                               <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  alt="<?php echo get_the_title(); ?>" />
                            <?php }
                            else { ?>
                                <img src="<?=site_url();?>/wp-content/uploads/2021/11/no-preview.png" alt="<?php echo get_the_title(); ?>" />
                            <?php }
                            ?>
                        </a>
                      </div>
                      <div class="blog-info" >
                         <h5 >
                            <a href="<?php the_permalink();?>" ><?php echo get_the_title(); ?></a>
                        </h5>
                         <div class="btn-bar" >
                            <a class="px-btn-arrow" href="<?php the_permalink();?>" >
                                <span >Read More</span>
                                <i class="arrow"></i>
                            </a>
                        </div>
                      </div>
                   </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <?php 
        if( $view_blog ): 
            $view_blog_url = $view_blog['url'];
            $view_blog_title = $view_blog['title'];
            $view_blog_target = $view_blog['target'] ? $view_blog['target'] : '_self';
            ?>
            <div class="checkout-btn text-center" >
            <a class="button" href="<?php echo esc_url( $view_blog_url ); ?>" target="<?php echo esc_attr( $view_blog_target ); ?>"><?php echo esc_html( $view_blog_title ); ?></a>
            </div>
        <?php endif; ?>
         
        
      </div>
   </div>
</section>
   <?php endif ?>
<?php endwhile; ?>
   <?php endif ?>
<?php  

get_footer();

?>
<?php

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<style>
.woocommerce div.product {
    margin-bottom: 0;
    position: relative;
    display: flex;
}
</style>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	//do_action( 'woocommerce_before_single_product_summary' );
	?>

		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		//do_action( 'woocommerce_single_product_summary' );
		?>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>

<?php //do_action( 'woocommerce_after_single_product' ); ?>


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
	        <?php  
	        if ($section_1_link_button) : ?>
	        <a href="<?php echo $link_url;?>" class="button" target="<?php echo $link_target;?>">
	        	<?php echo $link_title;?>
	    	</a>
	    <?php endif;?>
	    </div>
	</div>
</section>
   <?php endif ?>
<?php endwhile; ?>




<!-- Section Two -->
<section class="detail pb-5">
    <div class="bg-illus">
	    <div class="container">
	        <div class="detail__wrapper">
	        <div class="left__side ">
	            <div class="detail__bg__wrapper">
	           <?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
				?>
	            </div>
	        </div>
	        <?php
			$wplogoutURL = urlencode(get_the_permalink());
			$wplogoutTitle = urlencode(get_the_title());
			$wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
			?>

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
<?php 
if ( !empty( get_the_content() ) ) { ?>
<section class="prpduct-description">
    <div class="bg-illus">
	    <div class="container">
    		<div class="detail__info">
    			<h5 class="h5-heading">Description</h5>
    		</div>
    		<p class="paragraph">
        	<?php echo get_the_content();?>
        	</p>
	    </div>
	</div>
</section>
<?php } ?>






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
<div class="service__single service__single-1">
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
<div class="service__single service__single-2">
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






<?php endif ?>
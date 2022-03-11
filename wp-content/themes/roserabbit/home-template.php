<?php 

/**
* Template Name: Home Page New
*
*/

get_header('home');?>

            <div id="page-title-bar" class="page-title-bar"></div>
            <div class="site-content-contain">
               <div id="content" class="site-content">
                  <div class="wrap">
                     <div id="primary" class="content-area">
                        <main id="main" class="site-main">
							
                           <div data-elementor-type="wp-page" data-elementor-id="17" class="elementor elementor-17" data-elementor-settings="[]"> 
                              <div class="elementor-section-wrap">
                                <?php echo do_shortcode('[rev_slider alias="parallax_slider"][/rev_slider]'); ?>
    
                                <?php while ( have_rows('sections') ) : the_row();?>
                                    <?php if( get_row_layout() == 'two_products' ) :
                                        $product_one = get_sub_field('product_one');
                                            $pro_one_name = $product_one['product_name'];
                                            $pro_one_image = $product_one['product_image'];
                                            $pro_one_url = $product_one['product_url'];


                                        $product_two = get_sub_field('product_two');
                                            $pro_two_name = $product_two['product_name'];
                                            $pro_two_image = $product_two['product_image'];
                                            $pro_two_url = $product_two['product_url'];
                                        
                                        ?>
                                 <div class="elementor-section elementor-top-section elementor-element elementor-element-e70adc6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e70adc6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">

                                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-77d182c" data-id="77d182c" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-e79262e elementor-cta--skin-cover elementor-cta--valign-top call-to-action-wrapper-transform-none elementor-button-link content_animation-grow elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="e79262e" data-element_type="widget" data-widget_type="call-to-action.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-cta">
                                                      <div class="elementor-cta__bg-wrapper">
                                                         
                                                         <div class="elementor-cta__bg elementor-bg" style="background-image: url(<?php echo $pro_one_image; ?>);"></div>
                                                         <div class="elementor-cta__bg-overlay" style="background: #0000000f;"></div>
                                                      </div>
                                                      <div class="elementor-cta__content">
                                                         <h3 class="elementor-cta__title elementor-cta__content-item elementor-content-item elementor-animated-item--grow" data-letter="Natural BeautyCollection"> <?php echo $pro_one_name;?>
                                                         </h3>
                                                        <div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item elementor-animated-item--grow">
                                                            <?php if ( $pro_one_url ) : ?>
															
                                                            <a href="<?php echo $pro_one_url['url'];?>" class="elementor-cta__button elementor-button elementor-size-md">
                                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                                </span> 
                                                                <span><?php echo $pro_one_url['title'];?></span>
                                                            </a>
                                                            <?php endif; ?>
                                                        </div>

                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>


                                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ef414cf" data-id="ef414cf" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-c12a439 elementor-cta--skin-cover elementor-cta--valign-top call-to-action-wrapper-transform-none elementor-button-link content_animation-grow elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="c12a439" data-element_type="widget" data-widget_type="call-to-action.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-cta">
                                                      <div class="elementor-cta__bg-wrapper">
                                                         
                                                         <div class="elementor-cta__bg elementor-bg" style="background-image: url(<?php echo $pro_two_image; ?>);"></div>
                                                         <div class="elementor-cta__bg-overlay" style="background: #0000000f;"></div>
                                                      </div>
                                                      <div class="elementor-cta__content">
                                                         
                                                         <h3 class="elementor-cta__title elementor-cta__content-item elementor-content-item elementor-animated-item--grow" data-letter="Body Butter"><?php echo $pro_two_name;?></h3>
                                                         <div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item elementor-animated-item--grow">
                                                            <?php if ( $pro_two_url ) : ?>
															 
                                                            <a href="<?php echo $pro_two_url['url'];?>" class="elementor-cta__button elementor-button elementor-size-md">
                                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                                </span> 
                                                                <span><?php echo $pro_two_url['title'];?></span>
                                                            </a>
                                                            <?php endif; ?>
                                                        </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                    <?php endif ?>
                                <?php endwhile; ?>


 								<?php while ( have_rows('sections') ) : the_row();?>
								  <?php if( get_row_layout() == 'section_3_icon_box' ) :
								  $box_1 = get_sub_field('box_1');
								  $box_2 = get_sub_field('box_2');
								  $box_3 = get_sub_field('box_3');

								  ?>
                                <div class="elementor-section elementor-top-section elementor-element elementor-element-396a82b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="396a82b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1903px; left: -306.5px;">
                                   <div class="elementor-container elementor-column-gap-no">
									   
									  <?php if( $box_1 ): ?>
                                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d96a9f6" data-id="d96a9f6" data-element_type="column">
                                         <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-11a5191 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="11a5191" data-element_type="widget" data-widget_type="icon-box.default">
                                               <div class="elementor-widget-container">
                                                  <div class="elementor-icon-box-wrapper">
                                                   <?php if( $box_1['image'] ): ?>
                                                     <div class="elementor-icon-box-icon">
                                                         <span class="elementor-icon elementor-animation-">
                                                           <img src="<?php echo $box_1['image'];?>" width="80px" height="80px" />
                                                        </span>
                                                     </div>
                                                  <?php endif; ?>
                                                     <div class="elementor-icon-box-content">
                                                        <div class="elementor-icon-header">
                                                           <div class="elementor-icon-header-inner">
                                                              <h4 class="elementor-icon-box-title"> <span> <?php echo $box_1['title'];?> </span></h4>
                                                           </div>
                                                        </div>
                                                        <p class="elementor-icon-box-description"><?php echo $box_1['content'];?></p>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
									   <?php endif; ?>
									   
									   
									   <?php if( $box_2 ): ?>
                                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-775a0d2" data-id="775a0d2" data-element_type="column">
                                         <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-9ce56f7 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="9ce56f7" data-element_type="widget" data-widget_type="icon-box.default">
                                               <div class="elementor-widget-container">
                                                  <div class="elementor-icon-box-wrapper">
                                                     <?php if( $box_2['image'] ): ?>
                                                     <div class="elementor-icon-box-icon">
                                                         <span class="elementor-icon elementor-animation-">
                                                           <img src="<?php echo $box_2['image'];?>" width="80px" height="80px" />
                                                        </span>
                                                     </div>
                                                  <?php endif; ?>
                                                     <div class="elementor-icon-box-content">
                                                        <div class="elementor-icon-header">
                                                           <div class="elementor-icon-header-inner">
                                                              <h4 class="elementor-icon-box-title"> <span> <?php echo $box_2['title'];?> </span></h4>
                                                           </div>
                                                        </div>
                                                        <p class="elementor-icon-box-description"><?php echo $box_2['content'];?></p>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
									   <?php endif; ?>
									   
									   <?php if( $box_3 ): ?>
                                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-dfe96ee" data-id="dfe96ee" data-element_type="column">
                                         <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f47d5a0 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="f47d5a0" data-element_type="widget" data-widget_type="icon-box.default">
                                               <div class="elementor-widget-container">
                                                  <div class="elementor-icon-box-wrapper">
                                                     <?php if( $box_3['image'] ): ?>
                                                     <div class="elementor-icon-box-icon">
                                                         <span class="elementor-icon elementor-animation-">
                                                           <img src="<?php echo $box_3['image'];?>" width="80px" height="80px" />
                                                        </span>
                                                     </div>
                                                  <?php endif; ?>
                                                     <div class="elementor-icon-box-content">
                                                        <div class="elementor-icon-header">
                                                           <div class="elementor-icon-header-inner">
                                                              <h4 class="elementor-icon-box-title"> <span> <?php echo $box_3['title'];?> </span></h4>
                                                           </div>
                                                        </div>
                                                        <p class="elementor-icon-box-description"><?php echo $box_3['content'];?></p>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
									   <?php endif; ?>
									   
                                   </div>
                                </div>
								<?php endif ?>
                                <?php endwhile; ?>


								  <?php while ( have_rows('sections') ) : the_row();?>
								  <?php if( get_row_layout() == 'section_4_collection' ) :
								  $content_group = get_sub_field('content_group');
								  		$content_group_link_btn = $content_group['link_button'];
								  $product_image = get_sub_field('product_image');
								  $banner = get_sub_field('banner');

								  ?>
                                 <div class="elementor-section elementor-top-section elementor-element elementor-element-b626924 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b626924" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1903px; left: -306.5px; <?php if( !empty($banner) ){ ?> background-image: url(<?php echo $banner; ?>); <?php } ?>">
                                       <div class="elementor-container elementor-column-gap-no">
                                          <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-250ee7e" data-id="250ee7e" data-element_type="column">
                                             <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b02d78e elementor-cta--layout-image-left elementor-button-dark elementor-cta--tablet-layout-image-left elementor-cta--mobile-layout-image-above elementor-cta--valign-middle elementor-cta--skin-classic call-to-action-wrapper-transform-none elementor-animated-content elementor-widget elementor-widget-call-to-action" data-id="b02d78e" data-element_type="widget" data-widget_type="call-to-action.default">
                                                   <div class="elementor-widget-container">
                                                      <div class="elementor-cta">
                                                         <div class="elementor-cta__content">
                                                            
                                                            <h2 class="elementor-cta__title elementor-cta__content-item elementor-content-item" data-letter="Lookbook collection 2021"> 
																              <?php echo $content_group['heading'];?>
															               </h2>
                                                            <div class="elementor-cta__description elementor-cta__content-item elementor-content-item"> 
               																<?php echo $content_group['description'];?>
               															 </div>
               															 <?php if( $content_group_link_btn ):?>
               															 
                                                               <div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item ">
                  																<a href="<?php echo $content_group_link_btn['url'];?>" class="elementor-cta__button elementor-button elementor-size-md">
                  																	<span class="elementor-button-icon elementor-align-icon-right">
                  																		<i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  																	</span>
                  																	<span><?php echo $content_group_link_btn['title'];?></span>
                  																</a>
                  															</div>
               															 <?php endif; ?>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-67858de" data-id="67858de" data-element_type="column">
                                             <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-0b5447e elementor-widget elementor-widget-image" data-id="0b5447e" data-element_type="widget" data-widget_type="image.default">
													           <?php if( !empty($product_image) ): ?>
                                                   <div class="elementor-widget-container">
            													   <img width="440" height="560" src="<?php echo $product_image; ?>" class="attachment-full size-full" alt="" loading="lazy" srcset="<?php echo $product_image; ?> 440w, <?php echo $product_image; ?> 236w, <?php echo $product_image; ?> 220w" sizes="(max-width: 440px) 100vw, 440px">
            													</div>
													           <?php endif; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
									      <?php endif ?>
                                <?php endwhile; ?>


								  
								  <?php while ( have_rows('sections') ) : the_row();?>
								  <?php if( get_row_layout() == 'section_5_outlet' ) :
								  			$outlet_heading = get_sub_field('heading');
								  			$outlet_description = get_sub_field('description');
										  	$outlet_link = get_sub_field('link');  ?>
                                 <div class="elementor-section elementor-top-section elementor-element elementor-element-53e4d06 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="53e4d06" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-containerr elementor-column-gap-no">
                                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5948317" data-id="5948317" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-d75e80a elementor-cta--skin-cover elementor-cta--valign-middle elementor-button-dark call-to-action-wrapper-transform-none content_animation-grow elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="d75e80a" data-element_type="widget" data-widget_type="call-to-action.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-cta">
                                                      <div class="elementor-cta__bg-wrapper">
                                                         
                                                         <div class="elementor-cta__bg elementor-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/home/uploads/2021/04/h2-banner5.jpg);"></div>
                                                         <div class="elementor-cta__bg-overlay"></div>
                                                      </div>
                                                      <div class="elementor-cta__content">
                                                         <h2 class="elementor-cta__title elementor-cta__content-item elementor-content-item elementor-animated-item--grow" data-letter="Women&#039;s Outlet Further reductions. Up to 70% Off."> <?php echo $outlet_heading;?></h2>
                                                         <div class="elementor-cta__description elementor-cta__content-item elementor-content-item elementor-animated-item--grow"> 
               															  <?php echo $outlet_description;?>
               														  </div>
               														  <?php if( $outlet_link ) : ?>
                                                            <div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item elementor-animated-item--grow">
               															 <a href="<?php echo $outlet_link['url'];?>" class="elementor-cta__button elementor-button elementor-size-sm"> 
               																 <span class="elementor-button-icon elementor-align-icon-right">
               																	 <i class="fa fa-angle-double-right" aria-hidden="true"></i>
               																 </span>
               																 <span><?php echo $outlet_link['title'];?></span>
               															 </a>
               														  </div>
               														  <?php endif; ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								  
								  <?php endif ?>
                                <?php endwhile; ?>
								  
								  

								  
								  <?php while ( have_rows('sections') ) : the_row();?>
								  <?php if( get_row_layout() == 'section_6' ) :
								  			$sec_6_sub_heading = get_sub_field('sub_heading');
								  			$sec_6_main_heading = get_sub_field('main_heading');
								  			$sec_6_description = get_sub_field('description');
								  			//$sec_6_banners = get_sub_field('banners');
								  ?>
                                <div class="elementor-section elementor-top-section elementor-element elementor-element-6131aa7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6131aa7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1903px; left: -306.5px;">
                                    <div class="elementor-container elementor-column-gap-no">
                                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-54c53be" data-id="54c53be" data-element_type="column">
                                         <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-04676c8 elementor-position-above elementor-position-center elementor-widget elementor-widget-heading" data-id="04676c8" data-element_type="widget" data-widget_type="heading.default">
                                               <div class="elementor-widget-container">
                                                  <div class="elementor-heading-wrapper">
                                                     <div class="elementor-heading-wrapper-inner">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?php echo $sec_6_main_heading; ?></h2>
                                                        <span class="sub-title"><?php echo $sec_6_sub_heading; ?></span>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1153026 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor" data-id="1153026" data-element_type="widget" data-widget_type="text-editor.default">
                                               <div class="elementor-widget-container">
                                                  <div class="elementor-text-editor elementor-clearfix">
                                                     <p><?php echo $sec_6_description; ?></p>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="elementor-section elementor-inner-section elementor-element elementor-element-7d8c31f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7d8c31f" data-element_type="section">
                                               <div class="elementor-container elementor-column-gap-default">
                                                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a767e5d" data-id="a767e5d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													  <?php
														$num = 1;
													  if( have_rows('banners') ): ?>
														  <div class="sliders">
															  <?php while( have_rows('banners') ) : the_row();
															  	$banner_image = get_sub_field('banner_image'); ?>
															  	<img class="slides <?php if($num == 1) { ?>  active <?php } ?> " src="<?php echo $banner_image; ?>">
															 <?php $num++; endwhile; ?>
														  </div>
													  
														  <nav class="slider-nav" >
															  <ul>
																  <li class="arrow">
																	  <button class="previous">
																		  <span class="material-icons">keyboard_arrow_left</span>
																	  </button>
																  </li>
																  <li class="arrow">
																	  <button class="next">
																		  <span class="material-icons">keyboard_arrow_right</span>
																	  </button>
																  </li>
															  </ul>
														  </nav>
													  <?php endif; ?>
													  
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
								  <?php endif ?>
                                <?php endwhile; ?>
								  
								  



								  
								  <?php while ( have_rows('sections') ) : the_row();?>
								  <?php if( get_row_layout() == 'testimonials' ) :
								  			$testimonial = get_sub_field('testimonial');
								  ?>
                                <div class="elementor-section elementor-top-section elementor-element elementor-element-e9c04f3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e9c04f3" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3152387" data-id="3152387" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-57f97d1 elementor-testimonial-text-align-center owl-visible-item-no elementor-widget elementor-widget-opal-testimonials" data-id="57f97d1" data-element_type="widget" data-widget_type="opal-testimonials.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-testimonial-wrapper layout_1">
                                                      <div class="testim " id="testim">
														  <div class="wrap">
   														  <div class="cont" id="testim-content">
   														  <?php
   																$args = array(
   																 'post_type' => 'testimonial',
   																 'order' => 'ASC',
   																 'tax_query' => array(
   																		array (
   																			'taxonomy' => 'testi_category',
   																			'field' => 'id',
   																			'terms' => $testimonial,
   																		)
   																	),
   																);
   																$tm_query = new WP_Query($args); 
   																?>
   																<?php if ($tm_query->have_posts()) :  ?>
																     <?php while ($tm_query->have_posts()) : $tm_query->the_post();  ?>
                                                         <div class="elementor-testimonial-item">
                                                            <div class="item-box">
                                                               <div class="elementor-testimonial-content"> 
                                                                  <span class="material-icons format_quote">format_quote</span>
                                                                  <?php echo get_the_content();?>
															                  </div>
                                                               <div class="elementor-testimonial-meta elementor-testimonial-image-position-aside elementor-has-image">
                                                                  <div class="elementor-testimonial-meta-inner">
                                                                     <div class="elementor-testimonial-image">
                                                                        <div class="image-inner">
                  																			<?php 
                  																			if ( has_post_thumbnail() ) { ?>
                  																			   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  alt="<?php echo get_the_title(); ?>" />
                  																			<?php }
                  																			else { ?>
                  																				<img src="<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/images/placeholder.png" alt="<?php echo get_the_title(); ?>" />
                  																			<?php }
                  																			?>
                  																		 </div>
                                                                     </div>
                                                                     <div class="elementor-testimonial-details">
                  																		 <span class="elementor-testimonial-name"><?php the_title();?></span>
                  																		 <span class="elementor-testimonial-driver">-</span>
                  																		 <span class="elementor-testimonial-job">
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
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
														  	          <?php endwhile; ?>
													                 <?php wp_reset_postdata();  ?>
														  
													              <?php endif; ?>
														          </div>
      															      <div class="navigation">
         																  <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
         																   <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
         																   <ul class="dots" id="testim-dots">
         																	   <?php if ($tm_query->have_posts()) : 
         																	   $count = 1;
         																	   ?>
         																<?php while ($tm_query->have_posts()) : $tm_query->the_post();  ?>
         																	   <li class="dot <?php echo $count == 1 ? 'active' : '';?>"></li>
         																	   <?php endwhile; ?>
         																	   <?php wp_reset_postdata();  ?>
         																	   <?php endif; ?>
         																   </ul>
         															  </div>
         															  		
         														  </div>
                                                   </div>
													   
														   
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								    <?php endif ?>
                                <?php endwhile; ?>
								  
								  
								  
								  



								
								  <?php while ( have_rows('sections') ) : the_row();?>
								  <?php if( get_row_layout() == 'blogs' ) :
								  			$blog_heading = get_sub_field('heading');
								  			$blog_descriptions = get_sub_field('descriptions');
								  			$blog_id = get_sub_field('blog');
								  ?>
                                <div class="elementor-section elementor-top-section elementor-element elementor-element-294ed93 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="294ed93" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c3a11a8" data-id="c3a11a8" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-14c218b elementor-position-center elementor-position-below elementor-widget elementor-widget-heading" data-id="14c218b" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-heading-wrapper" >
                                                      <div class="elementor-heading-wrapper-inner">
                                                         <h2 class="elementor-heading-title elementor-size-default"><?php echo $blog_heading;?></h2>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-9a75629 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor" data-id="9a75629" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-text-editor elementor-clearfix">
                                                      <p><?php echo $blog_descriptions;?></p>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-0b26a70 elementor-widget elementor-widget-opal-post-grid" data-id="0b26a70" data-element_type="widget" data-widget_type="opal-post-grid.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-post-wrapper post-style-1">
													   <?php 
															$posts = get_posts(array(
																'posts_per_page'    => 3,
																'post_type'         => 'post',
																'category__in'      => $blog_id
															));
															if( $posts ): ?> 
                                                      <div class="row" data-elementor-columns="3" data-elementor-columns-tablet="2" data-elementor-columns-mobile="1">
														  
														  <?php foreach( $posts as $post ): 
														  	setup_postdata( $post );
														  ?>
                                                         <div class="column-item">
                                                            <div class="post-inner">
                                                               <div class="post-thumbnail">
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
                                                               <div class="post-content">
                                                                  <header class="entry-header">
                                                                     <h3 class="entry-title">
																		 <a href="<?php the_permalink();?>"><?php the_title();?></a>
																	  </h3>
                                                                     <div class="entry-meta">
																		 <a href="<?php the_permalink();?>" rel="bookmark">
																			 <time class="entry-date published" ><?php echo get_the_date( 'M d, Y', $post->ID ); ?></time>
																		 </a>
																	  </div>
                                                                  </header>
                                                               </div>
                                                            </div>
                                                         </div>
														  <?php endforeach; ?>
                                                      </div>
													   <?php wp_reset_postdata(); ?>
        											<?php endif; ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								  
								  <?php endif ?>
                                <?php endwhile; ?>


								  
								  
								   <?php while ( have_rows('sections') ) : the_row();?>
								  <?php if( get_row_layout() == 'instagram_feed' ) :
								  			$insta_heading = get_sub_field('heading');
								  			$insta_descriptions = get_sub_field('descriptions');
								  			$insta_id = get_sub_field('instagram');
								  ?>
                                 <div class="elementor-section elementor-top-section elementor-element elementor-element-694cecb elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="694cecb" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                       <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f7b094b" data-id="f7b094b" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-fb557d3 elementor-tablet-position-center elementor-position-below elementor-widget elementor-widget-heading" data-id="fb557d3" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-heading-wrapper" >
                                                      <div class="elementor-heading-wrapper-inner">
                                                         <h2 class="elementor-heading-title elementor-size-default"><?php echo $insta_heading;?></h2>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-fc0d6c6 elementor-widget elementor-widget-text-editor" data-id="fc0d6c6" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-text-editor elementor-clearfix">
                                                      <p><?php echo $insta_descriptions;?></p>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="elementor-element elementor-element-64010ec elementor-button-dark elementor-tablet-align-center elementor-widget elementor-widget-button" data-id="64010ec" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-button-wrapper">
            													   <a href="https://www.instagram.com/roseandrabbit_in/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
            														   <span class="elementor-button-content-wrapper">
            															   <span class="elementor-button-icon elementor-align-icon-right">
            																   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            															   </span>
            															   <span class="elementor-button-text">View More</span>
            														   </span>
            													   </a>
            													</div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-d926528" data-id="d926528" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                             <div class="elementor-element elementor-element-21cb3ee elementor-widget elementor-widget-opal-post-grid" data-id="21cb3ee" data-element_type="widget" data-widget_type="opal-post-grid.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-post-wrapper post-style-1">
														  <?php 
															$posts = get_posts(array(
																'posts_per_page'    => 2,
																'post_type'         => 'instagram_feed',
																'tax_query' => array(
																	array (
																		'taxonomy' => 'instagram_category',
																		'field' => 'id',
																		'terms' => $insta_id,
																	)
																),
															));
															if( $posts ): ?> 
                                                      <div class="row" data-elementor-columns="2" data-elementor-columns-tablet="2" data-elementor-columns-mobile="1">
														  
														  <?php foreach( $posts as $post ): 
														  	setup_postdata( $post );
														  ?>
                                                         <div class="column-item">
                                                            <div class="post-inner">
                                                               <div class="post-thumbnail">
																   <a href="<?php the_field('insta_post_url');?>" >
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
                                                               <div class="post-content">
                                                                  <header class="entry-header">
                                                                     <h3 class="entry-title">
																		 <a href="<?php the_field('insta_post_url');?>">
																			 <?php echo get_the_title(); ?>
																		 </a>
																	  </h3>
                                                                  </header>
                                                               </div>
                                                            </div>
                                                         </div>
														  <?php endforeach; ?>
                                                      </div>
													   <?php wp_reset_postdata(); ?>
        											<?php endif; ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								  
								  <?php endif ?>
                                <?php endwhile; ?>
								  
								  
                              </div>
                           </div>
                        </main>
                     </div>
                  </div>
               </div>
            </div>
            

<?php get_footer('home');?>
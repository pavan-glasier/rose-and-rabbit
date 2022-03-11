<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */
?>


<footer id="colophon" class="site-footer">
   <div class="wrap">
      <div class="containerr">
         <div data-elementor-type="wp-post" data-elementor-id="42" class="elementor elementor-42" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
               <div class="elementor-section elementor-top-section elementor-element elementor-element-94c9548 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="94c9548" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-227b369" data-id="227b369" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-section elementor-inner-section elementor-element elementor-element-7775085 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7775085" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
								  <?php $icon_boxes = get_field('icon_boxes', 'option'); 
										$box_1 = $icon_boxes['box_1'];
										$box_2 = $icon_boxes['box_2'];
										$box_3 = $icon_boxes['box_3'];
										?>
										<?php if($box_1) : ?>
                                 <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d3b8bcf" data-id="d3b8bcf" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
										
										
										
                                       <div class="elementor-element elementor-element-c6f107f elementor-mobile-position-top elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="c6f107f" data-element_type="widget" data-widget_type="icon-box.default">
                                          <div class="elementor-widget-container" style="margin-top: 0;">
                                             <div class="elementor-icon-box-wrapper">
                                                <div class="elementor-icon-box-icon">
													<span class="elementor-icon elementor-animation-">
                                                      <span class="material-icons" style="font-size: 70px;">local_shipping</span>
                                                   </span>
												 </div>
                                                <div class="elementor-icon-box-content">
                                                   <div class="elementor-icon-header">
                                                      <div class="elementor-icon-header-inner">
                                                         <h5 class="elementor-icon-box-title"> <span> <?php echo $box_1['title'];?> </span></h5>
                                                      </div>
                                                   </div>
                                                   <p class="elementor-icon-box-description"><?php echo $box_1['content'];?></p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
										
                                       <div class="elementor-element elementor-element-75d261f elementor-widget__width-initial elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-spacer" data-id="75d261f" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="spacer.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                             </div>
                                          </div>
                                       </div>
										
                                    </div>
                                 </div>
								  <?php endif; ?>
								  
								  <?php if($box_2) : ?>
                                 <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fde51ab" data-id="fde51ab" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-1e8a575 elementor-mobile-position-top elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1e8a575" data-element_type="widget" data-widget_type="icon-box.default">
                                          <div class="elementor-widget-container" style="margin-top: 0;">
                                             <div class="elementor-icon-box-wrapper">
                                                <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-">
                                                      <span class="material-icons" style="font-size: 70px;">payment</span>
                                                   </span></div>
                                                <div class="elementor-icon-box-content">
                                                   <div class="elementor-icon-header">
                                                      <div class="elementor-icon-header-inner">
                                                         <h5 class="elementor-icon-box-title"> <span> <?php echo $box_2['title'];?></span></h5>
                                                      </div>
                                                   </div>
                                                   <p class="elementor-icon-box-description"><?php echo $box_2['content'];?></p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="elementor-element elementor-element-7932f8d elementor-widget__width-initial elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-spacer" data-id="7932f8d" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="spacer.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								  <?php endif; ?>
								  
								  
								  <?php if($box_3) : ?>
                                 <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c0e3cfd" data-id="c0e3cfd" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-bd33af7 elementor-mobile-position-top elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="bd33af7" data-element_type="widget" data-widget_type="icon-box.default">
                                          <div class="elementor-widget-container" style="margin-top: 0;">
                                             <div class="elementor-icon-box-wrapper">
                                                <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-">
                                                      <span class="material-icons" style="font-size: 70px;">my_location</span>
                                                   </span></div>
                                                <div class="elementor-icon-box-content">
                                                   <div class="elementor-icon-header">
                                                      <div class="elementor-icon-header-inner">
                                                         <h5 class="elementor-icon-box-title"> <span><?php echo $box_3['title'];?> </span></h5>
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

                        </div>
                     </div>
                  </div>
               </div>

               <div class="elementor-section elementor-top-section elementor-element elementor-element-3a15764 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a15764" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="padding-top: 0;">
				   
				   <?php $newsletter = get_field('newsletter', 'option'); ?>
				   <?php if($newsletter) : ?>
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-664090e" data-id="664090e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-section elementor-inner-section elementor-element elementor-element-844f968 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="844f968" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-274bfae" data-id="274bfae" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
										<?php if( !empty($newsletter['heading'] ) ) : ?>
                                       <div class="elementor-element elementor-element-6bc2a79 elementor-position-center elementor-position-below elementor-widget elementor-widget-heading" data-id="6bc2a79" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-heading-wrapper">
                                                <div class="elementor-heading-wrapper-inner">
                                                   <h2 class="elementor-heading-title elementor-size-default"><?php echo $newsletter['heading'];?></h2>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
										<?php endif; ?>
										
										<?php if( !empty($newsletter['description'] ) ) : ?>
                                       <div class="elementor-element elementor-element-7144fe7 elementor-widget elementor-widget-text-editor" data-id="7144fe7" data-element_type="widget" data-widget_type="text-editor.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-text-editor elementor-clearfix">
                                                <p><?php echo $newsletter['description'];?></p>
                                             </div>
                                          </div>
                                       </div>
										<?php endif; ?>
										
										<?php if( !empty($newsletter['form'] ) ) : ?>
                                       <div class="elementor-element elementor-element-9d5bb90 mailchimp-button-dark elementor-mailchmip-column elementor-widget elementor-widget-opal-mailchmip" data-id="9d5bb90" data-element_type="widget" data-widget_type="opal-mailchmip.default">
                                          <div class="elementor-widget-container">
                                             <div class="form-style">
												 <?php $form = $newsletter['form'];?>
												 <?php echo do_shortcode($form);?>
                                             </div>
                                          </div>
                                       </div>
										<?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-30021b2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="30021b2" data-element_type="widget" data-widget_type="divider.default">
                              <div class="elementor-widget-container">
                                 <div class="elementor-divider"> <span class="elementor-divider-separator"> </span></div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
				   <?php endif;?>
				   
				   
				   
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-170614c" data-id="170614c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-section elementor-inner-section elementor-element elementor-element-094d0bf elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="094d0bf" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-acc09a6" data-id="acc09a6" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-6741e18 elementor-widget elementor-widget-image" data-id="6741e18" data-element_type="widget" data-widget_type="image.default">
                                          <div class="elementor-widget-container">
											  <?php $footer_logo = get_field('footer_logo', 'option'); ?>
											  <?php if( !empty($footer_logo) ) : ?>
                                             	<img src="<?php echo $footer_logo; ?>" class="attachment-full size-full" alt="" loading="lazy">
											  <?php else : ?>
											  	<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/main-logo.png" class="attachment-full size-full" alt="" loading="lazy">
											  <?php endif;?>
                                          </div>
                                       </div>
										<?php $content = get_field('content', 'option'); ?>
										<?php if(!empty($content)): ?>
                                       <div class="elementor-element elementor-element-fab38c6  elementor-widget-text-editor" data-id="fab38c6" data-element_type="widget" data-widget_type="text-editor.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-text-editor elementor-clearfix">
                								<?php echo $content; ?>
												 <?php 
													$link_button = get_field('link_button', 'option');
													$link_btn_target = $link_button['target'] ? $link_button['target'] : '_self';
													?>
											  </div>
											  <div>
												  <?php if($link_button): ?>
												 <a href="<?php echo $link_button['url']; ?>" class="elementor-cta__button more-btn elementor-size-md"  target="<?php echo $link_btn_target;?>">
													 <span class="elementor-button-icon elementor-align-icon-right">
														 <i class="fa fa-angle-double-right" aria-hidden="true"></i>
													 </span> 
													 <span><?php echo $link_button['title']?></span>
												 </a>
												 <?php endif; ?>
											  </div>
                                          </div>
                                       </div>
										<?php endif;?>
										
										<?php $contact_number = get_field('contact_number', 'option'); ?>
										<?php if( !empty($contact_number) ) : ?>
                                       <div class="elementor-element elementor-element-93b02a1  elementor-widget-text-editor" data-id="93b02a1" data-element_type="widget" data-widget_type="text-editor.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-text-editor elementor-clearfix"><?php echo $contact_number;?></div>
                                          </div>
                                       </div>
										<?php endif;?>
										
										<?php $email_id = get_field('email_id', 'option'); ?>
										<?php if( !empty($email_id) ) : ?>
                                       <div class="elementor-element elementor-element-6e7fba0 elementor-widget elementor-widget-text-editor" data-id="6e7fba0" data-element_type="widget" data-widget_type="text-editor.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-text-editor elementor-clearfix"><?php echo $email_id;?></div>
                                          </div>
                                       </div>
										<?php endif;?>
										
                                    </div>
                                 </div>
                                 <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1c4d43c" data-id="1c4d43c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
										<?php $column_two_title = get_field('column_two_title', 'option'); ?>
										<?php if($column_two_title): ?>
											
                                       <div class="elementor-element elementor-element-aa1519b elementor-position-left elementor-mobile-position-center elementor-position-below elementor-widget elementor-widget-heading" data-id="aa1519b" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-heading-wrapper">
                                                <div class="elementor-heading-wrapper-inner">
                                                   <h5 class="elementor-heading-title elementor-size-default"><?php echo $column_two_title;?></h5>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
										<?php endif; ?>
                                       <div class="elementor-element elementor-element-0931cb7 elementor-nav-menu__align-left elementor-nav-menu-mobile__align-center elementor-nav-menu--indicator-angle elementor-widget elementor-widget-opal-nav-menu" data-id="0931cb7" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;}" data-widget_type="opal-nav-menu.default">
                                          <div class="elementor-widget-container">
                                             <nav data-submenusminwidth="260" data-submenusmaxwidth="500" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
                                                
												 <?php $nav_menu = get_field('nav_menu', 'option'); ?>
													<?php
													$nav_menu_value = $nav_menu['value'];
													wp_nav_menu(
														array(
															'theme_location'    => $nav_menu_value,
															'container'         => 'ul',
															'menu_class'         => 'elementor-nav-menu',
															'fallback_cb'       => 'WP_Menu_Navwalker::fallback',
                                                            'walker'            => new WP_Menu_Navwalker()
														)
													);
													?>
                                             </nav>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								  
								  
								  <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1c4d43c" data-id="1c4d43c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
										<?php $column_three_title = get_field('column_three_title', 'option'); ?>
									<?php if($column_three_title): ?>
                                       <div class="elementor-element elementor-element-aa1519b elementor-position-left elementor-mobile-position-center elementor-position-below elementor-widget elementor-widget-heading" data-id="aa1519b" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-heading-wrapper">
                                                <div class="elementor-heading-wrapper-inner">
                                                   <h5 class="elementor-heading-title elementor-size-default"><?php echo $column_three_title;?></h5>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
										<?php endif; ?>
                                       <div class="elementor-element elementor-element-0931cb7 elementor-nav-menu__align-left elementor-nav-menu-mobile__align-center elementor-nav-menu--indicator-angle elementor-widget elementor-widget-opal-nav-menu" data-id="0931cb7" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;}" data-widget_type="opal-nav-menu.default">
                                          <div class="elementor-widget-container">
                                             <nav data-submenusminwidth="260" data-submenusmaxwidth="500" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
												 <?php $nav_menus = get_field('nav_menus', 'option'); ?>
                        						<?php $nav_menus_value = $nav_menus['value'];
													wp_nav_menu(
														array(
															'theme_location'    => $nav_menus_value,
															'container'         => 'ul',
															'menu_class'         => 'elementor-nav-menu',
															'fallback_cb'       => 'WP_Menu_Navwalker::fallback',
                                                            'walker'            => new WP_Menu_Navwalker()
														)
													);
													?>
                                             </nav>
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
               <div class="elementor-section elementor-top-section elementor-element elementor-element-2945771 elementor-section-height-min-height elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="2945771" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-20684e8" data-id="20684e8" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-cbc6b98 elementor-widget elementor-widget-text-editor" data-id="cbc6b98" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                 <div class="elementor-text-editor elementor-clearfix">
									 <?php if(!empty( get_field('copy_right_text', 'option'))) : ?>
									 <p> <?php echo get_field('copy_right_text', 'option');?> </p>
									 <?php else: ?>
                                    	<p>© ROSE & RABBIT.</p>
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
      </div>
   </div>
</footer>
</div>

</div>
<?php wp_footer(); ?>
<script>
   (function() {
      function maybePrefixUrlField() {
         if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
            this.value = "http://" + this.value;
         }
      }

      var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
      if (urlFields) {
         for (var j = 0; j < urlFields.length; j++) {
            urlFields[j].addEventListener('blur', maybePrefixUrlField);
         }
      }
   })();
</script>

<a href="#" class="scrollup">
   <span class="material-icons" style="font-size: 18px;">arrow_upward</span>
   <span class="scrollup-label">Top</span></a>

<link href="https://fonts.googleapis.com/css?family=Roboto:400%7CJost:400%2C600" rel="stylesheet" property="stylesheet" media="all">

<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/TweenMax.min4b68.js' id='tweenmax-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/tooltipster.bundle.min4b68.js' id='tooltipster-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/jquery-parallax4b68.js' id='parallaxmouse-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/jquery.smartmenus.min4b68.js' id='smartmenus-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/jquery.magnific-popup.min080f.js' id='magnific-popup-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/mlpushmenu4b68.js' id='pushmenu-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/classie4b68.js' id='pushmenu-classie-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/vendors/opal-megamenu-for-elementor/assets/js/frontend080f.js' id='opal-megamenu-frontend-js'></script>

<script src='<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/js/webpack.runtime.mina7da.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/js/frontend-modules.mina7da.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/lib/waypoints/waypoints.min05da.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/jquery/ui/core.min35d0.js' ></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/lib/swiper/swiper.min48f5.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/lib/share-link/share-link.mina7da.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/lib/dialog/dialog.mina288.js'></script>


<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7' id='regenerator-runtime-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script> 

<script id='beautifo-theme-js-js-extra'>
   var osfAjax = {
      "ajaxurl": "http:\/\/glasier.in\/roserabbit\/wp-admin\/admin-ajax.php"
   };
   var beautifoJS = {
      "quote": "<i class=\"fa-quote-right\"><\/i>",
      "smoothCallback": ""
   };
</script>

<script src='<?php echo get_template_directory_uri(); ?>/assets/home/beautifo/assets/js/theme5152.js?ver=1.0' id='beautifo-theme-js-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/beautifo/assets/js/sticky-layout080f.js?ver=5.8.2' id='beautifo-theme-sticky-layout-js-js'></script>

<script id='elementor-frontend-js-before'>
   var elementorFrontendConfig = {
      "environmentMode": {
         "edit": false,
         "wpPreview": false,
         "isScriptDebug": false
      },
      "i18n": {
         "shareOnFacebook": "Share on Facebook",
         "shareOnTwitter": "Share on Twitter",
         "pinIt": "Pin it",
         "download": "Download",
         "downloadImage": "Download image",
         "fullscreen": "Fullscreen",
         "zoom": "Zoom",
         "share": "Share",
         "playVideo": "Play Video",
         "previous": "Previous",
         "next": "Next",
         "close": "Close"
      },
      "is_rtl": false,
      "breakpoints": {
         "xs": 0,
         "sm": 480,
         "md": 768,
         "lg": 1025,
         "xl": 1440,
         "xxl": 1600
      },
      "responsive": {
         "breakpoints": {
            "mobile": {
               "label": "Mobile",
               "value": 767,
               "default_value": 767,
               "direction": "max",
               "is_enabled": true
            },
            "mobile_extra": {
               "label": "Mobile Extra",
               "value": 880,
               "default_value": 880,
               "direction": "max",
               "is_enabled": false
            },
            "tablet": {
               "label": "Tablet",
               "value": 1024,
               "default_value": 1024,
               "direction": "max",
               "is_enabled": true
            },
            "tablet_extra": {
               "label": "Tablet Extra",
               "value": 1200,
               "default_value": 1200,
               "direction": "max",
               "is_enabled": false
            },
            "laptop": {
               "label": "Laptop",
               "value": 1366,
               "default_value": 1366,
               "direction": "max",
               "is_enabled": false
            },
            "widescreen": {
               "label": "Widescreen",
               "value": 2400,
               "default_value": 2400,
               "direction": "min",
               "is_enabled": false
            }
         }
      },
      "version": "3.4.7",
      "is_static": false,
      "experimentalFeatures": {
         "e_dom_optimization": true,
         "a11y_improvements": true,
         "e_import_export": true,
         "landing-pages": true,
         "elements-color-picker": true,
         "admin-top-bar": true
      },
      "urls": {
         "assets": ""
      },
      "settings": {
         "page": [],
         "editorPreferences": []
      },
      "kit": {
         "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
         "global_image_lightbox": "yes",
         "lightbox_enable_counter": "yes",
         "lightbox_enable_fullscreen": "yes",
         "lightbox_enable_zoom": "yes",
         "lightbox_enable_share": "yes",
         "lightbox_title_src": "title",
         "lightbox_description_src": "description"
      },
      "post": {
         "id": 17,
         "title": "Home%202%20%E2%80%93%20Beautifo",
         "excerpt": "",
         "featuredImage": false
      }
   };
</script>

<script src='<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/js/frontend.mina7da.js?ver=3.4.7'></script>
<!-- <script src='<?php echo get_template_directory_uri(); ?>/assets/home/elementor/assets/js/preloaded-modules.mina7da.js?ver=3.4.7'></script> -->
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/beautifo-core/assets/js/elementor/frontend080f.js?ver=5.8.2'></script>
<script type="text/javascript">

jQuery(function() {
    jQuery('#email').keydown(function(e) {
        if( e.which === 32 && this.value === '' ) {
          return false;
        }
    });
  });
</script>

<script type="text/javascript">
    jQuery( document ).ready(function() {
    var $body = jQuery(document.body);
    var _SCROLL_FIXED_CUTOFF = _SCROLL_FIXED_CUTOFF || (jQuery(window).height() >= 825 ? 300 : 75),
      _HEADER_HEIGHT = _HEADER_HEIGHT || 825;
    
    jQuery(window).scroll(function(e) {
      if (jQuery('header.site-header[data-no-scroll]').length)
        return;
      if (this.pageYOffset >= _SCROLL_FIXED_CUTOFF && !$body.hasClass('scrolled')) {
        $body.addClass('scrolled');
        jQuery("header.site-header").addClass("scroll");
      } else if (this.pageYOffset < _SCROLL_FIXED_CUTOFF && $body.hasClass('scrolled')) {
        $body.removeClass('scrolled');
        jQuery("header.site-header").removeClass("scroll");
      }
      if (this.pageYOffset >= _HEADER_HEIGHT) {
        _header_carousel_active = false;
        
      } else {
        _header_carousel_active = true;
      }
    });
    });
</script>
<script>
    jQuery( document ).ready(function() {
        jQuery('.mp-level').attr('data-level', 1);
    });
</script>

<script type="text/javascript">
const items = document.querySelectorAll('img.slides');
const itemCount = items.length;
const nextItem = document.querySelector('.next');
const previousItem = document.querySelector('.previous');
let count = 0;

function showNextItem() {
  items[count].classList.remove('active');

  if(count < itemCount - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add('active');
  console.log(count);
}

function showPreviousItem() {
  items[count].classList.remove('active');

  if(count > 0) {
    count--;
  } else {
    count = itemCount - 1;
  }

  items[count].classList.add('active');
  console.log(count);
}

function keyPress(e) {
  e = e || window.event;
  
  if (e.keyCode == '37') {
    showPreviousItem();
  } else if (e.keyCode == '39') {
    showNextItem();
  }
}

nextItem.addEventListener('click', showNextItem);
previousItem.addEventListener('click', showPreviousItem);
document.addEventListener('keydown', keyPress);
</script>

<script>
var testim = document.getElementById("testim"),
    testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimleftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer
    ;
// coding with nick
window.onload = function () {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }
        if (slide < 0) {
            slide = currentSlide = testimContent.length - 1;
        }
        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }
        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(testimTimer);
        testimTimer = setTimeout(function () {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }
// coding with nick
    testimleftArrow.addEventListener("click", function () {
        playSlide(currentSlide -= 1);
    })
    testimRightArrow.addEventListener("click", function () {
        playSlide(currentSlide += 1);
    })

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function () {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }
    playSlide(currentSlide);

}
</script>
</body>

</html>
<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link media="all" href="<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-1.css" rel="stylesheet" />

<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-2.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-3.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-4.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-5.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-6.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-7.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-8.css' media='all' />

<style>
.elementor-21 .elementor-element.elementor-element-294ed93 {
    margin-bottom: 75px;
    padding: 0 15px;
}
.elementor-21 .elementor-element.elementor-element-c3a11a8.elementor-column>.elementor-widget-wrap {
    justify-content: center;
}
.elementor-17 .elementor-element.elementor-element-14c218b>.elementor-widget-container {
    margin: 0 0 30px;
}
.elementor-17 .elementor-element.elementor-element-9a75629>.elementor-widget-container {
    margin: 0 0 50px;
}
.elementor-21 .elementor-element.elementor-element-14c218b .elementor-heading-wrapper {
    text-align: center;
}
.elementor-21 .elementor-element.elementor-element-9a75629 {
    width: 50%;
    max-width: 50%;
}
.elementor-21 .elementor-element.elementor-element-9a75629 .elementor-text-editor {
    text-align: center;
}
.elementor-31 .elementor-element.elementor-element-b02d78e .elementor-cta__title {
     color: #000; 
}
.elementor-17 .elementor-element.elementor-element-53e4d06{
    margin-bottom: 0px;
}
/*#wptime-plugin-preloader {
    background: url(<?php echo site_url();?>/wp-content/uploads/2022/02/preloader.gif) no-repeat #fff 50%;
    -webkit-background-size: 64px 64px;
    background-size: 64px 64px;
}*/
body:not(.rtl).elementor-41 .elementor-element.elementor-element-75d261f {
    right: 0;
}
body:not(.rtl).elementor-41 .elementor-element.elementor-element-7932f8d {
    right: 0;
}
.elementor-nav-menu .sub-arrow{
    display: none;
}
.opal-icon-user:before, .handheld-footer-bar .my-account .my-accrount-footer:before {
    content: "\f007" !important;
    font: normal normal normal 26px/1 FontAwesome !important;
    line-height: 65px !important;
}
.opal-icon-search:before, .handheld-footer-bar .search .search-footer:before {
    content: "\f002" !important;
    font: normal normal normal 26px/1 FontAwesome !important;
    line-height: 65px !important;
}
.opal-icon-cart:before, .handheld-footer-bar .cart .footer-cart-contents:before {
    content: "\f290" !important;
    font: normal normal normal 26px/1 FontAwesome !important;
    line-height: 65px !important;
}
@font-face {
    font-family: FontAwesome;
    src: url(<?php echo get_template_directory_uri(); ?>/assets/home/fonts/fontawesome-webfont3e6e.eot?v=4.7.0);
    src: url(<?php echo get_template_directory_uri(); ?>/assets/home/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format('embedded-opentype'), url(<?php echo get_template_directory_uri(); ?>/assets/home/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'), url(<?php echo get_template_directory_uri(); ?>/assets/home/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'), url(<?php echo get_template_directory_uri(); ?>/assets/home/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'), url(<?php echo get_template_directory_uri(); ?>/assets/home/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format('svg');
    font-weight: 400;
    font-style: normal
}
header.site-header {
    position: fixed;
    width: 100%;
    background: #fff;
    /*transform: translate3d(0, 0, 0);*/
    transition: transform 420ms cubic-bezier(0.165, 0.84, 0.44, 1), 
    -webkit-transform 420ms cubic-bezier(0.165, 0.84, 0.44, 1);
    box-shadow: 0px 10px 24px -24px #aaa;
}
.scrolled header.site-header {
    animation-name: sticky;
    animation-duration: 1s;
}
body:not(.scrolled) header.site-header{
    animation-name: sticky1;
    animation-duration: 1s;
}
body:not(.scrolled) .site-content-contain{
    margin-top: 95px;
}

@keyframes sticky {
  0%   {transform:translate3d(0, 0, 0);}
  50%  {transform:translate3d(0, -150px, 0);}
  100% {transform:translate3d(0, 0, 0);}
}
@keyframes sticky1 {
    100% {transform:translate3d(0, 0, 0);}
  50%  {transform:translate3d(0, -150px, 0);}
   0%   {transform:translate3d(0, 0, 0);}
}
</style>
      <!-- <link rel='stylesheet' id='otf-fonts-css'  href='https://fonts.googleapis.com/css?family=Jost%3A400%7CJost%3A600&amp;subset=cyrillic%2Ccyrillic' media='all' />
      <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Jost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.2' media='all' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/jquery/jquery.minaf6c.js' id='jquery-core-js'></script> 
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/jquery/jquery-migrate.mind617.js' id='jquery-migrate-js'></script> 
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/modernizr.custom4b68.js' id='modernizr-js'></script>
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/revslider/public/assets/js/rbtools.minb7f2.js' id='tp-tools-js'></script> 
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/revslider/public/assets/js/rs6.mine434.js' id='revmin-js'></script> 
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/the-preloader/js/preloader-script.js' id='wptime-plugin-preloader-script-js'></script>
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/beautifo/assets/js/libs/owl.carousel77e6.js' id='owl-carousel-js'></script> 

        <script src='<?php echo get_template_directory_uri(); ?>/assets/home/beautifo-core/assets/js/carousel080f.js' id='otf-carousel-js'></script>

<script>
    function setREVStartSize(e){
         //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;    
            window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;   
            try {                               
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);        
                if(e.layout==="fullscreen" || e.l==="fullscreen")                       
                    newh = Math.max(e.mh,window.RSIH);                  
                else{                   
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];                    
                    e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                                        
                    var nl = new Array(e.rl.length),
                        ix = 0,                     
                        sl;                 
                    e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;                  
                    for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];                                 
                    for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}                                                         
                    var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);                    
                    newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }               
                if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));                 
                document.getElementById(e.c).height = newh+"px";
                window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";              
            } catch(e){
                console.log("Failure at Presize of Slider:" + e)
            }                      
         //});
          };
      </script> 
   </head>
   <body class="page-template page-template-page-elementor elementor-21 elementor-31 elementor-1882 elementor-41 elementor-42 elementor-43">
    <div id="wptime-plugin-preloader"></div>
      <div class="opal-wrapper">
         <div id="page" class="site">
            <header id="masthead" class="site-header">
               <div class="site-header">
                  <div class="container">
                     <div data-elementor-type="wp-post" data-elementor-id="35" class="elementor elementor-35" data-elementor-settings="[]">
                        <div class="elementor-section-wrap">
                           <!-- <div class="elementor-section elementor-top-section elementor-element elementor-element-8f9c609 elementor-section-height-min-height elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="8f9c609" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8919409" data-id="8919409" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-492b909 elementor-widget elementor-widget-text-editor" data-id="492b909" data-element_type="widget" data-widget_type="text-editor.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-text-editor elementor-clearfix">
                                              Free standard shipping on all U.S. orders.</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                           <div class="elementor-section elementor-top-section elementor-element elementor-element-9197613 elementor-section-stretched elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9197613" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-82bc5da" data-id="82bc5da" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-3d26973 elementor-nav-menu__align-left elementor-menu-toggle-tablet__align-right elementor-nav-menu--indicator-angle elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-menu-toggle__align-left elementor-widget elementor-widget-opal-nav-menu" data-id="3d26973" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="opal-nav-menu.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-menu-toggle" data-target="#menu-3d26973">
                                                <span class="material-icons">subject</span>
                                                <span class="menu-toggle-title"></span>
                                            </div>
                                             <nav class="elementor-nav-menu--canvas mp-menu mp-cover ">
                                                <ul id="menu-canvas-4-3d26973" class="nav-menu--canvas">
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-47">
                                                        <a href="#">Home
                                                            <i class="material-icons trigger">keyboard_arrow_down</i>
                                                        </a>
                                                      <!-- <i class="material-icons">keyboard_arrow_down</i> -->
                                                      <ul class="sub-menu">
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-17 current_page_item menu-item-49"><a href="#" aria-current="page">Home 2</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"><a href="#">Home 3</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="#">Home 4</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a href="#">Home 5</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="#">Home 6</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="#">Home 7</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a href="#">Home 8</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="#">Home 9</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a href="#">Home 10</a></li>
                                                      </ul>
                                                   </li>
                                                   
                                                   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-61">
                                                      <a href="#">Pages
                                                        <i class="material-icons trigger">keyboard_arrow_down</i>
                                                      </a>
                                                      <ul class="sub-menu">
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1896"><a href="../about-us-01/#">About us 01</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1895"><a href="../about-us-02/#">About us 02</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1894"><a href="../coming-soon/#">Coming soon</a></li>
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1893"><a href="../faq/#">Faq</a></li>
                                                      </ul>
                                                   </li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-64">
                                                      <a href="#">Blog
                                                        <i class="material-icons trigger">keyboard_arrow_down</i>
                                                      </a>
                                                      <ul class="sub-menu">
                                                         <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1077"><a href="../the-best-part-about-makeup-is-brush-and-its-types/#">Blog Single</a></li>
                                                      </ul>
                                                   </li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a href="#">Contact us</a></li>
                                                </ul>
                                             </nav>
                                             <nav class="elementor-nav-menu--mobile-enable elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none" data-subMenusMinWidth="260" data-subMenusMaxWidth="500">
                                                
                                                <?php
                                                    $menu = get_field('menu');
                                                    $menu_value = $menu['value'];
                                                    wp_nav_menu(
                                                        array(
                                                            'theme_location'    => $menu_value,
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
                                 <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5b53549" data-id="5b53549" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-8488403 elementor-widget elementor-widget-opal-site-logo elementor-widget-image" data-id="8488403" data-element_type="widget" data-widget_type="opal-site-logo.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <a href="<?php echo home_url();?>"> 
                                                        <?php 
                                                        $logo = get_field('logo');
                                                        if( !empty($logo) ) : ?>
                                                        <img src="<?php echo $logo; ?>" class="attachment-full size-full" alt="" loading="lazy" />
                                                    <?php endif;?>
                                                    </a>
                                                </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-66e1477 elementor-hidden-tablet elementor-hidden-phone" data-id="66e1477" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-e47022c elementor-align-right elementor-search-form--skin-full_screen elementor-widget elementor-widget-opal-header-group" data-id="e47022c" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;full_screen&quot;}" data-widget_type="opal-header-group.default">
                                          <div class="elementor-widget-container">
                                             <!-- <div class="site-header-wishlist">
                                                <div class="site-header-wishlist-config"><a class="opal-header-wishlist header-button" href="#">
                                                    <span class="material-icons">favorite_border</span>
                                                    <span class="count">0</span></a></div>
                                             </div> -->
                                             <!-- <div class="search-form">
                                                <form class="elementor-search-form" role="search" action="http://demo2.themelexus.com/beautifo" method="get">
                                                   <div class="elementor-search-form__toggle">
                                                    <span class="material-icons">search</span>
                                                </div>
                                                   <div class="elementor-search-form__container">
                                                      <div class="w-100 elementor-search-form--full-screen-inner">
                                                         <input placeholder="Search..." class="elementor-search-form__input elementor-search-form__input_product " type="search" name="s" title="Search" value="">
                                                         <div class="elementor-search-data-fetch" style="display:none;"></div>
                                                         <input type="hidden" name="post_type" value="product"/>
                                                         <div class="dialog-lightbox-close-button dialog-close-button"> 
                                                            <span class="material-icons">close</span>
                                                            <span class="elementor-screen-only">Close</span></div>
                                                      </div>
                                                   </div>
                                                </form>
                                             </div> -->
                                             <div class="account">
                                                <div class="site-header-account">
                                                    <a class="opal-header-account header-button" href="<?php echo site_url();?>/my-account/">
                                                        <span class="material-icons">person_outline</span>
                                                    </a>
                                                   <!-- <div class="account-dropdown">
                                                      <div class="account-wrap">
                                                         <span class=""></span>
                                                         <div class="account-inner ">
                                                            <div class="login-form-head pb-1 mb-3 bb-so-1 bc d-flex align-items-baseline justify-content-between"> <span class="login-form-title">Sign in</span> <span class="pull-right"> <a class="register-link" href="#"
                                                               title="Register">Create an Account</a> </span></div>
                                                            <form class="opal-login-form-ajax" data-toggle="validator">
                                                               <p> <label>Username or email <span class="required">*</span></label> <input name="username" type="text" required placeholder="Username"></p>
                                                               <p> <label>Password <span class="required">*</span></label> <input name="password" type="password" required placeholder="Password"></p>
                                                               <button type="submit" data-button-action class="btn btn-primary btn-block w-100 mt-1"> <span>Login</span></button> <input type="hidden" name="action" value="osf_login"> <input type="hidden" id="security-login" name="security-login" value="4e3131a5e0" /><input type="hidden" name="_wp_http_referer" value="/beautifo/home-2/" />
                                                            </form>
                                                            <div class="login-form-bottom"> <a href="#" class="mt-2 lostpass-link d-inline-block" title="Lost your password?">Lost your password?</a></div>
                                                         </div>
                                                      </div>
                                                   </div> -->
                                                </div>
                                             </div>
                                             <div class="cart-woocommerce">
                                                <div class="site-header-cart menu d-flex">
                                                    <?php echo do_shortcode("[woocommerce_cart_icon]"); ?>
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
               </div>
            </header>
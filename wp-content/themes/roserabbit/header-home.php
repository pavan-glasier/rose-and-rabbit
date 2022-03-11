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

<link rel='shortcut icon' type='image/x-icon' href="<?php echo site_url();?>/wp-content/uploads/2022/02/favicon.png" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link media="all" href="<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-1.css" rel="stylesheet" />

<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-2.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-3.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-4.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-5.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-6.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-7.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/home/styles/style-8.css' media='all' />
<script src='<?php echo get_template_directory_uri(); ?>/assets/home/jquery/jquery.minaf6c.js' ></script> 
<style>
rs-layer#slider-3-slide-5-layer-1 {
    width: 315px !important;
}
[data-key="rs-5"] #slider-3-slide-5-layer-3 rs-layer-wrap:nth-of-type(1) {
    top: 70px !important;
}
[data-key="rs-5"] #slider-3-slide-5-layer-3 a rs-layer-wrap:nth-of-type(1) {
    top: 300px !important;
}
[data-key="rs-5"] rs-group-wrap {
    left: 500px !important;
}
[data-key="rs-5"] rs-group-wrap ~ rs-layer-wrap ~ rs-layer-wrap.rs-parallax-wrap {
    left: 950px !important;
}
[data-key="rs-5"] rs-group-wrap ~ rs-layer-wrap ~ rs-layer-wrap ~ rs-layer-wrap.rs-parallax-wrap.tp-parallax-container:nth-last-child(1) {
    left: 890px !important;
    top: 225px !important;
}
[data-key="rs-5"] rs-group-wrap ~ rs-layer-wrap ~ rs-layer-wrap ~ rs-layer-wrap.rs-parallax-wrap.tp-parallax-container:nth-last-child(2) {
    left: 850px !important;
}
[data-key="rs-5"] rs-group-wrap ~ rs-layer-wrap ~ rs-layer-wrap ~ rs-layer-wrap.rs-parallax-wrap.tp-parallax-container:nth-last-child(3) {
    left: 1400px !important;
}
img.tp-rs-img {
    height: auto !important;
}
.elementor-31 .elementor-element.elementor-element-0b5447e>.elementor-widget-container {
    margin: 190px 0 0;
}
.elementor-31 .elementor-element.elementor-element-0b5447e>.elementor-widget-container img{
    background: #efefef;
    padding: 0px;
}
.elementor-widget-opal-post-grid .post-thumbnail {
    padding-top: 100%;
}
.elementor-element.elementor-element-fb557d3 {
    margin-bottom: 0;
}
.elementor-17 .elementor-element.elementor-element-694cecb .elementor-widget-opal-post-grid .post-thumbnail a:before {
    content: "\f16d";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #0000008c;
    z-index: 1;
    font: normal normal normal 44px/1 FontAwesome;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
	border-radius: 15px;
	transform: rotate(0deg) scale(0);
    transition: all .4s ease-out;
}
.elementor-17 .elementor-element.elementor-element-694cecb .elementor-widget-opal-post-grid .post-thumbnail a:hover:before {
	transform: rotate(360deg) scale(1);
}
.elementor-17 .elementor-element.elementor-element-3ad165a{
	margin-top: 96px;
}
.elementor-21 .elementor-element.elementor-element-294ed93 {
    margin-bottom: 75px;
    padding: 0 15px;
}
.elementor-21 .elementor-element.elementor-element-c3a11a8.elementor-column>.elementor-widget-wrap {
    justify-content: center;
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
.opal-icon-times::before {
    content: "\f00d";
    font: normal normal normal 14px/1 FontAwesome !important;
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
    animation-duration: .3s;
}
body:not(.scrolled) header.site-header{
    animation-name: sticky1;
    animation-duration: .3s;
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
rs-fullwidth-wrap#rev_slider_5_1_forcefullwidth {
    margin-top: 90px !important;
}
rs-layer-wrap.rs-parallax-wrap.round-circle.tp-parallax-container:before {
    content: "";
    position: absolute;
    top: 25px;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 2;
    border: 100px solid #00000005;
    border-radius: 100%;
    width: 650px;
    height: 650px;
    margin: 0 auto;
}
.elementor-17 .elementor-element.elementor-element-e70adc6 {
    margin-top: 75px;
}
.more-btn {
    padding: 10px 0 0 0;
    display: inline-block;
    font-size: 14px;
}
a.elementor-item > i.fa {
    margin-right: 12px;
}
.elementor-42 .elementor-element.elementor-element-9d5bb90 .mc4wp-form-fields {
    display: grid;
    justify-content: unset;
}
.elementor-42 .elementor-element.elementor-element-9d5bb90 .mc4wp-form-fields .wpcf7-form-control-wrap.your-email {
    width: 100%;
}
.mc4wp-form-fields button[type=submit] {
    width: 160px;
    margin: 0 auto;
}
.wpcf7-spinner {
    margin: 10px auto 0 !important;
}
.wpcf7 form.invalid .wpcf7-response-output{
	background: #ffb900;
}
.wpcf7 form .wpcf7-response-output {
    margin: 0em 0.50em 0em !important;
}

	
	
/* SLIDER CUSTOM */
.sliders{
	border-radius: 20px;
    overflow: hidden;
}
nav.slider-nav {
    position: absolute;
    top: 50%;
    width: 100%;
}

.slider-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
}
/*  .slider-nav li {
   display: flex;
   flex: 2;
   text-align: center;
} */
.slider-nav ul li.arrow button {
    border: none;
    background: #fff;
    width: 30px;
    height: 30px;
    border-radius: 100%;
    margin: 0 10px;
    text-align: center;
    padding: 0;
}
 img.slides {
   max-width: 100%;
   display: none;
   box-shadow: 10px 10px 20px 0 rgba(94, 47, 59, 0.2);
}
 img.slides.active {
   display: block;
   animation: fadeImg 0.8s;
}

 .slider-nav a {
   flex-basis: 100%;
   display: flex;
   align-items: center;
}
 .slider-nav span {
   display: block;
   width: 100%;
}
 @keyframes fadeImg {
   from {
     opacity: 0;
  }
   to {
     opacity: 1;
  }
}
 
 	

	
	
/* TESTIM */
.testim{
    width: 100%;
/*     position: absolute;
    top: 50%;
    transform: translateY(-50%); */
}
.testim .wrap{
    position: relative;
    width: 100%;
    max-width: 1020px;
    margin: auto;
}
.testim	.navigation {
    position: relative;
    top: 75px;
}
.testim .navigation span {
    display: none;
}
.testim .arrow{
    display: block;
    position: absolute;
    color: #eee;
    cursor: pointer;
    font-size: 2em;
    top: 50%;
    transform: translateY(-50%);
    transition: all .3s ease-in-out;
    padding: 5px;
    z-index: 22222222;
}
.testim .arrow:before{
    cursor: pointer;
}
.testim .arrow.left{
    left: 10px;
}
.testim .arrow.right{
    right: 10px;
}
.testim .arrow:hover{
    color: #ea830e;
}
.testim .dots{
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: 60px;
    left: 0;
    display: block;
    z-index: 3333;
    height: 12px;
}
.testim .dots .dot {
    list-style-type: none;
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 0 2px;
    cursor: pointer;
    transition: all .5s ease-in-out;
    position: relative;
    background: #dedede;
}
.testim .dots .dot.active, .testim .dots .dot:hover {
    background: #f2a09d;
    border-color: #f2a09d;
}

.testim .dots .dot.active{
    animation: testim-scale .5s ease-in-out forwards;
}
.testim .cont{
    position: relative;
    overflow: hidden;
}
.testim .cont > div{
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0 0 70px 0;
    opacity: 0;
}
.testim .cont > div.inactive{
    opacity: 0;
}
.testim .cont > div.active{
    
    position: relative;
    opacity: 1;
    
}
.testim .cont div .img img{
    display: block;
    width: 100px;
    height: 100px;
    margin: auto;
    border-radius: 50%;
}
.testim .cont div h2{
    color: #ea830e;
    font-size: 1em;
    margin: 15px 0;
}
/* .testim .cont div p{
    font-size: 1.15em;
    color: #eee;
    width: 80%;
    margin: auto;
} */

.testim .cont div.active img{
    animation: testim-show .5s ease-in-out forwards;
}
.testim .cont div.active span{
    animation: testim-content-in .4s ease-in-out forwards;
}
.testim .cont div.active p {
    animation: testim-content-in .5s ease-in-out forwards;
}
.testim .cont div.inactive img{
    animation: testim-hide .5s ease-in-out forwards;
}
.testim .cont div.inactive span{
    animation: testim-content-out .4s ease-in-out forwards;
}
.testim .cont div.inactive p {
    animation: testim-content-out .5s ease-in-out forwards;
}

@keyframes testim-scale {
    0% {
        box-shadow: 0px 0px 0px 0px #eee;
    }
    35% {
        box-shadow: 0px 0px 10px 5px #eee;
    }
    70% {
        box-shadow: 0px 0px 10px 5px #f2a09d;
    }
    100% {
        box-shadow: 0px 0px 0px 0px #f2a09d;
    }
}

@keyframes testim-content-in {
    from {
        opacity: 0;
        transform: translateX(100%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
@keyframes testim-content-out {
    from {
        opacity: 1;
        transform: translateX(0);
    }
    to {
        opacity: 0;
        transform: translateX(-100%);
    }
}
@keyframes testim-show {
    from {
        opacity: 0;
        transform: scale(0);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}
@keyframes testim-hide {
    from {
        opacity: 1;
        transform: scale(1);
    }
    to {
        opacity: 0;
        transform: scale(0);
    }
}


/* Responsive */

@media all and (max-width: 300px) {
    body {
        font-size: 14px;
    }
}
@media all and (max-width: 500px) {
	rs-layer-wrap.rs-parallax-wrap.round-circle.tp-parallax-container:before {
		border: 50px solid #00000005;
		width: 340px;
		height: 340px;
	}
	.elementor-section.elementor-top-section.elementor-element.elementor-element-b626924:before {
		content: "";
		background: #ffffffa6;
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
	}
	.elementor-1882 .elementor-element.elementor-element-04676c8 .elementor-heading-title {
		font-size: 30px;
	}
	.elementor-31 .elementor-element.elementor-element-0b5447e>.elementor-widget-container {
		margin: 0 0 30px;
	}
    .elementor-31 .elementor-element.elementor-element-b02d78e .elementor-cta__title:not(:last-child) {
        margin-bottom: 20px;
    }
    .elementor-31 .elementor-element.elementor-element-b02d78e .elementor-cta__description:not(:last-child) {
        margin-bottom: 20px;
    }
    .testim .arrow{
        font-size: 1.5rem;
    }
	nav.slider-nav {
		top: 42%;
	}
    .menu-bottom {
        top: 88%;
        position: absolute;
        z-index: 9;
        width: 100%;
        display: flex;
        height: 30px;
        justify-content: center;
    }
    .menu-bottom a{
        padding: 0 20px;
    }
    .menu-bottom a.opal-header-account:after {
        content: "";
        border: 1px solid #b3b3b34a;
        height: 20px;
        right: 0;
        position: absolute;
    }
	.elementor-21 .elementor-element.elementor-element-9a75629 {
		width: 100%;
		max-width: 100%;
	}
	.elementor-43 .elementor-element.elementor-element-3a15764 {
		padding-bottom: 0px;
	}

	
}
</style>
      <!-- <link rel='stylesheet' id='otf-fonts-css'  href='https://fonts.googleapis.com/css?family=Jost%3A400%7CJost%3A600&amp;subset=cyrillic%2Ccyrillic' media='all' />
      <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Jost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.2' media='all' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/jquery/jquery.minaf6c.js' id='jquery-core-js'></script> 
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/jquery/jquery-migrate.mind617.js' id='jquery-migrate-js'></script> 
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/js/libs/modernizr.custom4b68.js' id='modernizr-js'></script>
<!--       <script src='<?php echo get_template_directory_uri(); ?>/assets/home/revslider/public/assets/js/rbtools.minb7f2.js' id='tp-tools-js'></script> 
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/revslider/public/assets/js/rs6.mine434.js' id='revmin-js'></script>  -->
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/the-preloader/js/preloader-script.js' id='wptime-plugin-preloader-script-js'></script>
      <script src='<?php echo get_template_directory_uri(); ?>/assets/home/beautifo/assets/js/libs/owl.carousel77e6.js' id='owl-carousel-js'></script> 
        <script src='<?php echo get_template_directory_uri(); ?>/assets/home/beautifo-core/assets/js/carousel080f.js' id='otf-carousel-js'></script>
<?php wp_head(); ?>
   </head>
   <body class="page-template page-template-page-elementor elementor-21 elementor-31 elementor-1882 elementor-41 elementor-42 elementor-43">
	   <?php //wp_body_open(); ?>
    <div id="wptime-plugin-preloader"></div>
      <div class="opal-wrapper">
         <div id="page" class="site">
            <header id="masthead" class="site-header">
               <div class="site-header">
                  <div class="container">
                     <div data-elementor-type="wp-post" data-elementor-id="35" class="elementor elementor-35" data-elementor-settings="[]">
                        <div class="elementor-section-wrap">
                           
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

												 <?php
                                                    $menu = get_field('menu');
                                                    $menu_value = $menu['value'];
                                                    wp_nav_menu(
                                                        array(
                                                            'theme_location'    => $menu_value,
                                                            'container'         => 'ul',
                                                            'menu_class'         => 'nav-menu--canvas',
                                                            'fallback_cb'       => 'WP_Menu_Navwalker::fallback',
                                                            'walker'            => new WP_Menu_Navwalker()
                                                        )
                                                    );
                                                    ?>
                                                    <div class="menu-bottom">
                                                        <a class="opal-header-account header-button" href="<?php echo site_url();?>/my-account/">
                                                            <span class="material-icons">person_outline</span>
                                                        </a>
                                                        <div class="site-header-cart menu d-flex">
                                                            <?php echo do_shortcode("[woocommerce_cart_icon]"); ?>
                                                        </div>
                                                    </div>
                                                    
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
                                             <div class="account">
                                                <div class="site-header-account">
                                                    <a class="opal-header-account header-button" href="<?php echo site_url();?>/my-account/">
                                                        <span class="material-icons">person_outline</span>
                                                    </a>
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
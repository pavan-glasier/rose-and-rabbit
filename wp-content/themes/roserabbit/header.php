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
<meta name="Robots" content="all"/>
<meta name="Googlebot" content="index, follow"/>
<meta name="Yahoobot" content="index, follow"/>
<meta name="MSNbot" content="index, follow"/>
<meta name="allow-search" content="yes"/>
<meta name="rating" content="General"/>
<meta name="document-distribution" content="Global"/>
<meta name="language" content="EN">
<meta name="author" content="Rose and Rabbit"/>
<meta name="copyright" content="roseandrabbit.com"/>
<meta name="replyto" content="info.roserabbit@gmail.com"/>
<meta name="geo.country" content="India">
<meta name="document-type" content="Public">
<meta name="document-rating" content="Safe for Kids"/>
	
<!---- Twitter Card Meta Tag ----->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@roseandrabbit" />
<meta name="twitter:creator" content="@roseandrabbit" />
<meta name="twitter:title" content="Buy Facewash for Oily Skin - Dry Skin | Creamy Facial Wash" />
<meta name="twitter:description" content="Buy the best facewash for removing oil and dry skin. Its unique formula solidifies your face oil, making it easier to remove blackheads and other impurities." />
<meta name="twitter:image" content="https://www.roseandrabbit.com/assets/images/main-logo.png"/>
<!---- Twitter Card Meta Tag ----->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2614278488880971');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2614278488880971&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<link rel='shortcut icon' type='image/x-icon' href="<?php echo site_url();?>/wp-content/uploads/2022/02/favicon.png" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css' media='all' />
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css' media='all' />
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css' media='all' />
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.min.css' media='all' />
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/owl.transitions.css' media='all' />
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/style.css' media='all' />
	
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css' media='all' />
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap' media='all' />
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' media='all' />
	
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#" id="scroll" style="display: none"><span></span></a>
    <div class="preloader" style="">
        <svg class="preloader__svg" width="307" height="47" viewBox="0 0 307 47" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path class="preloader__svg-path" d="M0.311996 1.2H10.68V37.552H33.144V46H0.311996V1.2Z" stroke="white"
            strokeWidth="2" />
        <path class="preloader__svg-path"
            d="M59.883 46.768C55.2323 46.768 51.0297 45.7653 47.275 43.76C43.563 41.7547 40.6403 39.0027 38.507 35.504C36.4163 31.9627 35.371 27.9947 35.371 23.6C35.371 19.2053 36.4163 15.2587 38.507 11.76C40.6403 8.21866 43.563 5.44533 47.275 3.44C51.0297 1.43467 55.2323 0.431999 59.883 0.431999C64.5337 0.431999 68.715 1.43467 72.427 3.44C76.139 5.44533 79.0617 8.21866 81.195 11.76C83.3283 15.2587 84.395 19.2053 84.395 23.6C84.395 27.9947 83.3283 31.9627 81.195 35.504C79.0617 39.0027 76.139 41.7547 72.427 43.76C68.715 45.7653 64.5337 46.768 59.883 46.768ZM59.883 37.936C62.5283 37.936 64.9177 37.3387 67.051 36.144C69.1843 34.9067 70.8483 33.2 72.043 31.024C73.2803 28.848 73.899 26.3733 73.899 23.6C73.899 20.8267 73.2803 18.352 72.043 16.176C70.8483 14 69.1843 12.3147 67.051 11.12C64.9177 9.88267 62.5283 9.264 59.883 9.264C57.2377 9.264 54.8483 9.88267 52.715 11.12C50.5817 12.3147 48.8963 14 47.659 16.176C46.4643 18.352 45.867 20.8267 45.867 23.6C45.867 26.3733 46.4643 28.848 47.659 31.024C48.8963 33.2 50.5817 34.9067 52.715 36.144C54.8483 37.3387 57.2377 37.936 59.883 37.936Z"
            stroke="white" strokeWidth="2" />
        <path class="preloader__svg-path"
            d="M121.066 36.4H100.266L96.298 46H85.674L105.642 1.2H115.882L135.914 46H125.034L121.066 36.4ZM117.802 28.528L110.698 11.376L103.594 28.528H117.802Z"
            stroke="white" strokeWidth="2" />
        <path class="preloader__svg-path"
            d="M140.562 1.2H160.914C165.778 1.2 170.066 2.13866 173.778 4.016C177.533 5.85066 180.434 8.45333 182.482 11.824C184.573 15.1947 185.618 19.12 185.618 23.6C185.618 28.08 184.573 32.0053 182.482 35.376C180.434 38.7467 177.533 41.3707 173.778 43.248C170.066 45.0827 165.778 46 160.914 46H140.562V1.2ZM160.402 37.488C164.882 37.488 168.445 36.2507 171.09 33.776C173.778 31.2587 175.122 27.8667 175.122 23.6C175.122 19.3333 173.778 15.9627 171.09 13.488C168.445 10.9707 164.882 9.712 160.402 9.712H150.93V37.488H160.402Z"
            stroke="white" strokeWidth="2" />
        <path class="preloader__svg-path" d="M193.437 1.2H203.805V46H193.437V1.2Z" stroke="white" strokeWidth="2" />
        <path class="preloader__svg-path"
            d="M255.525 1.2V46H247.013L224.677 18.8V46H214.437V1.2H223.013L245.285 28.4V1.2H255.525Z" stroke="white"
            strokeWidth="2" />
        <path class="preloader__svg-path"
            d="M296.396 22.896H305.868V41.072C303.436 42.9067 300.62 44.3147 297.42 45.296C294.22 46.2773 290.999 46.768 287.756 46.768C283.106 46.768 278.924 45.7867 275.212 43.824C271.5 41.8187 268.578 39.0667 266.444 35.568C264.354 32.0267 263.308 28.0373 263.308 23.6C263.308 19.1627 264.354 15.1947 266.444 11.696C268.578 8.15467 271.522 5.40267 275.276 3.44C279.031 1.43467 283.255 0.431999 287.948 0.431999C291.874 0.431999 295.436 1.09333 298.636 2.416C301.836 3.73866 304.524 5.65866 306.7 8.176L300.044 14.32C296.844 10.9493 292.983 9.264 288.46 9.264C285.602 9.264 283.063 9.86133 280.844 11.056C278.626 12.2507 276.898 13.936 275.66 16.112C274.423 18.288 273.804 20.784 273.804 23.6C273.804 26.3733 274.423 28.848 275.66 31.024C276.898 33.2 278.604 34.9067 280.78 36.144C282.999 37.3387 285.516 37.936 288.332 37.936C291.319 37.936 294.007 37.296 296.396 36.016V22.896Z"
            stroke="white" strokeWidth="2" />
        </svg>
    </div>


<header class="header">
    <nav class="nav">
        <div class="container">
            <div class="dis-flex">
                <div class="menus">
                    
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'    => 'primary',
                                'container'         => 'ul',
                                'menu_class'         => 'nav_menu'
                            )
                        );
                        ?>
                </div>
                <div class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php $sticky_logo = get_field('sticky_logo', 'option'); ?>
                    	<?php if($sticky_logo): ?>
                        <img src="<?php echo $sticky_logo;?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
                    	<?php else: ?>
                    	<img src="<?php echo get_template_directory_uri();?>/assets/images/main-logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
                    	<?php endif; ?>
                    </a>
                </div>
                <div class="icon-menus">
                    <div class="checkout-btn text-right">
                        <?php 
                        $login_button = get_field('login_button', 'option');
                        $checkout_button = get_field('checkout_button', 'option');
                        $login_target = $login_button['target'] ? $login_button['target'] : '_self';
                        $checkout_target = $checkout_button['target'] ? $checkout_button['target'] : '_self';
                        ?>
        	        	<?php if($login_button): ?>
        	        	<a href="<?php echo esc_url($login_button['url']); ?>" class="account" target="<?php echo esc_attr( $login_target ); ?>"> <span class="material-icons">person_outline</span> </a>
        	        	<?php endif; ?>
                    	

                    	<?php 
                        $cart_url = wc_get_cart_url();
                        $cart_count = WC()->cart->cart_contents_count;
                        ?>
                        <a href="<?php echo esc_url($cart_url); ?>" class="cart-item" data-count="<?php echo $cart_count;?>"> 
                            <span class="material-icons">shopping_basket</span> 
                        </a>
        	           
                    </div>
                </div>
            </div>
        </div>
	</nav>
		<div class="mobile-menu">
			<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php $sticky_logo = get_field('sticky_logo', 'option'); ?>
					<?php if($sticky_logo): ?>
					<img src="<?php echo $sticky_logo;?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
					<?php else: ?>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/main-logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
					<?php endif; ?>
				</a>
			</div>

			<div class="mobile-nav-menu">
				<button class="toggle-btn">
					<span class="material-icons" style="font-size: 30px;">subject</span>
				</button>
				
				<div class="menu">
					<button class="close-btn">
						<span class="material-icons">clear</span>
					</button>
						<?php
                        wp_nav_menu(
                            array(
                                'theme_location'    => 'primary',
                                'container'         => 'ul',
                                'menu_class'         => 'nav-ul'
                            )
                        );
                        ?>

                    <div class="menu-bottom">
                        <?php 
                        $login_button = get_field('login_button', 'option');
                        $checkout_button = get_field('checkout_button', 'option');
                        $login_target = $login_button['target'] ? $login_button['target'] : '_self';
                        $checkout_target = $checkout_button['target'] ? $checkout_button['target'] : '_self';
                        ?>
                        <?php if($login_button): ?>
                        <a href="<?php echo esc_url($login_button['url']); ?>" class="account" target="<?php echo esc_attr( $login_target ); ?>"> <span class="material-icons">person_outline</span> </a>
                        <?php endif; ?>
                        

                        <?php 
                        $cart_url = wc_get_cart_url();
                        $cart_count = WC()->cart->cart_contents_count;
                        ?>
                        <a href="<?php echo esc_url($cart_url); ?>" class="cart-item" data-count="<?php echo $cart_count;?>"> 
                            <span class="material-icons">shopping_basket</span> 
                        </a>
                    </div>
				</div>


			</div>
		</div>
 
</header>
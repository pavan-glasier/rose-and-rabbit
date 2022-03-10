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


<div class="hidden-xs wave__footer">
                <div class="wave__ft"></div>
            </div>
            <footer class="footer">
                <div class="container">
                <div class="footer__wrapper row">
                	<?php $column_one_title = get_field('column_one_title', 'option'); ?>
                	<?php $content = get_field('content', 'option'); ?>
                	<?php 
                	$link_button = get_field('link_button', 'option');
                	$link_btn_target = $link_button['target'] ? $link_button['target'] : '_self';
                	?>
                    <div class="footer__wrapper-single col-md-4">
                    <ul>
                    	<?php if($column_one_title): ?>
                    		<li><?php echo $column_one_title;?></li>
                    	<?php endif; ?>

                    	<?php if($content): ?>
                    		<li><label><?php echo $content;?></label></li>
                    	<?php endif; ?>

                    	<?php if($link_button): ?>
                    		<li><a href="<?php echo $link_button['url']?>" target="<?php echo $link_btn_target;?>"><?php echo $link_button['title']?></a></li>
                    	<?php endif; ?>
                        
                    </ul>
                    </div>
                    <div class="footer__wrapper-single col-md-4 pl-10">
                    <ul>
                    	<?php $column_two_title = get_field('column_two_title', 'option'); ?>
                        <?php if($column_two_title): ?>
                    		<li><?php echo $column_two_title;?></li>
                    	<?php endif; ?>

                    </ul>
                    <?php $nav_menu = get_field('nav_menu', 'option'); ?>
						<?php
						$nav_menu_value = $nav_menu['value'];
						wp_nav_menu(
							array(
								'theme_location'    => $nav_menu_value,
								'container'         => 'ul',
                                'menu_class'         => 'footer-menu',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
							)
						);
						?>
                    
                    </div>
                    <div class="footer__wrapper-single col-md-4">
                        <ul>
                            <?php $column_three_title = get_field('column_three_title', 'option'); ?>
                            <?php if($column_three_title): ?>
                                <li><?php echo $column_three_title;?></li>
                            <?php endif; ?>
                        </ul>
                    
                    <?php $nav_menus = get_field('nav_menus', 'option'); ?>
                        <?php
                        $nav_menus_value = $nav_menus['value'];
                        wp_nav_menu(
                            array(
                                'theme_location'    => $nav_menus_value,
                                'container'         => 'ul',
                                'menu_class'         => 'footer-menu',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
                            )
                        );
                        ?>
                    
                    </div>
                </div>
                <div class="footer__copy">
                    <h6><?php echo get_field('copy_right_text', 'option');?></h6>
                </div>
                </div>
            </footer>

<?php wp_footer(); ?>


<script>
    $(window).on('load', function () {
      $("body").addClass("loaded");
    });
</script>
<script>
    $(document).ready(function () {
      $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: false,
        navigation: true,
        slideSpeed: 8000,
        singleItem: true,
        transitionStyle: "goDown",
        navigationText: ["", ""],
        autoPlay: true,
      });
    });
</script>
<script>
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200 && !$('nav').hasClass('open')) {
        $('nav').addClass('open');
        $('nav').slideDown();
      } else if ($(this).scrollTop() <= 200) {
        $('nav').removeClass('open');
        $('nav').slideUp();
      }
    });
</script>
<script>
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('#scroll').fadeIn();
        } else {
          $('#scroll').fadeOut();
        }
      });
      $('#scroll').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
      });
    });
    
</script>
<script>
//    $(document).ready(function(){
//       $('#login-btn').click(function(){   
//       $("#login").toggle();  
//       $("#register").hide(1000);   
//   });
//   $('#register-btn').click(function(){   
//       $("#register").toggle() ; 
//       $("#login").hide(1000);   
//   });

//   $('#forgot-password').click(function(){   
//       $("#forgot-pass").toggle();   
//       $("#login").hide(1000);   
//   });

//   $('#back-login').click(function(){   
//       $("#login").toggle();   
//       $("#forgot-pass").hide(1000);   
//   });
// });
 </script>
<script>
//   $("#billing").show();
//   $(".check-bill").click(function() {
//     $("#billing").toggle(1000);
//   });

// $(".bottom-box").hide();
//   $("#submit-btn").click(function() {
//     $(".bottom-box").toggle(1000);
//   });
</script>
<script>
// $(document).ready(function(){
//   //$("input").prop('required',true);

// });
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
 
});
  </script>
  <script>
$(document).ready(function(){
$(".up-button, .down-button").on('click',function(e){
    e.preventDefault();
    $(".button").prop('disabled',false);
    $(".button").attr('aria-disabled',false)
});

});
  </script>
</body>
</html>

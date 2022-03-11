<?php 

/**
* Template Name: About Us
*
*/

get_header();
?>
<style>

	@font-face {
		font-family: BestRock;
		src: url('<?php echo get_template_directory_uri(); ?>/assets/font/Best-Rock.ttf');
	}

	@font-face {
		font-family: JosefinSans;
		src: url('<?php echo get_template_directory_uri(); ?>/assets/font/JosefinSans-Bold.ttf');
	}

	@font-face {
		font-family: JosefinSans;
		src: url('<?php echo get_template_directory_uri(); ?>/assets/font/JosefinSans-Regular.ttf');
	}

	@font-face {
		font-family: JosefinSans;
		src: url('<?php echo get_template_directory_uri(); ?>/assets/font/JosefinSans-SemiBold.ttf');
	}

	.main-font {
		font-family: BestRock;
		font-size: 45px;
	}

	.other-font {
		font-family: JosefinSans;
		text-transform: uppercase;
		font-size: 35px;
	}

	.text-first,
	.text-third {
		font-family: JosefinSans;
		text-transform: uppercase;
	}

	.text-second,
	.text-fourth {
		font-family: BestRock;
	}

	.letter {
		font-size: 50px;
	}
</style>

<section class="about-bg">
    <div  class="container">
        <div class="row p-l-4">
            <div class="col-md-6">
                <div class="top-section">
<!--                     <h1 class="text-one">
                        <span class="simple-font"><?php the_title();?></span>
                    </h1> -->
					<div class="text-first">
						<p>Just &nbsp a </p>
					</div>
					<div class="text-second">
						<p class="main-font"> girl &nbsp boss</p>
					</div>
					<div class="text-third">
						<p class="other-font">building &nbsp her</p>
					</div>
					<div class="text-fourth">
						<p class="main-font">empire</p>
					</div>
                </div>
                <p><?php echo get_the_content();?></p>
            </div>
            <div class="col-md-6">
                <?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" >
                <?php }
                else { ?>
                    <img src="<?=site_url();?>/wp-content/uploads/woocommerce-placeholder.png" >
                <?php }
                ?>
                
            </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        var textWrapper = document.querySelector('.text-first ');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        anime.timeline({ loop: true })
            .add({
                targets: '.text-first .letter',
                translateX: [40, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 2000,
                delay: (el, i) => 500 + 30 * i
            })
    </script>
    <script>
        var textWrapper = document.querySelector('.text-second ');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        anime.timeline({ loop: true })
            .add({
                targets: '.text-second .letter',
                translateX: [40, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 1500,
                delay: (el, i) => 1000 + 30 * i
            })
    </script>
    <script>
        var textWrapper = document.querySelector('.text-third ');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        anime.timeline({ loop: true })
            .add({
                targets: '.text-third .letter',
                translateX: [40, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 1000,
                delay: (el, i) => 1500 + 30 * i
            })
    </script>
    <script>
        var textWrapper = document.querySelector('.text-fourth ');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        anime.timeline({ loop: true })
            .add({
                targets: '.text-fourth .letter',
                translateX: [40, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 500,
                delay: (el, i) => 2000 + 30 * i
            })
    </script>
<?php  

get_footer();

?>
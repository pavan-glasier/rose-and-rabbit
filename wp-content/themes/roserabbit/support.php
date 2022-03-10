<?php 

/**
* Template Name: Support Page
*
*/

get_header();
?>
<section class="container mt-100 mb-100">
    <div class="title">
        <h1>Support</h1>
        <a class="text-right" href="<?php echo home_url();?>"><h4>BACK TO HOME</h4> </a>
        <?php echo do_shortcode('[contact-form-7 id="448" title="Contact form 1"]');?>
     </div>
</section>



<?php  get_footer(); ?>
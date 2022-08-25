<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage custom
 * @since custom
 */



?>

<?php
$lang = get_bloginfo("language");
$lang_var = '';
if ($lang == 'ar') {
    $lang_var = '_ar';
}
?>






<?php
$the_query = new WP_Query('page_id=324');
while ($the_query->have_posts()) :
    $the_query->the_post();

    $light_logo = get_field('light_logo');
    $dark_logo = get_field('dark_logo');
    $email_address = get_field('email_address');
    $email_address_text = get_field('email_address_text');
    $contact_number = get_field('contact_number');
    $contact_number_text = get_field('contact_number_text');
    $fax_number = get_field('fax_number');
    $fax_number_text = get_field('fax_text');
    $address = get_field('address');
    $copy_write_text = get_field('copy_write_text'); 

    $footer_title_text = get_field('footer_title_text');
    $footer_detail_text = get_field('footer_detail_text');

    

endwhile;
wp_reset_postdata(); ?>


<!--footer section start-->
<footer class="footer-wrap">
    <div class="footer footer-top section section-md bg-primary text-white">
        <div class="container">


            <div class="row footer-logo-holder">
                <div class="col-sm-6 col-lg-4 mb-4 mobile-mb-0">
                    <a class="footer-brand mr-lg-5 d-flex" href="<?php echo home_url();?>">
                        <img src="<?php echo $light_logo['url'];?>" class="mr-3" alt="<?php echo $light_logo['alt'];?>">
                    </a>
                    <h1><?php echo $footer_title_text;?></h1> 
                </div>

            </div>



            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 mb-4">

                    <p class="-my-4"><?php echo $footer_detail_text;?></p>
                    <div class="btn-wrapper mt-4">

                        <ul class="footer-social-ul">
                            
                            <?php if (have_rows('social_media_icon')) : ?>

<?php while (have_rows('social_media_icon')) : the_row();
    $name = get_sub_field('name');
    $link = get_sub_field('link');
    $i_class = get_sub_field('i_class');
?>
   
   <li><a href="<?php echo $link;?>"><span aria-hidden="true" class="fab fa-<?php echo $i_class;?>"></span></a></li>
                      


<?php endwhile; ?>
<?php endif; ?>


</ul>



                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 mb-lg-0">

                    <ul class="links-vertical contact-links">
                        <li><a target="_blank" href="#"> <?php echo $address;?></a></li>
                        <li><a target="_blank" href="mailto:<?php echo $email_address;?>"> <?php echo $email_address_text;?>: <?php echo $email_address;?></a></li>
                        <li><a target="_blank" href="tel:<?php echo $contact_number;?>"><?php echo $contact_number_text;?>: <?php echo $contact_number;?></a></li>
                        <li><a target="_blank" href="tel:<?php echo $fax_number;?>"> <?php echo $fax_number_text;?>: <?php echo $fax_number;?></a></li>
                    </ul>


                </div>
                <div class="col-6 col-sm-3 col-md-2 col-lg-3 mb-4 mb-lg-0"> 
                    <?php
                    $defaults = array(
                        'theme_location'  => 'Top primary menu',
                        'menu'            => 'Footer Menu Main',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s links-vertical bold-links">%3$s</ul>',
                    );
                    wp_nav_menu($defaults);
                    ?>
                </div>
                <div class="col-6 col-sm-3 col-md-2 col-lg-2">


                    <?php
                    $defaults = array(
                        'theme_location'  => 'Top primary menu',
                        'menu'            => 'Footer Menu Secondary',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s links-vertical bold-links">%3$s</ul>',
                    );
                    wp_nav_menu($defaults);
                    ?>

                </div>
            </div>
        </div>
    </div>

    <div class="footer py-3 bg-primary text-white border-top border-variant-default">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex text-center justify-content-center align-items-center">
                        <p class="copyright pb-0 mb-0"><?php echo date('Y'); ?> <?php echo $copy_write_text;?> Website von <a href="https://edelwerke.org/" target="_blank" style="text-decoration:underline; color:#fff; ">edelwerke</a>  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer section end-->
<!--scroll bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class=" fas fa-angle-up"></span>
</button>
<!--scroll bottom to top button end-->

<!--build:js-->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/jquery-3.5.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/jquery.easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/mixitup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/headroom.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/smooth-scroll.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/jquery.waypoints.min.js"></script>
<!--<script src="assets/js/vendors/countUp.min.js"></script>-->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/jquery.countdown.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendors/validator.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>
<!--endbuild-->


<?php wp_footer(); ?>


</body>

</html>
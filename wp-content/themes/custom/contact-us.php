<?php

/**
 * Template Name: Contact us
 *
 * This is the template that displays simple page like about us, our mission e.t.c.
 * @package WordPress
 * @subpackage custom
 * @since custom
 */


get_header();
?>






<?php
$lang = get_bloginfo("language");
$lang_var = '';
if ($lang == 'ar') {
    $lang_var = '_ar';
}
?>





<?php while (have_posts()) : the_post();
    $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    if ($feature_image == '') {
        $feature_image = get_template_directory_uri() . '/assets/img/no-image.jpg';
    }

    $page_header_title = get_field('page_header_title');
    $page_header_text = get_field('page_header_text');

    $header_logo = get_field('header_logo');
    $footer_logo = get_field('footer_logo');
    $email_address = get_field('email_address');
    $contact_number = get_field('contact_number');
    $fax_number = get_field('fax_number');
    $address = get_field('address');
    $copy_write_text = get_field('copy_write_text');
    $footer_title_text = get_field('footer_title_text');

    $contact_block_title = get_field('contact_block_title');
    $contact_block_text = get_field('contact_block_text');

    

    $image = get_field('image');
    $image_url = $image['url'];
    if ($image_url == '') {
        $image_url = get_field('inner_page_header_image', 'option');
        $image_url =  $image_url['url'];
    }





?>






<div class="main page-6 contact-page">


    <!--hero section start-->
    <section class="section pt-10 pb-8 section-header mobile-section-header " style="background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="hero-slider-content text-center">
                        <span class="text-uppercase">&nbsp;</span>
                        <h1 class="display-2"><?php echo get_the_content();?></h1> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <div class="contact-body-form">


        <!--Custom Blue text section :  Start-->
        <section class="section section-lg  section-padding-bottom-none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5 text-center text-white">
                            <h2> <?php echo $contact_block_title;?></h2>
                            <?php echo $contact_block_text;?> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Custom Blue text section :  End-->




        <!--contact us section start-->
        <section class="section  text-white section-sm   mobile-pb0 mobile-pt0">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around">

                   


                    <div class="col-12 col-md-7">
                        <div class="contact-us-form  rounded p-1">
                        <?php echo do_shortcode('[contact-form-7 id="477" title="Kontact Form"]');?>
                           
 
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--contact us section end-->


    </div>
    <!--===== ===== ===== ===== My Code End here ===== ===== ===== ===== -->




</div>

<?php endwhile;
wp_reset_postdata(); ?>

<?php get_footer(); ?>
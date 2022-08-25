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



    $image = get_field('image');
    $image_url = $image['url'];
    if ($image_url == '') {
        $image_url = get_field('inner_page_header_image', 'option');
        $image_url =  $image_url['url'];
    }





?>




    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area" style="background: url('<?php echo $feature_image; ?>') no-repeat center center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12">
                    <div class="wpo-breadcumb-wrap custom-header-main-title">
                        <h1><?php echo $page_header_title; ?> </h1>
                    </div>

                    <div class="header-box">
                        <h3><?php echo $page_header_text; ?> </h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->



    <!-- start of breadcumb-section -->
    <div class="custom-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li><a href="<?php echo get_the_permalink(2); ?> "><?php echo get_the_title(2); ?> </a></li>
                        <li><a href="javascript:"><?php echo get_the_title(); ?> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->





    <!-- start wpo-contact-pg-section -->
    <section class="wpo-contact-pg-section section-padding-small">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 offset-lg-1">
                    <div class="office-info">
                        <div class="row">
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <i class="fi flaticon-placeholder"></i>
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Address</h2>
                                        <p><?php echo $address; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <i class="fi flaticon-email"></i>
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Email Us</h2>
                                        <p><?php echo $email_address; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <i class="fi flaticon-phone-call"></i>
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Call Now</h2>
                                        <p><?php echo $contact_number; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-contact-title">
                        <?php the_content(); ?>
                    </div>
                    <div class="wpo-contact-form-area">
                        <div class="contact-validation-active-" id="contact-form-main-">

                            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]');  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-contact-pg-section -->

    <!--  start wpo-contact-map -->
    <?php /*
        <section class="wpo-contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="wpo-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
            </div>
        </section>
        */ ?>
    <!-- end wpo-contact-map -->


    <!-- start wpo-newslatter-section -->
    <section class="wpo-newslatter-section section-bg section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="wpo-section-title-s2">
                        <h2>Subscribe to our Newsletters</h2>
                        <p>Don’t Wanna Miss Somethings? Subscribe Right Now And Get The Special
                            Discount And Monthly Newsletter.</p>
                    </div>
                </div>
            </div>
            <div class="wpo-newsletter">
                <div class="newsletter-form">
                    <form>
                        <input type="email" class="form-control" placeholder="Enter Your Email Address..." required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
        <!-- <div class="n-shape">
                <img src="assets/images/nshape1.png" alt="">
            </div>
            <div class="n-shape2">
                <img src="assets/images/nshape2.png" alt="">
            </div> -->
    </section>
    <!-- end wpo-newslatter-section -->


<?php endwhile;
wp_reset_postdata(); ?>

<?php get_footer(); ?>
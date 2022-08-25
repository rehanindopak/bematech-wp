<?php

/**
 *  
 * @package WordPress
 * @subpackage custom
 * @since custom
 */

get_header();

?>

<?php while (have_posts()) : the_post();

    $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    if ($feature_image == '') {
        $no_image_url = get_field('header_image', 'option');
        $feature_image =  $no_image_url['url'];
    }



    $header_title = get_field('header_title');
    $header_text = get_field('header_text');
    $header_button_text = get_field('header_button_text');
    $header_button_link = get_field('header_button_link');
    $header_sub_title = get_field('header_sub_title');
    $header_sub_text = get_field('header_sub_text');
    $header_sub_button_text = get_field('header_sub_button_text');
    $header_sub_button_link = get_field('header_sub_button_link');

    $header_image = get_field('header_image');
    $header_image_url = $header_image['url'];
    // print'<pre>';print_r($header_image);
    if ($header_image_url == '') {
        $no_image_url = get_field('no_image', 'option');
        $header_image_url =  $no_image_url['url'];
    }

?>





    <div class="main">


        <div class="custom-header-rantangle">


            <!--hero section start-->
            <section class="section pt-9 pb-9 section-header text-white">
                <img class="header-side-image" src="<?php echo $header_image_url; ?>" alt="bematech">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-7">
                            <div class="hero-slider-content">
                                <h1 class="display-2"><?php echo $header_title ?></h1>
                                <p class="lead"><?php echo $header_text ?></p>

                                <?php if ($header_button_text != '') { ?>
                                    <a href="<?php echo $header_button_link['url']; ?>" class="btn btn-outline-secondary-dark align-items-center mt-4"><?php echo $header_button_text; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--hero section end-->

            <!-- Custom Header second part : team section start-->
            <section class="section section-lg text-white custom-header-extra ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-7 col-lg-6">
                            <div class="section-heading text-center mb-5">
                                <h2><?php echo $header_sub_title; ?></h2>
                                <p class="lead"><?php echo $header_sub_text; ?></p>
                                <?php if ($header_sub_button_text != '') { ?>
                                    <a href="<?php echo $header_sub_button_link['url']; ?>" class="btn btn-outline-secondary-dark align-items-center mt-4"><?php echo $header_sub_button_text; ?></a>
                                <?php } ?>



                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Custom Header second part  : team section  end-->

        </div>







        <!-- Custom Services : features section start-->
        <section class="section custom-services homepage-services  section-lg section-padding-top-none-  ">
            <div class="container">

                <div class="row">


                    <?php if (have_rows('services_content')) : ?>

                        <?php while (have_rows('services_content')) : the_row();
                            $services_repeater_icon = get_sub_field('services_icon');
                            $services_repeater_title = get_sub_field('services_repeater_title');
                            $services_repeater_text = get_sub_field('services_repeater_text');
                        ?>

                            <div class="col-sm-6 col-md-4 col-lg-4 mb-5">
                                <!-- Icon box -->
                                <div class="icon-box text-center">
                                    <div class="card-icon mb-4">
                                        <img src="<?php echo $services_repeater_icon['url']; ?>" alt="<?php echo $services_repeater_title; ?>" class="img-fluid">
                                    </div>
                                    <h2 class="h5"><?php echo $services_repeater_title; ?></h2>
                                    <p class="mb-0"><?php echo $services_repeater_text; ?></p>
                                </div>
                                <!-- End of Icon box -->
                            </div>


                        <?php endwhile; ?>
                    <?php endif; ?>





                </div>
            </div>
        </section>
        <!-- Custom Services : features section End-->








        <!--Custom cta Image With Bill Icons: about section start-->

        <?php

        $cta_block_title = get_field('cta_block_title');
        $cta_block_text = get_field('cta_block_text');
        $cta_block_button_text = get_field('cta_block_button_text');
        $cta_block_button_action = get_field('cta_block_button_action');
        $cta_block_image = get_field('cta_block_image');
        $parallax_direction = get_field('parallax_direction');

        $cta_block_image = get_field('cta_block_image');
        $cta_block_image_url = $cta_block_image['url'];
        // print'<pre>';print_r($header_image);
        if ($cta_block_image_url == '') {
            $no_image_url = get_field('no_image', 'option');
            $cta_block_image_url =  $no_image_url['url'];
        }

        ?>



        <section class="section cta-section section-sm ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-12 col-md-6  col-lg-5   ">
                        <div class=" position-relative  p-3">
                            <img class="fancy-radius- img-fluid" src="<?php echo $cta_block_image_url; ?>" alt="<?php echo $cta_block_title; ?>">

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6  col-lg-6">
                        <div class="video-promo-content">

                            <h2><?php echo $cta_block_title; ?></h2>
                            <p><?php echo $cta_block_text; ?></p>

                            <?php if ($cta_block_button_text != '') { ?>
                                <a href="<?php echo $cta_block_button_link['url']; ?>" class="btn btn-outline-secondary-dark align-items-center mt-3"><?php echo $cta_block_button_text; ?> </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Custom cta Image With Bill Icons:   section end-->



    </div>



<?php endwhile;
wp_reset_postdata(); ?>

<?php get_footer(); ?>
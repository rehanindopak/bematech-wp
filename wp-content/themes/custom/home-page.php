<?php

/**
 * Template Name:  Home Page
 * This is the template that displays home page of website.
 * @package WordPress
 * @subpackage custom
 * @since custom
 


 */

get_header(); ?>
<?php
$lang = get_bloginfo("language");
$lang_var = '';
if ($lang == 'ar') {
    $lang_var = '_ar';
}
?>

<div class="main">

    <?php

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

                    <?php



                    while (has_sub_field('homepage_deal_events')) {
                        $soultionsPostObject = get_sub_field('services_repeater');

                        $soultions_title = $soultionsPostObject->post_title;

                        $events_image =  wp_get_attachment_url(get_post_thumbnail_id($soultionsPostObject->ID));
                        if ($events_image == '') {
                            $events_image = get_template_directory_uri() . '/assets/images/no-image.jpg';
                        }
                        $current_post_id = $soultionsPostObject->ID;

                        $services_block_button_text = get_field('services_block_button_text', $current_post_id);
                        $services_block_text = get_field('services_block_text', $current_post_id);
                        $services_block_title = get_field('services_block_title', $current_post_id);


                        $services_block_image = get_field('services_block_image', $current_post_id);
                        $services_block_image_url = $services_block_image['url'];
                        if ($services_block_image_url == '') {
                            $no_image_url = get_field('no_image', 'option');
                            $services_block_image_url =  $no_image_url['url'];
                        }
                    ?>

                        <div class="col-sm-6 col-md-4 col-lg-4 mb-5">
                            <!-- Icon box -->
                            <div class="icon-box text-center">
                                <div class="card-icon mb-4">
                                    <img src="<?php echo $services_block_image_url; ?>" alt="icon" class="img-fluid">
                                </div>
                                <h2 class="h5"><?php echo $services_block_title; ?></h2>
                                <p class="mb-0"><?php echo $services_block_text; ?></p>
                                <a href="<?php echo get_the_permalink($soultionsPostObject->ID); ?>" class="btn btn-outline-secondary align-items-center"><?php echo $services_block_button_text; ?> </a>
                            </div>
                            <!-- End of Icon box -->
                        </div>

                    <?php  } ?>
                </div>
            </div>
        </section>
        <!-- Custom Services : features section End-->



        




    <!--Custom Image Paralax : about section start-->

    <?php

    $parallax_block_title = get_field('parallax_block_title');
    $parallax_block_text = get_field('parallax_block_text');
    $parallax_block_button_text = get_field('parallax_block_button_text');
    $parallax_block_button_action = get_field('parallax_block_button_action');
    $parallax_block_image = get_field('parallax_block_image');
    $parallax_direction = get_field('parallax_direction');

    $parallax_block_image = get_field('parallax_block_image');
    $parallax_block_image_url = $parallax_block_image['url'];
    // print'<pre>';print_r($header_image);
    if ($parallax_block_image_url == '') {
        $no_image_url = get_field('no_image', 'option');
        $parallax_block_image_url =  $no_image_url['url'];
    }
    ?>

    <section class="section section-lg bg-soft custom-paralax  
    <?php echo ($parallax_direction == 'left' ? 'left-image' : 'right-image'); ?>">
        <img class="paralax-image" src="<?php echo $parallax_block_image_url; ?>" alt="<?php echo $parallax_block_title; ?>">
        <div class="container">
            <div class="row justify-content-around">
                <?php if ($parallax_direction == 'left') { ?>
                    <div class="col-sm-12 col-md-6 col-lg-6  "> </div>
                <?php } ?>
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <div class="about-content-right">
                        <h2><?php echo $parallax_block_title; ?></h2>
                        <p><?php echo $parallax_block_text; ?></p>

                        <?php if ($parallax_block_button_text != '') { ?>
                            <a href="<?php echo $parallax_block_button_link['url']; ?>" class="btn btn-outline-secondary align-items-center mt-3"><?php echo $parallax_block_button_text; ?></a>
                        <?php } ?>

                    </div>
                </div>

                <?php if ($parallax_direction == 'right') { ?>
                    <div class="col-sm-12 col-md-6 col-lg-6"> </div>
                <?php } ?>
            </div>

        </div>
    </section>
    <!--Custom Image Paralax : about section end-->



    <!--Custom Image With Logo: about section start-->
    <?php
    $lexmark_block_title = get_field('lexmark_block_title');
    $lexmark_block_text = get_field('lexmark_block_text');
    $lexmark_block_button_text = get_field('lexmark_block_button_text');
    $lexmark_block_button_action = get_field('lexmark_block_button_action');
    $lexmark_direction = get_field('lexmark_direction');


    $lexmark_block_image = get_field('lexmark_block_image');
    $lexmark_block_image_url = $lexmark_block_image['url'];
    // print'<pre>';print_r($header_image);
    if ($lexmark_block_image_url == '') {
        $no_image_url = get_field('no_image', 'option');
        $lexmark_block_image_url =  $no_image_url['url'];
    }

    ?>
    <section class="section section-lg  center-in-mobile">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="col-sm-12 col-md-6  col-lg-6">
                    <div class="video-promo-content">
                        <h2><?php echo $lexmark_block_title; ?></h2>
                        <p><?php echo $lexmark_block_text; ?></p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6  col-lg-5 mb-4 mb-md-4 mb-lg-0">
                    <div class="card position-relative  p-3">
                        <img class="fancy-radius- img-fluid" src="<?php echo $lexmark_block_image_url; ?>" alt="<?php echo $lexmark_block_title; ?>">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Custom Image With Logo:  section end-->



    <div class="custom-footer-rantangle">


        <!-- Custom Team : team section start-->
        <?php
        $team_block_title = get_field('team_block_title');
        $team_block_text = get_field('team_block_text');
        $team_section_button_text = get_field('team_section_button_text');
        $team_section_button_link = get_field('team_section_button_link');

        $lexmark_block_image = get_field('lexmark_block_image');
        $lexmark_block_image_url = $lexmark_block_image['url'];
        // print'<pre>';print_r($header_image);
        if ($lexmark_block_image_url == '') {
            $no_image_url = get_field('no_image', 'option');
            $lexmark_block_image_url =  $no_image_url['url'];
        }

        ?>




        <section class="section section-sm text-white custom-team-section ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-7">
                        <div class="section-heading text-center mb-5">
                            <h2><?php echo $team_block_title; ?></h2>
                            <p class="lead"><?php echo $team_block_text; ?></p>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <!-- <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4"> -->
                    <div class="owl-carousel owl-theme team-carousel">
 


                        <?php if (have_rows('team_members')) : ?>

                            <?php while (have_rows('team_members')) : the_row();
                                $team_member_image = get_sub_field('team_member_image');
                                $team_member_title = get_sub_field('team_member_title');
                                $team_member_text = get_sub_field('team_member_text');
                            ?>
                               
                                <div class="profile-card">
                                    <div class="card-  animate-hover  ">
                                        <div class=" mt-4 mb-4"> 
                                            <div class="team-image-holder" style="background:url('<?php echo $team_member_image['url']; ?>') ;"></div>
                                         </div>
                                        <div class="card-body text-center  pt-0">
                                            <h3 class="h5 mb-2"> <?php echo $team_member_title; ?> </h3>
                                            <p><?php echo $team_member_text; ?></p>
                                        </div>
                                    </div>
                                </div>


                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>

                </div>






                <div class="row team-btn-holder text-center">

                    <div class="col-md-12 col-lg-12 mt-3">

                        <?php if ($team_section_button_text != '') { ?>
                            <a href="<?php echo $team_section_button_link['url']; ?>" class="btn btn-outline-secondary-dark align-items-center mt-3"><?php echo $team_section_button_text; ?> </a>
                        <?php } ?>
                    </div>
                </div>




            </div>
        </section>
        <!-- Custom Team : team section  end-->






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
        <section class="section cta-section section-sm   text-white">
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
    </div>
    </section>
    <!--Custom cta Image With Bill Icons:   section end-->

</div>

<!--===== ===== ===== ===== My Code End here ===== ===== ===== ===== -->




</div>




<?php get_footer(); ?>
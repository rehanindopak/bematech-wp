<?php




get_header();
?>







<?php while (have_posts()) : the_post();
    $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    if ($feature_image == '') {
        $feature_image = get_template_directory_uri() . '/assets/img/no-image.jpg';
    }



    $image = get_field('image');
    $image_url = $image['url'];
    if ($image_url == '') {
        $image_url = get_field('inner_page_header_image', 'option');
        $image_url =  $image_url['url'];
    }


    $our_vision_image = get_field('our_vision_image');
    $our_vision_title = get_field('our_vision_title');
    $our_vision_text = get_field('our_vision_text');
    $our_vision_content = get_field('our_vision_content');

    $our_mission_image = get_field('our_mission_image');
    $our_mission_title = get_field('our_mission_title');
    $our_mission_text = get_field('our_mission_text');
    $our_mission_content = get_field('our_mission_content');



    $our_values_image = get_field('values_image');
    $our_values_title = get_field('values_title');
    $our_values_text = get_field('values_text');
    $our_values_content = get_field('values_content');




    $gceo_image = get_field('gceo_image');
    $gceo_title = get_field('gceo_title');
    $gceo_name = get_field('gceo_name');
    $gceo_position = get_field('gceo_position');
    $gceo_text = get_field('gceo_text');




    $ceo_image = get_field('ceo_image');
    $ceo_title = get_field('ceo_title');
    $ceo_name = get_field('ceo_name');
    $ceo_position = get_field('ceo_position');
    $ceo_text = get_field('ceo_text');


?>



<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>About Us</h2>
                     
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->




<!-- start of wpo-about-section -->
<section class="wpo-about-section section-padding">
    <div class="container">
        <div class="wpo-about-section-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-img">
                        <img src="assets/images/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-content">
                        <div class="about-title">
                            <span>Exclusive Offer</span>
                            <h2>Enjoy Your Dream Vacation In switzerland</h2>
                        </div>
                        <div class="wpo-about-content-inner">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable. If you are going to use a passage of
                                Lorem Ipsum, you need to be sure.</p>
                         
                            <a href="#" class="theme-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-about-section -->
 
<!-- start wpo-fun-fact-section -->
<section class="wpo-fun-fact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-fun-fact-grids clearfix">
                    <div class="grid">
                        <div class="info">
                            <h3><span class="odometer" data-count="302">00</span>+</h3>
                            <p>Room & Suites</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="info">
                            <h3><span class="odometer" data-count="25">00</span></h3>
                            <p>Restaurant</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="info">
                            <h3><span class="odometer" data-count="510">00</span>+</h3>
                            <p>Exceptional Food</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="info">
                            <h3><span class="odometer" data-count="65">00</span></h3>
                            <p>Destination</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-fun-fact-section -->




<!-- start of wpo-about-section -->
<section class="wpo-about-section section-padding">
    <div class="container">
        <div class="wpo-about-section-wrapper">
            <div class="row align-items-center">
             
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="wpo-about-content">
                        <div class="about-title">
                            <span>Exclusive Offer</span>
                            <h2>Enjoy Your Dream Vacation In switzerland</h2>
                        </div>
                        <div class="wpo-about-content-inner">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable. If you are going to use a passage of
                                Lorem Ipsum, you need to be sure.</p>
                          
                            <a href="#" class="theme-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-about-section -->




<!-- wpo-service-area-start -->
<div class="wpo-service-area section-padding section-bg">
    <div class="wpo-service-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-8 col-12">
                    <div class="wpo-service-content">
                        <h2>We are Providing You Our Best Facilities </h2>
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its layout. </p>
                        <a class="theme-btn" href="service.html">Discover More</a>
                    </div>
                </div>
                <div class="col-xl-8 col-12">
                    <div class="wpo-service-items">
                        <div class="wpo-service-item">
                            <i class="fi flaticon-food-tray"></i>
                            <a href="service.html">Delicious Food</a>
                        </div>
                        <div class="wpo-service-item">
                            <i class="fi flaticon-parking"></i>
                            <a href="service.html">Parking Area</a>
                        </div>
                        <div class="wpo-service-item">
                            <i class="fi flaticon-swimmer"></i>
                            <a href="service.html">Swimming Pool</a>
                        </div>
                        <div class="wpo-service-item">
                            <i class="fi flaticon-mortar"></i>
                            <a href="service.html">Spa Salon</a>
                        </div>
                        <div class="wpo-service-item">
                            <i class="fi flaticon-dumbell"></i>
                            <a href="service.html">Exercise Space</a>
                        </div>
                        <div class="wpo-service-item">
                            <i class="fi flaticon-wifi"></i>
                            <a href="service.html">Free Wifi</a>
                        </div>
                        <div class="wpo-service-item">
                            <i class="fi flaticon-cappuccino"></i>
                            <a href="service.html">Breakfast</a>
                        </div>
                        <div class="wpo-service-item">
                            <i class="fi flaticon-more"></i>
                            <a href="service.html">Other Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .service-area-start -->
<!-- wpo-testimonial-area start -->
<div class="wpo-testimonial-area pt-120">
    <div class="container">
        <div class="wpo-testimonial-wrap">
            <div class="testimonial-slider owl-carousel">
                <div class="wpo-testimonial-item">
                    <div class="wpo-testimonial-img">
                        <img src="assets/images/testimonial/img-1.jpg" alt="">
                    </div>
                    <div class="wpo-testimonial-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adiping elit, do eiusmod tempor incididunt ut
                            labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo maepac cenas.</p>
                        <h2>Elezabeth Marvel</h2>
                        <span>Photographer</span>
                    </div>
                </div>
                <div class="wpo-testimonial-item">
                    <div class="wpo-testimonial-img">
                        <img src="assets/images/testimonial/img-2.jpg" alt="">
                    </div>
                    <div class="wpo-testimonial-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adiping elit, do eiusmod tempor incididunt ut
                            labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo maepac cenas.</p>
                        <h2>Marry Jenefer</h2>
                        <span>CEO Of Golden Bravo</span>
                    </div>
                </div>
                <div class="wpo-testimonial-item">
                    <div class="wpo-testimonial-img">
                        <img src="assets/images/testimonial/img-3.jpg" alt="">
                    </div>
                    <div class="wpo-testimonial-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adiping elit, do eiusmod tempor incididunt ut
                            labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo maepac cenas.</p>
                        <h2>William Robert</h2>
                        <span>CEO Of Bexima</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- wpo-testimonial-area end -->




    <section class="aboutus-header_section lr_common_padding" style="background-image: url(<?php echo $feature_image;?>);">
        <div class="row">
            <div class="col-12">
                <div class="banner_txt_holder">
                    <div class="title_holder">
                        <h1>
                            <?php the_title(); ?>
                            
                        </h1>
                        <h2>
                            <span>  About  </span>  BEEAH Tandeef
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="aboutus-content_section lr_common_padding">

        <!-- About us Page Content -->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="about_txt_holder">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>


        <!-- Vision -->

        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="box_holders">
                    <div class="title_holder">
                        <div class="icon-bg-dumb">
                            <?php //echo $our_vision_image; 
                            ?>
                            <img src="<?php echo $our_vision_image['url']; ?>" alt=" <?php echo $our_vision_title; ?>" />
                        </div>
                        <h4>
                            <?php echo $our_vision_title; ?>
                        </h4>
                    </div>
                    <div class="txt_holder">
                        <p>
                            <?php echo $our_vision_text; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>




        <!-- Mission -->
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="box_holders">
                    <div class="title_holder">
                        <div class="icon-bg-dumb">
                            <img src="<?php echo $our_mission_image['url']; ?>" alt="  <?php echo $our_mission_title; ?>" />
                        </div>
                        <h4>
                            <?php echo $our_mission_title; ?>
                        </h4>
                    </div>
                    <div class="txt_holder">

                        <?php echo $our_mission_text; ?>

                    </div>
                </div>
            </div>
        </div>



        <!-- Values -->
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="box_holders">
                    <div class="title_holder">
                        <div class="icon-bg-dumb">
                            <img src="<?php echo $our_values_image['url']; ?>" alt="<?php echo $our_values_title; ?>" />
                        </div>
                        <h4>
                            <?php echo $our_values_title; ?>
                        </h4>
                    </div>
                    <div class="txt_holder">
                        <?php echo $our_values_text; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="aboutus-ceo_section lr_common_padding">

        <!-- CEO  -->
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-10">
                <div class="main_title_holder">
                    <a href="javascript:void(0);">
                        <?php echo $ceo_title; ?>
                    </a>
                </div>
                <div class="img_txt_holder">
                    <div class="img_holder">
                        <img src="<?php echo $ceo_image['url']; ?>" alt="<?php echo $ceo_name; ?>" />
                    </div>
                    <div class="txt_holder">
                        <?php echo $ceo_text; ?>


                        <h6>
                            <?php echo $ceo_name; ?>
                        </h6>
                        <span>
                            <?php echo $ceo_position; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>



        <!-- Facts and Figure -->
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-10">
                <div class="main_title_holder">
                    <a href="javascript:void(0);">
                        <?php echo  get_field('figures_title'); ?>
                    </a>
                </div>
            </div>
        </div>


        <div class="row justify-content-center"> 
            <?php
            $figue_count = 1;
            while (has_sub_field('figures_content')) :
                $figures_sub_text = get_sub_field('figures_sub_text');
                $figures_text = get_sub_field('figures_text');
                $figures_image = get_sub_field('figures_image');
                $hover_figures_image = get_sub_field('hover_figures_image');
            ?>


                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="number_boxes_holder">
                        <img src="<?php echo $figures_image['url']; ?>" alt="<?php echo $figures_text; ?>" />
                        <h6><?php echo $figures_text; ?> </h6>
                        <bold class="boldTag"><?php echo $figures_sub_text; ?> </bold>
                    </div>
                </div>

            <?php
            endwhile;

            ?>

        </div>


    </section>


    <!-- About the Beeah  -->
    <section class="aboutus-beeah_group_section lr_common_padding">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-10">
                <div class="main_title_holder">
                    <a href="javascript:void(0);">

                        <?php echo get_field('about_beeah_eng_title');  ?>
                    </a>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="imgHolder">
                    <?php $about_beeah_main_image =  get_field('about_beeah_main_image'); ?>
                    <img src="<?php echo $about_beeah_main_image['url']; ?>" alt=" <?php echo get_field('about_beeah_eng_title');  ?>">
                </div>
                <?php echo get_field('about_beeah'); ?>

            </div>

        </div>
    </section>
 

<?php endwhile;
wp_reset_postdata(); ?>




<!--------------Our Clients  section Start -------------->
<?php echo do_shortcode('[get_partners is_for="about-us"]'); ?>
<!-------------- Our Clients  section End -------------->

  

<?php get_footer(); ?>
<?php

/**
 * Template Name: Events Categroy Page
 *
 * This is the template that displays simple page like about us, our mission e.t.c.
 * @package WordPress
 * @subpackage custom
 * @since custom
 */





get_header(); ?>




<?php while (have_posts()) : the_post();
    $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    if ($feature_image == '') {
        $feature_image = get_template_directory_uri() . '/assets/img/no-image.jpg';
    }

    $page_header_title = get_field('page_header_title');
    $page_header_text = get_field('page_header_text');


    // $our_vision_image = get_field('our_vision_image'); 


?>

    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area" style="    
background: url('<?php echo $feature_image; ?>') no-repeat center center">
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





<?php

endwhile;
wp_reset_postdata(); ?>

<!-- start of breadcumb-section -->
<div class="custom-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <ul>
                        <li><a href="<?php echo get_the_permalink(2); ?> "><?php echo get_the_title(2); ?> </a></li>
                        <li><a href="<?php echo get_the_permalink(379); ?> "><?php echo get_the_title(379); ?> </a></li>
                        <li><a href="javascript:"><?php echo get_the_title(); ?> </a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->




<!-- Eventes Homepage : Start : wpo-destination-area-start -->
<div class="wpo-destination-area section-padding-bottom">
    <div class="container">

        <div class="destination-wrap">
            <div class="row">


                <?php


                $events_count = 0;
                while (has_sub_field('homepage_events')) {
                    $eventPostObject = get_sub_field('events');

                    $events_image =  wp_get_attachment_url(get_post_thumbnail_id($eventPostObject->ID));
                    if ($events_image == '') {
                        $events_image = get_template_directory_uri() . '/assets/images/no-image.jpg';
                    }
                     
                    $events_title = $eventPostObject->post_title;

                    $events_image =  wp_get_attachment_url(get_post_thumbnail_id($eventPostObject->ID));
                    if ($events_image == '') {
                        $events_image = get_template_directory_uri() . '/assets/images/no-image.jpg';
                    }

                    $current_post_id = $eventPostObject->ID; 
                    $short_intro_text = get_field('short_intro_text',$current_post_id);
                    $event_city = get_field('event_city',$current_post_id);
                    $highlighted_text = get_field('highlighted_text',$current_post_id);
                    $price = get_field('price',$current_post_id);
                    $price_small_text = get_field('price_small_text',$current_post_id);
                    $event_information_text_1 = get_field('event_information_text_1',$current_post_id);
                    $event_information_text_2 = get_field('event_information_text_2',$current_post_id);

                ?>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="destination-item inner-item inner-page">
                            <div class="destination-img" style=" background: url('<?php echo $events_image; ?>');">
                                <!-- <img src="assets/images/destination/1.jpg" alt=""> -->
                                <?php if ($highlighted_text != '') { ?>
                                    <div class="discount"><?php echo $highlighted_text; ?></div>
                                <?php } ?>
                            </div>



                            <div class="destination-content">


                                <!-- <span class="sub">Vietnam Sea Beach</span> -->
                                <h2><a href="<?php echo get_the_permalink($eventPostObject->ID); ?>"><?php echo $events_title; ?></a></h2>

                                <span class="sub"><?php echo $event_city; ?></span>
                                <p><?php echo $short_intro_text; ?> </p>

                                <div class="destination-bottom">
                                    <div class="destination-bottom-right">
                                        <ul>
                                            <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span></li>
                                        </ul>
                                        <div><?php echo $event_information_text_1; ?></div>
                                    </div>

                                </div>
                                <a href="<?php echo get_the_permalink($eventPostObject->ID); ?>" class="yellow-btn  theme-btn ">Find’ ich klasse!</a>


                            </div>


                        </div>
                    </div>



                <?php
                    $events_count = $events_count + 1;
                } ?>



            </div>


        </div>
    </div>
</div>
<!-- Eventes Homepage : End :  wpo-destination-area-start -->







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


    // $our_vision_image = get_field('our_vision_image'); 


?>


    <!-- Parallex : Start  of wpo-about-section -->

    <?php



    $parallax_block_image = get_field('parallax_block_image');
    $parallax_block_title = get_field('parallax_block_title');
    $parallax_block_text = get_field('parallax_block_text');
    $parallax_block_links = get_field('parallax_block_links');
    $parallax_block_button_text = get_field('parallax_block_button_text');
    $parallax_block_button_link = get_field('parallax_block_button_link');


    ?>

    <section class="wpo-about-section-s2 section-padding" style="    
background: url('<?php echo $parallax_block_image['url']; ?>') no-repeat center center;
    background-size: cover;">
        <div class="container">
            <div class="wpo-about-section-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-12">
                        <div class="wpo-about-content">
                            <div class="about-title">
                                <h2> <?php echo $parallax_block_title; ?> </h2>
                            </div>
                            <div class="wpo-about-content-inner">
                                <div class="about-info-wrap">
                                    <h3> <?php echo $parallax_block_text; ?></h3>
                                    <?php echo $parallax_block_links; ?>
                                    <a href="<?php echo $parallax_block_button_link; ?>" class="yellow-btn theme-btn"><?php echo $parallax_block_button_text; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallex : End  of wpo-about-section -->



    <!-- Two Colum BLock :  start of wpo-about-section -->


    <?php

    $column_1_title = get_field('column_1_title');
    $column_1_text = get_field('column_1_text');
    $column_2_title = get_field('column_2_title');
    $column_2_text = get_field('column_2_text');

    ?>

    <section class="wpo-about-section section-padding">
        <div class="container">
            <div class="wpo-about-section-wrapper">
                <div class="row align-items-center-">

                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-content">
                            <div class="about-title">
                                <h4> <?php echo $column_1_title; ?></h4>
                            </div>
                            <div class="wpo-about-content-inner">
                                <?php echo $column_1_text; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-content">
                            <div class="about-title">
                                <h4> <?php echo $column_2_title; ?></h4>
                            </div>
                            <div class="wpo-about-content-inner">
                                <?php echo $column_2_text; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Two Colum BLock :  END of wpo-about-section -->


<?php

endwhile;
wp_reset_postdata(); ?>
<?php get_footer(); ?>
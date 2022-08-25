<?php

/**
 * Template Name:Deal Page
 *
 * This is the template that displays simple page like about us, our mission e.t.c.
 * @package WordPress
 * @subpackage custom
 * @since custom
 */



get_header();
?>

<?php while (have_posts()) : the_post();
    $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    if ($feature_image == '') {
        $feature_image = get_template_directory_uri() . '/assets/img/no-image.jpg';
    }

    $page_header_title = get_field('page_header_title');
    $page_header_text = get_field('page_header_text');



    $image = get_field('image');
    $image_url = $image['url'];
    if ($image_url == '') {
        $image_url = get_field('inner_page_header_image', 'option');
        $image_url =  $image_url['url'];
    }



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






    <!-- Eventes Homepage : Start : wpo-destination-area-start -->

    <div class="wpo-destination-area section-padding-small">
        <div class="container">

            <div class="row justify-content-center-">
                <div class="col-xl-6">
                    <div class="wpo-section-title-s2 custom-blue-title">
                        <h2><?php echo $section_1_title = get_field('section_1_title'); ?></h2>

                    </div>
                </div>
            </div>


            <div class="destination-wrap">
                <div class="row">


                    <?php
                    while (has_sub_field('section_1_events')) {

                        // print'<pre>';print_r($dealEventPostObject);
                        $section_1_events_PostObject = get_sub_field('section_1_events');
                        $section_1_events_title = $section_1_events_PostObject->post_title;

                        $section_1_events_image =  wp_get_attachment_url(get_post_thumbnail_id($section_1_events_PostObject->ID));
                        if ($section_1_events_image == '') {
                            $section_1_events_image = get_template_directory_uri() . '/assets/images/no-image.jpg';
                        }


                    ?>


                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="destination-item inner-item inner-page">
                                <div class="destination-img" style=" background: url('<?php echo $section_1_events_image; ?>');">
                                    <!-- <img src="assets/images/destination/1.jpg" alt=""> -->
                                    <div class="discount">Schon ab 99€ pro Person!</div>
                                </div>



                                <div class="destination-content">


                                    <!-- <span class="sub">Vietnam Sea Beach</span> -->
                                    <h2><a href="#"><?php echo $section_1_events_title; ?></a></h2>
                                    <span class="sub">Vietnam Sea Beach</span>
                                    <p>
                                        Für echte Party ist kein Trip zu kurz! Für echte Party ist kein Trip zu kurz!
                                        Für echte Party ist kein Trip zu kurz! Für echte Party ist kein Trip zu kurz!
                                    </p>

                                    <div class="destination-bottom">



                                        <div class="destination-bottom-right">
                                            <ul>
                                                <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span></li>
                                            </ul>
                                            <div>14.02.1992</div>
                                        </div>

                                    </div>
                                    <a href="#" class="yellow-btn  theme-btn ">Find’ ich klasse!</a>
                                </div>




                            </div>
                        </div>

                    <?php
                    } ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Eventes Homepage : End :  wpo-destination-area-start -->






    <!-- Latest News : start wpo-pricing-section -->
    <section class="wpo-pricing-section section-padding">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="wpo-section-title-s2 custom-price">
                        <h2> <?php echo $section_2_title = get_field('section_2_title'); ?> </h2>

                    </div>
                </div>
            </div>




            <div class="wpo-pricing-wrap">


                <div class="row">

                <?php
                    while (has_sub_field('section_2_events')) {

                        // print'<pre>';print_r($dealEventPostObject);
                        $section_2_events_PostObject = get_sub_field('section_2_events');
                        $section_2_events_title = $section_2_events_PostObject->post_title;

                        $section_2_events_image =  wp_get_attachment_url(get_post_thumbnail_id($section_2_events_PostObject->ID));
                        if ($section_1_events_image == '') {
                            $section_1_events_image = get_template_directory_uri() . '/assets/images/no-image.jpg';
                        }


                    ?>

                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-img" style=" background: url('<?php echo $section_2_events_image; ?>');">
                                        <!-- <img src="assets/images/pricing/1.jpg" alt=""> -->
                                        <div class="discount">Schon ab 99€ pro Person!</div>
                                    </div>
                                    <div class="wpo-pricing-text">
                                        <h4><?php echo $section_2_events_title; ?></h4>
                                        
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                        <a class="theme-btn" href="pricing.html">Book Rooms</a>
                                    </div>
                                </div>

                            </div>
                        </div>


                    <?php } ?>
                </div>

            </div>
        </div>
    </section>
    <!-- Latest News : END wpo-pricing-section -->





    <!-- Eventes Homepage : Start : wpo-destination-area-start -->
    <div class="wpo-destination-area section-padding">
        <div class="container">

            <div class="row justify-content-center-">
                <div class="col-xl-6">
                    <div class="wpo-section-title-s2 custom-blue-title">
                        <h2> <?php echo $section_3_title = get_field('section_3_title'); ?> </h2>
                        </h2>

                    </div>
                </div>
            </div>

            <div class="destination-wrap">
                <div class="row">

                <?php
                    while (has_sub_field('section_3_events')) {

                        // print'<pre>';print_r($dealEventPostObject);
                        $section_3_events_PostObject = get_sub_field('section_3_events');
                        $section_3_events_title = $section_3_events_PostObject->post_title;

                        $section_3_events_image =  wp_get_attachment_url(get_post_thumbnail_id($section_3_events_PostObject->ID));
                        if ($section_3_events_image == '') {
                            $section_3_events_image = get_template_directory_uri() . '/assets/images/no-image.jpg';
                        }


                    ?>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="destination-item inner-item inner-page">
                                <div class="destination-img" style=" background: url('<?php echo $section_3_events_image; ?>');">
                                    <!-- <img src="assets/images/destination/1.jpg" alt=""> -->
                                    <div class="discount">Schon ab 99€ pro Person!</div>
                                </div>



                                <div class="destination-content">


                                    <!-- <span class="sub">Vietnam Sea Beach</span> -->
                                    <h2><a href="#"><?php echo $section_3_events_title; ?></a></h2>
                                    <span class="sub">Vietnam Sea Beach</span>
                                    <p>
                                        Für echte Party ist kein Trip zu kurz! Für echte Party ist kein Trip zu kurz!
                                        Für echte Party ist kein Trip zu kurz! Für echte Party ist kein Trip zu kurz!
                                    </p>

                                    <div class="destination-bottom">



                                        <div class="destination-bottom-right">
                                            <ul>
                                                <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span></li>
                                            </ul>
                                            <div>14.02.1992</div>
                                        </div>

                                    </div>
                                    <a href="#" class="yellow-btn  theme-btn ">Find’ ich klasse!</a>
                                </div>




                            </div>
                        </div>

                    <?php } ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Eventes Homepage : End :  wpo-destination-area-start -->




    <!-- Parallex : Start  of wpo-about-section -->
    <section class="wpo-about-section-s2 section-padding" style="    
background: url(./assets/images/cta2.jpg) no-repeat center center;
    background-size: cover;">
        <div class="container">
            <div class="wpo-about-section-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-12">
                        <div class="wpo-about-content">
                            <div class="about-title">
                                <h2> <mark>Echt nix dabei?? </mark></h2>
                            </div>
                            <div class="wpo-about-content-inner">
                                <div class="about-info-wrap">
                                    <h3>Brauchste Nachhilfe?</h3>

                                    <a href="#" class="yellow-btn theme-btn">Lass ma quatschen</a>
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
    <section class="wpo-about-section section-padding">
        <div class="container">
            <div class="wpo-about-section-wrapper">
                <div class="row align-items-center-">

                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-content">
                            <div class="about-title">
                                <h4>Partyreisen-Erlebnisse mit Spassgarantie</h4>
                            </div>
                            <div class="wpo-about-content-inner">
                                <p>Es gibt immer viel zu feiern, aber nicht jeder ist der gleiche Partytyp. Während manche nur zwischendurch einmal für eine Nacht so richtig Abtanzen möchten, wünschen sich andere Nachtschwärmer für jede Nacht eine andere Partylocation oder gleich mehrere in einer Nacht. Viele möchten sich auch vorher ein Kulturprogramm in einer Stadt gönnen und den Abend dann gebührend feiern. Wir sind zum Glück die Spezialisten für alle Arten von Partys und Gruppenreisen. Bereits seit vielen Jahren sind wir als Reiseagentur im Party-Business tätig und deshalb liegen wir, was die besten Partys anbelangt, immer am Puls der Zeit. Es macht uns selbst irrsinnigen Spaß, immer wieder die verrücktesten und heißesten Events für euch zu finden und euch die Möglichkeit zu geben, genau die Party zu besuchen, die den Partytiger in euch zum Vorschein bringt. Dazu zählen Party-Neuheiten ebenso wie kultige Events, die Tradition haben. Gerne beraten wir dich persönlich für deinen nächsten Partyurlaub, bei dem du dich um nichts kümmern musst, sondern einfach nur mitzufahren brauchst und eine unvergessliche Zeit mit Gleichgesinnten verbringen kannst.</p>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-content">
                            <div class="about-title">
                                <h4>Partyreisen-Erlebnisse mit Spassgarantie</h4>
                            </div>
                            <div class="wpo-about-content-inner">

                                <p>Wir bringen dir die Welt der Partyreisen nahe. Du planst mit deinem Verein, Club, Freunden einen erlebnisreichen Partyurlaub und möchtest das Wochenende mal so richtig feiern? Dann denken wir, dass wir genau das richtige für dich in unserem Partyreisen Programm haben.</p>

                                <p>Allerhand Coole Touren können wir dir anbieten. Egal ob auf Schienen, auf dem Wasser oder an Land. Wir bringen dich mit dem Party Zug nach Willingen zum Mega Event Viva Willingen oder zur Cannstatter Wasen. Auch zum Cannstatter Frühlingsfest. Viele weitere Partyzüge fahren Sie zu den besten Party Locations Deutschlands. Und wenn es dann doch lieber heißen soll: wir ziehen den Anker und fahren mit dem Partyschiff über den Rhein, kein Problem. Ob zum Schlager Alarm, der 90er Party auf dem Rhein oder die Sommernacht Party auf dem Rhein bis hin zum All incl. Sion Partyschiff. Der Kapitän unseres Partyschiff hat immer alles im Griff.</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Two Colum BLock :  END of wpo-about-section -->




    <!--------------Inner Page Header START -------------->

    <section class="page-header gray-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="page-title text-black wow slideInDown" data-wow-duration="1s" data-wow-delay="0s">
                        <?php the_title(); ?>
                    </h1>
                    <img src="<?php echo $image_url; ?>" class="page-header-image  wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" />
                </div>
            </div>

        </div>

    </section>
    <!--------------Inner Page Header END -------------->


    <!--------------Inner Page Header START -------------->
    <?php /*
    <section class="page-header gray-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="page-title text-black wow slideInDown" data-wow-duration="1s" data-wow-delay="0s">
                        <?php the_title(); ?> 
                    </h1> 
                    
                    <div class="gif_target" id="gifDiv">  
                    
                  <?php   if ($main_video_link != '') { ?>
                            <a href="" class="video-btn play-btn-holder" data-toggle="modal" data-src="<?php echo $main_video_link; ?>" data-target="#myModal">
                                <div class="video-holder">
                                    <!--<img src="<?php //bloginfo('template_directory'); ?>/assets/images/play_btn.svg" class="play-btn" />-->
                                    <img src="<?php echo $image_url; ?>"/>

                                </div>
                            </a>
                            <?php } else {   ?>
                                <img src="<?php echo $image_url; ?>" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                        <?php } ?>
             
                      
</div>
                  
             
                </div>
            </div>

        </div>

    </section>
    
     */ ?>
    <!--------------Inner Page Header END -------------->







    <!--------------Page Content START -------------->
    <section class="section-padding page-content padding-bottom-0 our-inovation-main-container">
        <div class="container">


            <!-- Block 1 -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">

                    <div class=" page-content-sidebar">

                        <div class="page-content-title text-black wow slideInUp our-inovation-left-title" data-wow-duration="1s" data-wow-delay="0s">
                            <?php echo $block_1_title; ?>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-sm-12 col-md-9 col-lg-9">

                    <div class=" page-content-body wow slideInUp our-inovation-space-adjusment" data-wow-duration="1s" data-wow-delay="0s">
                        <?php echo $block_1_text; ?>


                        <?php if ($block_1_video_link != '') { ?>
                            <a href="" class="video-btn" data-toggle="modal" data-src="<?php echo $block_1_video_link; ?>" data-target="#myModal">
                                <div class="video-holder">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/play_btn.svg" class="play-btn" />
                                    <img src="<?php echo $block_1_image['url']; ?>" />

                                </div>
                            </a>
                            <?php } else {
                            if ($block_1_image['url'] != '') {
                            ?>
                                <img src="<?php echo $block_1_image['url']; ?>" />
                        <?php }
                        } ?>

                    </div>

                </div>
            </div>


            <!-- Block 2 -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">

                    <div class=" page-content-sidebar">

                        <div class="page-content-title text-black our-inovation-left-title">
                            <?php echo $block_2_title; ?>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-sm-12 col-md-9 col-lg-9">

                    <div class=" page-content-body  our-inovation-space-adjusment">
                        <?php echo $block_2_text; ?>


                        <?php if ($block_2_video_link != '') { ?>
                            <a href="" class="video-btn" data-toggle="modal" data-src="<?php echo $block_2_video_link; ?>" data-target="#myModal">
                                <div class="video-holder">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/play_btn.svg" class="play-btn" />
                                    <img src="<?php echo $block_2_image['url']; ?>" />

                                </div>
                            </a>
                            <?php } else {
                            if ($block_2_image['url'] != '') {
                            ?>
                                <img src="<?php echo $block_2_image['url']; ?>" />
                        <?php }
                        } ?>

                        <?php /*
             <div class=" innovations_block2_repeater owl-carousel owl-theme">
              <?php
                                            $wow_count = 0.2;
                                            while (has_sub_field('block_2_gallery')) :
                                                $block_2_repeater_image = get_sub_field('block_2_gallery_images'); 
                                            ?>
                                             <img src="<?php echo $block_2_repeater_image['url']; ?>" />
                                             
                                            <?php
                                                $wow_count = $wow_count + 0.1;
                                            endwhile; ?>
                                            
                </div>       
                */ ?>

                    </div>

                </div>
            </div>



            <!-- Block 3 -->


            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=" page-content-sidebar">
                        <div class="page-content-title text-black wow slideInUp  our-inovation-left-title" data-wow-duration="1s" data-wow-delay="0s">
                            <?php echo $block_3_title; ?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-9 col-lg-9">


                    <div class=" page-content-body  wow slideInUp  our-inovation-space-adjusment" data-wow-duration="1s" data-wow-delay="0s">



                        <?php echo $block_3_text; ?>


                        <?php if ($block_3_video_link != '') { ?>
                            <a href="" class="video-btn" data-toggle="modal" data-src="<?php echo $block_3_video_link; ?>" data-target="#myModal">
                                <div class="video-holder">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/play_btn.svg" class="play-btn" />
                                    <img src="<?php echo $block_3_image['url']; ?>" />

                                </div>
                            </a>
                            <?php } else {
                            if ($block_3_image['url'] != '') {
                            ?>
                                <img src="<?php echo $block_3_image['url']; ?>" />
                        <?php }
                        } ?>





                    </div>

                </div>
            </div>


            <!-- Block 4 -->

            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">

                    <div class=" page-content-sidebar">

                        <div class="page-content-title text-black our-inovation-left-title">
                            <?php echo $block_4_title; ?>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-sm-12 col-md-9 col-lg-9">

                    <div class=" page-content-body padding-bottom-0 margin-bottom-0 no-border-bottom">
                        <?php echo $block_4_text; ?>


                        <div class="row app-holder wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">

                            <div class="col-2 col-sm-2 col-md-4 col-lg-4"></div>
                            <div class="col-10 col-sm-10 col-md-7 col-lg-7">

                                <div class="page-content-sub-title"><?php echo $download_title; ?>
                                </div>
                                <p><?php echo $download_text; ?></p>


                                <div class="app-btn-holder">


                                    <a href="<?php echo $download_apple_link; ?>" class="playstor-btn" target="_blank">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/goolge.png" class="img-fluid m-2" alt="#">

                                    </a>

                                    <a href="<?php echo $download_google_link; ?>" class="ios-btn" target="_blank">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/apple.png" class="img-fluid m-2" alt="#">

                                    </a>
                                </div>

                            </div>



                        </div>



                    </div>

                </div>
            </div>



        </div>

    </section>
    <!--------------Page Content END -------------->





<?php endwhile;
wp_reset_postdata(); ?>





</div>






<?php get_footer(); ?>



<script>
    // $( document ).ready(function() {
    //       setTimeout(function(){ 



    //           var src_video = '<?php echo bloginfo('template_directory') . '/assets/video/tesla_4.gif'; ?>';
    //         //   alert(src_video);
    //             $('.gif_target').html('<div class="background-video-gif" id="gifDiv"></div>');


    //             $('.background-video-gif').css('background-image', 'url(' + src_video + ')');



    //       }, 1500);

    // });
</script>
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



    $page_section_title = get_field('page_section_title');
    $page_section_text = get_field('page_section_text');


?>





    <div class="main">

        <!--hero section start-->
        <section class="section pt-10 pb-10 section-header text-white gradient-overly-right-color" style="background: url('<?php echo $feature_image; ?>')no-repeat center center / cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-7">
                        <div class="hero-slider-content">
                            <span class="text-uppercase">&nbsp;</span>
                            <h1 class="display-2"><?php the_title(); ?></h1>
                            <p class="lead"><?php the_content(); ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->



        <!-- Custom Services : features section start-->
        <section class="section custom-services  section-lg  ">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-7">
                            <h2><?php echo $page_section_title; ?></h2>
                            <p class="lead"><?php echo $page_section_text; ?></p>
                        </div>
                    </div>
                </div>



                <div class="row">



                    <?php if (have_rows('losungen_repeater')) : ?>

                        <?php while (have_rows('losungen_repeater')) : the_row();
                            $losungen_repeater_icon = get_sub_field('losungen_repeater_icon');
                            $losungen_repeater_title = get_sub_field('losungen_repeater_title');
                            $losungen_repeater_text = get_sub_field('losungen_repeater_text');
                        ?>

                            <div class="col-md-6 col-lg-4 mb-5">
                                <!-- Icon box -->
                                <div class="icon-box text-center">
                                    <div class="card-icon mb-4">
                                        <img src="<?php echo $losungen_repeater_icon['url']; ?>" alt="<?php echo $losungen_repeater_title; ?>" class="img-fluid">
                                    </div>
                                    <h2 class="h5"><?php echo $losungen_repeater_title; ?></h2>
                                    <p class="mb-0"><?php echo $losungen_repeater_text; ?></p>
                                </div>
                                <!-- End of Icon box -->
                            </div>


                        <?php endwhile; ?>
                    <?php endif; ?>




                </div>
            </div>
        </section>
        <!-- Custom Services : features section End-->

 
    </div> 

<?php endwhile;
wp_reset_postdata(); ?>
 
<?php get_footer(); ?>
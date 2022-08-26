<?php


/**
 * Template Name: Karriere Page
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

                    <?php



                    while (has_sub_field('Jobs')) {
                       

                        $PostObject = get_sub_field('jobs_repeater');  
                        
                       

                        $job_image =  wp_get_attachment_url(get_post_thumbnail_id($PostObject->ID));
                        if ($job_image == '') {
                            $job_image = get_template_directory_uri() . '/assets/images/no-image.jpg';
                        }
                        $current_post_id = $PostObject->ID;

                        // $services_block_button_text = get_field('services_block_button_text', $current_post_id);
                         

                  
                        $job_title = $PostObject->post_title;
                        $job_shortintro = $PostObject->post_content;
                        
                        
                        $jobs_icon = get_sub_field('jobs_icon'); 
                        $job_button_text = get_sub_field('job_button_text');  
                        $jobs_icon_url = $jobs_icon['url'];
                        if ($jobs_icon_url == '') {
                            $no_image_url = get_field('no_image', 'option');
                            $jobs_icon_url =  $no_image_url['url'];
                        }
                    ?>

                        <div class="col-sm-6 col-md-4 col-lg-4 mb-8">
                            <!-- Icon box -->
                            <div class="icon-box text-center">
                                <div class="card-icon mb-4">
                                    <img src="<?php echo $jobs_icon_url; ?>" alt="icon" class="img-fluid">
                                </div>
                                <h2 class="h5"><?php echo $job_title; ?></h2>
                                <p class="mb-0"><?php echo $job_shortintro; ?></p>
                                <a href="<?php echo get_the_permalink($PostObject->ID); ?>" class="btn btn-outline-secondary align-items-center"><?php echo $job_button_text; ?> </a>
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





<?php


$team_3_block_title = get_field('team_3_block_title');
$team_3_block_text = get_field('team_3_block_text');
?>
        <!-- Custom Services : features section start-->
        <section class="section custom-services  section-lg  ">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-7">
                            <h2><?php echo $team_3_block_title; ?></h2>
                            <p class="lead"><?php echo $team_3_block_text; ?></p>
                        </div>
                    </div>
                </div>



                <div class="row">



                    <?php if (have_rows('team_3_repeater')) : ?>

                        <?php while (have_rows('team_3_repeater')) : the_row();
                            $team_3_repeater_image = get_sub_field('team_3_repeater_image');
                            $team_3_repeater_title = get_sub_field('team_3_repeater_title');
                            $team_3_repeater_text = get_sub_field('team_3_repeater_text');
                        ?>

                            <div class="col-md-6 col-lg-4 mb-5">
                                <!-- Icon box -->
                                <div class="icon-box text-center">
                                    <div class="card-icon mb-4">
                                        <img src="<?php echo $team_3_repeater_image['url']; ?>" alt="<?php echo $team_3_repeater_title; ?>" class="img-fluid">
                                    </div>
                                    <h2 class="h5"><?php echo $team_3_repeater_title; ?></h2>
                                    <p class="mb-0"><?php echo $team_3_repeater_text; ?></p>
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


<?php

endwhile;
wp_reset_postdata(); ?>

<?php get_footer(); ?>
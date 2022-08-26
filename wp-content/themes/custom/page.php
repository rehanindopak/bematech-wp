<?php

/**
 * This is the template that displays simple page like about us, our mission e.t.c.
 * @package WordPress
 * @subpackage custom
 * @since custom
 */


get_header();
?>






<?php while (have_posts()) : the_post();
    $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $feature_image_is =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    if ($feature_image == '') {
        $feature_image = get_template_directory_uri() . '/assets/img/no-image.jpg';
    }




    $image = get_field('image');
    $image_url = $image['url'];
    if ($image_url == '') {
        $image_url = get_field('inner_page_header_image', 'option');
        $image_url =  $image_url['url'];
    }
    //style="background-image: url(<?php echo $image_url;


?>






    <div class="main page-6 simple-page">


        <!--page header section start-->
        <section class="" style="background: url('assets/img/custom/squar-full-.svg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center-">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center-">
                                <h1><?php the_title(); ?></h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center-">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><?php echo get_the_title(230); ?> </a></li>
                                        <li class="breadcrumb-item"><a href="#"><?php the_title(); ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->





        <!--services details section start-->
        <section class="section section-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-4 mb-md-0 mb-lg-0">
                        <div class="service-details-wrap">

                            <div class="services-detail-content mt-4">

                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--services details section end-->





    </div>



 




<?php endwhile;
wp_reset_postdata(); ?> 

<?php get_footer(); ?>
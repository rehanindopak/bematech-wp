<?php
/**
 *  single
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

                            <?php 
                if ($feature_image_is != '') {?>
                    <img src="<?php echo $feature_image; ?>" alt="<?php echo $feature_image; ?>" style="     margin-bottom: 30px;max-width: 100%; border-radius: 9px" /> 
                <?php } 
                ?>
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
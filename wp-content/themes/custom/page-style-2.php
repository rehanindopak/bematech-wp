<?php

/**
 * Template Name:  Page Style 2
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



?>


<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area" style="background:url('<?php echo $feature_image; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2><?php the_title(); ?> </h2>
                    <ul>
                        <li><a href="<?php echo get_the_permalink(2); ?> "><?php echo get_the_title(2); ?> </a></li>
                        <li><span><?php the_title(); ?> </span></li>
                    </ul>
 
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
                        <img src="<?php echo  $image_url;?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-content">
                        <div class="about-title"> 
                            <h2><?php the_title();?></h2>
                        </div>
                        <div class="wpo-about-content-inner">
                           <?php the_content(); ?>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-about-section -->








<?php endwhile;
wp_reset_postdata(); ?>




<?php get_footer(); ?>
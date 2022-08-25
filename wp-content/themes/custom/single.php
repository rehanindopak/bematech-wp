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





<section class="section-padding-top">
</section>





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





<!-- start of wpo-about-section -->
<section class="wpo-about-section   section-padding-small">
    <div class="container">
        <div class="wpo-about-section-wrapper">
            <div class="row align-items-center">
                
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="wpo-about-content" style="padding-left: 0;">
                        <div class="about-title">
                            <!-- <span>Exclusive Offer</span> -->
                            <h2><?php the_title(); ?> </h2>
                        </div>
                        <div class="wpo-about-content-inner">

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
    </div>
</section>
<!-- end of wpo-about-section -->
 
 



        

<?php endwhile;
wp_reset_postdata(); ?>

      
      
<?php get_footer();?>
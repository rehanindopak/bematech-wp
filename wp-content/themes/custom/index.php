<?php
/**
 * 
 * This is the template that displays 404 page .
 * @package WordPress
 * @subpackage Custom	
 * @since Custom
 */

get_header(); 

$feature_image =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 


	if($feature_image==''){
		$feature_image = get_template_directory_uri().'/assets/img/no-bg-image.jpg';
	} 
	
	$image = get_field('image');
	$image_url = $image['url'];
	if($image_url==''){
		$image_url = get_field('inner_page_header_image','option');
		$image_url =  $image_url['url'];
		}
?>  






  <!--404 section start-->
  <section class="section py-0 position-relative text-white"  >
            <div class="section-lg bg-gradient-primary min-vh-100 d-flex align-items-center w-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="error-content text-center">
                                <div class="notfound-404">
                                    <h1 class="display-1">404</h1>
                                </div>
                                <h2>Entschuldigung, etwas ist schief gelaufen</h2>
                                <p class="lead">
                                Die von Ihnen gesuchte Seite wurde möglicherweise entfernt, ihr Name wurde geändert oder sie ist vorübergehend
                                    nicht verfügbar.
                                </p>
                                <a class="btn btn-outline-white mt-3" href="<?php echo home_url();?>">Zur Homepage gehen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--404 section end-->
      

  
  
  <?php get_footer();?>
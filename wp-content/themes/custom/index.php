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



<main>

  <section class="heading-page" style=" padding: 0px 0px;">
            <img src="<?php bloginfo('template_directory');?>/assets/images/portfolio-heading-bg.jpg" alt="">
            <div class="container">
                <div class="heading-page-content display-flex">
                    <h1 class="au-page-title">404  | Page Not Found </h1>
                    
                </div>
            </div>
        </section>
        
     
        
        
        <div class="single single-link-post custom-padding-top-bottom">
            <div class="container">
                <div class="single-content">
                
                 <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <h4 class="single-title">Sorry the Page you are loocking for is not Exists </h4>
                    </div>
                    </div>
                
                
                    <div class="row">
                    
                    
                    
                    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="post-single-content">
                            
							<br><br>
                            <a href="<?php echo home_url();?>" class="simple-btn ">Back to Home</a>
                    
              
                               
                            </div>
                        </div>
                      
                      
                      
                      
                    </div>
                </div>
            </div>
        </div>
        
      

    </main>


      

  
  
  <?php get_footer();?>
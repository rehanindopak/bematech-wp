<?php


 get_header();
 ?>


    <?php while ( have_posts() ) : the_post();
$feature_image =  wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
if($feature_image==''){
		$feature_image = get_template_directory_uri().'/assets/images/no-image.jpg';
}


	
	$image = get_field('image');
	$image_url = $image['url'];
	if($image_url==''){
		$image_url = get_field('inner_page_header_image','option');
		$image_url =  $image_url['url'];
		}
		
		
		
		
		?>
		



	<!-- header end-->
  <main class="main">
			
			
			 <!------------ Inner Page Header START --------------------------------->
            <section class="promo-primary   promo-primary--shop">
            <picture>
            <source srcset="<?php echo $image_url;?>" media="(min-width: 992px)"/>
            <img class="img--bg" src="<?php echo $image_url;?>" alt="img"/>
            </picture>
            <div class="promo-primary__description"> </div>
            <div class="container">
            <div class="row">
            <div class="col-auto">
            <div class="align-container">
            <div class="align-container__item"><span class="promo-primary__pre-title"><?php echo get_bloginfo( 'name' );?></span>
            <h1 class="promo-primary__title"> <?php the_title(); ?> </h1>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>
          
          
				
			
			
	
<?php echo do_shortcode('[get_blog is_for="inner"]');?>
				
 
 			
                

			
			</main>



 
		 
 <?php endwhile;   wp_reset_postdata();?>
 
<?php get_footer();?>
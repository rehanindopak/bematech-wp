<?php
 

get_header(); ?>
<?php


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
            <h1 class="promo-primary__title"><?php the_archive_title(); ?> </h1>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>
            
             
          
				
			
			
			
			
 
 
<!-- blog start-->
				<section class="section blog background--brown"><img class="blog__bg" src="<?php bloginfo('template_directory');?>/assets/img/events_inner-bg.png" alt="img"/>
					<div class="container">
						<div class="row offset-margin">
   
          <?php
		  $i =0;
						$loop_count=2;
				// 		$args = array('orderby' => 'menu_order','order' => 'DESC');
						
						
				// 		$loop = new WP_Query( $args );
						while (have_posts()) : the_post();
				// 		while ( $loop->have_posts() ) : $loop->the_post();
						
						
						 $feature_image =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						 if($feature_image==''){
							$feature_image = get_template_directory_uri().'/assets/images/no-image.jpg';
							}
						
						$article_class = "odd";
						if($loop_count %2 ==0){
							$article_class = "even";
							}else{
								$article_class = "odd";
								}
						?>
        
        
        
		<div class="col-md-6 col-lg-5 col-xl-4">
			<div class="blog-item blog-item--style-1">
				<div class="blog-item__img">
				    <img class="img--bg" src="<?php echo $feature_image; ?>" alt="img"/><span class="blog-item__badge" style=" "><?php echo date("D-M-Y", strtotime(get_the_date())); ?></span></div>
				<div class="blog-item__content">
					<h6 class="blog-item__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
					<p><?php echo get_field('news_short_text');?> ...</p>
					 
				</div>
			</div>
		</div>
	
	 
        
        
               
         <?php 
   
   $loop_count++;
   $i++;
   
   
   endwhile;   wp_reset_postdata();?>
      
      
     
     
     	</div>
					 
					</div>
				</section>
				<!-- blog end-->
 

 
 			
                

			
			</main>



 
   
        
 
<?php get_footer();?>
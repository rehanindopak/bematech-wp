<section class="service-style3 sec-padd2">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
        </div>
        <div class="service_carousel">
          
          <?php
		    $args = array( 'post_type' => 'our-services','orderby' => 'menu_order','order' => 'DESC'); 
  $loop = new WP_Query( $args );
	
    while ( $loop->have_posts() ) : $loop->the_post();
		$feature_image =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
			if($feature_image==''){
				$feature_image = get_template_directory_uri().'/assets/images/no-image.png';
			}
						
		$front_image = get_field('services_front_image');
		$services_short_text = get_field('services_short_text');	
		$services_icon_class = get_field('services_icon_class');	
		?>
          
            <div class="item">

                <div class="bottom-content">

                    <div class="icon_box">
                        <span class="<?php echo $services_icon_class; ?>"></span>
                    </div>
                      <p class="title">Syndicate</p>    
                    <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                  
                </div>
                <div class="overlay-box">
                    <div class="inner-box">
                        <div class="icon_box">
                        <span class="<?php echo $services_icon_class; ?>"></span>
                        </div>
                        <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                        <p class="title">Syndicate</p>    
                        <div class="text">
                           <?php echo $services_short_text; ?>
                        </div>
                    </div>
                        
                </div>  
                
            </div>
  <?php  endwhile;  wp_reset_postdata(); ?>        

        </div>

    </div>
</section> <!---Our Services-->
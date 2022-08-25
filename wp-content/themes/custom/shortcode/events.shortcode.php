<?php 
function events_function( $atts ) { ob_start();

 $is_for = $atts['is_for'];

?>



                 <?php
						$loop_count=2;
	 $args = array( 'post_type' => 'our-events','orderby' => 'menu_order','order' => 'DESC'); 
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						
						
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
            
        
         
			
            
            	<article class="entry-item <?php echo $article_class; ?>">
					<div class="entry-thumb">
						<a href="<?php the_permalink();?>"><img src="<?php echo $feature_image; ?>" alt="<?php the_title(); ?>"></a>
					</div>
					<!-- /.entry-thumb -->

					<div class="entry-content">
						<div class="meta-item">
							<div class="time"><?php echo date("M d, Y", strtotime(get_the_date())); ?></div>
							
						</div>
						<!-- /.meta-item -->
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<p><?php echo substr(get_the_content(),0, 300)?> ...</p>
						<a href="<?php the_permalink();?>" class="view-btn-1"><i class="fa fa-long-arrow-right"></i>view all</a>
					</div>
					<!-- /.entry-content -->
				</article>
				<!-- /.entry-item -->


 <div class="section-separator"></div>
   <?php 
   
   $loop_count++;
   endwhile;   wp_reset_postdata();?>






<?php
 $content = ob_get_clean();
return $content;
}
add_shortcode( 'get_events', 'events_function' );?>

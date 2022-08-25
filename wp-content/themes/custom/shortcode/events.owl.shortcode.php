<?php 
function events_owl_function( $atts ) { ob_start();

 $is_for = $atts['is_for'];

?>

	<section class="kopa-section bg-2 kopa-parallax">
			<div class="container">
				<div class="widget widget-slider-2 owl-wrapper">
					<div class="widget-title style-2">
						<h2>Upcomming <span>Events</span></h2>
						<p>We travel the world in search of great coffee. In the process, we discover beans so special and rare that we can’t wait to bring them home and share.</p>
					</div>
					<!-- /.widget-title -->

					<div class="widget-content">
						<div class="owl-carousel" data-slider-item='1' data-item-desktop='1' data-item-desktop-small='1' data-item-tablet='1' data-item-mobile='1' data-slider-auto="false" data-slider-navigation="false" data-slider-pagination="true">

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
            
            
            	<div class="item">
								<div class="entry-thumb">
									<a href="<?php the_permalink();?>"><img src="<?php echo $feature_image; ?>" alt="<?php the_title(); ?>"></a>
									<span class="meta-icon"><img src="<?php bloginfo('template_directory');?>/assets/images/icon/icon01.png" alt=""></span>
								</div>
								<!-- /.entry-thumb -->

								<div class="entry-content">
									<header>
										<div class="meta-date">
											<span class="date"><?php echo date("d", strtotime(get_the_date())); ?></span>
											<span class="month"><?php echo date("M", strtotime(get_the_date())); ?></span>
										</div>
										<!-- /.meta-date -->

										<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
										<span class="meta-time"><i class="fa fa-clock-o"></i> 09 /1/2015 / 8:30 pm - 11:00 pm</span>
										<span class="location"><i class="fa fa-map-marker"></i> Coffee Maiwen</span>
									</header>

									<p><?php echo substr(get_the_content(),0, 200)?> ...</p>

									<a href="<?php the_permalink();?>" class="view-btn-1"><i class="fa fa-long-arrow-right"></i>Read More</a>
								</div>
								<!-- /.entry-content -->
							</div>
							<!-- /.item -->

     
            


   <?php 
   
   $loop_count++;
   endwhile;   wp_reset_postdata();?>

	</div>
						<!-- /.owl-carousel -->
					</div>
					<!-- /.widget-content -->
				</div>
				<!-- /.widget-slider-2 -->
			</div>
		</section>


<?php
 $content = ob_get_clean();
return $content;
}
add_shortcode( 'get_events_owl', 'events_owl_function' );?>
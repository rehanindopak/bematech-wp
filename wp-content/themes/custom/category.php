<?php
/**
 *@package WordPress
 * @subpackage custom
 * @since custom
 */

get_header(); 
 ?>

<!-- main start  -->

  <?php get_sidebar('header-inner'); ?>
  
  
    <?php
    
    
	
		$image_url = get_field('inner_page_header_image','option');
		$image_url =  $image_url['url'];
		
		
		
		?>
  

	<section id="main-content" class="kopa-blog-page">
		<div class="top-page kopa-parallax" style="
    background-image: url(<?php echo $image_url;?>);
    background-repeat: no-repeat;
    background-position: top center;">
			<div class="container">
				<h2>sss<?php the_title();?> ----</h2>

				<div class="kopa-breadcrumb">
					<span itemscope="">
						<a itemprop="url" href="<?php home_url();?>">
							<span>Home</span>
						</a>
					</span>
					<span class="current-page"><?php the_title();?></span>
				</div>
				<!-- /.kopa-breadcrumb -->

				<p>We travel the world in search of great coffee. In the process, we discover beans so special and rare that we can’t wait to bring them home and share.</p>

				<div class="kopa-social-2">
					<ul>
						<li><a href="about.html#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="about.html#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="about.html#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="about.html#"><i class="fa fa-youtube-square"></i></a></li>
					</ul>
				</div>
				<!-- /.kopa-social-2 -->
			</div>
		</div>
		<!-- /.top-page -->
        
        
        
            
        
       	<div class="content-page">
			<div class="container">
            
             <?php
				$loop_count=2;
				
				
				$queried_object = get_queried_object();
				$cat_id = $queried_object->term_id;
				$catquery = new WP_Query( 'cat='.$cat_id );
				
				// query_posts('cat='.$cat_id);
				  while ( $catquery->have_posts() ) : $catquery->the_post();

						
						
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
				
				<!-- /.entry-item -->

				<div class="kopa-pagination style-01">
					<ul class="page-numbers">
						<li><a href="blog-1.html#" class="page-numbers prev"><i class="fa fa-long-arrow-left"></i></a></li>
						<li><span class="page-numbers current">1</span></li>
						<li><a href="blog-1.html#" class="page-numbers">2</a></li>
						<li><a href="blog-1.html#" class="page-numbers">3</a></li>
						<li><a href="blog-1.html#" class="page-numbers">4</a></li>
						<li><a href="blog-1.html#" class="page-numbers">5</a></li>
						<li><a href="blog-1.html#" class="page-numbers next"><i class="fa fa-long-arrow-right"></i></a></li>
					</ul>
				</div>
				<!-- /.kopa-pagination -->
			</div>
		</div>
		<!-- /.content-page --> 
        
        




</section>
	<!-- /#main-content -->

      
        
     
  
      
       </div>
      <!--content end -->
      
    
 
<?php get_sidebar('footer'); ?>
<?php get_footer();?>
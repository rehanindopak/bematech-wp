<?php


get_header(); ?>






<?php while ( have_posts() ) : the_post();
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
		
		
 //$about_us_front_text = get_field('about_us_front_test'); 
	//$about_us_front_image = get_field('about_us_front_image');
	
	
	
	
	


	$about_us_front = get_field('about_us_front'); 
	$about_us_front_image = get_field('about_us_front_image');
	$about_us_front_text = get_field('about_us_front_text');
	
	

		$vision_image = get_field('our_vision_image');
		$vision_title = get_field('our_vision_title');
		$vision_text = get_field('our_vision_text');

		$mission_image = get_field('our_mission_image');
		$mission_title = get_field('our_mission_title');
		$mission_text = get_field('our_mission_text');


		$values_image = get_field('our_values_image');
		$values_title = get_field('our_values_title');
		$values_text = get_field('our_values_text');




		$strategies_image = get_field('strategies_image');
		$strategies_title = get_field('strategies_title');
		$strategies_text = get_field('strategies_text');




		
		
		
?>



<!-- main start  -->

<div id="main">
  <?php get_sidebar('header-page'); ?>
  
  <!-- wrapper  -->
  <div id="wrapper"> 
    <!-- content-holder  -->
    <div class="content-holder" data-pagetitle="Portfolio Single 3">
      <?php get_sidebar('header'); ?>
      
      <!--content-->
      <div class="content">
      
        
        <!--Header -->
        <section class="hero-section dark-bg"  data-scrollax-parent="true">
          <div class="hero-canvas-wrap fs-canvas">
            <div class="dots gallery__dots" data-dots=""></div>
            <div class="pr-bg"></div>
          </div>
          <div class="hero-bg">
            <div class="bg par-elem"  data-bg="<?php echo $image_url;?>" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="pr-bg"></div>
            <div class="hero-bg-dec"><span></span></div>
          </div>
          <div class="container">
            <div class="section-title fl-wrap first-tile_load">
              <h2>
                <?php the_title(); ?>
              </h2>
              
              <div class="section-title_category"><a href="<?php echo home_url();?>"><?php echo maxiamTranslate(27); ?></a> </div>
            </div>
          </div>
          <div class="hero-start-link bot-element">
            <div class="scroll-down-wrap">
              <div class="mousey">
                <div class="scroller"></div>
              </div>
              <span><?php echo maxiamTranslate(21); ?></span> </div>
            <a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-long-arrow-down"></i></a> </div>
        </section>
        <!--Header end--> 
        
        <!-- section-->
        <section class="no-padding-bottom" id="sec"> 
          <!-- container-->
          <div class="container"> 
            <!-- det-wrap-->
            <div class="fl-wrap det-wrap">
              <div class="row">
                <div class="col-md-3">
                  <div class="fixed-column fl-wrap">
                    <div class="pr-bg pr-bg-white"></div>
                    <div class="pr-title"><?php the_title();?> <span></span> </div>
                    
                    <img src="<?php echo $feature_image; ?>" alt="<?php the_title(); ?>" style="max-width:100%;" />
                 
                 
                    <div class="fixed-column-top"><i class="fal fa-long-arrow-up"></i></div>
                  </div>
                </div>
                <div class="col-md-8 first-tile_load"> 
                  
                  <!-- tabs-container-->
                  <div id="tabs-container">
                    <div class="tabs-counter"> <span>0</span>
                      <div class="tc_item">1</div>
                    </div>
                    <!-- tab-content-->
                    <div id="tab-1" class="tab-content"> 
                    <?php the_content();?>
                    
                    <span class="dec-border fl-wrap"></span>
                    
                     
                      
                     <?php echo do_shortcode('[contact-form-7 id="592" title="Career new form"]'); ?>


                      
                      
                    </div> 
                    <!-- tab-content end--> 
                    
                  </div>
                  <!-- tabs-container end-->
                 
                  </div>
              </div>
            </div>
            <!-- det-wrap end--> 
          </div>
          
          
          
         
           
           
           
           
        </section>
        <!-- section end-->
        
       
      </div>
      <!--content end -->
      
      <?php get_sidebar('footer'); ?>
    </div>
    <!-- content-holder end --> 
  </div>
  <!-- wrapper end --> 
  
</div>
<!-- Main end -->

  <?php endwhile;   wp_reset_postdata();?>
<?php //get_sidebar('related'); ?>


<?php get_footer();?>
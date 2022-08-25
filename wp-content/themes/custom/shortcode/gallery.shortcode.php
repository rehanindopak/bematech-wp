<?php 
function gallery_function( $atts ) {  ob_start();

$gallery_for =  $atts['gallary_for'];

?>

  
    <div class="row">
      <div class="col-md-12"> 
        <!-- Works Filter -->
        <div class="portfolio-filter font-alt text-center"> 
        <a href="assets/#" class="active" data-filter="*">All</a> 
        <a href="assets/#dental" class="" data-filter=".dental">Dental</a> 
        <a href="assets/#surgery" class="" data-filter=".events">Events</a> </div>
        <!-- End Works Filter --> 
        
        <!-- Portfolio Gallery Grid -->
        
        <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
          <?php  
		  
		  $inc_count = 1 ; 
		  
		  while(has_sub_field('custom_gallery', 'option')): 
	   		$image = get_sub_field('custom_gallery_image');
			//print'<pre>';print_r($image);
	    	$custom_gallery_name = get_sub_field('custom_gallery_name');
			$assinged_class = '';
	
			if(!empty($custom_gallery_name)){
				foreach($custom_gallery_name as $custom_gallery_name_row){
					$assinged_class .= ' '.$custom_gallery_name_row;
					}
				}
		
	   ?>
          
          <!-- Portfolio Item Start -->
          
          <div class="gallery-item <?php echo $assinged_class;?>">
            <div class="thumb" style="background:url('<?php echo $image['sizes']['medium']; ?>'); padding:120px 0px; background-size:cover; background-position:center;">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                   <a href="<?php echo $image['url']?>"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Portfolio Item End -->
          
            <!-- Portfolio Item Start -->
          
          <div class="gallery-item <?php echo $assinged_class;?>">
            <div class="thumb" style="background:url('<?php echo $image['sizes']['medium']; ?>'); padding:120px 0px; background-size:cover; background-position:center;">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                   <a href="<?php echo $image['url']?>"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Portfolio Item End -->
          
          
          
          <?php 
		  
		  $assinged_class ='';
		  
		  
		    if ( $gallery_for == 'home' ) {  $inc_count++; }
			
			if($inc_count==9){ break;}
			
	
  endwhile;  wp_reset_postdata();?>
        </div>
        <!-- End Portfolio Gallery Grid --> 
        
        <?php if ( $gallery_for == 'home' ) { ?> 
            <div class="row" style="padding-top:50px;">
                 <div class="col-md-12"> 
                        <a class="btn btn-border btn-gray btn-transparent btn-circled smooth-scroll-to-target" href="<?php echo home_url('gallery'); ?>">View All </a>
        		 </div>
         </div>
        
         <?php } ?>
		    
      </div>
    

<?php $content = ob_get_clean();return $content;
}
add_shortcode( 'get_gallery', 'gallery_function' );
?>
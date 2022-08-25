<?php 
function testimonails_function( $atts ) {  ob_start();?>

<!--======= TESTIMONILAS =========-->
<section class="kopa-section bg-4 mb-100 kopa-parallax">
  <div class="kopa-gradient"></div>
  <!-- /.kopa-gradient -->
  
  <div class="container">
    <div class="widget widget-quote owl-wrapper">
      <div class="widget-title style-2">
        <h2>Expert  <span>Review</span></h2>
        <p>From Customers &amp; Friends</p>
      </div>
      <!-- /.widget-title -->
      
      <div class="widget-content">
        <div class="owl-carousel" data-slider-item='1' data-item-desktop='1' data-item-desktop-small='1' data-item-tablet='1' data-item-mobile='1' data-slider-auto="false" data-slider-navigation="false" data-slider-pagination="true">
          <?php  
 
  
  while(has_sub_field('testimonials', 'option')): 
	   $testimonials_text = get_sub_field('testimonials_text');
	   $testimonials_name = get_sub_field('testimonials_name');
	  $testimonials_image = get_sub_field('testimonials_image');
	   
	   ?>
          <div class="item">
            <div class="entry-content">
              <p><?php echo $testimonials_text; ?></p>
            </div>
            <!-- /.entry-content --> 
          </div>
          <!-- /.item -->
          
          <?php 
	  
	  
	  
  endwhile;  wp_reset_postdata();?>
        </div>
        <!-- /.owl-carousel --> 
      </div>
      <!-- /.widget-content --> 
    </div>
    <!-- /.widget-quote --> 
  </div>
</section>
<?php $content = ob_get_clean();
	return $content;
}
add_shortcode( 'get_testimonials', 'testimonails_function' );
?>
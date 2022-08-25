<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage custom
 * @since custom
 */


?>


<?php
$lang = get_bloginfo("language");
 $lang_var='';
if($lang=='ar'){
    $lang_var = '_ar';
}
?>




<?php
	$the_query = new WP_Query( 'page_id=1601' );
	while ( $the_query->have_posts() ) :
	$the_query->the_post();
    
    $header_logo = get_field('header_logo'); 
    $footer_logo = get_field('footer_logo'); 
    $email_address = get_field('email_address'); 
    $contact_number = get_field('contact_number'); 
    $fax_number = get_field('fax_number');  
    $address = get_field('address');  
    $copy_write_text = get_field('copy_write_text');   
		
	endwhile; wp_reset_postdata(); ?>



    <section class="section-padding footer-section">

        <div class="container">



            <div class="row">
                <div class="col-12 col-sm-6 col-md-2 footer-widget " >
                    <div class="footer-logo-holder">
                        <img src="<?php echo $footer_logo['url']; ?>" alt="footer-logo" />
                    </div>

                    <div class="social-links-holder">

                        <div class="footer-title">
                           
                             <?php echo maxiamTranslate(17); ?>
                        </div>
                       
                         <ul>
                            <?php while(has_sub_field('social_media_icon', 'option')): ?>
                <li>
                                <a href="<?php the_sub_field('link');?>" target="_blank"><i class="<?php the_sub_field('i_class');?>"></i></a>
                </li>
              <?php endwhile; ?>
                        </ul>
                         
                    </div>
                    
                <?php /*    
            <div class="app-btn-holder d-none hidden">
                <a href="#" class="playstor-btn" target="_blank">
                    <img src="https://tandeef.maximagroup.website/wp-content/themes/custom/assets/images/goolge.png" class="img-fluid m-2" alt="#">
                </a>
                <a href="#" class="ios-btn" target="_blank">
                    <img src="https://tandeef.maximagroup.website/wp-content/themes/custom/assets/images/apple.png" class="img-fluid m-2" alt="#">
                </a>
            </div>
            */?>

                </div>

                <div class="col-12 col-sm-6 col-md-2 footer-widget" >

                    <div class="footer-title">
                       <?php echo maxiamTranslate(10)?>
                    </div>
                    <div class="links-holder">
                        
                             <?php 
                			$defaults = array(
                				'theme_location'  => 'Top primary menu',
                				'menu'            => 'Footer Menu',
                				'container'       => '',
                				'container_class' => '',
                				'container_id'    => '',
                				'menu_class'      => '',
                				'menu_id'         => '',
                				'echo'            => true,
                				'items_wrap'      => '<ul id="%1$s " class="%2$s">%3$s</ul>',
                			);
			 wp_nav_menu( $defaults );?>

                  
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 footer-widget ">
                    <div class="footer-title">
                        <?php echo maxiamTranslate(11)?>
                    </div>


                    <div class="links-holder">

                        <ul>
                           
<?php $taxonomy = 'our-services-category';
                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                    if ( $terms && !is_wp_error( $terms ) ) :
                    foreach ( $terms as $term ) { 
                    // print'<pre>';print_r($term);
                    
                    
                    $services_category_image = get_field('services_category_image', $term->taxonomy . '_' . $term->term_id);
                     $available_in = get_field('available_in', $term->taxonomy . '_' . $term->term_id);
                    ?>
                    
                    <li><a href="<?php echo get_term_link($term->slug, 'our-services-category'); ?>"><?php echo $term->name;?></a></li>
                    

   <?php }  endif;?>
                         
                         
                         
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 footer-widget" >

 
                    <div class="footer-title">
                        <?php echo maxiamTranslate(12)?>
                    </div>
                    <div class="footer-address">
                        <ul>
                            <li> <a href="https://www.google.com/maps?ll=25.285424,55.650972&z=14&t=m&hl=en&gl=AE&mapclient=embed&cid=9973716404403181227" target="_blank"> <i class="fas fa-map-marker-alt"></i>
                                    <?php echo $address;?>
                                    
                                </a></li>
                            <li>
                               
                                 <a href="tel:<?php echo $contact_number;?>"> <i class="fas fa-phone-alt"></i>
                                 <strong> <?php echo maxiamTranslate(13)?></strong>
                                     <strong class="english-only" style="font-family: 'HelveticaNeue-bold';"><?php echo $contact_number;?> </strong>
                                </a></li>
                            <li>
                               
                                <a href="#"> <i class="fas fa-fax"></i>
                                   
                                   <strong>  <?php echo maxiamTranslate(15)?></strong>
                                    <span class="english-only"> <?php echo $fax_number;?> </span>
                                </a></li>
                            <li>
                                 
                                 <a href="mailto:<?php echo $email_address;?>"> <i class="fas fa-envelope"></i>
                                   <strong> <?php echo maxiamTranslate(14)?></strong>
                                   <span class="english-only"> <?php echo $email_address;?></span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section-copywrite">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="footer-copy-write-holder">
                        <p class="white_p thin-font"> © <?php echo date('Y');?> <?php echo $copy_write_text;?> <strong><a href="https://maximagroup.ae" class="white_p"> <?php echo maxiamTranslate(16);?></a></strong> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Video Modal -->
     
    
    <div class="modal video-only fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">


                <div class="modal-body">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <!-- Bootstrap Js Link -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Js Link -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- wow js link Start -->
    <script type='text/javascript' src='<?php bloginfo('template_directory');?>/assets/js/wow.js ' id='jquery-core-js'></script>
    <!-- wow js link End -->

    <!-- Owl Js Link -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/owl.carousel.min.js" crossorigin="anonymous"></script>

    <!-- Custom Js Link -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/custom.js" crossorigin="anonymous"></script>


<?php wp_footer(); ?>
    </body>

    </html>
    <script>
        
        (function($) {
	"use strict";
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		var preloader = jQuery(".preloader");
		// jQuery(".preloader").fadeOut();
		if(preloader.length){
			preloader.delay(200).fadeOut(500);
		}
	}
	
	
	function handlePreloaderWithSlideEffect() { 
            $(".preloader").animate({
                height: "toggle"
            });      
	}
	
	
	 

 
	$(window).on('load', function() { 
		handlePreloader();
// 		handlePreloaderWithSlideEffect();
	});

})(window.jQuery);
    </script>
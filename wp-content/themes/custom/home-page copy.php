<?php
/**
* Template Name:  Home Page --
 * This is the template that displays home page of website.
 * @package WordPress
 * @subpackage custom
 * @since custom
 

 */

get_header(); ?>
<?php
$lang = get_bloginfo("language");
 $lang_var='';
if($lang=='ar'){
    $lang_var = '_ar';
}
?>




<!-------------- Header remaining section Start -------------->

<section class="banner" >
    
   
    <div id="video-place" class="video-place"></div>
    <div class="container banner-container">
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12"> 
                <h1 class="banner-title text-white wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    
                     
                      <?php  
                 if($lang=='ar'){?>  
                 
                مرحبا بك في<br> <span>
                     بية تنديف
                     </span>
                 <?php }else{ ?>
                 Welcome to <br> <span>Beeah Tandeef</span>
                 <?php }  ?>
                     
                    
                    
                </h1> 
                <p class="banner-txt text-white wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" >
                     <?php 
                    
                 if($lang=='ar'){?>  
                  لوريم إيبسوم هو ببساطة نص شكلي بمعنى أن الغاية هي الشكل وليس المحتوى
                 <?php }else{ ?>
                  Making Cities Cleaner for a Sustainable Quailty of Life
                 <?php }
                 ?>
                    
                   
                </p>
                
                
                
                
                
                  <?php 
                  	 $feature_video = get_template_directory_uri().'/assets/video/Beaah_TandeefWebsite_V20B.mp4';
                  	?>
         
       
                 
                    <a href="" class="play-btn-holder banner-video-btn " data-toggle="modal" data-src="<?php echo $feature_video; ?>" data-target="#myModal">
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/play_btn.svg" class="play-btn">  
                    </a>
                
                
            </div>
        </div>

    </div>

</section>
<!-------------- Header remaining section END -------------->



<!-------------- Who-we-are remaining section Start -------------->



	
	
<?php
	$the_query = new WP_Query( 'page_id=1310' );
	while ( $the_query->have_posts() ) :
	$the_query->the_post();
$feature_image =  wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
    if($feature_image==''){
     	$feature_image = get_template_directory_uri().'/assets/img/no-image.jpg';
    }


	
	$image = get_field('image');
	$image_url = $image['url'];
	if($image_url==''){
		$image_url = get_field('inner_page_header_image','option');
		$image_url =  $image_url['url'];
		}
		 
	 
	
	
		$heading = get_field('heading');
	
		
?> 
	
	
	
<section class="section-padding  who-we-are-section" style="
                        background:url(<?php echo $feature_image; ?>);
                        background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">

                <h2 class="sec-title text-black">
                    <?php the_title();?>
                </h2>
                
                <?php the_content();?> 

                <a href="<?php echo home_url('about-us');?>" class="btn-main wow slideInUp" data-wow-duration="1s" data-wow-delay="0.0s" ><?php echo maxiamTranslate(8)?></a>

            </div>
        </div>




        <div class="row box-pre-title-row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="text-black box-pre-title wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.0s">
               
                <?php echo $heading;?>
</div>
            </div>
        </div>

 


        <div class="row browser-slider  owl-carousel owl-theme">
            

 <?php  
      $i = 2;
      $wow_count = 2;
  while(has_sub_field('browse_by_category')): 
	    $page_linked = get_sub_field('page_linked');
	    $title = get_sub_field('title');
		$main_image = get_sub_field('main_image');
		 
	   ?>
	   
	   <div class=" ">
	  
   <!--<div>-->
       <a href="<?php echo $page_linked; ?>" style="    text-decoration: none;">
                <div class="box-holder wow zoomIn" data-wow-duration="1s" data-wow-delay="0.0s">
                    <div class="box-bg" style="background-image: url(<?php echo $main_image['url']; ?>); "></div>

                    <div class="info">
                        <p><?php echo $title; ?></p> 
                    </div>

                </div>
                
                </a>
            </div>
             
                        
      <?php 
      $i= $i+1;
      $wow_count = $wow_count+1;
  endwhile;   ?>
  
  

            



        </div>






    </div>

</section>
                         
                         
                         
                         
									
									
 <?php    endwhile;  wp_reset_postdata();?>



<!-------------- Who-we-are remaining section End -------------->






<!-------------- Our Services  section Start -------------->
<?php echo do_shortcode('[get_services]');?>
<!--------------  Our Services   section End -------------->








<!-------------- Where Do  section Start -------------->
<?php echo do_shortcode('[get_where_we_do]');?>
<!-------------- Where Do  section End -------------->





<!-- Map Start --><?php /*
<section class="map-section"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14430.235108068764!2d55.6509724!3d25.2854239!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a69c23a0ef016ab!2sBee&#39;ah%20New%20Headquarters!5e0!3m2!1sen!2sae!4v1628422072651!5m2!1sen!2sae"     style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
*/ ?>
<!-- Map end -->





<!-- Map Start -->
<section class="map-section map" id="map"> 
</section>
<!-- Map end -->


<!--------------Latest News Start -------------->
<?php echo do_shortcode('[get_latest_news]');?>
<!--------------Latest News End -------------->

 

<!--------------Our Clients  section Start -------------->
<?php echo do_shortcode('[get_partners]');?>
<!-------------- Our Clients  section End -------------->



<?php get_footer();?>
 
<script type="text/javascript">
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
} 


  $(document).ready(function(){
        
        var template_url = '<?php bloginfo("template_directory");?>';
        
        var data = ' <video poster='+template_url+'/assets/images/header-image-2.jpg" id="vid" class="video-full" autoplay loop muted >   <source src="'+template_url+'/assets/video/Beaah_TandeefWebsite_V20B.mp4" type="video/mp4"  />  </video>';
       $('#video-place').html(data);
        setTimeout(
    function() { document.getElementById('vid').play(); }, 2000);
    
    
      
});
//   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhch3whXuEgnc7o9mWAva6X38yOLWJ89A&callback=initMap&v=weekly"
    

//https://maps.googleapis.com/maps/api/js?key=AIzaSyAhch3whXuEgnc7o9mWAva6X38yOLWJ89A&callback=initialize";
 
jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script'); 
     script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAhch3whXuEgnc7o9mWAva6X38yOLWJ89A&callback=initialize&v=weekly";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        // mapTypeId: 'hybrid'
     // mapTypeId: 'satellite'
        mapTypeId: 'roadmap'
      // mapTypeId: 'terrain'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
             ['Sharjah, UAE', 25.334697,55.388591],
            ['Dubai, UAE ', 25.1088218,55.1816175],
            ['Abu Dhabi, UAE ', 24.2904515,54.5746495],
            ['Ajman, UAE ', 25.4341859,55.5123924],
            ['Al Madinah Al Munawara, KSA ', 24.48295392479144, 39.58591820370678],
             ['Cairo, Egypt ', 30.0594838,31.2234448],
           
           
    ];
                        
    // Info Window Content
    var infoWindowContent = [
          ['<div class="info_content">' +
        '<h3>Beeah Head Office ( Sharjah) </h3>' +
        '<p>Office : 1st Floor Lagoon Tower, Corniche Road, Sharjah - UAE</p>' +
         '<p>Email: communication@beeah.ae </p>' + '<p> Tel : +971 6 597 8555</p>' +'</div>'],
       ['<div class="info_content">' +
        '<h3>Dubai Office </h3>' +
        '<p>Office no. 509, Al Attar Business Avenue, Plot No. 373-107, Al Barsha Dubai - UAE</p>' +
             '<p>Email: communication@beeah.ae </p>' + '<p> Tel : +971 4 425 3800</p>' +'</div>'],
      ['<div class="info_content">' +
        '<h3>Abu Dhabi Office</h3>' +
        '<p>Office: 1 Gate 245, Mafraq City 1, Abu Dhabi - UAE</p>' +
             '<p>Email: communication@beeah.ae </p>' + '<p> Tel : +971 2 203 4888</p>' +'</div>'],
      ['<div class="info_content">' +
        '<h3>Ajman Office</h3>' +
        '<p>Office: Al Jerf Industrial 1 - Ajman - UAE</p>' +
            '<p>Email: communication@beeah.ae </p>' + '<p> Tel : +971 6 572 9000</p>' +'</div>'],
         
          ['<div class="info_content">' +
        '<h3>Al Madinah Al Munawara  Office</h3>' +
        '<p>Office: 7723 King Abdullah Branch Road, Al Fath Dist., Unit no. 501, Al Madinah Al Munawara, KSA</p>' +
            '<p>Email: communication@beeah.ae </p>' + '<p> Tel : +964 21 322377</p>' +'</div>'],
    
    
     ['<div class="info_content">' +
        '<h3>Cairo Office</h3>' +
        '<p>Oillibya building, 187 sector two, City Center, The Fifth Settlement, Cairo, Egypt.</p>' +
            '<p>Email: communication@beeah.ae </p>' + '<p> Tel : +20 20 2230 6742</p>' +'</div>'],
    
    
    
      
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        
        var iconBase = 'https://tandeef.maximawebsites.com/marker.png';
        
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0],
            // icon: iconBase + 'parking_lot_maps.png'
            icon: iconBase

        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(6);
        google.maps.event.removeListener(boundsListener);
    });
    
}
 




// youtube popup video start
$(document).ready(function() {
 
    // Gets the video src from the data-src on each button
    var videoSrc;
    $('.play-btn-holder').click(function() {
        videoSrc = $(this).data("src");
        // alert(videoSrc);
    });
    // alert($videoSrc);
    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function(e) {

            // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video").attr('src', videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })
        // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function(e) {
            // a poor man's stop video
            $("#video").attr('src', videoSrc);
        })
        // document ready  
});
 




  </script>
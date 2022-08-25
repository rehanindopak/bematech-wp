<?php
/**
 * The template for displaying the header
 * Displays all of the head element and everything up until the "site-content" div.
 * @package WordPress
 * @subpackage custom
 * @since custom
 */

?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?> >
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<!-- FAV Icons -->  
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/assets/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/fav/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_directory');?>/assets/fav/site.webmanifest">
<link rel="mask-icon" href="<?php bloginfo('template_directory');?>/assets/fav/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Begin: bootstrap css links -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/bootstrap/bootstrap.min.css">
<!-- End: bootstrap css links -->

<!-- Begin: font-awesome css links -->
<script src="<?php bloginfo('template_directory');?>/assets/js/fontawesome.js" crossorigin="anonymous"></script>
<!-- End: font-awesome css links -->

<!-- Begin: swiper slider css links -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/swiper-bundle.min.css">
<!-- End: swiper slider css links -->

<!-- Begin: own css links -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/own.css">
<!-- End: own css links -->

<!-- Begin: responsive css links -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/responsive.css">
<!-- End: responsive css links -->

<?php
$lang = get_bloginfo("language");
 $lang_var='';
if($lang=='ar'){
    $lang_var = '_ar';
}
?>
	
		
<?php 
wp_head();

$is_homepage = 'no';
if ( is_front_page() || is_home() ) {
  	 $is_homepage = 'yes';
} 
?>
</head>



<?php
	$the_query = new WP_Query( 'page_id=1601' );
	while ( $the_query->have_posts() ) :
	$the_query->the_post();
    
    $header_logo = get_field('header_logo'); 
    $footer_logo = get_field('footer_logo'); 
    
    
    
        $is_homepage = 'no';
        if ( is_front_page() || is_home() ) {
          	$header_logo = get_field('footer_logo'); 
        } 
    
    
    $email_address = get_field('email_address'); 
    $contact_number = get_field('contact_number'); 
    $fax_number = get_field('fax_number');  
    $address = get_field('address');  
    $copy_write_text = get_field('copy_write_text');   
		
	endwhile; wp_reset_postdata(); ?>



<body>



<div class="preloader">
  <div class="svg_image"></div>
</div>   




<div class="menu-icon-holder <?php if ( is_front_page() || is_home() ) {   }else{ echo  "inner-page"; } ?>" onclick="openNav()">
            <i class="fas fa-bars"></i>
        </div>
        
        
    <!-- Common left side bar Start -->
    <div class="left-over-all-bar-section-one <?php if ($is_homepage != 'yes') {
                                                    echo  "inner-page";
                                                } ?>">
        
        <div class="section-active-icon">
            <ul>
                <li class="active">
                    <i class="fas fa-circle"></i>
                </li>
                <li>
                    <i class="fas fa-circle"></i>
                </li>
                <li>
                    <i class="fas fa-circle"></i>
                </li>
                <li>
                    <i class="fas fa-circle"></i>
                </li>
                <li>
                    <i class="fas fa-circle"></i>
                </li>
                <li>
                    <i class="fas fa-circle"></i>
                </li>
            </ul>
        </div>
    </div>
    <!-- Common left side bar End-->



    <div id="sidebar-holder" class="sidebar-holder-block">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
             <!--<i class="fas fa-times"></i>-->
             <i class="fas fa-bars"></i>
            </a>


 <!-- nav -->
  
      <?php 
			$defaults = array(
				'theme_location'  => 'Top primary menu',
				'menu'            => 'Header Menu',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'items_wrap'      => '<ul id="%1$s " class="%2$s">%3$s</ul>',
			);
			 wp_nav_menu( $defaults );
?>
    <!-- nav end--> 

            <!--<ul>-->
            <!--    <li><a href="<?php echo home_url();?>"> Home </a></li>-->
            <!--    <li> <a href="<?php echo home_url();?>about-us.php"> About Us </a></li>-->
            <!--    <li> <a href="<?php echo home_url();?>we-care.php"> We Care </a></li>-->
            <!--    <li> <a href="<?php echo home_url();?>our-innovations.php"> Our Innovations</a></li>-->
                
            <!--    <li> <a href="javascript:;" class="open_submenu dropdown"> Tandeef  -->
            <!--         </a>-->
            <!--        <ul class="sub-menu">-->
            <!--            <li><a href="<?php echo home_url();?>services.php"> Services</a></li>-->
                        
            <!--        </ul>-->
            <!--    </li>-->
            <!--</ul>-->

 






            </a>
        </div>
        <div class="close-menu-custom" id="close-menu-custom"></div>
    </div>









    <!--------------Top Bar   Start -------------->
    <section class="section-padding header-bg header-section  <?php if ($is_homepage != 'yes') {
                                                                    echo  "inner-page";
                                                                } ?>">
        
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-5 col-md-5 col-lg-5">
                    <div class="logo-holder">
                        <a href="<?php echo home_url();?>">
                            
                            
                            
                            <?php if ($is_homepage != 'yes') {
                               $logo = $header_logo['url'];
                               }else{
                                $logo = $header_logo['url'];} ?>
                            <img src="<?php echo $logo; ?>" alt="header-logo" />
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-7 col-md-7 col-lg-7">
                    <div class="social-icon-holder">
                        
            
                        <ul>
                            <?php while(has_sub_field('social_media_icon', 'option')): ?>
                <li data-wow-delay="0.00s" class="wow rubberBand">
                                <a href="<?php the_sub_field('link');?>" target="_blank"><i class="<?php the_sub_field('i_class');?>"></i></a>
                </li>
              <?php endwhile; ?>
                        </ul>


<?php //echo site_url().'/ar' ;?>
                        <span class="lng-switcher thin-font hidden d-none">  عربي  </span>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--------------Top Bar   End -------------->

 








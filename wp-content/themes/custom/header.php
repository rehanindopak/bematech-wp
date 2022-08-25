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
<html <?php language_attributes(); ?>>

<head> 
    <title><?php bloginfo('name'); ?></title>
 
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="bejoynt.de">
    <!--favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/img/fav/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/img/fav/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/assets/img/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
  
     

    <!-- Mix Css  -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/mix.css">

    <!-- main Style  -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css">

    <!-- Responsive Style  -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css">



    <?php
    wp_head(); 

    $is_homepage = 'no';
    if (is_front_page() || is_home()) {
        $is_homepage = 'yes';
    }
    ?>
</head>



<?php
$the_query = new WP_Query('page_id=324');
while ($the_query->have_posts()) :
    $the_query->the_post();

    $light_logo = get_field('light_logo');
    $dark_logo = get_field('dark_logo');
    $email_address = get_field('email_address');
    $email_address_text = get_field('email_address_text');
    $contact_number = get_field('contact_number');
    $contact_number_text = get_field('contact_number_text');
    $fax_number = get_field('fax_number');
    $fax_number_text = get_field('fax_text');
    $address = get_field('address');
    $copy_write_text = get_field('copy_write_text');  
    $footer_title_text = get_field('footer_title_text');
    $footer_detail_text = get_field('footer_detail_text');

    

endwhile;
wp_reset_postdata(); ?>

<body>

    <?php
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/', $link);
    $page = end($link_array);
    ?>

    <!--preloader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--preloader end-->

    <!--header top start-->
    <!--topbar start-->
    <div id="header-top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 d-none d-lg-block d-md-block">

                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="topbar-text call-us-number font-small font-weight-normal text-lg-right">
                        <a href="tel:+492630964820"> <span> Zu Diensten unter: <strong><?php echo $contact_number;?></strong></span></a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--header top end-->




    <!--header section start-->
    <header class="header position-relative z-9">
        <nav class="navbar navbar-expand-lg <?php if ($page == 'page-6.php' || $page == 'page-7.php' | $page == 'page-8.php' || $page == 'page-99.php') {
                                                echo " navbar-light navbar-theme-white";
                                            } else {
                                                echo " navbar-transparent navbar-dark ";
                                            } ?> navbar-theme-primary fixed-top headroom">
            <div class="container position-relative-">
                <a class="navbar-brand mr-lg-3" href="<?php echo home_url();?>">
                    <img class="navbar-brand-dark" src="<?php echo $light_logo['url'];?>"   alt="<?php echo $dark_logo['alt'];?>">
                    <img class="navbar-brand-light" src="<?php echo $dark_logo['url'];?>"   alt="<?php echo $light_logo['alt'];?>">
                </a>

 

                <div class="navbar-collapse collapse" id="navbar-default-primary">
                    <div class="navbar-collapse-header">

                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="index.php">
                                    <img src="<?php echo $light_logo['url'];?>" alt="<?php echo $light_logo['alt'];?>">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <i class="fas fa-times" data-toggle="collapse" role="button" data-target="#navbar-default-primary" aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation"></i>
                            </div>
                        </div>

                    </div>



                    <?php
                    /*
                    $defaults = array(
                        'theme_location'  => 'Top primary menu',
                        'menu'            => 'Header Menu',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav navbar-nav-hover ml-auto">%3$s</ul>',
                    );
                    wp_nav_menu($defaults);
                */
                    ?>



                    <ul class="navbar-nav navbar-nav-hover ml-auto">

                       
                      

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text">Unsere Lösungen</span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a class="dropdown-item" href="page-3.php">Für Banken</a></li>
                                <li><a class="dropdown-item" href="page-3.php">Für Kleinunternehmen</a></li>
                                <li><a class="dropdown-item" href="page-3.php">Arbeitsplatzumzüge</a></li>
                                <li><a class="dropdown-item" href="page-3.php">Scan-Workflow  Einrichtung</a></li>
                                <li><a class="dropdown-item" href="page-3.php">Softwarelösungen</a></li>
                               
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text">Unser Service</span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a class="dropdown-item" href="page-4.php">Standardservices</a></li>
                                <li><a class="dropdown-item" href="page-4.php">Individuelle Services</a></li>
                                <li><a class="dropdown-item" href="page-4.php">Support</a></li>
                              
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text"> Über uns</span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a class="dropdown-item" href="page-4.php">Das Team</a></li>
                                <li><a class="dropdown-item" href="#">Zertifizierung</a></li>
                                <li><a class="dropdown-item" href="#">Partner / Referenzen</a></li>
                              
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text">Karriere</span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a class="dropdown-item" href="page-8.php">Stellenangebote</a></li>
                                <li><a class="dropdown-item" href="page-6.php">Für Schüler</a></li>
                                <li><a class="dropdown-item" href="page-6.php">Für Berufseinsteiger</a></li>
                                <li><a class="dropdown-item" href="page-6.php">Für Profis</a></li> 
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="page-7.php">Kontakt</a>
                        </li>
                       

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text">Pages</span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a class="dropdown-item" href="page-2.php">Solutions</a></li>
                                <li><a class="dropdown-item" href="page-3.php">Solutions Details</a></li>
                                <li><a class="dropdown-item" href="page-4.php">Services Details</a></li>
                                <li><a class="dropdown-item" href="page-8.php">Karriereportal 1</a></li>
                                 <li><a class="dropdown-item" href="page-5.php"> Karriereportal 2</a></li>
                                <li><a class="dropdown-item" href="page-6.php">Career Page</a></li>
                                <li><a class="dropdown-item" href="page-7.php">Contact Page</a></li>
                                <li><a class="dropdown-item" href="page-9.php">Our Team </a></li>
                                <li><a class="dropdown-item" href="simple-page.php">Simple Page </a></li>
                                <li><a class="dropdown-item" href="page-with-image.php">Page with image</a></li>
                                <li><a class="dropdown-item" href="404.php">404 not found</a></li>
                                <li><a class="dropdown-item" href="impressum.php">impressum.php</a></li>

                            </ul>
                        </li>

                    </ul>

                  
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar-default-primary" aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->



    <?php
    $the_query = new WP_Query('page_id=1601');
    while ($the_query->have_posts()) :
        $the_query->the_post();

        $header_logo = get_field('header_logo');
        $footer_logo = get_field('footer_logo');



        $is_homepage = 'no';
        if (is_front_page() || is_home()) {
            $header_logo = get_field('footer_logo');
        }


        $email_address = get_field('email_address');
        $contact_number = get_field('contact_number');
        $fax_number = get_field('fax_number');
        $address = get_field('address');
        $copy_write_text = get_field('copy_write_text');

    endwhile;
    wp_reset_postdata(); ?>
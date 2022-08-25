<?php

/**
 *@package WordPress
 * @subpackage custom
 * @since custom
 */

get_header(); ?>


<?php
	$the_query = new WP_Query( 'page_id=785' );
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
		 
	 
	
		$title = get_field('title');
		$pre_title = get_field('pre_title');
		$text = get_field('text');  
		
		 
		
?> 
	
	 
<div class="services-cat-page">
    
<section class="page-header gray-image-bg banner-title-text">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                 <h1 class="page-title text-black wow slideInDown" data-wow-duration="1s" data-wow-delay="0s">
                        <?php the_title(); ?>
                    </h1> 
                 
                <p class="page-text text-black wow slideInDown" data-wow-duration="1s" data-wow-delay="0s"><?php the_content(); ?></p>
               
                <img src="<?php echo $image_url; ?>" class="page-header-image wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
            </div>
        </div>

    </div>

</section>













<?php endwhile; wp_reset_postdata(); ?>



<!--------------Page Content START -------------->


 <?php 
$queried_object = get_queried_object(); 
//  print'<pre>';print_r($queried_object);

$queried_object->name; 
$cat_id = $queried_object->term_id;
 ?>

<section class="section-padding page-content">
    <div class="container">

        <!-- About US Intro -->
        <div class="row">
            <div class="col-12 col-sm-4 col-md-3 col-lg-3">

                <div class=" page-content-sidebar">


                    <ul class="sidebar-ul-blocks wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">

                        <?php

$animatedCount = 0.1;
                        $taxonomy = 'our-services-category';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) {
                                // print'<pre>';print_r($term);
                        ?>
                                <li data-group="<?php echo $term->slug; ?>" >
                                    <a href="<?php echo get_term_link($term->slug, 'our-services-category') ?>" class="<?php echo ($term->term_id==$cat_id?'active':'');?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                </li>




                        <?php
                        
                                $animatedCount = $animatedCount;
                                
                            }
                        endif;


                        ?>

                    </ul>

                </div>

            </div>

            <div class="col-12 col-sm-8 col-md-9 col-lg-9">
                
                <?php 
                 $show_in_accordian = get_field('show_in_accordian');
                    if($show_in_accordian === "No"){
                ?>
                <div class="header-custom-title" style="border-bottom: 0px;">
                <h2 class="mb-0">
                    <?php the_title();?>
                </h2>
                </div>
                <div class="header-custom-text">
                    <p class="mb-4">
                        <?php echo the_content();?>
                    </p>
                </div>
                <?php }?>
                
                

                <div class=" page-content-body" style="border-bottom: 0px;">

                    <div id="accordion" class="accordion">
                        <!--All Services-->
                        <?php
                        $i = 1;
$animatedCount = 0;
            
                        $args = array(
                            'post_type' => 'our-services',
                            'tax_query' => array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'our-services-category',
                                    'field'    => 'term_id',
                                    'terms'    => $cat_id
                                )
                            ),
                        ); 


                        $loop = new WP_Query($args);
                        // echo "Last SQL-Query: {$loop->request}";

                        while (have_posts()) : the_post(); 
                            $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            if ($feature_image == '') {
                                $feature_image = get_template_directory_uri() . '/assets/img/no-image.jpg';
                            }

 
                            $show = 'show';
                            if ($i == 0) {
                                // $show = 'show';
                            }



                            $available_in = get_field('available_in');
                            
                            
                            $services_gallery = get_field('services_gallery');
                            
                            // echo '<pre>'; print_r($services_gallery);
                            
                            // foreach($services_gallery as $key => $row){
                            //     // echo '<pre>'; print_r($row);
                            //     echo $row['gallery_image']['url'];
                            // }

                            $slider_available = get_field('slider_available');
                            $after_images_text = get_field('after_images_text');
                            $show_in_accordian = get_field('show_in_accordian');
                            
                            // echo '<pre>'; print_r($slider_available);
                            if($show_in_accordian === "Yes"){
                                
                                $hidePic = "";
                                $just_for_agriculture_section = get_the_title();
                                if( $just_for_agriculture_section === "Agricultural Waste Collection Services"){
                                    $hidePic = "d-none hidden";
                                }

                        ?>


                            <div class="card">
                                <div class="card-header" id="heading<?php echo $i; ?>">
                                    <h5 class="mb-0">
                                        <div class="page-content-title text-black  title-click" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                            <?php the_title(); ?> 
                                        </div>
                                    </h5>
                                </div>

                                <div id="collapse<?php echo $i; ?>" class="collapse <?php echo $show; ?> " aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php the_content(); ?> 


                                        <?php
                                            if($slider_available === "no"){
                                        ?>

                                        <img src="<?php echo $feature_image; ?>" alt="<?php the_title(); ?>" class="<?php echo $hidePic;?>" />
                                        
                                        <?php }else{?>
                                        
                                        
                                        <!--slider code start-->
                                        
                                        <!--<div class="innovations-page owl-carousel owl-theme">-->
<?php/*
    $wow_count = 0.2;
    //     while (get_sub_field('services_gallery')) :
    //     $gallery_image = get_sub_field('gallery_image '); 
    foreach($services_gallery as $key => $row){
                                // echo '<pre>'; print_r($row);
                                // echo $row['gallery_image']['url'];
                            
?>

    <img src="<?php echo $row['gallery_image']['url']; ?>" />
<?php

    $wow_count = $wow_count + 0.1;
        
    }
    
    // endwhile;
    */
?>
<!--</div> -->


<div id="carouselExampleIndicators" class="carousel slide mb-1 <?php echo $hidePic;?>" data-ride="carousel">
  <ol class="carousel-indicators slider-custom-circle">
      <?php
      $circle_count = 0;
        foreach($services_gallery as $key => $row){
      ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $circle_count;?>" class="<?php if($circle_count === 0){ echo 'active'; }else{ echo '';}?>"></li>
    <?php $circle_count++; }?>
  </ol>
  <div class="carousel-inner">
      <?php
      $i = 1;
        foreach($services_gallery as $key => $row){
      ?>
    <div class="carousel-item <?php if($i == 1){echo "active";}else{echo "";}?>">
      <img class="d-block w-100" src="<?php echo $row['gallery_image']['url']; ?>" alt="First slide">
    </div>
    <?php 
        $i++;}
    ?>
    
  </div>
  <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
  <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
  <!--  <span class="sr-only">Previous</span>-->
  <!--</a>-->
  <!--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
  <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
  <!--  <span class="sr-only">Next</span>-->
  <!--</a>-->
</div>
                                        
                                        <!--slider code end-->

                                        <?php }?>
                                        
                                        <p>
                                            <?php echo $after_images_text; ?>
                                        </p>

                                    </div>
                                </div>
                            </div>


                            <?php } $i++;
                            
                            // $animatedCount = $animatedCount+0.2;
                            $animatedCount = $animatedCount;
                            
                              endwhile;
                        wp_reset_postdata(); ?>







                    </div>


                </div>

            </div>
        </div>




    </div>

</section>
</div>
<!--------------Page Content END -------------->


<?php get_footer(); ?>
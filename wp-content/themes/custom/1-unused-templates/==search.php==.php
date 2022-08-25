<?php
 

get_header(); 
?>

  
<div class="inner-banner text-center">
  <div class="container">
    <div class="box">
      <h3>
        Search : <?php echo $_GET['s'];?>
      </h3>
    </div>
    <!-- /.box -->
    <div class="breadcumb-wrapper">
      <div class="clearfix">
        <div class="pull-left">
          <ul class="list-inline link-list">
            <li> <a href="<?php echo home_url('');?>">Home</a> </li>
            <li>
             Search
            </li>
          </ul>
          <!-- /.list-line --> 
        </div>
        <!-- /.pull-left -->
        <div class="pull-right"> </div>
        <!-- /.pull-right --> 
      </div>
      <!-- /.container --> 
    </div>
  </div>
  <!-- /.container --> 
</div>
<div class="sidebar-page-container sec-padd">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
        <section class="blog-section">
          <div class="row">
          
          
          
            <?php 
			
			
				$search = $_GET['s'];

//$query_args = array( 's' => $search ,'post_type' => 'portfolio','orderby' => 'menu_order','order' => 'ASC');
$query_args = array( 's' => $search ,'orderby' => 'menu_order','order' => 'ASC');
$query = new WP_Query( $query_args );

if($query->have_posts() ){
while ( $query->have_posts() ) : $query->the_post();
$feature_image =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
if($feature_image==''){
	$feature_image = get_template_directory_uri().'/assets/images/no-image.png';
	}
	
	?>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="default-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
              
                <div class="lower-content">
                  <div class="date"> <?php echo date("d", strtotime(get_the_date())); ?> <br>
                    <?php echo date("M", strtotime(get_the_date())); ?> </div>
                  <h4><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a></h4>
                  <div class="post-meta">by Admin</div>
                  <div class="text">
                    <p><?php echo strip_tags(substr(get_the_content(),0,100));?>...</p>
                  </div>
                  <div class="link"> <a href="<?php the_permalink(); ?>" class="default_link">Read More <i class="fa fa-angle-right"></i></a> </div>
                </div>
              </div>
            </div>
            <?php 
			
	
	  endwhile;  wp_reset_postdata(); 
}else{ ?>
     <div class="col-md-12 col-sm-12 col-xs-12">
             <h2>No result Found with current Search Query...</h2>
            </div>
    
<?php	}
	  ?>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
        <?php get_sidebar('blog'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
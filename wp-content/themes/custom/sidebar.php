<div class="col-secondary col-md-4">
  <div class="widget widget_recent_post">
    <h3 class="widget-title">Recent Post</h3>
    <?php
	$recent_posts = wp_get_recent_posts();
$i=0;
foreach( $recent_posts as $recent ){
$i++;

?>
    <?php $feature_image = wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ); ?>
    <article class="recent-post">
      <div class="recent-post-thumbnail"> <a href="<?php echo get_permalink($recent["ID"]);?>"><img alt="" src="<?php echo $feature_image?>" class="wp-post-image"></a> </div>
      <div class="recent-post-body">
        <h4 class="recent-post-title"> <a href="<?php echo get_permalink($recent["ID"]);?>">
          <?php the_title()?>
          </a> </h4>
        <div class="recent-post-time"><?php echo $recent["post_date"];?></div>
      </div>
    </article>
    <?php 
if($i==5){break;}
}
?>
  </div>
  <div class="widget">
    <div class="blog-tags">
      <?php
                              $tags = get_tags();
							  foreach ( $tags as $tag ) {
							  $tag_link = get_tag_link( $tag->term_id );
							  ?>
      <a href="#"><?php echo $tag->name;?></a>
      <?php } ?>
    </div>
  </div>
</div>

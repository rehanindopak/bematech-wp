<?php
function slider_function($atts)
{
	ob_start(); ?>

	<?php

	$lang = get_bloginfo("language");
	$lang_var = '';
	if ($lang == 'ar') {
		$lang_var = '_ar';
	}



	$the_query = new WP_Query('page_id=277');
	while ($the_query->have_posts()) :
		$the_query->the_post();



		$loop_count = 0;
		while (has_sub_field('homepage_banner')) :

			$image = get_sub_field('banner_image');
			$banner_pre_title = get_sub_field('banner_pre_title');
			$banner_title = get_sub_field('banner_title');
			$banner_text = get_sub_field('banner_text');
	?>

			<!-- SLIDE  -->
			<section class="home-header_section lr_common_padding" style="background-image: url(<?php echo $image['url']; ?>);">

				<div class="banner_txt_holder">
					<div class="row">
						<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
							<div class="welcome_txt_box">
								<div class="txt_holder">
									<h1>
										<?php echo $banner_pre_title; ?>
									</h1>
									<h2>
										<?php echo $banner_title; ?>
									</h2>
									<p> <?php echo $banner_text; ?> </p>
									<div class="btn_holder" onclick="lightbox_open();">
										<a href="javascript:void(0);">
											explore more
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2 col-sm-2 col-md-6 col-lg-6">
							<div class="chat_btn_box">
								<a href="#" class="chat_icon_holder"> 
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/chat_btn.svg" alt="Chat Button" class="chat_img" />
								</a>
							</div>
						</div>
					</div>
				</div>

			</section>


	<?php
		endwhile;
		wp_reset_postdata();
	endwhile; ?>





<?php
	$content = ob_get_clean();
	return $content;
}
add_shortcode('get_slider', 'slider_function'); ?>
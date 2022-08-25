<?php
function partners_function($atts)
{


    $is_for =  $atts['is_for'];



    ob_start(); ?>

    <?php
    $the_query = new WP_Query('page_id=1286');
    while ($the_query->have_posts()) :
        $the_query->the_post();
        $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($the_query->ID));
        if ($feature_image == '') {
            $feature_image = get_template_directory_uri() . '/assets/img/no-image.jpg';
        }



        $image = get_field('image');
        $image_url = $image['url'];
        if ($image_url == '') {
            $image_url = get_field('inner_page_header_image', 'option');
            $image_url =  $image_url['url'];
        }



        $title = get_field('title');
        $pre_title = get_field('pre_title');
        $text = get_field('text');



    ?>



        <!-- our-clients Section -->
        <section class="our-clients-div lr_common_padding">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title_holder mb-4">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-eight_section lr_common_padding">


            <div class="row justify-content-center" id="our-client-logos">




                <?php
                $home_count  = 0;
                $animatedCount = 1;
                $i = 2;
                $wow_count = 2;
                while (has_sub_field('clients')) :
                    $client_name = get_sub_field('client_name');
                    $client_image = get_sub_field('client_image');


                    if ($is_for == 'homepage') {
                        $home_count = $home_count + 1;
                    }

                    // 		if($animatedCount%2==0){
                    // 		   $checkevnt = "slideInUp";
                    // 		}else{
                    // 		   $checkevnt = "slideInDown";
                    // 		}

                ?>


                    <div class="col-4 col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <img src="<?php echo $client_image['url']; ?>" alt="<?php echo $client_image['alt']; ?>" />
                    </div>

                <?php
                    $i = $i + 1;
                    $wow_count = $wow_count + 1;
                    $animatedCount++;


                    if ($home_count == 5) {
                        break;
                    }


                endwhile;   ?>





            </div>
        </section>



    <?php endwhile;
    wp_reset_postdata(); ?>


<?php $content = ob_get_clean();
    return $content;
}
add_shortcode('get_partners', 'partners_function');
?>
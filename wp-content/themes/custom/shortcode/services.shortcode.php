<?php
//short code in function.php
function services_function($atts)
{
    ob_start(); ?>


    <?php



    $lang = get_bloginfo("language");
    $lang_var = '';
    if ($lang == 'ar') {
        $lang_var = '_ar';
    }

    $the_query = new WP_Query('page_id=785');
    while ($the_query->have_posts()) :
        $the_query->the_post();

        $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($the_query->ID));
        if ($feature_image == '') {
            $feature_image = get_template_directory_uri() . '/assets/images/no-image.jpg';
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


        <!-- Our Services Section -->
        <section class="home-second_section third_section bg_image lr_common_padding" style="    
background-image: url(<?php echo $feature_image; ?>); ">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title_holder">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="txt_holder">
                        <p><?php the_content(); ?> </p>
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="btn_holder hoverBtnOneEvent">
                        <div class="slider_btn_holder">
                            <a href="<?php echo the_permalink(); ?>" class="js_hover_event hoverBtnOneEvent">
                                <?php echo maxiamTranslate(8) ?>
                            </a>
                            <div class="menu_arrow_icon_holder hoverBtnOneEvent">
                                <i class="fas fa-solid fa-arrow-right arrow_icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>











            <!-------------------New------------------->

            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <!-- Nav pills -->
                    <ul class="nav nav-pills" role="tablist">

                        <?php

                        $wow_count = 0.1;
                        $active = 'active';
                        $taxonomy = 'our-services-category';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) {
                                $services_category_image = get_field('services_category_image', $term->taxonomy . '_' . $term->term_id);
                                $available_in = get_field('available_in' . $lang_var, $term->taxonomy . '_' . $term->term_id);
                        ?>


                                <li class="nav-item">
                                    <a class="nav-link <?php echo $active; ?>" data-toggle="pill" href="#tab_<?php echo $term->term_id; ?>">
                                        <span><i class="fa-solid fa-chevron-right"></i></span>
                                        Public Cleansing & City
                                        Cleaning Services
                                    </a>
                                </li>
                        <?php
                                $active = '';
                                $wow_count = $wow_count + 0.1;
                            }
                        endif; ?>



                    </ul>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <?php

                        $wow_count = 0.1;
                        $active = 'active';
                        $taxonomy = 'our-services-category';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) {
                                $services_category_image = get_field('services_category_image', $term->taxonomy . '_' . $term->term_id);
                                $available_in = get_field('available_in' . $lang_var, $term->taxonomy . '_' . $term->term_id);

                                if ($services_category_image['url'] == '') {
                                    $services_category_image['url'] = get_template_directory_uri() . '/assets/images/no-image.jpg';
                                }
                        ?>

                                <div id="tab_<?php echo $term->term_id; ?>" class="tab-pane <?php echo $active; ?>">
                                    <div class="navs_content_img_holder">
                                        <img src="<?php echo $services_category_image['url']; ?>" alt="service 1" />
                                        <div class="txt_holder">
                                            <h3> <?php echo $term->name; ?> </h3>
                                            <p><?php echo $available_in; ?> </p>
                                            <div class="btn_holder hoverBtnOneEvent">
                                                <div class="slider_btn_holder">
                                                    <a href="<?php echo get_term_link($term->slug, 'our-services-category'); ?>" class="js_hover_event hoverBtnOneEvent">
                                                        <?php echo maxiamTranslate(8) ?>
                                                    </a>



                                                    <div class="menu_arrow_icon_holder hoverBtnOneEvent">
                                                        <i class="fas fa-solid fa-arrow-right arrow_icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                </li>
                        <?php
                                $active = '';
                                $wow_count = $wow_count + 0.1;
                            }
                        endif; ?>


                    </div>
                </div>
            </div>
            <!-- Where we do work Section -->
            <div class="fourth_section">
                <div class="bg_image">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/fourt_bg_img.png" alt="BG Image" />
                </div>
                <div class="content_holder">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h1 class="title_holder text-center">
                                Where Do We Work ?
                            </h1>
                        </div>
                        <div class="custom-tabs">
                            <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center border-0 rounded-nav mt-5">
                                <li class="nav-item flex-sm-fill">
                                    <a id="uae-tab" data-toggle="tab" href="#uae" role="tab" aria-controls="uae" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">UAE</a>
                                </li>
                                <li class="nav-item flex-sm-fill">
                                    <a id="ksa-tab" data-toggle="tab" href="#ksa" role="tab" aria-controls="ksa" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">KSA</a>
                                </li>
                                <li class="nav-item flex-sm-fill">
                                    <a id="egypt-tab" data-toggle="tab" href="#egypt" role="tab" aria-controls="egypt" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">EGYPT</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div id="myTabContent" class="tab-content">
                                <div id="uae" role="tabpanel" aria-labelledby="uae-tab" class="tab-pane fade px-4 py-5 show active">
                                    <div class="map_holder bg_global_svg">
                                        <div class="location_info_holder">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/active_location.svg" alt="Map" />
                                            <div class="info_box">
                                                <h4>
                                                    Abu Dhabi Office
                                                </h4>
                                                <p>
                                                    <i class="fa-solid fa-location-dot"></i> &nbsp; 1 Gate 245, Mafraq City 1, Abu Dhabi
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-envelope"></i> &nbsp; communication@beeah.ae
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-phone"></i> &nbsp; +971 2 203 4888
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ksa" role="tabpanel" aria-labelledby="ksa-tab" class="tab-pane fade px-4 py-5">
                                    <div class="map_holder bg_global_svg">
                                        <div class="location_info_holder">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/active_location.svg" alt="Map" />
                                            <div class="info_box">
                                                <h4>
                                                    Abu Dhabi Office
                                                </h4>
                                                <p>
                                                    <i class="fa-solid fa-location-dot"></i> &nbsp; 1 Gate 245, Mafraq City 1, Abu Dhabi
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-envelope"></i> &nbsp; communication@beeah.ae
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-phone"></i> &nbsp; +971 2 203 4888
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="egypt" role="tabpanel" aria-labelledby="egypt-tab" class="tab-pane fade px-4 py-5">
                                    <div class="map_holder bg_global_svg">
                                        <div class="location_info_holder">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/active_location.svg" alt="Map" />
                                            <div class="info_box">
                                                <h4>
                                                    Abu Dhabi Office
                                                </h4>
                                                <p>
                                                    <i class="fa-solid fa-location-dot"></i> &nbsp; 1 Gate 245, Mafraq City 1, Abu Dhabi
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-envelope"></i> &nbsp; communication@beeah.ae
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-phone"></i> &nbsp; +971 2 203 4888
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-------------------New------------------->



            <div class="">
                <div class="box-holder">
                    <div class="box-bg" style="
                        background:url(<?php echo $services_category_image['url']; ?>);
                        background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    "></div>

                    <div class="info">
                        <div>
                            <p><?php echo $term->name; ?></p>
                            <div class="availble">
                                <span> <?php //echo maxiamTranslate(18); 
                                        ?> </span> <?php echo $available_in; ?>
                            </div>

                            <a href="<?php echo get_term_link($term->slug, 'our-services-category') ?>"> <?php echo maxiamTranslate(8) ?> <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>








        </section>

    <?php
    endwhile;
    wp_reset_postdata(); ?>


<?php $content = ob_get_clean();
    return $content;
}
add_shortcode('get_services', 'services_function');
?>
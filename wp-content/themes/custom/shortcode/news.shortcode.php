<?php
//short code in function.php
function latest_news_fuction($atts)
{
    ob_start(); ?>


    <?php


    $lang = get_bloginfo("language");
    $lang_var = '';
    if ($lang == 'ar') {
        $lang_var = '_ar';
    }



    $the_query = new WP_Query('page_id=212');
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



        <section class="home-fifth_section l_common_padding">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title_holder">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>



                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">




                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">



                            <ul class="nav nav-pills mb-3 pt-4" id="pills-tab" role="tablist">


                                <?php

                                $wow_count = 0.1;
                                $active = 'active';
                                $taxonomy = 'category';
                                $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                                if ($terms && !is_wp_error($terms)) :
                                    foreach ($terms as $term) {
                                        // print_r($term);
                                        $services_category_image = get_field('services_category_image', $term->taxonomy . '_' . $term->term_id);
                                        $available_in = get_field('available_in' . $lang_var, $term->taxonomy . '_' . $term->term_id);
                                ?>

                                        <li class="nav-item">
                                            <a class="nav-link <?php echo $active; ?>" id="latest-tab" data-toggle="pill" href="#news_<?php echo $term->term_id; ?>" role="tab" aria-controls="latest" aria-selected="true">
                                                <?php echo $term->name; ?></a>
                                        </li>

                                <?php
                                        $active = '';
                                        $wow_count = $wow_count + 0.1;
                                    }
                                endif; ?>




                            </ul>
                        </div>
                        <div class="col-sm-10 col-md-10 col-lg-4">
                            <div class="see_more_holder">
                                <a href="javascript:void(0);">
                                    show more
                                </a>
                                <a href="javascript:void(0);" class="filter_btn_holder">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/filter_icon.svg" alt="Filter Icon" />&nbsp;
                                    filter & sort
                                </a>
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2"></div>
                    </div>

















                    <div class="tab-content customTabContentHolder" id="pills-tabContent">
                        <?php

                        $wow_count = 0.1;
                        $active = 'show active';
                        $taxonomy = 'category';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) {
                                // print_r($term);
                                $services_category_image = get_field('services_category_image', $term->taxonomy . '_' . $term->term_id);
                                $available_in = get_field('available_in' . $lang_var, $term->taxonomy . '_' . $term->term_id);
                        ?>


                                <div class="tab-pane fade <?php echo $active; ?>" id="news_<?php echo $term->term_id; ?>" role="tabpanel" aria-labelledby="latest-tab">
                                    <div class="swiper mySwiper2">
                                        <div class="swiper-wrapper">


                                            <?php
                                            $animatedCount = 0.1;
                                            $front_count = 0;
                                            $args = array('orderby' => 'menu_order', 'order' => 'ASC', 'cat' => $term->term_id);
                                            $loop = new WP_Query($args);
                                            while ($loop->have_posts()) : $loop->the_post();


                                                $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($loop->ID));
                                                if ($feature_image == '') {
                                                    $feature_image = get_template_directory_uri() . '/assets/images/no-image.png';
                                                }
                                                $short_text = get_field('news_short_text');
                                                //$front_image = get_field('news_front_image');


                                            ?>

                                                <div class="swiper-slide">
                                                    <div class="swiper_card">
                                                        <img src="<?php echo $feature_image; ?>" alt="Image 1" class="swiper_slider_img" />
                                                        <div class="info_holder">
                                                            <h2>
                                                                <?php the_title(); ?>
                                                            </h2>
                                                            <p>
                                                                <?php echo $short_text; ?>
                                                            </p>
                                                            <div class="read_more_holder">
                                                                <span>
                                                                    <i class="fa-regular fa-calendar-days"></i>
                                                                    <?php echo date("j F, Y", strtotime(get_the_date())); ?>
                                                                </span>
                                                                <a href="<?php the_permalink(); ?>">
                                                                    see details
                                                                    <i class="fa-solid fa-arrow-right-long"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php

                                                $front_count++;
                                                if ($front_count == 12) {
                                                   // break;
                                                }
                                            endwhile;
                                            wp_reset_postdata(); ?>

                                        </div>

                                    </div>
                                </div>



                        <?php
                                $active = '';
                                $wow_count = $wow_count + 0.1;
                            }
                        endif; ?>





                    </div>






                </div>
            </div>
        </section>
    <?php


    endwhile;
    wp_reset_postdata(); ?>

    <!-- Latest News End -->

<?php $content = ob_get_clean();
    return $content;
}
add_shortcode('get_latest_news', 'latest_news_fuction');
?>
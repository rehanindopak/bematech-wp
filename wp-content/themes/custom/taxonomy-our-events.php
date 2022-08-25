<?php

/**
 *@package WordPress
 * @subpackage custom
 * @since custom
 */

get_header();


$image = get_field('image');
$image_url = $image['url'];
if ($image_url == '') {
    $image_url = get_field('inner_page_header_image', 'option');
    $image_url =  $image_url['url'];
}
?>





<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="page-title text-black">
                    <?php echo "ds";
                    the_title();


                    echo get_queried_object_id();

                    $queried_object = get_queried_object();
                    echo $cat_id = $queried_object->term_id;
                    ?>
                </h1>
                <p class="page-text text-black"><?php the_content(); ?></p>

                <img src="<?php echo $image_url; ?>" class="page-header-image" />
            </div>
        </div>

    </div>

</section>




<!--------------Page Content START -------------->


<section class="section-padding page-content">
    <div class="container">

        <!-- About US Intro -->
        <div class="row">
            <div class="col-12 col-sm-4 col-md-3 col-lg-3">

                <div class=" page-content-sidebar">


                    <ul class="sidebar-ul-blocks">

                        <?php


                        $taxonomy = 'our-services-category';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) {
                                // print'<pre>';print_r($term);
                        ?>
                                <li data-group="<?php echo $term->slug; ?>">
                                    <a href="<?php echo get_term_link($term->slug, 'our-services-category') ?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                </li>




                        <?php }
                        endif;


                        ?>

                    </ul>

                </div>

            </div>

            <div class="col-12 col-sm-8 col-md-9 col-lg-9">

                <div class=" page-content-body">

                    <div id="accordion" class="accordion">
                        <!--All Services-->
                        <?php
                        $i = 1;

            // get_queried_object_id(); 
            //             $queried_object = get_queried_object();
            //             echo $cat_id = $queried_object->term_id;

                         
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
                        		echo "Last SQL-Query: {$loop->request}";

                        while (have_posts()) : the_post();

                            echo "1";



                            $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            if ($feature_image == '') {
                                $feature_image = get_template_directory_uri() . '/assets/img/no-image.jpg';
                            }





                            $show = '';
                            if ($i == 0) {
                                // $show = 'show';
                            }



                            $available_in = get_field('available_in');



                        ?>


                            <div class="card">
                                <div class="card-header" id="heading<?php echo $i; ?>">
                                    <h5 class="mb-0">
                                        <div class="page-content-title text-black  title-click" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                            <?php the_title(); ?>
                                        </div>
                                    </h5>
                                </div>

                                <div id="collapse<?php echo $i; ?>" class="collapse <?php echo $show; ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                                    <div class="card-body">

                                        <p> <?php the_content(); ?></p>


                                        <img src="<?php echo $feature_image; ?>" alt="<?php the_title(); ?>" />



                                    </div>
                                </div>
                            </div>


                            <?php $i++; ?>


                        <?php endwhile;
                        wp_reset_postdata(); ?>







                    </div>


                </div>

            </div>
        </div>




    </div>

</section>
<!--------------Page Content END -------------->


<?php get_footer(); ?>
<?php
/**
 *  
 * @package WordPress
 * @subpackage custom
 * @since custom
 */

get_header(); 
?>
<?php while (have_posts()) : the_post();

    $feature_image =  wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    if ($feature_image == '')     {
        $no_image_url = get_field('header_image', 'option');
        $feature_image =  $no_image_url['url'];
    }



    $job_main_title = get_field('job_main_title');
    $section_2_title = get_field('section_2_title');
    $section_2_text = get_field('section_2_text'); 
    $section_4_title = get_field('section_4_title');
    $section_4_text = get_field('section_4_text');
 
 
    $header_image = get_field('header_image');
    $header_image_url = $header_image['url'];
    // print'<pre>';print_r($header_image);
    if ($header_image_url == '') {
        $no_image_url = get_field('no_image', 'option');
        $header_image_url =  $no_image_url['url'];
    }

?>




    <div class="main page-6 contact-page">


        <!--hero section start-->
        <section class="section pt-10 pb-8 section-header mobile-section-header " style="background: #fff;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="hero-slider-content text-center">
                            <span class="text-uppercase">&nbsp;</span>
                            <h1 class="display-2"><?php echo $job_main_title; ?></h1>
                            
                            <ul>
                                
                                <?php
                                $job_details_info = '';
                                if (have_rows('jobs_main_infos')) : 
                                    while (have_rows('jobs_main_infos')) : the_row();
                                        $jobs_description_lists = get_sub_field('jobs_description_lists');
                                    
                                    $job_details_info .= "$jobs_description_lists"."  -  ";
                                    ?>
                                        <li><?php echo $jobs_description_lists; ?></li>
                                    <?php endwhile;  endif; ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="job_details_val" style="display: ;none;"><?php echo $job_main_title;?></div>
        <div id="job_details_info_val" style="display: ;none;"><?php echo $job_details_info;?></div>
        <!--hero section end-->

        <div class="contact-body">
            <!--Custom Blue text section :  Start-->
            <section class="section  text-white section-lg section-padding-bottom-none  ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-8">
                            <div class="section-heading mb-5 text-center text-white"> 
                                <h2><?php echo $section_2_title;?></h2>
                                <p class="lead"><?php echo $section_2_text;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Custom Blue text section :  End-->


            <!--review section start-->
            <section class="section  text-white section-sm">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-7">
                            <!--Accordion-->
                            <div class="accordion">

                            <?php 
                            $question_tab_id = 1;
                            if (have_rows('jobs_question_descriptions')) : 
                                    while (have_rows('jobs_question_descriptions')) : the_row();
                                    $jobs_question_title = get_sub_field('jobs_question_title');
                                    $jobs_question_details = get_sub_field('jobs_question_details');
                                    ?> 

                                        <div class="card card-sm px-4 py-1 mb-1">
                                    <div data-target="#panel-<?php echo $question_tab_id;?>" class="accordion-panel-header icon-title <?php echo ($question_tab_id == '1'?'':'collapsed'); ?>" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="panel-<?php echo $question_tab_id;?>">
                                    <span class="h5 mb-0"><?php echo $jobs_question_title; ?></span> <span class="icon"><i class="fas fa-angle-down"></i></span></div>
                                    <div class="collapse <?php echo ($question_tab_id == '1'?'show':''); ?>" id="panel-<?php echo $question_tab_id;?>">
                                        <div class="accordion-content">
                                            <p><?php echo $jobs_question_details; ?></p>
                                        </div>
                                    </div>
                                </div>


                                    <?php 
                                $question_tab_id = $question_tab_id+1;
                                endwhile;  endif; ?>   

                            </div>
                            <!--End of Accordion-->
                        </div>
                    </div>
                </div>
            </section>
            <!--review section end-->
 
            <!--Custom Blue text section :  Start-->
            <section class="section section-sm  section-padding-bottom-none">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-8">
                            <div class="section-heading mb-5 text-center text-white">
                                <h2><?php echo $section_4_title; ?></h2>
                                <?php echo $section_4_text; ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Custom Blue text section :  End-->




            <!--contact us section start-->
            <section class="section  text-white section-sm mobile-pt0">
                <div class="container contact">
                    <div class="col-12 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="row justify-content-around">

                     


                        <div class="col-12 col-md-7">
                            <div class="contact-us-form  rounded p-1">

                             
                                <?php echo do_shortcode('[contact-form-7 id="476" title="Karriere Form"]');?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--contact us section end-->


        </div>
        <!--===== ===== ===== ===== My Code End here ===== ===== ===== ===== -->




    </div>



<?php endwhile;
wp_reset_postdata(); ?>

<?php get_footer(); ?>

<script>
function changeVal(custom_id) { 
        $job_details_val = $('#job_details_val').html(); 
         $new_val = $('#job_number').val($job_details_val);

        $job_details_info_val = $('#job_details_info_val').html(); 
        $new_val = $('#job_number_details').val($job_details_info_val); 
    }
 
 changeVal();
</script>
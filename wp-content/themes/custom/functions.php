<?php

/**
 * Custom functions and definitions
 *
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage custom
 * @since custom
 */


/**
 * Enqueue scripts and styles.
 *
 */

function site_scripts()
{
    // Load All CSS.
    /*
	wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/assets/css/animate.css', array(),false );
	*/
    wp_enqueue_style('style', get_stylesheet_uri());


    // Load All Scripts.
    /*
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true );
	wp_enqueue_script( 'jquery-waypoints.js', get_template_directory_uri() . '/assets/js/jquery-waypoints.js', array(), false, true );
	
	//SLIDER REVOLUTION
	wp_enqueue_script( 'jquery.themepunch.tools.min.js', get_template_directory_uri() . '/assets/js/jquery.themepunch.tools.min.js', array(), false, true );
	wp_enqueue_script( 'jquery.themepunch.revolution.min.js', get_template_directory_uri() . '/assets/js/jquery.themepunch.revolution.min.js', array(), false, true );
	wp_enqueue_script( 'slider.js', get_template_directory_uri() . '/assets/js/slider.js', array(), false, true );
	*/

    //wp_enqueue_script( 'gmap.js', get_template_directory_uri() . '/assets/js/gmap.js', array(), false, true );



}
add_action('wp_enqueue_scripts', 'site_scripts');



// Register your menus
function my_custom_menus()
{
    $locations = array(
        'header_menu'   => __('Top primary menu', 'elements')
    );
    register_nav_menus($locations);
}

// Hook them into the theme-'init' action
add_action('init', 'my_custom_menus');


// Function that outputs the contents of the dashboard widget
function dashboard_widget_function($post, $callback_args)
{
    echo "Hello World, this is my first Dashboard Widget!";
}


/**
 * Register our SignUp and widgetized areas.
 *
 */
function footer_init()
{

    register_sidebar(array(
        'name' => __('AppointmentBlock', 'elements'),
        'id' => 'AppointmentBlock',
        'description'   => 'Right SideBar Widget for Appointment Block',
        'class'  => '',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}
add_action('widgets_init', 'footer_init');


//adding template in page attributes
add_action('init', 'my_custom_init');

function my_custom_init()
{
    // remember add first parameter post type as 'page'
    add_post_type_support('page', 'page-attributes');
}


// Creating custom post type function
function create_posttype()
{
    register_post_type(
        'losungen',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Losungen'),
                'singular_name' => __('Losungen')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'losungen'),
            'supports' => array('thumbnail', 'title', 'editor', 'page-attributes',),
            'taxonomies' => array('losungen-category', 'post_tag'),
        )
    );


    register_post_type(
        'services',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Services')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array('thumbnail', 'title', 'editor', 'page-attributes',),
            'taxonomies' => array('services-category', 'post_tag'),
        )
    );


    register_post_type(
        'job',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Jobs'),
                'singular_name' => __('Jobs')
            ),

            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'jobs'),
            'supports' => array('thumbnail', 'title', 'editor', 'page-attributes',),
            'taxonomies' => array('jobs-category', 'post_tag'),
        )
    );
}

add_action('init', 'create_services_taxnomy');
function create_services_taxnomy()
{
    register_taxonomy(
        'services-category',
        'services',
        array(
            'label' => __('Services Category'),
            'rewrite' => array('slug' => 'services-category'),
            'hierarchical' => true,
        )
    );
}




// Hooking up our function to theme setup
add_action('init', 'create_posttype');




///adding feature image property to theme
add_theme_support('post-thumbnails');

// ACF THEME OPTIONS
if (function_exists('acf_set_options_page_title')) {
    acf_set_options_page_title(__('Theme Options'));
}
if (function_exists('acf_add_options_sub_page')) {
    acf_add_options_sub_page('Main Settings'); 


}

/*
add_filter( 'nav_menu_link_attributes', 'maxima_filter_function_name', 10, 3 );

function maxima_filter_function_name( $atts, $item, $args ) {

    if (preg_match('/^#/', $atts['href'])) {

        $atts['class'] = isset($atts['class']) ? $atts['class'] . ' ' . 'page-scroll' : 'page-scroll';

    }

    return $atts;
}
*/
/*
//Adding wp_title function without it wp_title will not work
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
 if( empty( $title ) && ( is_home() || is_front_page() ) ) {
   return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
 }
 return $title;
}*/

//adding feature image to WordPress dashboard listing in post and custom post type ---- Start

// GET FEATURED IMAGE
function ST4_get_featured_image($post_ID)
{
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}

// ADD NEW COLUMN
function ST4_columns_head($defaults)
{
    $defaults['featured_image'] = 'Featured Image';
    return $defaults;
}

// SHOW THE FEATURED IMAGE
function ST4_columns_content($column_name, $post_ID)
{
    if ($column_name == 'featured_image') {
        $post_featured_image = ST4_get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" style="width:50%;" />';
        }
    }
}

add_filter('manage_posts_columns', 'ST4_columns_head');
add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);


/************************************AJAX************************************/
//Call Gallery for home page

add_action('wp_ajax_gallery_action', 'gallery_action');
add_action('wp_ajax_nopriv_gallery_action', 'gallery_action');

function gallery_action()
{
    echo do_shortcode('[get_gallery gallary_for="home"]');
    exit();
}




add_action('wp_ajax_gallery_inner_action', 'gallery_inner_action');
add_action('wp_ajax_nopriv_gallery_inner_action', 'gallery_inner_action');

function gallery_inner_action()
{
    echo do_shortcode('[get_gallery gallary_for="inner_home"]');
    exit();
}
/***********************************AJAX END*************************************/




/*Code used fro Inserting SVGs to website*/
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
/*Code used fro Inserting SVGs to website*/


function custom_init()
{
}


/*********************************** Function ge the Details of WEbsite *************************************/
function wp_get_attachment($attachment_id)
{

    $attachment = get_post($attachment_id);
    return array(
        'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}
/*
function my_login_logo() {
    ?>
            <style type="text/css">
                    #login h1 a, .login h1 a {
                    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-top.svg);
                    height:65px;
                    width:320px;
                    background-size: 320px 65px;
                    background-repeat: no-repeat;
                    padding-bottom: 30px;
                    }
                    
                    body.login.js.login-action-login.wp-core-ui.locale-en-us {
        background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/events_bg.png);
        background-repeat: no-repeat;
        background-color: #f8fcfa;
    }
                    </style>
                <?php } 

                */
add_action('login_enqueue_scripts', 'my_login_logo');


//include('MaximaTranslator.php');
//adding feature image to WordPress dashboard listing in post and custom post type ---- End
include('include.shortcode.php');


add_action('admin_init', 'posts_order_wpse_91866');

function posts_order_wpse_91866()
{
    add_post_type_support('post', 'page-attributes');
}



// Add your own Css file to the Admin 
add_action('admin_head', 'my_custom_css');
function my_custom_css()
{
    $current_theme_url = get_template_directory_uri();
    echo '<link rel="stylesheet" href="' . $current_theme_url . '/assets/css/blocks-css.css" type="text/css" media="all" />';
}

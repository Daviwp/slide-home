<?php


/** Enqueuing the Stylesheet for the CTA Button */

function slidehome_enqueue_scripts()
{
    if (!is_admin() && is_front_page() || is_home()) {
        wp_enqueue_style('slide-home',  plugin_dir_url(__FILE__) . 'assets/css/slide-home.css', '', '0.3');
        wp_enqueue_style('slick-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_script('slick-min', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), true);
        wp_enqueue_script('functions-js', plugin_dir_url(__FILE__) . 'assets/js/functions.js', array('jquery'),'0.4', true);
        wp_enqueue_script('ionicons-js', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', array('jquery'), true);
    }
}
add_action('wp_enqueue_scripts', 'slidehome_enqueue_scripts');


function slide_home()
{
    $arguments = array(
        "post_type" => "slidehome",
        "numberposts" => -1
    );
    $sample_array = get_posts($arguments);

    foreach ($sample_array as $testimonial) {

        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($testimonial->ID), "full");

        $output .= '<img src="' . $thumbnail[0] . '"/>';
    }
    if (is_front_page() || is_home()) {
        return '<div class="single-item">' . $output . '</div>';
    }
}

add_shortcode('slidehome', 'slide_home');
function slideHome_init()
{
    slide_home();
}
add_action('init', 'slideHome_init');

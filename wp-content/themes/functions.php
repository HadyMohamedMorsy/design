<?php
add_theme_support( 'menus');
add_theme_support( 'post-thumbnails');
add_theme_support( 'widgets');

function load_css(){

    wp_enqueue_style('normalize' , get_template_directory_uri() . '/css/normalize.css' , array() , false , 'all');
    wp_enqueue_style('slicknav' , get_template_directory_uri() . '/css/slicknav.css' , array() , false , 'all');
    wp_enqueue_style('animate' , get_template_directory_uri() . '/css/animate.css' , array() , false , 'all');
    wp_enqueue_style('magnific-popup' , get_template_directory_uri() . '/css/magnific-popup.css' , array() , false , 'all');
    wp_enqueue_style('theme' , get_template_directory_uri() . '/css/theme.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_template_directory_uri() . '/style.css' , array() , false , 'all');
    wp_enqueue_style('responsive' , get_template_directory_uri() . '/css/responsive.css' , array() , false , 'all');
    wp_enqueue_style('swiper' , get_template_directory_uri() . '/css/swiper-bundle.min.css' , array() , false , 'all');
    wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css' , array() , false , 'all');
    wp_enqueue_style('fontawesome' , get_template_directory_uri() . '/css/fontawesome/css/all.min.css' , array() , false , 'all');
    wp_enqueue_style('main' , get_template_directory_uri() . '/css/main.css' , array() , false , 'all');
}

add_action('wp_enqueue_scripts' , 'load_css');

function load_js(){
        wp_enqueue_script('page' , 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' , array() , false , true);
        
    wp_enqueue_script('modernizr' , get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js' , array() , false , true);
    wp_enqueue_script('jquery' , get_template_directory_uri() . '/js/vendor/jquery-1.12.4.min.js' , array() , false , true);
    wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/js/vendor/bootstrap.min.js' , array() , false , true);

    wp_enqueue_script('smoothScroll' , get_template_directory_uri() . '/js/smoothScroll.js' , array() , false , true);
    wp_enqueue_script('ajaxchimp' , get_template_directory_uri() . '/js/ajaxchimp.js' , array() , false , true);
    wp_enqueue_script('swiper' , get_template_directory_uri() . '/js/swiper-bundle.min.js' , array() , false , true);
    // wp_enqueue_script('contact-form' , get_template_directory_uri() . '/js/contact-form.js' , array() , false , true);
    wp_enqueue_script('magnific' , get_template_directory_uri() . '/js/magnific-popup.min.js' , array() , false , true);

    wp_enqueue_script('slicknav' , get_template_directory_uri() . '/js/slicknav.min.js' , array() , false , true);
    wp_enqueue_script('scrollUp' , get_template_directory_uri() . '/js/scrollUp.min.js' , array() , false , true);
    wp_enqueue_script('wow' , get_template_directory_uri() . '/js/wow.min.js' , array() , false , true);
    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array() , false , true);
    wp_enqueue_script('page' , get_template_directory_uri() . '/js/page.js' , array() , false , true);
}

add_action('wp_enqueue_scripts' , 'load_js');

?>
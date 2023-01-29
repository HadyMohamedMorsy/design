<?php
require_once('wp-bootstrap-navwalker.php');

function load_css(){

    wp_enqueue_style('normalize' , get_template_directory_uri() . '/static/css/animate.min.css' , array() , false , 'all');
    wp_enqueue_style('slicknav' , get_template_directory_uri() . '/static/css/aos.css' , array() , false , 'all');
    wp_enqueue_style('animate' , get_template_directory_uri() . '/static/css/bootstrap.min.css' , array() , false , 'all');
    wp_enqueue_style('magnific-popup' , get_template_directory_uri() . '/static/css/jquery.fancybox.min.css' , array() , false , 'all');
    wp_enqueue_style('theme' , get_template_directory_uri() . '/static/css/owl.carousel.min.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_template_directory_uri() . '/static/css/owl.theme.default.min.css' , array() , false , 'all');
    wp_enqueue_style('responsive' , get_template_directory_uri() . '/static/css/style.css' , array() , false , 'all');
    wp_enqueue_style('swiper' , get_template_directory_uri() . '/static/css/style1.css' , array() , false , 'all');
}
add_action('wp_enqueue_scripts' , 'load_css');

function load_js(){
	wp_enqueue_script('jquery' , '/static/js/jquery-3.3.1.min.js' , array() , false , true);
	wp_enqueue_script('popper' , get_template_directory_uri() . '/static/js/popper.min.js' , array() , false , true);
	wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/static/js/bootstrap.min.js' , array() , false , true);
	wp_enqueue_script('owl' , get_template_directory_uri() . '/static/js/owl.carousel.min.js' , array() , false , true);
	wp_enqueue_script('sticky' , get_template_directory_uri() . '/static/js/jquery.sticky.js' , array() , false , true);
	wp_enqueue_script('waypoints' , get_template_directory_uri() . '/static/js/jquery.waypoints.min.js' , array() , false , true);
	wp_enqueue_script('animateNumber' , get_template_directory_uri() . '/static/js/jquery.animateNumber.min.js' , array() , false , true);
	wp_enqueue_script('fancybox' , get_template_directory_uri() . '/static/js/jquery.fancybox.min.js' , array() , false , true);
	wp_enqueue_script('easing' , get_template_directory_uri() . '/static/js/jquery.easing.1.3.js' , array() , false , true);
	wp_enqueue_script('aos' , get_template_directory_uri() . '/static/js/aos.js' , array() , false , true);
	wp_enqueue_script('main' , get_template_directory_uri() . '/static/js/main.js' , array() , false , true);
}

	add_action('wp_enqueue_scripts' , 'load_js');




add_theme_support(
	'post-formats',
	array(
		'link',
		'aside',
		'gallery',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat',
	)
);


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_first'  => __( 'footer_first', 'text_domain' ),
            'footer_Secound'  => __( 'footer_Secound', 'text_domain' )
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

function nav(){
	wp_nav_menu(
		array(
			'theme_location' => 'primary_menu',
			'menu_class'     => 'site-menu main-menu js-clone-nav ml-auto d-none d-lg-block',
			'container'     => false,
			'depth'    => 2,
			'walker'  => new wp_bootstrap_navwalker()
		)
	);
}

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);


	$logo_width  = 300;
	$logo_height = 100;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'd1e4dd',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}


<?php

if ( ! function_exists( 'exdos_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function exdos_setup() {
    
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on exdos, use a find and replace
         * to change 'exdos' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'exdos', get_template_directory() . './languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
        // set_post_thumbnail_size( 825, 510, true );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu',  'exdos' ),
            'footer-menu' => __( 'Footer Menu',  'exdos' ),

        ) );
    
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
    
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'gallery', 'status', 'audio', 'chat'
        ) );

        remove_theme_support('widgets-block-editor');

        add_theme_support('woocommerce');

        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    
    
    }

    endif; // exdos_setup
    add_action( 'after_setup_theme', 'exdos_setup' );


    /**
 * Register Widget.
 */
function exdos_register_widget_sidebar() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'textdomain' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Widgets in this area will be shown on blog sidebar widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-blog-sidebar-widget mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-blog-sidebar-title tp-fs-24 mb-25">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer-1', 'textdomain' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on footer-1 widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-50 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-widget-title mb-20">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer-2', 'textdomain' ),
		'id'            => 'footer-2',
		'description'   => __( 'Widgets in this area will be shown on footer-2 widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-2 mb-50 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-widget-title mb-20">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer-3', 'textdomain' ),
		'id'            => 'footer-3',
		'description'   => __( 'Widgets in this area will be shown on footer-3 widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-3 mb-50 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-widget-title mb-20">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer-4', 'textdomain' ),
		'id'            => 'footer-4',
		'description'   => __( 'Widgets in this area will be shown on footer-4 widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-4 mb-50 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-widget-title mb-20">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'exdos_register_widget_sidebar' );


// exdos css and js
function exdos_scripts() {

	// CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.3', 'all' );

    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.1', 'all' );

    wp_enqueue_style( 'fontawesome-pro', get_template_directory_uri() . '/assets/css/fontawesome-pro.min.css', array(), '5.15.4', 'all' );

    wp_enqueue_style( 'flaticon-exdos', get_template_directory_uri() . '/assets/css/flaticon-exdos.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '11.0.7', 'all' );

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // JS
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.3', true );

    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'imagesloaded' ), '3.0.6', true );

    wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.1.0', true );

    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array( 'jquery' ), '11.0.6', true );

    wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/js/jarallax.min.js', array( 'jquery' ), '2.2.1', true );

    wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array( 'jquery' ), '4.0.0', true );

    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'exdos_scripts' );


include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
include_once('inc/sidebar-recent-post.php');
include_once('inc/breadcrumb.php');

if ( class_exists( 'WooCommerce' ) ){
    include_once('inc/woo-fuction.php');
};

if ( class_exists( 'Kirki' ) ){
    include_once('inc/exdos-kirki.php');
    };
    


/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function exdos_search_form( $form ) {
	$form = '<form class="tp-blog-form position-relative" action="' . home_url( '/' ) . '"  method="get">
        <input name="s" type="text" value="' . get_search_query() . '" placeholder="'. esc_attr__( 'Search Here', 'exdos' ) .'">
        <button type="submit"><i class="far fa-arrow-right"></i></button>
        </form>';

	return $form;
}
add_filter( 'get_search_form', 'exdos_search_form' );  
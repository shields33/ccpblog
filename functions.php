<?php
/**
 * bootstrapme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bootstrapme
 */

if ( ! function_exists( 'bootstrapme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bootstrapme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bootstrapme, use a find and replace
	 * to change 'bootstrapme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bootstrapme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bootstrapme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bootstrapme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bootstrapme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootstrapme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bootstrapme_content_width', 640 );
}
add_action( 'after_setup_theme', 'bootstrapme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bootstrapme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bootstrapme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bootstrapme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bootstrapme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bootstrapme_scripts() {
	wp_enqueue_style( 'GoogleFonts', '//fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500,700');
	wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css',array(),'4.3.0' );
	wp_enqueue_style('ie10workaround', get_template_directory_uri().'/assets/css/ie10-viewport-bug-workaround.css');
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrapme-responsive', get_template_directory_uri().'/assets/css/responsive.css' );
	wp_enqueue_style( 'bootstrapme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'script-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.2',true);


	wp_enqueue_script('script-ease', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',array('jquery'),true,true);

	wp_enqueue_script('script-animatedheader', get_template_directory_uri().'/assets/js/cbpAnimatedHeader.js', array('jquery'));

	wp_enqueue_script('script-classie', get_template_directory_uri().'/assets/js/classie.js',array('jquery','script-ease','script-animatedheader','script-freelancer'),true,true);
	wp_enqueue_script('script-valid', get_template_directory_uri().'/assets/js/jqBootstrapValidation.js', array('jquery'),true,true);

	wp_enqueue_script('script-freelancer', get_template_directory_uri().'/assets/js/freelancer.js', array('jquery'),'1.2',true);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootstrapme_scripts' );

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	return '…';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Add Bootstrap navwalker.
 */
require_once(get_template_directory() .'/inc/wp_bootstrap_navwalker.php');

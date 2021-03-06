<?php
/**
 * Contemplative Fitness functions and definitions
 *
 * @package Contemplative Fitness
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'contemplative_fitness_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function contemplative_fitness_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Contemplative Fitness, use a find and replace
	 * to change 'contemplative_fitness' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'contemplative_fitness', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'contemplative_fitness' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // contemplative_fitness_setup
add_action( 'after_setup_theme', 'contemplative_fitness_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
// function contemplative_fitness_register_custom_background() {
// 	$args = array(
// 		'default-color' => 'ffffff',
// 		'default-image' => '',
// 	);

// 	$args = apply_filters( 'contemplative_fitness_custom_background_args', $args );

// 	if ( function_exists( 'wp_get_theme' ) ) {
// 		add_theme_support( 'custom-background', $args );
// 	} else {
// 		define( 'BACKGROUND_COLOR', $args['default-color'] );
// 		if ( ! empty( $args['default-image'] ) )
// 			define( 'BACKGROUND_IMAGE', $args['default-image'] );
// 		add_custom_background();
// 	}
// }
// add_action( 'after_setup_theme', 'contemplative_fitness_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function contemplative_fitness_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'contemplative_fitness' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'contemplative_fitness_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function contemplative_fitness_scripts() {
	wp_enqueue_style( 'Contemplative Fitness-style', get_stylesheet_uri() );

	wp_enqueue_script( 'Contemplative Fitness-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'Contemplative Fitness-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'Contemplative Fitness-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'contemplative_fitness_scripts' );

function load_flowtype() {
	wp_enqueue_script('flowtype', get_template_directory_uri() . '/js/flowtype.js');
}
add_action('wp_enqueue_scripts', 'load_flowtype');

function load_fonts() {
	wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700');
	wp_enqueue_style('OpenSans');
	wp_register_style('Lora', 'http://fonts.googleapis.com/css?family=Lora');
	wp_enqueue_style('Lora');	
}
add_action('wp_enqueue_scripts', "load_fonts");

function google_analytics() {
	?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-41713804-1', 'contemplativefitnessbook.com');
	  ga('send', 'pageview');

	</script>
	<?php
}
add_action('wp_head', 'google_analytics');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


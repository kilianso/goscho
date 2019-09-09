<?php
/**
 * Goscho functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Goscho
 */

if ( ! function_exists( 'goscho_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function goscho_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Goscho, use a find and replace
		 * to change 'goscho' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'goscho', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'goscho' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'goscho_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'goscho_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function goscho_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'goscho_content_width', 640 );
}
add_action( 'after_setup_theme', 'goscho_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function goscho_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'goscho' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'goscho' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'goscho_widgets_init' );



// drop jQuery
function drop_jquery() {
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'drop_jquery');


/**
 * Enqueue scripts and styles.
 */
function goscho_scripts() {
	wp_enqueue_style( 'goscho-style', get_stylesheet_uri() );
		
	wp_enqueue_script( 'goscho-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'goscho-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'goscho-forms', get_template_directory_uri() . '/js/forms.js', array(), '20190909', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'goscho_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Disable Gutenberg */
add_filter('use_block_editor_for_post', '__return_false', 10);

// custom style fields

/**
 * Add our Customizer content
 */
function extend_design( $wp_customize ) {
	// Add all your Customizer content (i.e. Panels, Sections, Settings & Controls) here...

	$wp_customize->add_section( 'color_scheme' , array(
		'title'      => __('Farb-Schema','goscho'),
		'priority'   => 30,
		) 
	);


	$wp_customize->add_setting( 'color_scheme',
	array(
		'default' => '#333',
		'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control( 'color_scheme',
	array(
		'label' => __( 'Website Farb-Schema' ),
		'section' => 'color_scheme',
		'type' => 'color',
	)
	);

	// remove everything else than 
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_panel( 'themes' );
	$wp_customize->remove_panel( 'widgets' );
};
add_action( 'customize_register', 'extend_design' );

function remove_acf_time_picker_seconds() { ?>
	<style>
	  .ui_tpicker_second,
	  .ui_tpicker_second::before {
		display: none !important;
	  }
	</style>
  <?php }
add_action('admin_head', 'remove_acf_time_picker_seconds');
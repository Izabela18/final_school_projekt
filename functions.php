<?php
/**
 * ItFeelsGood functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ItFeelsGood
 */

if ( ! function_exists( 'itfeelsgood_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function itfeelsgood_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ItFeelsGood, use a find and replace
		 * to change 'itfeelsgood' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'itfeelsgood', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'itfeelsgood' ),
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
		add_theme_support( 'custom-background', apply_filters( 'itfeelsgood_custom_background_args', array(
			'default-color' => '',
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
add_action( 'after_setup_theme', 'itfeelsgood_setup' );


add_image_size( 'custom-size', 400, 350, true );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function itfeelsgood_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'itfeelsgood_content_width', 640 );
}
add_action( 'after_setup_theme', 'itfeelsgood_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function itfeelsgood_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'itfeelsgood' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'itfeelsgood' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'itfeelsgood_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function itfeelsgood_scripts() {
	wp_enqueue_style( 'itfeelsgood-style', get_stylesheet_uri() );

	wp_enqueue_style( 'itfeelsgood-materialize-style' , 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' );
	wp_enqueue_style( 'itfeelsgood-font-style' , 'https://use.fontawesome.com/releases/v5.8.2/css/all.css' );

	wp_enqueue_style( 'itfeelsgood-aos-style' , 'https://unpkg.com/aos@2.3.1/dist/aos.css' );

	wp_enqueue_style( 'itfeelsgood-custom', get_template_directory_uri() . '/css/custom.css', array(), '1.1', 'all');


	wp_enqueue_script( 'itfeelsgood-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );


	wp_enqueue_script( 'itfeelsgood-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_register_script('animejs', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js');

	wp_enqueue_script( 'itfeelsgood-custom', get_template_directory_uri() . '/js/custom.js', array ('jquery', 'animejs'), '20151215', true);

	wp_enqueue_script( 'itfeelsgood-materialize-script', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'itfeelsgood-aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array( 'jquery' ), false, true );
	wp_register_script('itfeelsgood-aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
	wp_enqueue_script( 'itfeelsgood-loadingoverlay-script', 'https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js', array( 'jquery' ), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'itfeelsgood_scripts' );


/*added google fonts*/

function wpb_add_google_fonts() {
 
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Rubik:300&display=swap', false ); 
	}
	 
	add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

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

// Register Custom Post Type Ritual
function rituals() {

	$labels = array(
		'name'                  => _x( 'Rituals', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Ritual', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Rituals', 'text_domain' ),
		'name_admin_bar'        => __( 'Rituals', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Ritual', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'rest_base'             => 'ritual',
  		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'ritual', $args );

}
add_action( 'init', 'rituals', 0 );


// Register Custom Post Type Book
function books() {

	$labels = array(
		'name'                  => _x( 'Books', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Books', 'text_domain' ),
		'name_admin_bar'        => __( 'Books', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Book', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'rest_base'             => 'book',
  		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'book', $args );

}
add_action( 'init', 'books', 0 );


/*request data for endpoint*/
function book_end( $request_data ) {

	// setup query argument
	$args = array(
		'post_type' => 'book',
	);

	// get posts
	$posts = get_posts($args);

	// add custom field data to posts array	
	foreach ($posts as $key => $post) {
			
			$posts[$key]->link = get_permalink($post->ID);
			$posts[$key]->image = get_the_post_thumbnail_url($post->ID);
	}
	return $posts;
}

// register the endpoint
add_action( 'rest_api_init', function () {
	register_rest_route( 'book_end/v1', '/book/', array(
		'methods' => 'GET',
		'callback' => 'book_end',
		)
	);
});

//add custom body classes to different files
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_post_type_archive( ) || is_page(264) )  {
        $classes[] = 'archive-bk-bg';
	}
	if ( is_single( ) || is_page( )){
        $classes[] = 'single-cs-bg';
    }
	return $classes;
	
    
}

//add custom content
function add_post_content($content) {
	if(is_single()) {
		$content .= '<p>This article is copyright &copy; '.date('Y').'&nbsp;'.bloginfo('name').'</p>';
	}
	return $content;
}
add_filter('the_content', 'add_post_content');

//register custom menu
function register_my_menus() {
	register_nav_menus(
	  array(
		'new-menu' => __( 'Menu_sec' )		
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );


  //register second sidebar

  add_action( 'widgets_init', 'my_new_sidebar' );
function my_new_sidebar() {
  $args = array(
    'name'          => 'Second Sidebar',
    'id'            => 'sec',
    'description'   => 'This is your brand new sidebar.',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
  );
  register_sidebar( $args );
}

  
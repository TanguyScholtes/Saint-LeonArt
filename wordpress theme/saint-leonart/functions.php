<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage saint-leonart
 * @since Saint Léon'Art 0.0.1
 */

/*------- Start of custom insertions -------*/

add_theme_support( 'post-thumbnails' );
/**
 * Enable ACF 5 early access
 * Requires at least version ACF 4.4.12 to work
 */
define('ACF_EARLY_ACCESS', '5');


function create_post_type() {
     register_post_type( 'artists',
 		array(
 			'labels' => array(
 				'name' => __( 'Artistes' ),
 				'singular_name' => __( 'Artiste' ),
                'add_new_item' => __( 'Ajouter un Artiste' ),
                'edit_item' => __( 'Modifier un Artiste' ),
                'new_item' => __( 'Nouvel Artiste' ),
                'view_item' => __( 'Voir l\'Artiste' ),
                'view_items' => __( 'Voir les Artistes' ),
                'search_items' => __( 'Chercher dans les Artistes' ),
                'not_found' => __( 'Artiste non-trouvé' ),
                'not_found_in_trash' => __( 'Aucun Artiste trouvé dans la Corbeille' ),
 			),
 			'public' => true,
 			'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
 		)
 	 );
     register_post_type( 'locations',
       array(
           'labels' => array(
               'name' => __( 'Lieux' ),
               'singular_name' => __( 'Lieu' ),
               'add_new_item' => __( 'Ajouter un Lieu' ),
               'edit_item' => __( 'Modifier un Lieu' ),
               'new_item' => __( 'Nouveau Lieu' ),
               'view_item' => __( 'Voir le Lieu' ),
               'view_items' => __( 'Voir les Lieux' ),
               'search_items' => __( 'Chercher dans les Lieux' ),
               'not_found' => __( 'Lieu non-trouvé' ),
               'not_found_in_trash' => __( 'Aucun Lieu trouvé dans la Corbeille' ),
           ),
           'public' => true,
           'has_archive' => true,
           'menu_icon' => 'dashicons-location',
       )
     );
     register_post_type( 'events',
          array(
              'labels' => array(
                  'name' => __( 'Événements' ),
                  'singular_name' => __( 'Événement' ),
                  'add_new_item' => __( 'Ajouter un Événement' ),
                  'edit_item' => __( 'Modifier un Événement' ),
                  'new_item' => __( 'Nouvel Événement' ),
                  'view_item' => __( 'Voir l\'Événement' ),
                  'view_items' => __( 'Voir les Événements' ),
                  'search_items' => __( 'Chercher dans les Événements' ),
                  'not_found' => __( 'Événement non-trouvé' ),
                  'not_found_in_trash' => __( 'Aucun Événement trouvé dans la Corbeille' ),
              ),
              'public' => true,
              'has_archive' => true,
              'menu_icon' => 'dashicons-calendar-alt',
          )
      );
      register_post_type( 'activities',
         array(
             'labels' => array(
                 'name' => __( 'Activités' ),
                 'singular_name' => __( 'Activité' ),
                 'add_new_item' => __( 'Ajouter une Activité' ),
                 'edit_item' => __( 'Modifier une Activité' ),
                 'new_item' => __( 'Nouvelle Activité' ),
                 'view_item' => __( 'Voir l\'Activité' ),
                 'view_items' => __( 'Voir les Activités' ),
                 'search_items' => __( 'Chercher dans les Activités' ),
                 'not_found' => __( 'Activité non-trouvée' ),
                 'not_found_in_trash' => __( 'Aucune Activité trouvée dans la Corbeille' ),
             ),
             'public' => true,
             'has_archive' => false,
             'menu_icon' => 'dashicons-art',
         )
      );
     register_post_type( 'news',
    		array(
    			'labels' => array(
    				'name' => __( 'Actualités' ),
    				'singular_name' => __( 'Actualité' ),
                    'edit_item' => __( 'Modifier une Actualité' ),
                    'new_item' => __( 'Nouvelle Actualité' ),
                    'view_item' => __( 'Voir l\'Actualité' ),
                    'view_items' => __( 'Voir les Actualités' ),
                    'search_items' => __( 'Chercher dans les Actualités' ),
                    'not_found' => __( 'Actualité non-trouvée' ),
                    'not_found_in_trash' => __( 'Aucune Actualité trouvée dans la Corbeille' ),
    			),
    			'public' => true,
    			'has_archive' => true,
                'menu_icon' => 'dashicons-lightbulb',
    		)
    	);
    register_post_type( 'partners',
           array(
               'labels' => array(
                   'name' => __( 'Partenaires' ),
                   'singular_name' => __( 'Partenaire' ),
                   'edit_item' => __( 'Modifier un Partenaire' ),
                   'new_item' => __( 'Nouveau Partenaire' ),
                   'view_item' => __( 'Voir le Partenaire' ),
                   'view_items' => __( 'Voir les Partenaires' ),
                   'search_items' => __( 'Chercher dans les Partenaires' ),
                   'not_found' => __( 'Partenaire non-trouvé' ),
                   'not_found_in_trash' => __( 'Aucun Partenaire trouvé dans la Corbeille' ),
               ),
               'public' => true,
               'has_archive' => false,
               'menu_icon' => 'dashicons-money',
          )
     );
     register_post_type( 'organisators',
            array(
                'labels' => array(
                    'name' => __( 'Organisateurs' ),
                    'singular_name' => __( 'Organisateur' ),
                    'edit_item' => __( 'Modifier un Organisateur' ),
                    'new_item' => __( 'Nouvel Organisateur' ),
                    'view_item' => __( 'Voir l\'Organisateur' ),
                    'view_items' => __( 'Voir les Organisateur' ),
                    'search_items' => __( 'Chercher dans les Organisateur' ),
                    'not_found' => __( 'Organisateur non-trouvé' ),
                    'not_found_in_trash' => __( 'Aucun Organisateur trouvé dans la Corbeille' ),
                ),
                'public' => true,
                'has_archive' => false,
                'menu_icon' => 'dashicons-businessman',
           )
      );
}
add_action( 'init', 'create_post_type' );

function change_title_text( $title ){
     $screen = get_current_screen();

     if  ( 'artists' == $screen->post_type ) {
          $title = 'Entrez le nom de l\'artiste ou de l\'organisation';
     }
     if  ( 'locations' == $screen->post_type ) {
          $title = 'Entrez le nom du lieu';
     }
     if  ( 'events' == $screen->post_type ) {
          $title = 'Entrez le nom de l\'événement. Ex.: Saint Léon\'Art 2018';
     }
     if  ( 'activities' == $screen->post_type ) {
          $title = 'Entrez le nom de l\'activité. Ex.: Apéro découverte, Répétition ouverte, ...';
     }
     if  ( 'news' == $screen->post_type ) {
          $title = 'Entrez le titre de l\'actualité';
     }
     if  ( 'partners' == $screen->post_type ) {
          $title = 'Entrez le nom du partenaire';
     }
     if  ( 'organisators' == $screen->post_type ) {
          $title = 'Entrez le nom de l\'organisateur';
     }

     return $title;
}
add_filter( 'enter_title_here', 'change_title_text' );


function create_taxonomies() {
        register_taxonomy( 'type',
    		'activities',
    		array(
    			'label' => __( 'Type d\'activité' ),
    		)
    	);
        register_taxonomy( 'domain',
    		'artists',
    		array(
    			'label' => __( 'Domaine de prédilection' ),
    		)
    	);
}
add_action( 'init', 'create_taxonomies' );


function remove_menus(){
     remove_menu_page( 'edit.php' );                   //Posts
     remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );


 /*------- End of custom insertions -------*/

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'saint-leonart' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'saint-leonart' ),
		'social'  => __( 'Social Links Menu', 'saint-leonart' ),
        'footer'  => __( 'Footer Nav Menu', 'saint-leonart' ),
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
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'saint-leonart' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'saint-leonart' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';

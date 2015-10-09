<?php
/*
 * OnTheSide theme functions and definitions
 * @since 1.5.3
 */

function ontheside_setup() {    
    global $content_width;
    if ( !isset( $content_width  ) ) {
        $content_width  = 800;
    }

    add_editor_style();
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-formats', array( 'image', 'aside', 'gallery' ) );
    add_editor_style( 'custom-editor-style.css' );
    // for WordPress 4.1 and above only
    add_theme_support( 'title-tag' ); 
    // language support - add your translation
    load_theme_textdomain('ontheside', get_template_directory() . '/languages');
    // This theme uses wp_nav_menu in one location.
    register_nav_menu( 'primary', __( 'Primary Menu', 'ontheside' ) );
    
    // custom header image support  
    add_theme_support( 'custom-header' ); 
    $args = array(
	'width'         => 200,
	'height'        => 180,
	'default-image' => get_template_directory_uri() . '/images/logo-left.png',
        'header-text'   => false,
    );
    add_theme_support( 'custom-header', $args );
    
    //Enable support for site background change
    add_theme_support( 'custom-background' ); 
    $args = array(
	'default-color' => 'f5f5f5',
	'default-image' => get_template_directory_uri() . '/images/default-background.png',
    );
    add_theme_support( 'custom-background', $args );
}
add_action( 'after_setup_theme', 'ontheside_setup' );

    // add ie conditional html5 shim to header
function ontheside_add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="js/html5.js"></script>';
    echo '<![endif]-->';
}
add_action( 'wp_head', 'ontheside_add_ie_html5_shim' );

    // Register scripts and styles
function ontheside_custom_enqueue_scripts() {
    // Register StyleSheet
    wp_enqueue_style( 'ontheside-style', get_stylesheet_uri() );

    // enable threaded comments
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
        wp_enqueue_script( 'comment-reply' );

    //* Load scripts only if custom background is being used
    if ( ! get_background_image() )
        return;
        wp_enqueue_script( 'custom-backstretch', get_stylesheet_directory_uri() . '/js/backstretch.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'custom-backstretch-set', get_stylesheet_directory_uri().'/js/backstretch-set.js' , array( 'jquery', 'custom-backstretch' ), '1.0.0' );
        wp_localize_script( 'custom-backstretch-set', 'BackStretchImg', array( 'src' => get_background_image() ) );
} 
add_action( 'wp_enqueue_scripts', 'ontheside_custom_enqueue_scripts' );

  /**
  * Filters wp_title to print a neat <title> tag based on what is being viewed.
  *
  * @param string $title Default title text for current view.
  * @param string $sep Optional separator.
  * @return string The filtered title.
  */
function ontheside_wp_title( $title, $sep ) {
         if ( is_feed() ) {
             return $title;
         }
         global $page, $paged;
          // Add the blog name
         $title .= get_bloginfo( 'name', 'display' );
          // Add the blog description for the home/front page.
         $site_description = get_bloginfo( 'description', 'display' );
         if ( $site_description && ( is_home() || is_front_page() ) ) {
             $title .= " $sep $site_description";
         }
          // Add a page number if necessary:
         if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
             $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
         }
             return $title;
}
add_filter( 'wp_title', 'ontheside_wp_title', 10, 2 );

    // Add custom background callback for background color
function ontheside_custom_background_callback() {
    if ( ! get_background_color() )
        return;
        printf( '<style>body { background-color: #%s; }</style>' . "\n", get_background_color() );
}

    // Widgets
function ontheside_widgets_init() {
    register_sidebar(array(
        'name' => __('Left Sidebar', 'ontheside' ),
        'id' => 'left-sidebar',
        'description' => __('Pages are displayed if Menu is setup', 'ontheside' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Center Sidebar', 'ontheside' ),
        'description' => __('Only works with Front-Page template', 'ontheside' ),
        'id' => 'center-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));			
} 
add_action( 'widgets_init', 'ontheside_widgets_init' );

include_once ( get_template_directory() . '/include/theme-options.php' );

?>
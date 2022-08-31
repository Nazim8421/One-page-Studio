<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Onepage_Studio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function onepage_studio_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'onepage_studio_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function onepage_studio_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'onepage_studio_pingback_header' );


function onepage_studio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'onepage-studio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'onepage-studio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'onepage_studio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function onepage_studio_scripts() {
	wp_enqueue_style( 'onepage-studio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'onepage-studio-style', 'rtl', 'replace' );

	wp_enqueue_style( 'onepage-studio-bootstarp-style', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_style_add_data( 'onepage-studio-bootstarp-style', 'rtl', 'replace' );

	wp_enqueue_style( 'onepage-studio-swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), _S_VERSION );

	wp_enqueue_style('onepage-studio-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css', array(), _S_VERSION);

	wp_enqueue_script( 'onepage-studio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'onepage-studio-slim', get_template_directory_uri() . '/assets/js/jquery.slim.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'onepage-studio-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'onepage-studio-swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), _S_VERSION, true );

	wp_enqueue_script('onepage-studio-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), _S_VERSION, true);

	wp_enqueue_script( 'onepage-studio-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );

	wp_enqueue_script('onepage-studio-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'onepage_studio_scripts' );

/**
 * Dynamic load Fonts Family in acf select field
 */
function acf_load_font_typography( $field ) {
 
    $field['choices'] = array('Poppins-Regular','Poppins-Medium', 'Poppins-SemiBold', 'Poppins-Bold');
    
    $choices = get_field('selected_fonts', 'option', false);
    $choices = explode("\n", $choices);
    $choices = array_map('trim', $choices);
	if( is_array($choices) ) {
        
        foreach( $choices as $choice ) {
            $field['choices'][ $choice ] = $choice;        
        }
    }
    return $field;   
}

add_filter('acf/load_field/name=footer_bold_text_font_family', 'acf_load_font_typography');
add_filter('acf/load_field/name=footer_normal_text_font_family', 'acf_load_font_typography');


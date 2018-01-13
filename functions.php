<?php
if ( !function_exists( 'atheme_setup' ) ):

	function atheme_setup() {
		// let WordPress handle the Title tags
		add_theme_support( 'title-tag' );
	}
endif;
add_action( 'after_setup_theme', 'atheme_setup' );

/* Register Menus */

function register_atheme_menus() {
	register_nav_menus( 
		array(
			'primary' => __('Primary'),
			'footer' => __('Footer')
		)
	);
}
add_action( 'init', 'register_atheme_menus' );

/* Add Stylesheets */
function atheme_scripts() {
	/* Main stylesheet */
	wp_enqueue_style( 'atheme_styles', get_stylesheet_uri() );

	/* Font Awesome */
	// wp_enqueue_style( 'anthem_fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	/* Google fonts */
	wp_enqueue_style( 'atheme_lato_font', 'https://fonts.googleapis.com/css?family=Lato' );
	wp_enqueue_style( 'atheme_ssp_font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro' );
}
add_action( 'wp_enqueue_scripts', 'atheme_scripts' );

/* remove wp bar margin */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

/* add widget */
function atheme_widget_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'atheme' ),
		'id' => 'main-sidebar',
		'description' => __( 'Widgets added here will appear in all article pages.' ),
		'before_widget' => '<section id="%1$s" class="widget sidebar %2$s">',
		'after-widget' => '</section>'
	));
}
add_action( 'widgets_init', 'atheme_widget_init' );
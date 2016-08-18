<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Treehouse Hueman Genesis' );
define( 'CHILD_THEME_URL', 'http://www.teamtreehouse.com' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'hueman_scripts_styles' );
function hueman_scripts_styles() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), 'treehouse-hueman-genesis' );
}

//* Add support for structural wraps
add_theme_support( 'genesis-structural-wraps', array(
	'header', 'nav', 'subnav', 'main', 'footer-widgets', 'footer',
) );

//* Rename menus
add_theme_support( 'genesis-menus', array(
	'primary' => __( 'Header Top Navigation Menu', 'treehouse-hueman-genesis' ),
	'secondary' => __( 'Header Bottom Navigation Menu', 'treehouse-hueman-genesis' )
) );

//* Relocate Primary (top) Navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before', 'genesis_do_nav', 4 );

//* Relocate Header outside Site Container
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
add_action( 'genesis_before', 'genesis_header_markup_open', 5 );
add_action( 'genesis_before', 'genesis_do_header' );
add_action( 'genesis_before', 'genesis_header_markup_close', 15 );

//* Relocate Secondary (bottom) Navigation
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before', 'genesis_do_subnav', 14 );

//* Move the Primary Sidebar before the Content DIV.
remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
add_action( 'genesis_before_content', 'genesis_get_sidebar' );

//* Move the Secondary Sidebar into the Content Sidebar Wrap area.
remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );

//* Add new image sizes
add_image_size( 'home-top', 780, 354, TRUE );
add_image_size( 'home-bottom', 375, 175, TRUE );

//* Customize the post info function
add_filter( 'genesis_post_info', 'hueman_post_info_filter' );
function hueman_post_info_filter($post_info) {
	if ( !is_page() ) {
		$post_info = 'by [post_author_posts_link] [post_date] ';
		return $post_info;
	}
}

//* Remove the entry footer markup (requires HTML5 theme support)
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

//* Add Page Title area above Content
get_template_part('lib/page-title');

//* Modify Comments Title text in comments
add_filter( 'genesis_title_comments', 'hueman_title_comments' );
function hueman_title_comments() {
	return '<h3>' . get_comments_number() . ' Responses to ' . get_the_title() . '</h3>';
}

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Register widget areas
genesis_register_sidebar( array(
	'id'          => 'home-top',
	'name'        => __( 'Home Top', 'treehouse-hueman-genesis' ),
	'description' => __( 'Widgets in this section will display in the top widget area on the homepage.', 'treehouse-hueman-genesis' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-bottom',
	'name'        => __( 'Home Bottom', 'treehouse-hueman-genesis' ),
	'description' => __( 'Widgets in this section will display in the bottom widget area on the homepage.', 'treehouse-hueman-genesis' ),
) );
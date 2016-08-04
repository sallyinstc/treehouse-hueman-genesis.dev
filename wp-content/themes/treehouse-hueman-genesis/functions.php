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

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Register widget areas
genesis_register_sidebar(array(
    'id'            => 'home-top',
    'name'          => __('Home Top', 'trehouse-hueman-genesis'),
    'description'   => __('Widgets in this section display in the top widget area on the homepage.', 'treehouse-hueman-genesis'),
));

genesis_register_sidebar(array(
    'id'            => 'home-bottom',
    'name'          => __('Home Bottom', 'trehouse-hueman-genesis'),
    'description'   => __('Widgets in this section display in the bottom widget area on the homepage.', 'treehouse-hueman-genesis'),
));
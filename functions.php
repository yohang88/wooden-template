<?php
function theme_scripts_styles() {

	wp_enqueue_script( 'theme-script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '2013-10-03', true );
	wp_enqueue_script( 'theme-script-holder', get_template_directory_uri() . '/js/holder.js', array(), '2013-10-03', true );
	wp_enqueue_script( 'theme-script-common', get_template_directory_uri() . '/js/common.js', array(), '1.0', true );

	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );

function theme_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'theme' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'theme_wp_title', 10, 2 );
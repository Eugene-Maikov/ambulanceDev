<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ambulance
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ambulance_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'ambulance_body_classes' );

/**
* Добавьте заголовок с автоподавлением Pingback URL для отдельных постов, страниц или вложений.
 */
function ambulance_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'ambulance_pingback_header' );
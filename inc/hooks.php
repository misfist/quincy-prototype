<?php
/**
 * Hook Functions
 */
namespace Quincy_Institute\Inc;

/**
 * Add body classes
 * 
 * @link https://developer.wordpress.org/reference/hooks/body_class/
 *
 * @param array $classes
 * @return array $classes
 */
function body_classes( $classes ) : array {
	global $is_IE, $is_edge, $is_safari;

	if ( $is_IE ) {
		$classes[] = 'ie';
	}

	if ( $is_edge ) {
		$classes[] = 'edge';
	}

	if ( $is_safari ) {
		$classes[] = 'safari';
	}

	if ( wp_is_mobile() ) {
		$classes[] = 'mobile';
	}

	if ( is_page() ) {
		$classes[] = 'page-' . basename( get_permalink() );
	} elseif( is_singular() ) {
        $classes[] = 'post-' . basename( get_permalink() );
    }

	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	$classes[] = 'no-js';

	if ( is_singular( array( 'post', 'report' ) ) && is_active_sidebar( 'sidebar' ) ) {
		$classes[] = 'has-sidebar';
	}

	return $classes;
}
\add_filter( 'body_class', __NAMESPACE__ . '\body_classes' );

function modify_search( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
		if ( $query->is_search ) {
			$query->set( 'post_type', array( 'post', 'page', 'report' ) );
		}
	}
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\modify_search' );
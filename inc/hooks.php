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

/**
 * Include in search
 *
 * @param object $query
 * @return void
 */
function modify_search( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
		if ( $query->is_search ) {
			$query->set( 'post_type', array( 'post', 'page', 'report' ) );
		}
	}
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\modify_search' );

/**
 * Render display_name for author terms
 *
 * @param string $label
 * @param object $term
 * @param bool $selected
 * @return string $label
 */
function modify_facet_label( $label, $term, $selected ) {
	if( 'author' === $term->taxonomy ) {
		global $coauthors_plus;
		if( $author = $coauthors_plus->get_coauthor_by( 'login', $term->name ) ) {
			$label = $author->data->display_name;
		}
	}
	return $label;
}
add_filter( 'ep_facet_widget_term_label', __NAMESPACE__ . '\modify_facet_label', 11, 3 );
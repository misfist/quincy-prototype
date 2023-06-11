<?php
/**
 * Functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Quincy_Institute
 */

/**
 * Get all the include files for the theme.
 *
 * @author WebDevStudios
 */
function quincy_get_theme_include_files() {
	return array(
		'inc/setup.php', // Theme set up. Should be included first.
		'inc/blocks/index.php', // Block functions.
		'inc/hooks.php', // Load custom filters and hooks.
	);
}

foreach ( quincy_get_theme_include_files() as $include ) {
	require trailingslashit( get_stylesheet_directory() ) . $include;
}

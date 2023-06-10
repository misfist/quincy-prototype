<?php
/**
 * Title: Post Sidebar
 * Slug: quincy-prototype/sidebar
 * Categories: widgets
 * Keywords: Sidebar widgets
 * Block Types: core/buttons
 */

if( is_active_sidebar( 'sidebar' ) ) {
    dynamic_sidebar( 'sidebar' );
}
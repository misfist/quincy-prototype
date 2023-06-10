<?php
/**
 * Title: Content Bottom
 * Slug: quincy-prototype/content-bottom
 * Categories: widgets
 * Keywords: Content bottom page
 * Block Types: core/buttons
 */

if( is_active_sidebar( 'content-bottom' ) ) {
    dynamic_sidebar( 'content-bottom' );
}
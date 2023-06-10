<?php
/**
 * Title: Hidden 404
 * Slug: quincy-prototype/hidden-404
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"var(--wp--preset--spacing--30)"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="alignwide"><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'quincy-prototype' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'quincy-prototype' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'quincy-prototype' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'quincy-prototype' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'quincy-prototype' ); ?>","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--70)"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

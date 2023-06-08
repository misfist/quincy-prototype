<?php
/**
 * Title: Default Footer
 * Slug: quincy-prototype/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"tagName":"footer","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"0"}},"backgroundColor":"tertiary","textColor":"white","layout":{"type":"constrained"}} -->
<footer id="site-footer"
	class="wp-block-group has-white-color has-tertiary-background-color has-text-color has-background has-link-color">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|1","right":"0","bottom":"var:preset|spacing|1","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group"
		style="padding-top:var(--wp--preset--spacing--1);padding-right:0;padding-bottom:var(--wp--preset--spacing--1);padding-left:0">
		<!-- wp:navigation {"ref":11236,"layout":{"type":"flex","justifyContent":"space-between"}} /--></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|1","right":"0","bottom":"var:preset|spacing|1","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group"
		style="padding-top:var(--wp--preset--spacing--1);padding-right:0;padding-bottom:var(--wp--preset--spacing--1);padding-left:0">
		<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","openInNewTab":true,"className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

			<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

			<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

			<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->

			<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|1","right":"0","bottom":"var:preset|spacing|1","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"
		style="padding-top:var(--wp--preset--spacing--1);padding-right:0;padding-bottom:var(--wp--preset--spacing--1);padding-left:0">
		&copy; <?php echo date( 'Y' ); ?> <!-- wp:site-title /-->

		<!-- wp:navigation {"ref":11280} /-->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->

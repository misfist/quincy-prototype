<?php
/**
 * Title: Default Footer
 * Slug: quincy-prototype/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"tagName":"div","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"0"}},"backgroundColor":"tertiary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-tertiary-background-color has-text-color has-background has-link-color">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"className:"footer-widgets"} -->
	<div class="wp-block-group footer-widgets">
		<?php if( is_active_sidebar( 'footer' ) ) : ?>
			<?php dynamic_sidebar( 'footer' ); ?>
		<?php endif; ?>
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:navigation {"ref":11236,"layout":{"type":"flex","justifyContent":"space-between"}} /--></div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group">
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

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"level":1,"className":"wp-block-site-title"} -->
		<h1 class="wp-block-heading wp-block-site-title">
			&copy; <?php echo date( 'Y' ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</h1>
		<!-- /wp:heading -->

		<!-- wp:navigation {"ref":11280} /-->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->

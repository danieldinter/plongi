<?php
/**
 * Title: Default Footer
 * Slug: plongi/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
		
			<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}}} -->
			<h5 style="font-style:normal;font-weight:700;text-transform:capitalize">
				<a href="http://wordpress.local/?page_id=2" data-type="page" data-id="2">Dive center</a>
			</h5>
			<!-- /wp:heading -->

			<!-- wp:navigation {"ref":110,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
		
			<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}}} -->
			<h5 style="font-style:normal;font-weight:700;text-transform:capitalize">
				<a href="http://wordpress.local/?page_id=12" data-type="page" data-id="12">Training</a>
			</h5>
			<!-- /wp:heading -->

			<!-- wp:navigation {"ref":111,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
		
			<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}}} -->
			<h5 style="font-style:normal;font-weight:700;text-transform:capitalize">
				<a href="http://wordpress.local/?page_id=14" data-type="page" data-id="14">Dive Trips</a>
			</h5>
			<!-- /wp:heading -->

			<!-- wp:navigation {"ref":112,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
		
			<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}}} -->
			<h5 style="font-style:normal;font-weight:700;text-transform:capitalize">
				<a href="http://wordpress.local/?page_id=14" data-type="page" data-id="14">Offers</a>
			</h5>
			<!-- /wp:heading -->

			<!-- wp:navigation {"ref":113,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->
	
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		
		<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:navigation {"ref":123,"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
			<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
			<p class="has-text-align-right has-small-font-size">
			<?php
			printf(
				/* Translators: WordPress link. */
				esc_html__( 'Proudly powered by %s', 'plongi' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'plongi' ) ) . '" rel="nofollow">WordPress</a>'
			)
			?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
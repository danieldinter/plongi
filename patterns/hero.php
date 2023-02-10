<?php
/**
 * Title: Hero
 * Slug: plongi/hero
 * Categories: featured
 * Keywords: Header hero
 * Block Types: core/header
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary","textColor":"white","className":"has-background-color","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-white-color has-primary-background-color has-text-color has-background has-link-color">
	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header.png","dimRatio":0,"contentPosition":"center left","align":"wide","className":"plongi-cover"} -->
	<div class="wp-block-cover alignwide has-custom-content-position is-position-center-left plongi-cover">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<img class="wp-block-cover__image-background" alt="<?php echo esc_attr__('Photo by Elianne Dipp from Pexels: https://www.pexels.com/photo/scuba-diver-under-water-4666754/', 'plongi'); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header.png" data-object-fit="cover"/>
		<div class="wp-block-cover__inner-container">
			<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)">
				
				<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
					
					<!-- wp:site-tagline {"style":{"typography":{"letterSpacing":"0em","fontSize":"3.5rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}}} /-->

					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","lineHeight":"1.2"}},"fontFamily":"average"} -->
					<p class="has-average-font-family" style="font-size:1.5rem;line-height:1.2">
                        <?php esc_html_e('Dive into a world of mystery and wonder. The vast, unknown depths hold secrets and creatures that are yet to be discovered.', 'plongi'); ?>
                    </p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"secondary","textColor":"white","style":{"border":{"radius":"30px"}}} -->
						<div class="wp-block-button">
							<a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background wp-element-button" style="border-radius:30px">
                                <?php esc_html_e('Book your trip', 'plongi'); ?>
                            </a>
						</div>
						<!-- /wp:button -->

						<!-- wp:button {"textColor":"secondary","style":{"border":{"radius":"30px"}},"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline">
							<a class="wp-block-button__link has-secondary-color has-text-color wp-element-button" style="border-radius:30px">
                                <?php esc_html_e('Learn more', 'plongi'); ?>
                            </a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
				</div>
				<!-- /wp:column -->
			
			</div>
			<!-- /wp:columns -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
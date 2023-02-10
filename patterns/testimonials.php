<?php
/**
 * Title: Testimonials
 * Slug: plongi/testimonials
 * Categories: featured
 * Keywords: testimonials customer feedback
 * Block Types: core/header
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    
        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"none"}},"fontSize":"large","fontFamily":"rubik"} -->
        <h2 class="has-rubik-font-family has-large-font-size" style="font-style:normal;font-weight:500;text-decoration:none">
            Testimonials
        </h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"border":{"radius":"30px"}},"backgroundColor":"grey","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-grey-background-color has-background" style="border-radius:30px">
    
        <!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-columns alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        
            <!-- wp:column {"verticalAlignment":"top","width":"10%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:10%">
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.8"}},"textColor":"primary","fontSize":"xx-large","fontFamily":"average"} -->
                <p class="has-primary-color has-text-color has-average-font-family has-xx-large-font-size" style="line-height:0.8">“</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"70%","style":{"typography":{"fontSize":"1.25rem"}},"fontFamily":"average"} -->
            <div class="wp-block-column has-average-font-family" style="font-size:1.25rem;flex-basis:70%">
                <!-- wp:paragraph -->
                <p>
                    <?php esc_html_e('I had the most amazing experience diving with the team at the dive center! The instructors, John and Sarah, were knowledgeable, friendly, and made me feel safe and confident in the water. I had never been diving before, but they made the whole experience a breeze. I will definitely be back for more dives with them!', 'plongi'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%">
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":89,"width":150,"height":150,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonials/rachel.png" alt="<?php echo esc_attr__('Rachel K.', 'plongi'); ?>" width="150" height="150"/>
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","fontFamily":"rubik"} -->
                    <p class="has-text-align-left has-rubik-font-family">
                        <?php esc_html_e('Rachel K.', 'plongi'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->
    
    </div>
    <!-- /wp:group -->


    <!-- wp:group {"align":"wide","style":{"border":{"radius":"30px"}},"backgroundColor":"grey","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-grey-background-color has-background" style="border-radius:30px">
    
        <!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-columns alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        
            <!-- wp:column {"verticalAlignment":"top","width":"10%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:10%">
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.8"}},"textColor":"primary","fontSize":"xx-large","fontFamily":"average"} -->
                <p class="has-primary-color has-text-color has-average-font-family has-xx-large-font-size" style="line-height:0.8">“</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"70%","style":{"typography":{"fontSize":"1.25rem"}},"fontFamily":"average"} -->
            <div class="wp-block-column has-average-font-family" style="font-size:1.25rem;flex-basis:70%">
                <!-- wp:paragraph -->
                <p>
                    <?php esc_html_e('As a seasoned diver, I was impressed by the level of professionalism and safety at the dive center. The equipment was top-notch, and the staff, including my dive guide, Mike, were attentive and knowledgeable. I had some of the best dives of my life thanks to their expertise. I highly recommend this dive center to anyone looking for a quality experience.', 'plongi'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%">
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":89,"width":150,"height":150,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonials/david.png" alt="<?php echo esc_attr__('David W.', 'plongi'); ?>" width="150" height="150"/>
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","fontFamily":"rubik"} -->
                    <p class="has-text-align-left has-rubik-font-family">
                        <?php esc_html_e('David W.', 'plongi'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->
    
    </div>
    <!-- /wp:group -->


    <!-- wp:group {"align":"wide","style":{"border":{"radius":"30px"}},"backgroundColor":"grey","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-grey-background-color has-background" style="border-radius:30px">
    
        <!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-columns alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        
            <!-- wp:column {"verticalAlignment":"top","width":"10%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:10%">
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.8"}},"textColor":"primary","fontSize":"xx-large","fontFamily":"average"} -->
                <p class="has-primary-color has-text-color has-average-font-family has-xx-large-font-size" style="line-height:0.8">“</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"70%","style":{"typography":{"fontSize":"1.25rem"}},"fontFamily":"average"} -->
            <div class="wp-block-column has-average-font-family" style="font-size:1.25rem;flex-basis:70%">
                <!-- wp:paragraph -->
                <p>
                    <?php esc_html_e('I was nervous about diving for the first time, but the team at the dive center made me feel at ease. The instructors, Matt and Katie, were patient and informative, and they took the time to make sure I was comfortable in the water. I had an incredible time and can’t wait to go back and explore more of the underwater world with them.', 'plongi'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%">
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":89,"width":150,"height":150,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonials/lisa.png" alt="<?php echo esc_attr__('Lisa M.', 'plongi'); ?>" width="150" height="150"/>
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","fontFamily":"rubik"} -->
                    <p class="has-text-align-left has-rubik-font-family">
                        <?php esc_html_e('Lisa M.', 'plongi'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->
    
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
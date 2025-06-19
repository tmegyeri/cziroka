<?php
/**
 * Footer photography
 */
$form = ona_get_mailchimp_forms();

return array(
	'title'      => __( 'Footer photography', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"4rem","bottom":"4rem"}}},"backgroundColor":"background-light","layout":{"contentSize":"1280px","type":"constrained"}} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:4rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0.7rem","bottom":"0.5rem"},"blockGap":"10px"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0.7rem;margin-bottom:0.5rem"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-regular"}}}},"textColor":"text-regular","className":"mb-1 ona-copyright ona-md-down-text-align-center","fontSize":"base"} -->
			<p class="mb-1 ona-copyright ona-md-down-text-align-center has-text-regular-color has-text-color has-link-color has-base-font-size">
			' . sprintf( __( '© %d Powered by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com/wordpress-themes/ona-block-wordpress-theme/" style="color:inherit">' . esc_html__( 'Ona WordPress theme', 'ona' ) . '</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:navigation {"textColor":"text-regular","overlayMenu":"never","className":"is-style-ona-tablet-justify-center","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"24px"}},"fontSize":"base"} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Privacy Policy', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Terms & Conditions', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->
			</div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);




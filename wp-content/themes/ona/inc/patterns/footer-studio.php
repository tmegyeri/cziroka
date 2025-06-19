<?php
/**
 * Footer studio
 */
return array(
	'title'      => __( 'Footer studio', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"64px"}}},"backgroundColor":"dark"} -->
			<div class="wp-block-group has-dark-background-color has-background" style="padding-top:120px;padding-bottom:64px"><!-- wp:group {"layout":{"inherit":false,"contentSize":"1170px","type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"50%","className":"ona-md-down-text-align-center","style":{"spacing":{"padding":{"bottom":"40px"},"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-column ona-md-down-text-align-center" style="padding-bottom:40px;flex-basis:50%"><!-- wp:image {"id":21,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/studio/ona_studio_logo.svg' ) ) . '" alt="Ona_Studio_Logo" class="wp-image-21"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"className":"ona-md-down-justify-content-center","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group ona-md-down-justify-content-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} -->
			<p class="has-text-light-color has-text-color has-link-color"><a href="mailto:hello@support.com">hello@support.com</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} -->
			<p class="has-text-light-color has-text-color has-link-color"><a href="mailto:hello@support.com">' . esc_html__( '+64 93 310 70 50', 'ona' ) . '</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"bottom":"40px"},"blockGap":"var:preset|spacing|70"}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:50%">
			
			<!-- wp:navigation {"textColor":"light","overlayMenu":"never","className":"is-style-ona-tablet-justify-center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Services', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Jobs', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->


			<!-- wp:social-links {"iconColor":"text-regular","iconColorValue":"#929292","customIconBackgroundColor":"#ffffff00","iconBackgroundColorValue":"#ffffff00","size":"has-normal-icon-size","className":"ona-md-down-justify-content-center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color ona-md-down-justify-content-center"><!-- wp:social-link {"url":"#","service":"x"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

			<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
);




<?php
/**
 * General: CTA studio
 */
return array(
	'title'      => __( 'CTA studio', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"metadata":{"name":"CTA"},"style":{"spacing":{"margin":{"top":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"dark","layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group has-dark-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","fontSize":"medium-large"} -->
			<h2 class="wp-block-heading has-text-align-center has-light-color has-text-color has-link-color has-medium-large-font-size">' . esc_html__( 'We’ll engage clients and businesess', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"right":"36px","left":"36px"}}}} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-right:36px;padding-left:36px">' . esc_html__( 'Start Here', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group -->',
);




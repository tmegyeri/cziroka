<?php
/**
 * General: Intro studio
 */
return array(
	'title'      => __( 'Intro studio', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"metadata":{"name":"Intro"},"style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"170px","bottom":"170px"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group" style="margin-top:0px;padding-top:170px;padding-right:var(--wp--preset--spacing--50);padding-bottom:170px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"fontSize":"medium-large"} -->
			<h2 class="wp-block-heading has-medium-large-font-size">' . esc_html__( 'Perfect tool for your real business and startup', 'ona' ) . '</h2>
			<!-- /wp:heading --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%","className":"is-style-ona-hide-on-tablet"} -->
			<div class="wp-block-column is-style-ona-hide-on-tablet" style="flex-basis:20%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}}} -->
			<p style="font-size:1.25rem">' . esc_html__( 'We help founders at the formative stages of their venture, to take an idea from concept through to launch. We’re an engineering and design studio with an entrepreneurial spirit.', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);




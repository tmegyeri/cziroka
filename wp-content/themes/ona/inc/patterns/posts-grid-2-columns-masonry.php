<?php
/**
 * Posts: grid 2 columns masonry
 */
return array(
	'title'      => __( 'Posts grid 2 columns masonry', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"200px","bottom":"200px"}}},"backgroundColor":"background-light","className":"is-style-no-spacing","layout":{"type":"constrained","contentSize":"1280px"}} -->
		<div class="wp-block-group is-style-no-spacing has-background-light-background-color has-background" style="padding-top:200px;padding-right:var(--wp--preset--spacing--50);padding-bottom:200px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"52%"} -->
		<div class="wp-block-column" style="flex-basis:52%"><!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"style":{"color":{}},"className":"is-style-ona-hover-colored-image"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"base","fontFamily":"base"} /-->

		<!-- wp:paragraph -->
		<p>-</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-terms {"term":"post_tag"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"' . esc_html__( 'No posts found.', 'ona' ) . '"} -->
		<p></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"6%"} -->
		<div class="wp-block-column" style="flex-basis:6%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}},"spacing":{"margin":{"bottom":"5.75rem"}}},"textColor":"text-light","className":"is-style-default","fontSize":"x-large"} -->
		<h2 class="wp-block-heading is-style-default has-text-light-color has-text-color has-link-color has-x-large-font-size" style="margin-bottom:5.75rem">' . esc_html__( 'Featured', 'ona' ) . '<br>' . esc_html__( 'Shots', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"style":{"color":{}},"className":"is-style-ona-hover-colored-image"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"base","fontFamily":"base"} /-->

		<!-- wp:paragraph -->
		<p>-</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-terms {"term":"post_tag"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"' . esc_html__( 'No posts found.', 'ona' ) . '"} -->
		<p></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"spacing":{"margin":{"top":"10%"}}}} -->
		<div class="wp-block-columns" style="margin-top:10%"><!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%"><!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"style":{"color":{}},"className":"is-style-ona-hover-colored-image"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"base","fontFamily":"base"} /-->

		<!-- wp:paragraph -->
		<p>-</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-terms {"term":"post_tag"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"' . esc_html__( 'No posts found.', 'ona' ) . '"} -->
		<p></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"6%"} -->
		<div class="wp-block-column" style="flex-basis:6%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"53%","style":{"spacing":{"padding":{"top":"10%"}}}} -->
		<div class="wp-block-column" style="padding-top:10%;flex-basis:53%"><!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"style":{"color":{}},"className":"is-style-ona-hover-colored-image"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"base","fontFamily":"base"} /-->

		<!-- wp:paragraph -->
		<p>-</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-terms {"term":"post_tag"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"' . esc_html__( 'No posts found.', 'ona' ) . '"} -->
		<p></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"8%"} -->
		<div class="wp-block-column" style="flex-basis:8%"></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);




<?php
/**
 * Posts: grid 4 columns fashion
 */
return array(
	'title'      => __( 'Posts grid 4 columns fashion', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
			<!-- wp:group {"metadata":{"categories":["ona-posts"],"patternName":"ona/posts-grid-4-columns-fashion","name":"Posts grid 4 columns fashion"},"align":"full","style":{"spacing":{"padding":{"bottom":"80px","right":"1.5rem","left":"1.5rem"}}},"layout":{"contentSize":"1640px","type":"constrained"}} -->
			<div class="wp-block-group alignfull" style="padding-right:1.5rem;padding-bottom:80px;padding-left:1.5rem"><!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"40px","top":"100px"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.25em"}},"fontSize":"large"} -->
			<h2 class="has-large-font-size" style="text-transform:uppercase;letter-spacing:0.25em;margin-top:100px;margin-bottom:40px">' . __( 'Can\'t be missed…', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4},"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-64"} -->
			<!-- wp:group {"tagName":"article"} -->
			<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"hover-scale is-style-ona-rounded"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
			<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"ona-text-letter-spacing"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"18px"}},"typography":{"fontSize":"1.625rem"}}} /--></div>
			<!-- /wp:group --></article>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
			<!-- /wp:query --></div>
			<!-- /wp:group -->',
);




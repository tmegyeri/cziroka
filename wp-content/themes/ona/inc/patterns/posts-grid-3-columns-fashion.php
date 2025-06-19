<?php
/**
 * Posts: grid 3 columns fashion
 */
return array(
	'title'      => __( 'Posts grid 3 columns fashion', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"metadata":{"categories":["ona-posts"],"patternName":"ona/posts-grid-3-columns-fashion","name":"Posts grid 3 columns fashion"},"align":"full","style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem","top":"100px","bottom":"100px"}}},"layout":{"contentSize":"1640px","type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="padding-top:100px;padding-right:1.5rem;padding-bottom:100px;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"60px"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.25em"}},"fontSize":"large"} -->
		<h2 class="has-text-align-center has-large-font-size" style="text-transform:uppercase;letter-spacing:0.25em;margin-bottom:60px">' . __( 'Popular Posts', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.25em"}},"className":"is-style-ona-rotate-vertical","fontSize":"tiny"} -->
		<p class="is-style-ona-rotate-vertical has-tiny-font-size" style="text-transform:uppercase;letter-spacing:0.25em">' . __( 'SEE WHAT WE’VE WRITTEN LATELY', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"left":"28px"}}}} -->
		<div class="wp-block-group alignwide" style="padding-left:28px"><!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-align-items-center is-style-ona-post-grid-gap-64"} -->
		<!-- wp:group {"tagName":"article"} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"hover-scale is-style-ona-rounded"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"ona-text-letter-spacing"} /-->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"18px"}}},"fontSize":"medium-large"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"64px"}}}} -->
		<div class="wp-block-buttons" style="margin-top:64px"><!-- wp:button {"align":"center","className":"is-style-outline"} -->
		<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link">' . __( 'View More Posts', 'ona' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group -->',
);




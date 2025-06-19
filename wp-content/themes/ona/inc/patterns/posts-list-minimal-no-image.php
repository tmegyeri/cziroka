<?php
/**
 * Posts: list minimal no image
 */
return array(
	'title'      => __( 'Posts list minimal no image', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"200px","bottom":"160px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
		<div class="wp-block-group" style="padding-top:200px;padding-right:var(--wp--preset--spacing--50);padding-bottom:160px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"2.5rem"}}},"fontSize":"2x-large"} -->
		<h2 class="wp-block-heading has-2-x-large-font-size" style="margin-bottom:2.5rem">' . esc_html__( 'News &amp; Thoughts', 'ona' ) . '</h2>
		<!-- /wp:heading --></div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":10,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
		<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0px"}},"className":"ona-post-list is-style-ona-post-grid-gap-30","layout":{"type":"default","columnCount":3}} -->
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"3rem","bottom":"2.5rem"}},"border":{"top":{"color":"var:preset|color|text-lighter","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--text-lighter);border-top-width:1px;padding-top:3rem;padding-bottom:2.5rem"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"12px"}}},"fontSize":"medium-large"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"right"}} -->
		<div class="wp-block-group"><!-- wp:post-date {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-regular"}}},"typography":{"fontSize":"1rem"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"text-regular"} /-->

		<!-- wp:post-terms {"term":"category","textAlign":"right","style":{"typography":{"fontSize":"1rem"}},"className":"is-style-default ona-md-down-text-align-left"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->',
);




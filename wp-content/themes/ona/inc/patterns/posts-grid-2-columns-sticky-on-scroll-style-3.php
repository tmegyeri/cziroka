<?php
/**
 * Posts: grid 2 columns sticky on scroll style 3
 */

$form = ona_get_mailchimp_forms();

return array(
	'title'      => __( 'Posts grid 2 columns sticky on scroll style 3', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
			<!-- wp:group {"metadata":{"name":"Posts grid 2 columns fashion"},"align":"full","layout":{"type":"default"}} -->
			<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"120px","right":"1.5rem","left":"1.5rem"}}}} -->
			<div class="wp-block-group" style="padding-top:100px;padding-right:1.5rem;padding-bottom:120px;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"16px"}},"fontSize":"2x-large"} -->
			<h1 class="wp-block-heading has-text-align-center has-2-x-large-font-size" style="letter-spacing:16px;text-transform:uppercase">' . __( 'Thoughts, stories<br>and ideas', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"100px","right":"28px"}}},"className":"ona-container","layout":{"contentSize":"1640px"}} -->
			<div class="wp-block-group ona-container" style="padding-right:28px;padding-bottom:100px"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.25em"}},"className":"is-style-ona-rotate-vertical","fontSize":"tiny"} -->
			<p class="is-style-ona-rotate-vertical has-tiny-font-size" style="text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'Featured', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":"4%","padding":{"left":"28px"}}}} -->
			<div class="wp-block-columns" style="padding-left:28px"><!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"className":"ona-sticky-element"} -->
			<div class="wp-block-group ona-sticky-element" style="margin-bottom:40px">
			
			<!-- wp:query {"queryId":25,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"hover-scale is-style-ona-rounded"} /-->

			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"ona-text-letter-spacing"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}}},"fontSize":"x-large"} /-->

			<!-- wp:post-date /-->

			<!-- wp:post-excerpt /--></div>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
			<!-- /wp:query --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"44px"}}}} -->
			<div class="wp-block-group" style="margin-bottom:44px"><!-- wp:heading {"style":{"typography":{"lineHeight":1.3,"fontSize":"1.75rem","textTransform":"uppercase"}}} -->
			<h2 id="join-the-newsletter-to-get-the-daily-tips-latest-articles-and-free-stuffs-delivered-directly-to-your-inbox" style="font-size:1.75rem;line-height:1.3;text-transform:uppercase">Join the newsletter to get the daily tips, latest articles</h2>
			<!-- /wp:heading -->

			' . $form . '
			
			</div><!-- /wp:group -->

			<!-- wp:query {"queryId":25,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
			<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-64"} -->
			<!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"hover-scale is-style-ona-rounded"} /-->

			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"ona-text-letter-spacing"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}}},"fontSize":"medium"} /-->

			<!-- wp:post-date /--></div>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
			<!-- /wp:query --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
);
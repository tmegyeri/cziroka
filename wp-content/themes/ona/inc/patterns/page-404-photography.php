<?php
/**
 * Page 404 photography
 */
return array(
	'title'      => __( 'Page 404 photography', 'ona' ),
	'categories' => array( 'ona-pages' ),
	'content'    => '
			<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/photography/ona_photography_404.jpg' ) ) . '","id":391,"hasParallax":true,"dimRatio":50,"customOverlayColor":"#7f8eaa","minHeight":100,"minHeightUnit":"vh","isDark":false} -->
			<div class="wp-block-cover is-light has-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#7f8eaa"></span><div class="wp-block-cover__image-background wp-image-391 has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url( get_theme_file_uri( 'assets/img/photography/ona_photography_404.jpg' ) ) .')"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","layout":{"inherit":true,"type":"constrained"}} -->
			<main class="wp-block-group"><!-- wp:spacer {"height":"110px"} -->
			<div style="height:110px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light"} -->
			<h1 class="wp-block-heading has-text-align-center has-light-color has-text-color has-link-color" id="page-not-found">' . esc_html__( 'Page not found', 'ona' ) . '</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light"} -->
			<p class="has-text-align-center has-light-color has-text-color has-link-color">' . esc_html__( 'The page you are looking for could not be found. It might have been deleted, renamed, or it did not exist in the first place. You can search the site below, or return to the front page.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center"} /-->

			<!-- wp:spacer {"height":"138px"} -->
			<div style="height:138px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></main>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->',
);




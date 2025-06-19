<?php
/**
 * Header photography
 */
return array(
	'title'      => __( 'Header photography', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"}},"dimensions":{"minHeight":""},"position":{"type":""}},"backgroundColor":"dark","className":"is-style-default","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-default has-dark-background-color has-background" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:site-logo {"width":229,"shouldSyncIcon":false,"className":"ona-md-down-text-align-center custom-logo"} /-->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"3vw","bottom":"3vw"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:3vw;margin-bottom:3vw">
				<!-- wp:navigation {"textColor":"light","overlayBackgroundColor":"foreground","className":"is-style-ona-tablet-justify-center","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"base","fontFamily":"headings"} -->
				<!-- wp:home-link {"label":"' . esc_html__( 'Home', 'ona' ) . '"} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			</div><!-- /wp:group -->

			<!-- wp:social-links {"iconColor":"text-light","iconColorValue":"#B1A69E","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only is-style-ona-tablet-justify-center","layout":{"type":"flex","justifyContent":"left"}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only is-style-ona-tablet-justify-center"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

			<!-- wp:social-link {"url":"#","service":"x"} /-->

			<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:group -->',
);




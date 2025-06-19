<?php
/**
 * Header transparent architecture
 */
return array(
	'title'      => esc_html__( 'Header transparent architecture', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"metadata":{"categories":["ona-headers"],"patternName":"ona/header-architecture","name":"Header Transparent"},"className":"ona-header-transparent","style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"24px","bottom":"24px"}},"position":{"type":""},"border":{"bottom":{"color":"#ffffff4d","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group ona-header-transparent" style="border-bottom-color:#ffffff4d;border-bottom-width:1px;padding-top:24px;padding-right:4%;padding-bottom:24px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"className":"is-style-no-spacing","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:site-logo {"width":128,"shouldSyncIcon":false,"className":"ona-sm-down-text-align-left","style":{"color":{"duotone":["#fffffffc","#fffffffc"]}}} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<div class="wp-block-group">
			
			<!-- wp:navigation {"textColor":"light","overlayTextColor":"dark","className":"ona-sm-down-justify-content-end is-style-ona-tablet-justify-center","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<!-- wp:home-link {"label":"' . esc_html__( 'Home', 'ona' ) . '"} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Works', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/projects","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Blog', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/blog","kind":"custom","isTopLevelItem":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"light","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"width":"2px"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-light-color has-text-color has-link-color wp-element-button" href="tel:34 622 910" style="border-width:2px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">' . esc_html__( 'Call: 34 622 910', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);




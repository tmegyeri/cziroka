<?php
/**
 * Header fashion
 */
return array(
	'title'      => __( 'Header fashion', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"44px","bottom":"44px"}}},"layout":{"inherit":false,"contentSize":"1640px"}} -->
			<div class="wp-block-group" style="padding-top:44px;padding-right:4%;padding-bottom:44px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"ona-sm-down-order-2"} -->
			<div class="wp-block-column is-vertically-aligned-center ona-sm-down-order-2" style="flex-basis:40%">

			<!-- wp:navigation {"textColor":"foreground","customOverlayBackgroundColor":"#141414","overlayTextColor":"foreground","className":"ona-sm-down-justify-content-end","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"blockGap":"46px"}}} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Home', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelItem":false} /-->
			<!-- /wp:navigation -->

			</div><!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"20%","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-logo {"width":117,"shouldSyncIcon":false,"align":"center","className":"ona-sm-down-text-align-left"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"is-style-ona-hide-on-mobile"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-ona-hide-on-mobile" style="flex-basis:40%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"right","borderColor":"stroke","textColor":"foreground"} /--></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);




<?php
/**
 * Header transparent studio
 */
return array(
	'title'      => esc_html__( 'Header transparent studio', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"className":"ona-header-transparent","style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"24px","bottom":"24px"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group ona-header-transparent" style="padding-top:24px;padding-right:4%;padding-bottom:24px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"className":"is-style-no-spacing ona-background-blur","style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"16px","color":"#ffffff33","width":"1px"},"color":{"background":"#ffffff1a"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing ona-background-blur has-border-color has-background" style="border-color:#ffffff33;border-width:1px;border-radius:16px;background-color:#ffffff1a;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:site-logo {"width":128,"shouldSyncIcon":false,"className":"ona-sm-down-text-align-left"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"75%","className":"is-style-default"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-default" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<div class="wp-block-group">
			
			<!-- wp:navigation {"textColor":"light","overlayBackgroundColor":"light","overlayTextColor":"dark","className":"ona-sm-down-justify-content-end is-style-ona-tablet-justify-center","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Home', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelItem":false} /-->
			<!-- /wp:navigation -->


			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( get_site_url() ) . '/contact" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">' . esc_html__( 'Get in Touch', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:html -->
			<style>:root:not(.has-modal-open) .ona-background-blur { backdrop-filter: blur(6px); }</style>
			<!-- /wp:html --></div>
			<!-- /wp:group -->',
);




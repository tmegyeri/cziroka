<?php
/**
 * General: Hero architecture
 */
return array(
	'title'      => esc_html__( 'Hero architecture', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
		<!-- wp:group {"metadata":{"name":"Hero"},"className":"is-style-no-spacing","style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":false}} -->
		<div class="wp-block-group is-style-no-spacing"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/architecture/hero.webp' ) ) . '","id":524,"hasParallax":true,"dimRatio":40,"overlayColor":"dark","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover has-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__image-background wp-image-524 has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url( get_theme_file_uri( 'assets/img/architecture/hero.webp' ) ) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1.25rem","letterSpacing":"6px","textTransform":"uppercase"}},"textColor":"light"} -->

		<h2 class="wp-block-heading has-text-align-center has-light-color has-text-color has-link-color" style="font-size:1.25rem;letter-spacing:6px;text-transform:uppercase">' . esc_html__( 'Blueprints Down Under', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"light","fontSize":"x-large"} -->
		<h1 class="wp-block-heading has-text-align-center has-light-color has-text-color has-link-color has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">' . esc_html__( 'Beautifully Designed For Everyday Living', 'ona' ) . '</h1>
		<!-- /wp:heading -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ona-button-arrow-icon"} -->
		<div class="wp-block-button is-style-ona-button-arrow-icon"><a class="wp-block-button__link wp-element-button" href="#">' . esc_html__( 'Discover More', 'ona' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
		<!-- /wp:cover --></div>
		<!-- /wp:group -->',
);
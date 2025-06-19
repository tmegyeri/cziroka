<?php
/**
 * General Promo CTA
 */
return array(
	'title'      => esc_html__( 'Promo CTA', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
		<!-- wp:group {"metadata":{"name":"Promo CTA"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"120px","bottom":"120px"},"margin":{"top":"0"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group has-background-light-background-color has-background" style="margin-top:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"fontSize":"medium-large"} -->
		<h2 class="wp-block-heading has-medium-large-font-size">' . esc_html__( 'Discover how we can bring your architectural dreams to life.', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"lead"} -->
		<p class="has-lead-font-size">' . esc_html__( 'From concept to completion, we\'re with you every step of the way. Ready to start your journey? Contact us today for a free consultation and let\'s create something extraordinary together.', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":121,"sizeSlug":"large","linkDestination":"none","className":"no-shrink"} -->
		<figure class="wp-block-image size-large no-shrink"><img src="' . esc_url( get_template_directory_uri() . '/assets/img/architecture/icon-check.svg' ) . '" alt="" class="wp-image-121"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p><img class="wp-image-118" style="width: 0px;" src="' . esc_url( get_template_directory_uri() . '/assets/img/architecture/icon-check.svg' ) . '" alt=""><img class="wp-image-118" style="width: 0px;" src="' . esc_url( get_template_directory_uri() . '/assets/img/architecture/icon-check.svg' ) . '" alt="">' . esc_html__( '25+ Years of Excellence', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":121,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() . '/assets/img/architecture/icon-check.svg' ) . '" alt="" class="wp-image-121"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( '1,564+ Satisfied Clients', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":121,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() . '/assets/img/architecture/icon-check.svg' ) . '" alt="" class="wp-image-121"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( '50 Industry Awards', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"className":"is-style-ona-button-arrow-icon","style":{"border":{"width":"2px"}}} -->
		<div class="wp-block-button is-style-ona-button-arrow-icon"><a class="wp-block-button__link wp-element-button" href="' . esc_url( home_url( '/architecture/contact/' ) ) . '" style="border-width:2px">' . esc_html__( 'Let\'s Work Together', 'ona' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"layout":{"type":"grid"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":468,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() . '/assets/img/architecture/cta_promo_1.webp' ) . '" alt="' . esc_attr__( 'cta_promo_1', 'ona' ) . '" class="wp-image-468" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":469,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() . '/assets/img/architecture/cta_promo_2.webp' ) . '" alt="' . esc_attr__( 'cta_promo_2', 'ona' ) . '" class="wp-image-469" style="border-radius:10px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"id":470,"sizeSlug":"large","linkDestination":"none","style":{"layout":{"columnSpan":2,"rowSpan":1},"border":{"radius":"10px"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="' . esc_url( get_template_directory_uri() . '/assets/img/architecture/cta_promo_3.webp' ) . '" alt="' . esc_attr__( 'cta_promo_3', 'ona' ) . '" class="wp-image-470" style="border-radius:10px"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);
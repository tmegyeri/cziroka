<?php
/**
 * General Icon boxes architecture
 */
return array(
	'title'      => esc_html__( 'Icon Boxes Architecture', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
		<!-- wp:group {"metadata":{"name":"Features"},"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}},"backgroundColor":"dark","layout":{"type":"default"}} -->
		<div class="wp-block-group has-dark-background-color has-background" style="margin-top:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"92px","bottom":"92px","left":"5%","right":"5%"}},"border":{"right":{"color":"#313131","width":"1px"},"bottom":{"color":"#313131","width":"1px"}}}} -->
		<div class="wp-block-column" style="border-right-color:#313131;border-right-width:1px;border-bottom-color:#313131;border-bottom-width:1px;padding-top:92px;padding-right:5%;padding-bottom:92px;padding-left:5%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":39,"width":"56px","sizeSlug":"full","linkDestination":"none","className":"no-shrink","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
		<figure class="wp-block-image size-full is-resized no-shrink"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/icon-crop.svg' ) ) . '" alt="" class="wp-image-39" style="width:56px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1.25rem"}},"textColor":"light"} -->
		<h2 class="wp-block-heading has-light-color has-text-color has-link-color" style="font-size:1.25rem">' . esc_html__( 'Custom Build', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} -->
		<p class="has-text-light-color has-text-color has-link-color">' . esc_html__( 'Bring your unique vision to life. Our bespoke design process transforms your ideas into a one-of-a-kind home tailored to your lifestyle and preferences.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"92px","bottom":"92px","left":"5%","right":"5%"}},"border":{"right":{"color":"#313131","width":"1px"},"bottom":{"color":"#313131","width":"1px"}}}} -->
		<div class="wp-block-column" style="border-right-color:#313131;border-right-width:1px;border-bottom-color:#313131;border-bottom-width:1px;padding-top:92px;padding-right:5%;padding-bottom:92px;padding-left:5%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":50,"width":"56px","sizeSlug":"large","linkDestination":"none","className":"no-shrink"} -->
		<figure class="wp-block-image size-large is-resized no-shrink"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/icon-home.svg' ) ) . '" alt="" class="wp-image-50" style="width:56px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1.25rem"}},"textColor":"light"} -->
		<h2 class="wp-block-heading has-light-color has-text-color has-link-color" style="font-size:1.25rem">' . esc_html__( 'New Homes', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} -->
		<p class="has-text-light-color has-text-color has-link-color">' . esc_html__( 'Create your dream home from the ground up. We blend innovative design with functionality to craft beautiful, efficient living spaces that stand the test of time.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"92px","bottom":"92px","left":"5%","right":"5%"}},"border":{"right":{"color":"#313131","width":"1px"},"bottom":{"color":"#313131","width":"1px"}}}} -->
		<div class="wp-block-column" style="border-right-color:#313131;border-right-width:1px;border-bottom-color:#313131;border-bottom-width:1px;padding-top:92px;padding-right:5%;padding-bottom:92px;padding-left:5%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:image {"id":49,"width":"56px","sizeSlug":"large","linkDestination":"none","className":"no-shrink"} -->
		<figure class="wp-block-image size-large is-resized no-shrink"><img src="' . esc_url( get_theme_file_uri( 'assets/img/architecture/icon-expand.svg' ) ) . '" alt="" class="wp-image-49" style="width:56px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1.25rem"}},"textColor":"light"} -->
		<h2 class="wp-block-heading has-light-color has-text-color has-link-color" style="font-size:1.25rem">' . esc_html__( 'Extensions', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light"} -->
		<p class="has-text-light-color has-text-color has-link-color">' . esc_html__( 'Expand your horizons without changing address. Our extension designs seamlessly integrate with your existing property, and adding value to your home.', 'ona' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);





